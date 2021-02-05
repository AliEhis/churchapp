<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Str;
use App\HomeTestimony;
use App\FeaturedBox;
use App\Mission;
use App\Attendance;
use App\Suggestion;
use App\Podcast;
use App\PrayerTab;
use App\HomeFullwidthBoard;
use App\InfoBoard;
use App\Belief;
use App\GetInvolved;
use App\StayConnected;
use App\RecordedMessage;
use App\SermonPageContact;
use App\AboutWelcome;
use App\ConnectionGroup;
use App\PastorIntro;


class HomePageTestimonyController extends Controller
{


    public function getTestimony(){
        $testimony = HomeTestimony::all();
        if($testimony){
            return response()->json([
                "message" => "Testimonies retrieved succesfully",
                'testimony' => $testimony,
                'status' => 'success',
            ], 201);
         }else{
            return response()->json([
                "message" => "No record found",
                'status' => 'false',
            ]);         
        }

    }

    public function getfeaturedBox(){
        $box = FeaturedBox::all();
        if($box){
            return response()->json([
                "message" => "Featured box retrieved succesfully",
                'featured_box' => $box,
                'status' => 'success',
            ], 201);
        } else {
            return response()->json([
                "message" => "No record found",
                'status' => 'false',
            ]);         
        }   

    }

    public function getPastorIntro(){
        $box = PastorIntro::all();
        if ($box) {
            return response()->json([
                "message" => "Featured box retrieved succesfully",
                'featured_box' => $box,
                'status' => 'success',
            ], 201);
        } else {
            return response()->json([
                "message" => "No record found",
                'status' => 'false',
            ]);         
        }

    }
   public function getPodcast(){
    $podcast = Podcast::all();
    if ($podcast) {
        return response()->json([
            "message" => "Podcast retrieved succesfully",
            'Podcasts' => $podcast,
            'status' => 'success',
        ], 201);
    } else {
        return response()->json([
            "message" => "No record found",
            'status' => 'false',
        ]);         
    }  
   }

    public function getMissions(){
        $missions = Mission::all();
        if ($missions) {
            return response()->json([
                "message" => "Missions retrieved succesfully",
                'data' => $missions,
                'status' => 'success',
            ], 201);
        } else {
            return response()->json([
                "message" => "No record found",
                'status' => 'false',
            ]);         
        }

    }

    public function SendSuggestions(Request $request){
        $suggesstions = Suggestion::create([
            'name' => $request->name,
            'sugession' => $request->sugession
        ]);
        return response()->json([
            "message" => "Suggestions Sent succesfully",
            'suggestion' => $suggesstions,
            'status' => 'success',
        ], 201);

    }
    public function attendanceStatus(Request $request){
        $attendance = Attendance::create([
            'status' => $request->status,
            'user_id' => $request->user_id,
            'user_location' => $request->user_location,
        ]);
        return response()->json([
            "message" => "attendance Sent succesfully",
            'attendance' => $attendance,
            'status' => 'success',
        ], 201);

    }

    public function homePrayerTab(){
        $home = PrayerTab::where('type', 'home')->get();
        return response()->json([
            'status' => 'success',
            "message" => "Home prayer tab retrieved successfully",
            "data" => $home
        ]);
    }
    public function aboutPrayerTab(){
        $home = PrayerTab::where('type', 'about')->get();
        return response()->json([
            'status' => 'success',
            "message" => "About prayer tab retrieved successfully",
            "data" => $home
        ]);
    }
    public function fullWidthBoard(){
        $fullwidth = HomeFullwidthBoard::all();
        return response()->json([
            'status' => 'success',
            "message" => "home fullwidth board retrieved successfully",
            "data" => $fullwidth
        ]);
    }
    public function infoBoard(){
        $infoBoard = InfoBoard::all();
        return response()->json([
            'status' => 'success',
            "message" => "Info board retrieved successfully",
            "data" => $infoBoard
        ]);
    }
    public function connect(){
        $connect = ConnectionGroup::where('type', 'connect')->get();
        return response()->json([
            'status' => 'success',
            "message" => "connect retrieved successfully",
            "data" => $connect
        ]);
    }
    public function directionsConnect(){
        $directionsConnect = ConnectionGroup::where('type', 'directionsConnect')->get();
        return response()->json([
            'status' => 'success',
            "message" => "Directions connect retrieved successfully",
            "data" => $directionsConnect
        ]);
    }
    public function kidsConnect(){
        $kidsConnect = ConnectionGroup::where('type', 'kidsConnect')->get();
        return response()->json([
            'status' => 'success',
            "message" => "Kids connect retrieved successfully",
            "data" => $kidsConnect
        ]);
    }
    public function homecellBelief(){
        $homecellBelief= Belief::where('type', 'homecellBelief')->get();
        return response()->json([
            'status' => 'success',
            "message" => "Home cell belief retrieved successfully",
            "data" => $homecellBelief 
        ]);
    }
    public function contactBelief(){
        $contactBelief= Belief::where('type', 'contactBelief')->get();
        return response()->json([
            'status' => 'success',
            "message" => "Contact belief retrieved successfully",
            "data" => $contactBelief  
        ]);
    }
    public function newLifeBelief(){
        $newLifeBelief = Belief::where('type', 'newLifeBelief')->get();
        return response()->json([
            'status' => 'success',
            "message" => "New life belief retrieved successfully",
            "data" => $newLifeBelief   
        ]);
    }
    public function aboutBelief(){
        $aboutBelief  = Belief::where('type', 'aboutBelief')->get();
        return response()->json([
            'status' => 'success',
            "message" => "about belief retrieved successfully",
            "data" => $aboutBelief    
        ]);
    }
    public function AboutWelcome(){
        $aboutWelcome  = AboutWelcome::select('id','text','heading','sunday_time','midweek_time', 'service_heading','btn_text','image')->where('type', 'welcome')->get();
        return response()->json([
            'status' => 'success',
            "message" => "about welcome retrieved successfully",
            "data" => $aboutWelcome    
        ]);
    }
    public function AboutLearnMore(){
        $aboutLearnMore = AboutWelcome::select('id','text','btn_text','btn_text2','image','heading')->where('type', 'learn_more')->get();
        return response()->json([
            'status' => 'success',
            "message" => "about learn more retrieved successfully",
            "data" => $aboutLearnMore    
        ]);
    }
    public function SermonContactMessage(Request $request){
        $SermonMessage = SermonPageContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'agree' => $request->agree
        ]);
        return response()->json([
            "message" => "Message Sent succesfully",
            'messageData' => $SermonMessage,
            'status' => 'success',
        ], 201);

    }

    public function SermonRecordedMessage(){
        $recordedMessage = RecordedMessage::all();
        return response()->json([
            'status' => 'success',
            "message" => "Message retrieved successfully",
            "data" => $recordedMessage
        ]);
    }
    public function SermonLatestMessage(){
        $recordedMessage = RecordedMessage::latest()->take(2)->get();
        return response()->json([
            'status' => 'success',
            "message" => "Message retrieved successfully",
            "data" => $recordedMessage
        ]);
    }

    public function stayConnected(Request $request){
        $StayConnected = StayConnected::create([
            'email' => $request->email,
         
        ]);
        return response()->json([
            "message" => "Message Sent succesfully",
            'StayConnected' => $StayConnected,
            'status' => 'success',
        ], 201);

    }

    public function getInvolved(){
        $getInvolved = GetInvolved::all();
        return response()->json([
            'status' => 'success',
            "message" => "Retrieved successfully",
            "data" => $getInvolved
        ]);
    }
}

    



