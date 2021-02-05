@extends('layouts.app')
@section('title')
{{$post->title}}
@endsection
@section('styles')
@endsection
@section('content')

<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>{{$post->title}}</h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="{{route('blog.index')}}" title="">Church Stories</a></li>

			<li><a href="#" title="">{{$post->title}}</a></li>

		</ul>

	</div>

</div><!--- PAGE TOP -->



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-8 column">

					<div class="single-page">

						<img src="{{Storage::url('posts/'.$post->image)}}" alt="" />

						<h2>{{$post->title}}</h2>

						<div class="meta">

							<ul>
                                @foreach($post->categories as $key => $category)
                                <li><i class="fa fa-group"></i> <a href="{{ route('blog.categories',$category->slug) }}" title="">{{$category->name}}</a></li>
                                @endforeach

                                <li><i class="fa fa-calendar-o"></i> {{$post->created_at->diffForHumans()}}</li>
                                <li><i class="fa fa-eye"></i> {{$post->view_count}}</li>

                                <li><i class="fa fa-user"></i> <a href="#" title="">{{$post->user->name}}</a></li>
                                @foreach($post->tags as $key => $tag)
                                <li><i class="fa fa-tags"></i> <a href="{{ route('blog.tags',$tag->slug) }}" title="">{{$tag->name}}</a></li>
                                @endforeach

							</ul>

						</div><!-- POST META -->

					</div><!-- SERMON SINGLE -->
                    <p> {!! $post->body !!}</p>




					<div class="share-this">

						<h5><i class="fa fa-share"></i> SHARE THIS SERMON</h5>

						<ul class="social-media">

							<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>

							<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>

							<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>

							<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>

						</ul>

					</div><!-- SHARE THIS -->



					<div class="comments">

						<h4>{{ $post->comments_count }} Comments</h4>

						<ul>
                            @foreach($post->comments as $comment)
                            @if($comment->parent_id == null)
							<li>

								<div class="comment">

                                    <div class="avatar"><img src="{{ Storage::url('users/'.$comment->users->image) }}" alt="" />
                                        @auth
                                        <a id="blogreplay" href="#{{ $comment->id }}" data-commentid="{{ $comment->id }}">REPLY</a>
                                        @endauth
                                    </div>

									<h5>  {{ $comment->users->name }}

									<i><span> {{ $comment->created_at->diffForHumans() }}</span></i></h5>

                                    <p>  {{ $comment->body }}</p>

                                    <div id="comment-{{$comment->id}}"></div>
								</div><!-- COMMENT -->
                                @endif
								<ul>
                                    @if($comment->children->count() > 0)
                                    @foreach($comment->children as $comment)
									<li>

										<div class="comment">

											<div class="avatar"><img src="{{ Storage::url('users/'.$comment->users->image) }}" alt="" /><a href="#" title="">REPLY</a></div>

											<h5>{{ $comment->users->name }}

											<i><span>{{ $comment->created_at->diffForHumans() }}</span></i></h5>
                                            <p>{{ $comment->body }}</p>

										</div><!-- COMMENT -->

                                    </li>
                                    @endforeach
                                    @endif

								</ul>

                            </li>
                            @endforeach

						</ul>

					</div><!-- COMMENTS -->


                    @auth
					<div class="leave-comment">

						<h4><i class="fa fa-edit"></i> LEAVE A COMMENT</h4>

						<p>Your email address will not be published.</p>

                        <form action="{{ route('blog.comment',$post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="parent" value="0">

							<textarea placeholder="Description" name="body"></textarea>

							<input type="submit" value="Comment" />

						</form>

                    </div><!-- COMMENT FORM -->
                    @endauth
                    @guest
                    <div class="comment-login">
                        <h6>Kindly Login to comment</h6>
                        <div class="send-btn">
                            <a href="{{ route('login') }}" class="theme-btn darkblue inverse" title="">Login</a>
                        </div>
                    </div>
                @endguest

				</div>

				<aside class="col-md-4 sidebar column">

					<div class="widget">

						<form class="search-form">

							<input type="text" placeholder="START SEARCHING" />

							<input type="submit" value="" />

						</form>

					</div><!-- SEARCH FORM -->



					<div class="widget">

						<div class="widget-title"><h4>TAGS</h4></div>

						<div class="tagclouds">
                            @if(count($tags) < 1 )
                            <div class="col-md-12">
                                <p>No Tag available.</p>
                            </div>
                            @endif
                            @foreach($tags as $tag)
                            <a href="{{ route('blog.tags',$tag->slug) }}" title="{{ $tag->name }}">{{ $tag->name }}</a>
                            @endforeach
						</div>

					</div><!-- TAG CLOUD -->

                    <div class="widget">

						<div class="widget-title"><h4>CATEGORIES</h4></div>

						<div class="tagclouds">
                            @if(count($categories) < 1 )
                            <div class="col-md-12">
                                <p>No Category available.</p>
                            </div>
                            @endif
                            @foreach($categories as $category)
                            <a href="{{ route('blog.categories',$category->slug) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                            @endforeach
						</div>

					</div><!-- TAG CLOUD -->



					<div class="widget">

						<div class="widget-title"><h4>RECENT BLOG</h4></div>

						<div class="remove-ext">
                            @if(count($popularposts) < 1 )
                            <div class="col-md-12">
                                <p>No Popular post available.</p>
                            </div>
                            @endif
                            @foreach($popularposts as $post)

							<div class="widget-blog">

								<div class="widget-blog-img"><img src="{{Storage::url('posts/'.$post->image)}}" alt="" /></div>

								<p><a href="{{ route('blog.single',$post->slug) }}" title="{{ $post->title }}">{{ $post->title }}</a></p>

								<span><i class="fa fa-calendar-o"></i> {{$post->created_at->diffForHumans()}}</span>

                            </div><!-- WIDGET BLOG -->
                            @endforeach

						</div>

					</div><!-- RECENT BLOG -->



					<div class="widget">

						<div class="widget-title"><h4>ARCHIVES</h4></div>

						<ul>
                            @if(count($archives) < 1 )
                            <div class="col-md-12">
                                <p>No Archives available.</p>
                            </div>
                            @endif
                            @foreach($archives as $stats)
                            <li><a href="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}"><i class="fa fa-hand-o-right"></i> {{ $stats['month'] . ' ' . $stats['year'] }} <span>({{ $stats['published'] }})</span></a></li>
                            @endforeach

						</ul>

					</div><!-- META -->

				</aside><!-- SIDEBAR -->

			</div>

		</div>

	</div>

</section>
@endsection
@section('scripts')
<script>
   $(document).on('click','#blogreplay',function(e){
        e.preventDefault();

        var commentid = $(this).data('commentid');

        $('#comment-'+commentid).empty().append(

              `<form action="{{ route('blog.comment',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="parent" value="0">

                    <textarea placeholder="Description" name="body"></textarea>

                    <input type="submit" value="Comment" />

                </form>`
        );
    });
</script>
@endsection
