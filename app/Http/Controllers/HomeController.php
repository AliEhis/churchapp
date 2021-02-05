<?php

namespace App\Http\Controllers;


use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\ChurchHappening;
use App\UpcomingEvent;
use App\ServiceTime;
use App\ContactMessage;
use App\DailyDevotion;
use App\Event;
use App\Newsletter;
use App\Program;
use App\Sermon;
use App\SermonPageContact;
use App\Post;
use App\Volunteer;
use App\Homecell;
use App\About;
use App\FAQ;
use App\MoreResource;
use App\Team;
use App\NewMember;
use App\Gallery;
use App\PrayerList;
use App\PrayerRequest;
use App\Donation;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $upcomingevent = UpcomingEvent::first();
        $donation = Donation::first();
        $servicetime = ServiceTime::first();
        $sermons = Sermon::take(2)->latest()->get();
        $countdown = Program::first();
        $happenings = ChurchHappening::take(6)->latest()->get();
        $posts = Post::take(2)->latest()->withCount('comments')->where('status',1)->get();
        $trendingpost = Post::take(3)->inRandomOrder()->withCount('comments')->where('status',1)->get();

        return view('welcome', compact('upcomingevent', 'donation','servicetime', 'sermons', 'posts', 'trendingpost', 'happenings', 'countdown'));
    }

    public function AboutUs()
    {
        $abouts = About::all();
        $faqs = FAQ::all();

        return view('about', compact('abouts', 'faqs'));
    }

    public function Welcome()
    {
        $abouts = About::all();
        $members = Team::all();

        return view('welcome_tochurch', compact('abouts', 'members'));
    }

    public function ServiceTime()
    {
        $servicetime = ServiceTime::all();
        $latestevents = Event::take(4)->latest()->get();

        return view('service_time', compact('servicetime', 'latestevents'));
    }

    public function Give()
    {

        return view('give');
    }

    public function Download()
    {

        return view('downloads');
    }

    public function Events()
    {
        $month = request('month');
        $year  = request('year');

        $events = Event::orderBy('id', 'desc')->when($month, function ($query, $month) {
            return $query->whereMonth('created_at', Carbon::parse($month)->month);
        })
        ->when($year, function ($query, $year) {
            return $query->whereYear('created_at', $year);
        })
        ->paginate(10);


        return view('events', compact('events'));
    }

    public function EventDetails($slug)
    {
        $eventdetails = Event::where('slug', $slug)->first();
        $latestevents = Event::take(2)->inRandomOrder()->get();

        return view('event_details' , compact('eventdetails', 'latestevents'));
    }

    public function OurStore()
    {
        // $daily_devotions = DailyDevotion::paginate(20);
        $books = DailyDevotion::where('type',1)->paginate(20);
        $series = DailyDevotion::where('type',2)->paginate(20);
        $gifts = DailyDevotion::where('type',3)->paginate(20);



        return view('market.store', compact('series', 'books', 'gifts'));
    }


    public function showStore($slug)
    {
        $eventdetails = DailyDevotion::where('slug', $slug)->first();


        return view('market.store_details' , compact('eventdetails'));
    }

    public function NewHere()
    {
        $upcomingevent = UpcomingEvent::first();
        $servicetime = ServiceTime::first();
        $faqs = FAQ::all();
        return view('new_here', compact('upcomingevent', 'servicetime', 'faqs'));
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Mission()
    {
        return view('mission');
    }

    public function Books()
    {
        $books = DailyDevotion::where('type',1)->paginate(20);

        return view('market.books',  compact('books'));
    }
    public function sERIES()
    {
        $series = DailyDevotion::where('type',2)->paginate(20);
        return view('market.series',  compact('series'));
    }
    public function Gifts()
    {
        $gifts = DailyDevotion::where('type',3)->paginate(20);
        return view('market.gifts',  compact('gifts'));
    }

    public function DownlNewLife()
    {
        return view('new_life_christ');
    }


    public function Direction()
    {
        return view('direction');
    }


    public function Resources()
    {
        $resources = MoreResource::all();
        return view('resources', compact('resources'));
    }

    public function Sermon()
    {
        $sermons = Sermon::orderBy('id', 'desc')->paginate(24);
        $sermonsdetails = Sermon::take(3)->latest()->get();

        return view('sermon', compact('sermons', 'sermonsdetails'));
    }

    public function SermonDetails($slug)
    {
        $sermondetails = Sermon::where('slug', $slug)->first();

        return view('sermon_details' , compact('sermondetails'));
    }


    public function Connect()
    {
        return view('connect');
    }

    public function Gallery()
    {
        $galleries = Gallery::paginate(20);

        return view('gallery', compact('galleries'));
    }

    public function Prayers()
    {
        $prayers = PrayerList::orderBy('id', 'desc')->paginate(20);

        return view('prayers', compact('prayers'));
    }

    public function HomeCell()
    {
        return view('homecell');
    }
    public function VolunteerTeam()
    {
        return view('volunteer');
    }

    public function Privacy()
    {
        return view('privacy');
    }

    public function Terms()
    {
        return view('terms');
    }



    public function WatchLive()
    {
        return view('watch_live');
    }

    public function ChurchHappening($slug)
    {

        $eventdetails = ChurchHappening::where('slug', $slug)->first();
        $sermons = ChurchHappening::take(4)->latest()->get();


        return view('happening_details' , compact('eventdetails', 'sermons'));
    }

    public function postMessage(Request $request) {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>  $request->message,
            'phone'     =>  $request->phone,
            'subject'   =>  $request->subject,
        );

        $validator = \Validator::make($data, [
            'name'      =>  'required|string|max:50',
            'email'     =>  'required|email|max:50',
            'phone'     =>  'nullable|string|max:15|min:5',
            'subject'   =>  'required|string|max:40',
            'message'   =>  'required|string',
        ], [
            'name.required'     =>  'Name field is required. Please fill in your name.',
            'email.required'    =>  'E-Mail field is required. Please enter your e-mail address.',
            'email.email'       =>  'A valid e-mail is required as this will be our primary mode of contacting you for feedback.',
            'phone.nullable'     =>  'Phone field must not exceed 15 digits.',
            'subject.required'   =>  'Subject field Cannot be empty',
            'message.required'  =>  'Your forgot to type a message. Kindly write your message to proceed'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $message = ContactMessage::create($data);
        \Toastr::success('message', 'Your message has been received and will be duly treated. We will contact you as soon as possible if need be.');
        \Mail::to('info@maxwellochadefoundation.com')->send(new \App\Mail\ContactMessage($message));
        return redirect()->back();
    }

    public function postNews(Request $request)
    {
        $request->validate([
            'email'     => 'required'
        ]);

        Newsletter::create($request->all());

        Toastr::success('message', 'NewsLetter Subscription successful.');
        return back();

    }

    public function NewherePost(Request $request) {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone,
            'church_visit'   =>  $request->church_visit,
            'hear_about_us'   =>  $request->hear_about_us,
            'prayer_point'   =>  $request->prayer_point,
        );

        $validator = \Validator::make($data, [
            'name'      =>  'required|string|max:50',
            'email'     =>  'required|email|max:50',
            'phone'     =>  'nullable|string|max:15|min:5',
            'address'   =>  'required',
            'church_visit'   =>  'required',
            'hear_about_us'   =>  'nullable',
            'prayer_point'   =>  'nullable',
        ], [
            'name.required'     =>  'Name field is required. Please fill in your name.',
            'email.required'    =>  'E-Mail field is required. Please enter your e-mail address.',
            'email.email'       =>  'A valid e-mail is required as this will be our primary mode of contacting you for feedback.',
            'phone.required'     =>  'Phone field must not exceed 15 digits.',
            'address.required'   =>  'Address field Cannot be empty',
            'church_visit.required'  =>  'Your forgot to Select "New here" option.'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $message = NewMember::create($data);
        \Toastr::success('message', 'Form submitted succesfully. Thanks and God bless you.');
        // \Mail::to('info@maxwellochadefoundation.com')->send(new \App\Mail\ContactMessage($message));
        return redirect()->back();
    }

    public function RequestPrayer(Request $request) {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone,
            'body'      =>  $request->body,
            'status'   =>  $request->status=0,
        );

        $validator = \Validator::make($data, [
            'name'      =>  'required|string|max:50',
            'email'     =>  'required|email|max:50',
            'phone'     =>  'required|string|max:15|min:5',
            'address'   =>  'required|string|max:40',
            'body'   =>  'required|string',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = PrayerRequest::create($data);
        \Toastr::success('message', 'Prayer Request sent successfully.');
        // \Mail::to('info@maxwellochadefoundation.com')->send(new \App\Mail\ContactMessage($message));
        return redirect()->back();
    }


    public function BecomeVolunteer(Request $request) {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone,
            'member'      =>  $request->member,
            'married'      =>  $request->married,
            'spouse'      =>  $request->spouse,
            'children'      =>  $request->children,
            'department'      =>  $request->department,
            'number_of_children' =>$request->number_of_children,
            'status'   =>  $request->status=0,
        );

        $validator = \Validator::make($data, [
            'name'      =>  'required|string|max:50',
            'email'     =>  'required|email|max:50',
            'phone'     =>  'required|string|max:15|min:5',
            'member'   =>  'required',
            'married'   =>  'required',
            'children'   =>  'required',
            'department'    => 'required|string',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = Volunteer::create($data);
        \Toastr::success('message', 'Volunteer Request sent successfully.');
        // \Mail::to('info@maxwellochadefoundation.com')->send(new \App\Mail\ContactMessage($message));
        return redirect()->back();
    }

    public function JoinHomecell(Request $request) {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone,
            'member'      =>  $request->member,
            'married'      =>  $request->married,
            'spouse'      =>  $request->spouse,
            'children'      =>  $request->children,
            'status'   =>  $request->status=0,

        );

        $validator = \Validator::make($data, [
            'name'      =>  'required|string|max:50',
            'email'     =>  'required|email|max:50',
            'phone'     =>  'required|string|max:15|min:5',
            'member'   =>  'required',
            'married'   =>  'required',
            'children'   =>  'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = HomeCell::create($data);
        \Toastr::success('message', 'Homecell Request sent successfully.');
        // \Mail::to('info@maxwellochadefoundation.com')->send(new \App\Mail\ContactMessage($message));
        return redirect()->back();
    }

    public function AppointmentSchedule($appointmentId){
        return view('appointment_schedule',compact('appointmentId'));

    }
    
    public function SermonContactMessages()
    {
        $message = SermonPageContact::all();
        return view('cms.sermon_contact_message', compact('message'));
    }



}
