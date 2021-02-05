<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Rating;
use App\Post;
use App\Property;
use App\Message;
use App\User;
use App\Gallery;
use Carbon\Carbon;
use Auth;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class PostController extends Controller
{


    public function getIndex()
    {

        $month = request('month');
        $year  = request('year');

        $posts = Post::latest()->withCount('comments')
                                ->when($month, function ($query, $month) {
                                    return $query->whereMonth('created_at', Carbon::parse($month)->month);
                                })
                                ->when($year, function ($query, $year) {
                                    return $query->whereYear('created_at', $year);
                                })
                                ->where('status',1)
                                ->paginate(10);
                                $galleries = Gallery::take(8)->latest()->get();

        return view('blog.blog', compact('posts', 'galleries'));
    }


    public function getSingle($slug)
    {
        $post = Post::with('comments')->withCount('comments')->where('slug', $slug)->first();
        $posts = Post::take(3)->latest()->inRandomOrder()->get();
        $galleries = Gallery::take(8)->latest()->get();


        $blogkey = 'blog-' . $post->id;
        if(!Session::has($blogkey)){
            $post->increment('view_count');
            Session::put($blogkey,1);
        }

        return view('blog.blog_details', compact('post', 'posts','galleries'));
    }


    // BLOG COMMENT
    public function blogComments(Request $request, $id)
    {
        $request->validate([
            'body'  => 'required'
        ]);

        $post = Post::find($id);

        $post->comments()->create(
            [
                'user_id'   => Auth::id(),
                'body'      => $request->body,
                'parent'    => $request->parent,
                'parent_id' => $request->parent_id
            ]
        );

        return back();
    }

        // BLOG CATEGORIES
        public function blogCategories()
        {
            $posts = Post::latest()->withCount(['comments','categories'])
                                    ->whereHas('categories', function($query){
                                        $query->where('categories.slug', '=', request('slug'));
                                    })
                                    ->where('status',1)
                                    ->paginate(10);
                                    $galleries = Gallery::take(8)->latest()->get();


            return view('blog.blog', compact('posts', 'galleries'));
        }

        // BLOG TAGS
        public function blogTags()
        {
            $posts = Post::latest()->withCount('comments')
                                    ->whereHas('tags', function($query){
                                        $query->where('tags.slug', '=', request('slug'));
                                    })
                                    ->where('status',1)
                                    ->paginate(10);
                                    $galleries = Gallery::take(8)->latest()->get();


            return view('blog.blog', compact('posts', 'galleries'));
        }

        // BLOG AUTHOR
        public function blogAuthor()
        {
            $posts = Post::latest()->withCount('comments')
                                    ->whereHas('user', function($query){
                                        $query->where('username', '=', request('username'));
                                    })
                                    ->where('status',1)
                                    ->paginate(10);

            return view('blog.blog', compact('posts'));
        }

}
