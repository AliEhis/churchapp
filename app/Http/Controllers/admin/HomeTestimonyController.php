<?php

namespace App\Http\Controllers\admin;

use App\HomeTestimony;
use App\FeaturedBox;
use App\PastorIntro;
use App\Mission;
use App\PrayerTab;
use App\HomeFullwidthBoard;
use App\InfoBoard;
use App\ConnectionGroup;
use App\Belief;
use App\GetInvolved;
use App\RecordedMessage;
use App\Podcast;
use App\AboutWelcome;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeTestimonyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function GetHomeTestimony(){
        $testimony = HomeTestimony::all();
        return view('cms.home_testimony', compact('testimony'));
        
    }
    public function createTestimony(){
        return view('cms.home_testimony_form');
    }

    public function HomeTestimonyFormSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'name'          => $request->name,
            'age'          => $request->age,
            'content'          => $request->content,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        HomeTestimony::create($data);
        \Session::flash('success', 'testimony created successfully.');
        return redirect()->back();
    }

    public function createFeaturedBox(){
        return view('cms.featured_box_form');
    }
    public function createFeaturedBoxSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'details'          => $request->details,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        FeaturedBox::create($data);
        \Session::flash('success', 'Featured Box created successfully.');
        return redirect()->back();
    }
    public function GetFeaturedBox(){
        $box = FeaturedBox::all();
        return view('cms.featured_box', compact('box'));
        
    }

    public function createPastorIntro(){
        return view('cms.pastor_intro_form');
    }
    public function createPastorIntroSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'pastor_name'          => $request->pastor_name,
            'pastor_position'          => $request->pastor_position,
            'content'          => $request->content,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        PastorIntro::create($data);
        \Session::flash('success', 'Pastor intro created successfully.');
        return redirect()->back();
    }
    public function GetPastorIntro(){
        $intro = PastorIntro::all();
        return view('cms.pastor_intro', compact('intro'));
        
    }
    
    public function GetMissionIntro(){
        $missions = Mission::all();
        return view('cms.mission_intro', compact('missions'));
        
    }

    public function delete ($id) {
        $delete = Lesson::find($id);
        if(!$delete)
        {
            abort(404);
        }
        $delete->delete();
        \Session::flash('success', 'Deleted successfully.');
        return redirect()->back();
    }

    public function createMission() {
        return view('cms.mission_create');
    }

    public function createMissionSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'content'        => $request->content
        );
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['image1'] = $location;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['image2'] = $location;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['image3'] = $location;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['image4'] = $location;
        }
        Mission::create($data);
        \Session::flash('success', 'Mission created successfully.');
        return redirect()->back();
    }

    public function podcast(){
        $podcast = Podcast::all();
        return view('cms.podcast', compact('podcast'));
        
    }
    public function podcastForm(){
        return view('cms.podcast_form');
    }

    public function podcastFormSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'poster'          => $request->poster,
            'podcast_summary' => $request->podcast_summary
        );
        \Log::info($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['image'] = $location;
        }
        if ($request->hasFile('file')) {
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/podcast/' . $filename;
        $file->move('files/uploads/podcast/', $filename);
        $data['file'] = $location;
        }

        // if ($request->hasFile('video')) {
        // }
        Podcast::create($data);
        \Session::flash('success', 'podcast created successfully.');
        return redirect()->back();
    }

    public function PrayerTab(){
        return view('cms.prayertab_form');
    }
    public function createPrayerTab(Request $request){
        $data = array(
            'titletop'          => $request->titletop,
            'tagtop'          => $request->tagtop,
            'texttop'          => $request->texttop,
            'titlebottom'          => $request->titlebottom,
            'tagbottom'          => $request->tagbottom,
            'textbottom'          => $request->textbottom,
            'type'                   => $request->type
        );
        \Log::info($request);
        if ($request->hasFile('phototop')) {
            $file = $request->file('phototop');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['phototop'] = $location;
            \Log::info($data['phototop'] );

        }
        if ($request->hasFile('photobottom')) {
            $file = $request->file('photobottom');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['photobottom'] = $location;
        }
        PrayerTab::create($data);
        \Session::flash('success', 'Pastor intro created successfully.');
        return redirect()->back();
    }

    public function homeFullwithBoard(){
        return view('cms.fullwidth_board_form');
    }
    public function createhomeFullwithBoard(Request $request){
        $data = array(
            'title'          => $request->title,
            'description'          => $request->description,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        HomeFullwidthBoard::create($data);
        \Session::flash('success', 'fullwith board created successfully.');
        return redirect()->back();
    }
    public function gethomeFullwithBoard(){
        $box = HomeFullwidthBoard::all();
        return view('cms.fullwidth_board', compact('box'));
        
    }

    public function infoBoard(){
        return view('cms.info_board_form');
    }
    public function createInfoBoard(Request $request){
        $data = array(
            'title'          => $request->title,
            'description'          => $request->description,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        InfoBoard::create($data);
        \Session::flash('success', 'fullwith board created successfully.');
        return redirect()->back();
    }
    public function getInfoBoard(){
        $box = InfoBoard::all();
        return view('cms.info_board', compact('box'));
        
    }

    public function connectionGroup(){
        return view('cms.connection_group_form');
    }
    public function createConnectionGroup(Request $request){
        $data = array(
            'title'          => $request->title,
            'text'          => $request->text,
            'type'          => $request->type,
            'type'          => $request->type,
            'btn_text'          => $request->btn_text,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        ConnectionGroup::create($data);
        \Session::flash('success', 'fullwith board created successfully.');
        return redirect()->back();
    }
    public function getConnectionGroup(){
        $box = ConnectionGroup::all();
        return view('cms.connection_group', compact('box'));
        
    }


    public function getBelief(){
        $box = Belief::all();
        return view('cms.belief', compact('box'));     
    }

    public function belief(){
        return view('cms.belief_form');
    }
    public function createBelief(Request $request){
        $data = array(
            'titletop'          => $request->titletop,
            'portiontop'         => $request->portiontop,
            'texttop'            => $request->texttop,
            'titlebottom'        => $request->titlebottom,
            'portionbottom'       => $request->portionbottom,
            'textbottom'          => $request->textbottom,
            'type'                => $request->type
        );
        \Log::info($request);
        if ($request->hasFile('phototop')) {
            $file = $request->file('phototop');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['phototop'] = $location;
            \Log::info($data['phototop'] );

        }
        if ($request->hasFile('photobottom')) {
            $file = $request->file('photobottom');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(15).time() . "." . $extension;
            $location = env('APP_URL') . '/files/uploads/images/' . $filename;
            $file->move('files/uploads/images/', $filename);
            $data['photobottom'] = $location;
        }
        Belief::create($data);
        \Session::flash('success', 'Belief created successfully.');
        return redirect()->back();
    }

    public function AboutWelcome(){
        return view('cms.about_welcome_form');
    }
    public function createaboutWelcome(Request $request){
        $data = array(
            'heading'          => $request->heading,
            'sunday_time'          => $request->sunday_time,
            'midweek_time'          => $request->midweek_time,
            'service_heading'          => $request->service_heading,
            'text'          => $request->text,
            'type'          => $request->type,
            'btn_text2'          => $request->btn_text2,
            'btn_text'      => $request->btn_text,
            'image'          => $request->image
        );
        \Log::info($request);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        AboutWelcome::create($data);
        \Session::flash('success', 'About welcome created successfully.');
        return redirect()->back();
    }
    public function getAboutWelcome(){
        $box = AboutWelcome::all();
        return view('cms.about_welcome', compact('box'));
        
    }


    public function createRecordedMessage(){
        return view('cms.recorded_message_form');
    }
    public function RecordedMessageSubmit(Request $request){
        $data = array(
            'message_title'          => $request->message_title,
            'details'          => $request->details,
            'preachers_name'          => $request->preachers_name,
            'month'          => $request->month,
            'video'          => $request->video
        );
        \Log::info($request);

        if ($request->hasFile('video')) {
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/videos/' . $filename;
        $file->move('files/uploads/videos/', $filename);
        $data['video'] = $location;
        }
        RecordedMessage::create($data);
        \Session::flash('success', 'pastor message  created successfully.');
        return redirect()->back();
    }
    public function GetRecordedMessage(){
        $box = RecordedMessage::all();
        return view('cms.recorded_message', compact('box'));
        
    }


    public function createGetInvolved(){
        return view('cms.get_involved_form');
    }
    public function getInvolvedSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'topic'          => $request->topic,
            'btn_text'          => $request->btn_text,
            'video'          => $request->video
        );
        \Log::info($request);

        if ($request->hasFile('video')) {
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/videos/' . $filename;
        $file->move('files/uploads/videos/', $filename);
        $data['video'] = $location;
        }
        GetInvolved::create($data);
        \Session::flash('success', 'Created successfully.');
        return redirect()->back();
    }
    public function GetInvolved(){
        $box = GetInvolved::all();
        return view('cms.get_involved', compact('box'));
        
    }

}
