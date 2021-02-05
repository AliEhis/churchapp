<?php

namespace App\Http\Controllers;

use App\BookAppointment;
use App\Chat;
use App\Donate;
use App\Event;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\DonateResource;
use App\Http\Resources\UserResource;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\EventResource;
use Illuminate\Http\Request;
use App\Http\Resources\PrayerRequestResource;
use App\MemoryVerse;
use App\PrayerRequest;
use App\Sermon;
use App\User;
use App\Like;
use App\MessageBarcode;
use App\NewMember;
use App\SocialAccount;
use App\Testimony;
use App\TestimonyLike;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Validator;
use Socialite;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;

    }
        /**
     * Get a JWT via given credentials.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'nullable|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Either email or password is wrong.'], 401);
        }
        // $authUser = Auth::user();
        // if($authUser->verified == 0){
        //     return response()->json(['message' => 'Your account has not been verified.', 'status'=> false], 200);
        // }

        return $this->respondWithToken($token);
    }

        /**
     * Register a new user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        // generate otp
        $otp = 0;
        for ($i = 0; $i < 3; $i++)
        {
            $otp .= mt_rand(0,9);
        }

        // Send the OTP to user's email
        $data = ['email' => $request->email, 'name' => $request->name, 'code' => $otp];
        try {
            Mail::to($request->email)->send(new \App\Mail\VerifyRegister($data));
            $user = User::create(array_merge(
                $validator->validated(),
                ['password' => bcrypt($request->password), 'verified_otp' => $otp]
            ));
            return response()->json([
                'message' => 'An OTP has been sent to your email address',
                'status' => true
            ], 201);
         } catch (\Throwable $th) {
            \Log::info($th);
            return response()->json([
                "status" => -1,
                "message"=> "Could not send mail at this moment"
            ]);
        }

    }

    public function AccountVerification(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100',
            'verified_otp' => 'required|string|min:4',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                "status" => false,
                "message"=> "User account does not exist"
            ], 404);
        } else {
            if ($user->verified_otp == $request->verified_otp) {
                $user->update(['verified'=>1, 'verified_otp'=>Null]);
                return response()->json([
                    "status" => true,
                    "message"=> "Your Account has been successfully created and verified"
                ]);
            } else {
                // access token provided does not match generated token
                return response()->json([
                    "status" => false,
                    "message"=> "Invalid otp provided"
                ]);
            }
        }
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'activestate' => 1,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'status'    => 'success',
            'user' => Auth::user()
        ]);
    }

    //update profile


    public function update(Request $request, User $user)
    {
        if ($request->filled('password')) {
            $request->merge([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        $user->update($request->only(['email', 'password', 'name', 'phone', 'address', 'department', 'occupation', 'dob']));

        return response()->json($user, 200);
    }


    //change profile pic

public function ChangeImageNew(Request $request)
    {

        // validate the request image  for jpg, png, jpeg, base64
        if (!preg_match("/^data:image\/(png|jpeg|jpg|gif);base64,*/", $request->image)) {
            return $this->failureResponse('The file format is invalid.', 415);
        }
        $user = auth()->user();
        $id = $user->id;
        // $file = $request->file('image');
        // $name = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        // $filename = Str::random(15).time() . "." . $extension;
        // $location = env('APP_URL') . '/files/uploads/' . $filename;
        // $file->move('files/uploads/', $filename);

        // $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        // $destinationPath = env('APP_URL') .'/images/' . $imageName;
        // //  $destinationPath = 'https://church.aftjdigital.com' .'/images/' . $imageName;
        // $request->image->move(public_path('images'), $imageName);

        User::where('id', $id)->update(array(
            'image' => $request->image
        ));

        return response()->json([
            'message' => 'User Avatar successfully Updated',
            'user' => User::find($id)
        ], 200);
    }


    //hide user account (privacy)

    public function updatePrivacy(Request $request, User $user)
    {

             $user->update($request->only(['home_status', 'name_status', 'email_status', 'phone_status']));

        return response()->json($user, 200);
    }

    //show user account (privacy)
    public function AllowPrivacy(Request $request, User $user)
    {

        // $user->update($request->only(['status', 'email_status', 'name_status', 'phone_status']));
		$user->update(['status' => $request->status, 'email_status' => $request->email_status, 'name_status' => $request->name_status, 'phone_status' => $request->phone_status, 'home_status' => $request->home_status]);

        return response()->json($user, 200);
    }


    //fetch users
    public function index(){

        // return response()->json(User::get(), 200);
        return response()->json(User::orderBy('name')->where('status',0)->get(), 200);
    }

    //find current user
    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }
    //show all users
    public function show(User $user)
    {
        return response()->json($user,200);
    }

    //logout
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }

        /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    //add prayer request

    public function PrayerRequest(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:195',
            'phone'     =>  'required|numeric|digits:11',
            'email' => 'required|email',
            'address' => 'required|string',
            'body' => 'required|string'
        ]);

        $prayer = PrayerRequest::create([
            'user_id' => auth()->user()->id,
            // 'user_id' => $request->user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'body' => $request->body,
        ]);

        return response()->json([
            "message" => "Prayer Request Created succesfully"
        ], 201);
    }

    public function PostMemVerse(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:195',
            'body' => 'required|string'
        ]);

        $memoryverse = MemoryVerse::create([
            'user_id' => auth()->user()->id,
            'body' => $request->body,
            'status' => $request->status=1,
            'title' => $request->title,
        ]);

        return response()->json([
            "message" => "Memory Verse Created succesfully",
            'memoryverse' => $memoryverse,
            'status' => 'success',
        ], 201);
    }


        public function PostTestimony(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|string'
        ]);

        $testimony = Testimony::create([
            'user_id' => auth()->user()->id,
            'body' => $request->body,
            'status' => $request->status,
            'category' => $request->category,
        ]);

        return response()->json([
            "message" => "Testimony Created succesfully",
            'testimony' => $testimony,
            'status' => 'success',
        ], 201);
    }

        public function ReceiveMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);

        $chat = Chat::create([
            'user_id' => auth()->user()->id,
            'agent_id' => $request->agent_id,
            'message' => $request->message,
            'status' => $request->status,
            'activestate' => $request->activestate,
            'chatactivity' => $request->chatactivity,
        ]);

        return response()->json([
            "message" => "Message Sent succesfully",
            'chat' => $chat,
            'status' => 'success',
        ], 201);
    }

        public function BookAppointment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $chat = BookAppointment::create([
            'user_id' => auth()->user()->id,
            'marital_status' => $request->marital_status,
            'reason' => $request->reason,
            'date' => $request->date,
            'name' => $request->name,
        ]);

        $user_email = auth()->user()->email;
        $pastor = User::where('type', 'pastor')->first();
		\Log::info('Check the error');
		\Log::info($pastor);
        $pastor_email = $pastor->email;
        $pastor_name = $pastor->name;
        $data = ['email' => $user_email, 'name' => $request->name, 'date' => $request->date,'reason' => $request->reason ];
        $result = ['email' => $pastor_email, 'name' => $pastor_name , 'date' => $request->date,'reason' => $request->reason,'user'=>$user_email, 'authuser' => $request->name, 'id'=>$chat->id];
        try {
            Mail::to($user_email)->send(new \App\Mail\BookAppointment($data));
            Mail::to($pastor_email)->send(new \App\Mail\ReceiveAppointment($result));
            return response()->json([
                "message" => "Appointment booked succesfully, oops",
                'chat' => $chat,
                'status' => 'success',
            ], 201);
         } catch (\Throwable $th) {
            \Log::info($th);
            return response()->json([
                "status" => true,
                "message"=> "Appointment booked succesfully"
            ]);
        }

    }

    public function AppointmentConfirm ($appointmentId) {
        $appointment = BookAppointment::find($appointmentId);
        if (!$appointment) {
            return redirect()->back()->withErrors(['message' => 'Appointment not found']);
        }
        $appointment->status = 'approved';
        $appointment->save();
        Mail::to($appointment->user->email)->send(new \App\Mail\ApproveAppointment($appointment));
        \Session::flash('success', 'Approval completed');
        return redirect()->back();
    }
    public function AppointmentReject (Request $request, $appointmentId){
        $appointment = BookAppointment::find($appointmentId);
        if (!$appointment) {
            return redirect()->back()->withErrors(['message' => 'Appointment not found']);
        }
        $appointment->status = 'rejected';
        $appointment->rejection_reason = $request->rejection_reason;
        $appointment->save();
        Mail::to($appointment->user->email)->send(new \App\Mail\RejectAppointment($appointment));
        \Session::flash('success', 'Approval completed');
        return redirect()->back();
    }


    public function AddNewmember(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $chat = NewMember::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'church_visit' => $request->church_visit,
            'hear_about_us' => $request->hear_about_us,
            'prayer_point' => $request->prayer_point,
        ]);

        return response()->json([
            "message" => "Congrats! you are now a member",
            'chat' => $chat,
            'status' => 'success',
        ], 201);
    }

    public function AddConversion(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $conversion = \App\ConversionForm::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'new_member' => $request->new_member,
            'hear_about_us' => $request->hear_about_us,
            'pray_about' => $request->pray_about,
            'prayer_point' => $request->prayer_point,
        ]);

        return response()->json([
            "message" => "Registeration successful",
            'conversion' => $conversion,
            'status' => 'success',
        ], 201);
    }

    public function JoinDepartment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $member = \App\DepartmentMember::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'membership_class' => $request->membership_class,

        ]);

        return response()->json([
            "message" => "Registeration successful",
            'member' => $member,
            'status' => 'success',
        ], 201);
    }





    public function ViewConversion()
    {

        return response()->json(\App\Conversion::orderBy('id', 'desc')->paginate(20));
    }


    public function BeginnerClass()
    {

        return response()->json(\App\Lesson::orderBy('id', 'asc')->paginate(20));
    }

    //view events

    public function Events()
    {

        return response()->json(\App\Event::paginate(20));
    }

    public function ChurchProjects()
    {

        return response()->json(\App\ChurchProject::paginate(20));
    }


    public function ViewPrayer(Request $request)
    {

        return response()->json($request->user()->prayer_requests);
    }

    public function ViewMemVerse(Request $request)
    {

        return response()->json($request->user()->memory_verses);
    }

       public function MyTestimony(Request $request)
    {
        $user = Auth::user();
        if(!$user){
            return response('Unauthorized.', 401);
        }
        else{

            return response()->json($request->user()->testimonies);
        }
    }

        public function MyChatHistory(Request $request)
    {

        return response()->json($request->user()->chats);
    }

        public function TestimonyDetails($id)
    {
        $eventdetails = Testimony::find($id);
          return response()->json([
            'eventdetails' => $eventdetails,
            'status' => 'success',
        ], 201);
    }

    public function UserImage($id){

         $user = User::with('testimonies')->find($id);
         if(!$user){
            return response()->json(['message'=>'user does not exist', 'status'=>false]);
         }
        //  return response()->json(['user'=>$user->image, 'status'=>true]);
         return response($user->image);

    }
	//this function does the same as what is above but the difference is the way the responses are be return
	  public function UserProfileImage($id){

        $user = User::find($id);
        if(!$user){
           return response()->json(['message'=>'user does not exist', 'status'=>false]);
        }
        return response()->json(['image'=>$user->image, 'status'=>true]);
   }

        public function PastorSchedule()
    {

        return response()->json(\App\PastorSchedule::orderBy('id', 'desc')->paginate(20));
    }

    public function Department()
    {

        return response()->json(\App\Department::orderBy('id', 'desc')->paginate(20));
    }


    public function ViewAllPrayerReq()
    {

        return response()->json(\App\PrayerRequest::paginate(20));
    }

    public function FAQ()
    {

        return response()->json(\App\FAQ::orderBy('id', 'desc')->get());
    }


    public function Slider()
    {

        return response()->json(\App\Slider::orderBy('id', 'desc')->get());
    }

    public function AllMemomeryVerses()
    {

        return response()->json(\App\MemoryVerse::orderBy('id', 'desc')->get());
    }

        public function AllChat()
    {

        return response()->json(\App\Chat::orderBy('id', 'desc')->get());
    }

        public function AllTestimony()
    {

        return response()->json(\App\Testimony::orderBy('id', 'desc')->get());
    }

    public function Sermon()
    {

        return response()->json(\App\Sermon::orderBy('id', 'desc')->paginate(30));
    }

    public function Announcement()
    {

        return response()->json(\App\Announcement::orderBy('id', 'desc')->paginate(30));
    }

    public function MoreResources()
    {

        return response()->json(\App\MoreResource::get());
    }


    //social login for google

        public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
{
    // retrieve social user info
    $socialUser = Socialite::driver($provider)->stateless()->user();

    // check if social user provider record is stored
    $userSocialAccount = SocialAccount::where('provider_id', $socialUser->id)->where('provider_name', $provider)->first();

    if ($userSocialAccount) {

        // retrieve the user from users store
        $user = User::find($userSocialAccount->user_id);

        // assign access token to user
        $token = $user->createToken('string')->accessToken;

        // return access token & user data
        return response()->json([
            'token' => $token,
            'user'  => (new UserResource($user))
        ]);
    } else {

        // store the new user record
        $user = User::create(['...']);

        // store user social provider info
        if ($user) {

            SocialAccount::create(['...']);
        }

        // assign passport token to user
        $token = $user->createToken('string')->accessToken;
        $newUser = new UserResource($user);
        $responseMessage = 'Successfully Registered.';
        $responseStatus = 201;

        // return response
        // return response()->json([
        //     'responseMessage'   => $responseMessage,
        //     'responseStatus'    => $responseStatus,
        //     'token' => $token,
        //     'user' => $newUser
        // ]);
        return $this->respondWithToken($token);
    }
}
   public function addPage($name){
        $user = User::find(auth()->user()->id);
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found'
            ]);
        }
        $payload = explode('|', $user->page_name);
        if (!in_array($name, $payload)) {
            if (count($payload) >= 3) {
                array_shift($payload);
                $data = array_merge($payload, [$name]);
                $user->page_name = implode('|', $data);
            } else {
                $user->page_name = $user->page_name == NULL ? $name : $user->page_name . '|' . $name;
            }
        }
        $user->save();
        return response()->json([
            'status' => true,
            'message' => 'Added to favourite'
        ]);
    }

    public function getPage(){
        $user = User::find(auth()->user()->id);
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found'
            ]);
        }
        $payload = explode('|', $user->page_name);

        return response()->json([
            'status' => true,
            'message' => 'Recently visited pages retrieved',
            'data' => $payload
        ]);
    }

    public function like($id){
        $reply = Sermon::find($id);


        $like = Like::create([
            'sermon_id' => $id,
            'user_id' => auth()->user()->id
        ]);

        return response()->json([
            "message" => "you liked this sermon",
            'like' => $like,
            'status' => 'success',
        ], 201);
    }

    public function ScanBarcode(Request $request){

        $this->validate($request, [
            'body' => 'required'
        ]);

        $messagecode = MessageBarcode::create([
            'body' => $request->data
        ]);

        return response()->json([
            "message" => "barcdoe scanned successfully",
            'code' => $messagecode,
            'status' => 'success',
        ], 201);
    }


    public function likeTestimony($id){
        $reply = Testimony::find($id);


        $like = TestimonyLike::create([
            'testimony_id' => $id,
            'user_id' => auth()->user()->id
        ]);

        return response()->json([
            "message" => "you liked this testimony",
            'like' => $like,
            'status' => 'success',
        ], 201);
    }

    public function unlike($id){
        $reply = Like::where('sermon_id', $id)->where('user_id', auth()->user())->first();

        // $like->delete();
         $like = Like::destroy($id);

        return response()->json([
            "message" => "you unliked this testimony",
            'like' => $like,
            'status' => 'success',
        ], 201);


    }

    public function deleteVerse($id){
        $reply = MemoryVerse::where('id', $id)->where('user_id', auth()->user())->first();

        // $like->delete();
         $like = MemoryVerse::destroy($id);

        return response()->json([
            "message" => "memory verse deleted",
            'like' => $like,
            'status' => 'success',
        ], 201);


    }

    public function unlikeTestimony($id){
        $reply = TestimonyLike::where('testimony_id', $id)->where('user_id', auth()->user())->first();

        // $like->delete();
         $unlike = TestimonyLike::destroy($id);

        return response()->json([
            "message" => "you unliked this testimony",
            'unlike' => $unlike,
            'status' => 'success',
        ], 201);


    }


    public function googleRedirect()
    {
    	return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleSocial =   Socialite::driver('google')->stateless()->user();

        $users       =   User::where(['email' => $googleSocial->getEmail()])->first();
        // var_dump($googleSocial);
        // exit();

        if($users){
            Auth::login($users);
            return "welcome home";

            // return redirect('/store');
        }else{

            $user = User::firstOrCreate([
                'name'          => $googleSocial->getName(),
                'email'         => $googleSocial->getEmail(),
                'image'         => $googleSocial->getAvatar(),
                'provider_id'   => $googleSocial->getId(),
                'provider'      => 'googlessss',
            ]);

            return redirect('/store');
            // return $user;
        }
        // var_dump($googleSocial);
        // exit();
        // return $googleSocial->name;
            // return redirect('http://127.0.0.1:8000/api/login/google/callback');
    }

}
