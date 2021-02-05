<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use App\User;
use Illuminate\Support\Str;
use App\Forum;
use App\ForumMessage;
use App\ChatMessage;
use Carbon\Carbon;


class ForumController extends Controller
{


    public function Add(Request $request)
    {

        $user = auth()->user();
        $data = array(
            'image' => $request->image,
            'topic' => $request->topic,
            'theme' => $request->theme
        );

        $validator = \Validator::make($data, [
            // 'image'  => (isset($data['image']))? 'mimes:jpg,png,jpeg,mp3,mpeg,mp4,bmp,3gp|max:5000': '',
            'topic' => 'required|string',
            'theme' => 'required|string'
        ]); 
        
        if($validator->fails())
        {
            return response()->json(['status'=> false, 'message' => $validator->errors()], 409);
        }

        // if ($request->hasFile('image')) {

        //     $file = $request->file('image');
        //     $name = $file->getClientOriginalName();
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = Str::random(15).time() . "." . $extension;
        //     $location = env('APP_URL') . '/files/uploads/' . $filename;
        //     $file->move('files/uploads/', $filename);
        //     $data['image'] = $location;
        // }
        // if (key_exists('image', $request->all()) && !preg_match("/^data:image\/(png|jpeg|jpg|gif);base64,*/", $request->image)) {
        //     return response()->json(['message'=>'The file format is invalid.','status'=>false]);
        // }

        $forum = new Forum;
        $forum->topic = $data['topic'];  
        $forum->theme = $data['theme']; 
        if($request->image) {
            $forum->image = $request->image;
        } else{
            $forum->image = env('APP_URL') . '/assets/img/default.jpeg';
        };

        $user->forum()->save($forum);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Forum created sucessfully',
            'data'   =>  $forum,
        ], 200);
    }

    public function createMessage(Request $request, $id)
    {
        $user = auth()->user();
        $data = array(
            'message' => $request->message,
            'forum_id' => $request->forum_id,
            'uploads' => $request->uploads,
            'user_id' => $id
        );
        $validator = \Validator::make($data, [
            'message' => 'required|string',
            'forum_id' => 'required|numeric',  
        ]); 
        
        if($validator->fails())
        {
            return response()->json(['status'=> false, 'message' => $validator->errors()->first()], 409);
        }

        // if (!preg_match("/^data:image\/(png|jpeg|jpg|gif|mp3|mp4);base64,*/", $request->uploads))  {
        //     return response()->json(['message'=>'The file format is invalid.','status'=>false]);        }
        
        $forum = Forum::find($data['forum_id']);
        
        if (!$forum) {
            return response()->json(['status'=> false, 'message' => 'Forum not found'], 404);
        }
        
        $forum_message = new ForumMessage;
        $forum_message->message = $data['message'];  
        $forum_message->forum_id = $data['forum_id'];
        $forum_message->user_id = $data['user_id'];
        $forum_message->uploads = $request->uploads;

        $user->forumMessage()->save($forum_message);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Message sent sucessfully',
            'data'      =>  [
                'sender_name' => $forum_message->user->name,
                'sender_id' => $forum_message->user_id,
                'sender_image' => $forum_message->user->image,
                'uploads' => $forum_message->uploads,
                'message' => $forum_message->message,
                'sent_time' => str_replace('.000000', '', substr($forum_message->created_at, 12, 19))
            ],
        ], 200);
    }

    public function getForums (Request $request) {
        $forum = Forum::with('user')->get();
        return response()->json([
            'status' => true,
            'message' => 'Forum retrieved',
            'data' => $forum
        ]);
    }
    
    public function getForumMessages (Request $request, $forumId) {
        $forum = Forum::find($forumId);
        if (!$forum) {
            return response()->json(['status'=> false, 'message' => 'Forum not found'], 404);
        }
        $forum_messages = ForumMessage::where('forum_id', $forumId)->get();
        if (!$forum_messages) {
            return response()->json(['status'=> false, 'message' => 'Forum has not message'], 404);
        }
        $messages = [];
        foreach($forum_messages as $item) {
            $payload = [
                'sender_name' => $item->user->name,
                'sender_id' => $item->sender_id,
                'message' => $item->message,
                'sent_time' => str_replace('.000000', '', substr($item->created_at, 12, 19)),
                'sender_image' => $item->user->image,
                'uploads' => $item->uploads,
            ];
            array_push($messages, $payload);
        }
        return response()->json([
            'status' => true,   
            'message' => 'Forum messages retrieved',
            'data' => [
                'forum_topic' => $forum->topic,
                'forum_theme' => $forum->theme,
                'forum_image' => $forum->image,
                'messages' => $messages
            ]
        ]);
    }

    public function createChat(Request $request, $id)
    {
        $user = auth()->user();
        $data = array(
            'message' => $request->message,
            'uploads' => $request->uploads,
            'user_id' => $id
        );
        $validator = \Validator::make($data, [
            'message' => 'required|string',
        ]); 
        
        if($validator->fails())
        {
            return response()->json(['status'=> false, 'message' => $validator->errors()->first()], 409);
        }

        // if (!preg_match("/^data:image\/(png|jpeg|jpg|gif|mp3|mp4);base64,*/", $request->uploads))  {
        //     return response()->json(['message'=>'The file format is invalid.','status'=>false]);        }
        
        $forum_message = new ChatMessage;
        $forum_message->message = $data['message'];  
        $forum_message->user_id = $data['user_id'];
        $forum_message->uploads = $request->uploads;
        $user->chatMessage()->save($forum_message);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Message sent sucessfully',
            'data'      =>  [
                'sender_name' => $forum_message->user->name,
                'sender_id' => $forum_message->user_id,
                'sender_image' => $forum_message->user->image,
                'uploads' => $forum_message->uploads,
                'message' => $forum_message->message,
                'sent_time' => str_replace('.000000', '', substr($forum_message->created_at, 12, 19))
            ],
        ], 200);
    }

    public function getChatMessages (Request $request) {
        $forum_messages = ChatMessage::all();
        if (!$forum_messages) {
            return response()->json(['status'=> false, 'message' => 'chat has no message'], 404);
        }
        $messages = [];
        foreach($forum_messages as $item) {
            $payload = [
                'sender_name' => $item->user->name,
                'sender_id' => $item->sender_id,
                'message' => $item->message,
                'sent_time' => str_replace('.000000', '', substr($item->created_at, 12, 19)),
                'sender_image' => $item->user->image,
                'uploads' => $item->uploads,
            ];
            array_push($messages, $payload);
        }
        return response()->json([
            'status' => true,   
            'message' => 'chats messages retrieved',
            'data' => [
                'messages' => $messages
            ]
        ]);
    }

}

