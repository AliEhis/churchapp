<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Auth apis
Route::post('register', 'AuthController@register');
Route::post('register/verification', 'AuthController@AccountVerification');
Route::get('user_image/{id}', 'AuthController@UserImage');
Route::get('profile_image/user/{id}', 'AuthController@UserProfileImage');
Route::post('forgot_password', 'PasswordResetRequestController@forgotPassword');
Route::post('verify_password_token', 'PasswordResetRequestController@verifyToken');
Route::post('password_reset', 'PasswordResetRequestController@resetPassword');
Route::post('login', 'AuthController@login');
Route::post('prayerrequest', 'AuthController@PrayerRequest')->middleware('cors');
Route::get('events', 'AuthController@Events')->middleware('cors');
Route::post('donations', 'AuthController@MakeDonation')->middleware('cors');
Route::get('faqs', 'AuthController@FAQ')->middleware('cors');
Route::get('sermons', 'AuthController@Sermon')->middleware('cors');
Route::get('announcements', 'AuthController@Announcement')->middleware('cors');
Route::get('viewprayer', 'AuthController@ViewPrayer')->middleware('cors');
Route::get('testimonies', 'AuthController@AllTestimony')->middleware('cors');
Route::post('attendance_status', 'HomePageTestimonyController@attendanceStatus')->middleware('cors');
Route::post('add-testimony', 'AuthController@PostTestimony')->middleware('cors');
Route::get('mytestimony', 'AuthController@MyTestimony')->middleware('cors');
Route::get('testimony/{id}', 'AuthController@TestimonyDetails')->middleware('cors');
Route::get('prayerlist', 'AuthController@ViewAllPrayerReq')->middleware('cors');
Route::post('memoryverse', 'AuthController@PostMemVerse')->middleware('cors');
Route::get('viewmemverse', 'AuthController@ViewMemVerse')->middleware('cors');
Route::get('all-memoryverses', 'AuthController@AllMemomeryVerses')->middleware('cors');
Route::get('users','AuthController@index')->middleware('cors');
Route::put('users/{user}','AuthController@update')->middleware('cors');
Route::post('reset-password-request', 'PasswordResetRequestController@sendPasswordResetEmail')->middleware('cors');
Route::post('change-password', 'ChangePasswordController@passwordResetProcess')->middleware('cors');
Route::get('resources', 'AuthController@MoreResources')->middleware('cors');
Route::put('privacy/{user}','AuthController@updatePrivacy')->middleware('cors');
Route::put('allow-privacy/{user}','AuthController@AllowPrivacy')->middleware('cors');
Route::post('imageupload','AuthController@ChangeImageNew')->middleware('cors');
Route::post('receivemessage','AuthController@ReceiveMessage')->middleware('cors');
Route::get('mychat-history','AuthController@MyChatHistory')->middleware('cors');
Route::get('allchats','AuthController@AllChat')->middleware('cors');
Route::get('pastor-schedule','AuthController@PastorSchedule')->middleware('cors');
Route::post('book-appointment','AuthController@BookAppointment')->middleware('cors');
Route::post('book-appointment/{id}/status/approve','GeneralController@BookAppointmentApprove')->middleware('cors');
Route::post('scanbarcode','AuthController@ScanBarcode')->middleware('cors');
Route::get('view-conversion','AuthController@ViewConversion')->middleware('cors');
Route::get('beginner-class','AuthController@BeginnerClass')->middleware('cors');
Route::get('departments','AuthController@Department')->middleware('cors');
Route::post('join-department','AuthController@JoinDepartment')->middleware('cors');
Route::post('add-conversion','AuthController@AddConversion')->middleware('cors');
Route::get('sliders','AuthController@Slider')->middleware('cors');
Route::get('/retrieve/{classId}/assessment', 'AssessmentController@getQuestions');
Route::get('/quiz/retrieve', 'AssessmentController@getQuiz')->middleware('cors');
Route::post('/assessment/{classId}/validate', 'AssessmentController@validateAssessment')->middleware('cors');
Route::post('add-note', 'NoteController@PostNote')->middleware('cors');
Route::get('notes', 'NoteController@getNotes')->middleware('cors');
Route::get('note/{id}', 'NoteController@NoteDetails')->middleware('cors');
Route::put('note/update/{id}', 'NoteController@Update')->middleware('cors');
Route::delete('note/delete/{id}', 'NoteController@Delete')->middleware('cors');
Route::get('all_podcast', 'HomePageTestimonyController@getPodcast')->middleware('cors');
Route::get('home_testimony', 'HomePageTestimonyController@getTestimony')->middleware('cors');
Route::get('featured_box', 'HomePageTestimonyController@getfeaturedBox')->middleware('cors');
Route::get('mission_gallery', 'HomePageTestimonyController@getMissions')->middleware('cors');
Route::get('pastor_intro', 'HomePageTestimonyController@getPastorIntro')->middleware('cors');
Route::post('send_suggestion', 'HomePageTestimonyController@SendSuggestions')->middleware('cors');
Route::post('attendance_status', 'HomePageTestimonyController@attendanceStatus')->middleware('cors');
Route::get('prayer-tab/home','HomePageTestimonyController@homePrayerTab')->middleware('cors');
Route::get('prayer-tab/about','HomePageTestimonyController@aboutPrayerTab')->middleware('cors');
Route::get('home/fullwidth-board','HomePageTestimonyController@fullWidthBoard')->middleware('cors');
Route::get('home/info-board','HomePageTestimonyController@infoBoard')->middleware('cors');
Route::get('home/connect','HomePageTestimonyController@connect')->middleware('cors');
Route::get('home/directions-connect','HomePageTestimonyController@directionsConnect')->middleware('cors');
Route::get('home/kids-connect','HomePageTestimonyController@kidsConnect')->middleware('cors');
Route::get('belief/about','HomePageTestimonyController@aboutBelief')->middleware('cors');
Route::get('belief/new-life','HomePageTestimonyController@newLifeBelief')->middleware('cors');
Route::get('belief/contact','HomePageTestimonyController@contactBelief')->middleware('cors');
Route::get('belief/home-cell','HomePageTestimonyController@homecellBelief')->middleware('cors');
Route::get('about/welcome','HomePageTestimonyController@AboutWelcome')->middleware('cors');
Route::get('about/learn_more','HomePageTestimonyController@AboutLearnMore')->middleware('cors');
Route::get('/retrieve/{lessonId}/question', 'AssessmentController@getLevelLessonQuestions');
Route::get('/children_church/levels', 'AssessmentController@getChildrenChurchLevel');
Route::get('/levels/{levelId}/lesson', 'AssessmentController@getLevelLessons');
Route::post('sermon/contact_message','HomePageTestimonyController@SermonContactMessage')->middleware('cors');
Route::get('sermon/recoded_message','HomePageTestimonyController@SermonRecordedMessage')->middleware('cors');
Route::get('sermon/message_latest','HomePageTestimonyController@SermonLatestMessage')->middleware('cors');
Route::post('stay-connected','HomePageTestimonyController@stayConnected')->middleware('cors');
Route::get('get-involved','HomePageTestimonyController@getInvolved')->middleware('cors');

Route::post('delete/memoryverse/{id}','AuthController@deleteVerse')->middleware('cors');
Route::post('sermon/like/{id}','AuthController@like')->middleware('cors');
Route::post('sermon/unlike/{id}','AuthController@unlike')->middleware('cors');
Route::post('testimony/like/{id}','AuthController@likeTestimony')->middleware('cors');
Route::post('testimony/unlike/{id}','AuthController@unlikeTestimony')->middleware('cors');
Route::post('new-member','AuthController@AddNewmember')->middleware('cors');
Route::get('church-projects','AuthController@ChurchProjects')->middleware('cors');

    Route::group(['middleware' => ['auth:api', 'cors']], function(){
    Route::post('logout', 'AuthController@logout');
    Route::get('user', 'AuthController@getAuthUser');
    Route::post('logout', 'AuthController@logout');
    Route::get('users/{user}','AuthController@show');
    Route::get('add/page/{name}','AuthController@addPage');
    Route::get('get/pages','AuthController@getPage');

    Route::post('/forum/add', 'ForumController@Add');
    Route::get('/retrieve/forums', 'ForumController@getForums');
    Route::get('/retrieve/forum/{forumId}', 'ForumController@getForumMessages'); // retrieve a forum message
    Route::post('/forum/message/add/{id}', 'ForumController@createMessage'); // send a message to a forum
		    // Ehis Implementations on chat
	Route::post('/chat/message/send/{id}', 'ForumController@createChat'); // send a message to a chat
	Route::get('/chat/message/retrieve', 'ForumController@getChatMessages'); // send a message to a chat

});

Route::get('/auth/{provider}', 'AuthController@redirectToProvider')->middleware('cors');
Route::get('/auth/{provider}/callback', 'AuthController@handleProviderCallback')->middleware('cors');

Route::group(['middleware' => ['web']], function () {
    // Route::get('redirect', function(){
    //     $query=http_build_query([
    //         'client_id'     => '57009152318-hgop3bvogifeuilq4v3disjobs3ma64a.apps.googleusercontent.com',
    //         'client_secret' => 'ZVZXd0idWxhGhHY6viOzKM_3',
    //         'redirect'      => 'http://127.0.0.1:8000/api/login/google/callback',
    //     ]);
    //     return redirect('http://127.0.0.1:8000/oauth/authorized?'.$query);
    // })->name('get.token');
	
    Route::get('login/google', 'AuthController@googleRedirect')->name('get.token');
    Route::get('login/google/callback', 'AuthController@googleCallback');
});



