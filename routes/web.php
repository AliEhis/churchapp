<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('about-us', 'HomeController@AboutUs')->name('aboutus');
Route::get('give', 'HomeController@Give')->name('give');
Route::get('new-life-christ', 'HomeController@DownlNewLife')->name('newlifechrist');
Route::get('downloads', 'HomeController@Download')->name('downloads');
Route::get('mission', 'HomeController@Mission')->name('mission');
Route::get('location-direction', 'HomeController@Direction')->name('direction');
Route::get('welcome-to-church', 'HomeController@Welcome')->name('welcome');
Route::get('new-here', 'HomeController@NewHere')->name('newhere');
Route::get('service-time', 'HomeController@ServiceTime')->name('servicetime');
Route::get('events', 'HomeController@Events')->name('events');
Route::get('store', 'HomeController@OurStore')->name('store');
Route::get('store/{slug}', 'HomeController@showStore')->name('store.show');
Route::get('contact-us', 'HomeController@Contact')->name('contact');
Route::get('church-happenings/{slug}', 'HomeController@ChurchHappening')->name('church.happenings');
Route::get('event/{slug}', 'HomeController@EventDetails')->name('event.details');
Route::get('privacy-policy', 'HomeController@Privacy')->name('privacy');
Route::get('terms-of-use', 'HomeController@Terms')->name('terms');
Route::get('prayers-lists', 'HomeController@Prayers')->name('prayers');
Route::get('gallery', 'HomeController@Gallery')->name('gallery');
Route::get('home-cell', 'HomeController@HomeCell')->name('homecell');
Route::get('volunteer-team', 'HomeController@VolunteerTeam')->name('volunteer');
Route::get('more-resources', 'HomeController@Resources')->name('resources');
   // home page testimony routes
    Route::get('home/testimony', 'admin\HomeTestimonyController@createTestimony')->name('cms.testimonyCreate');
    Route::post('home/testimony', 'admin\HomeTestimonyController@HomeTestimonyFormSubmit')->name('cms.testimonyCreate.submit');
    Route::get('testimonies', 'admin\HomeTestimonyController@GetHomeTestimony')->name('cms.hometestimony');
            // home page featured box routes
    Route::get('home/featured_box', 'admin\HomeTestimonyController@createFeaturedBox')->name('cms.boxCreate');
    Route::post('home/featured_box', 'admin\HomeTestimonyController@createFeaturedBoxSubmit')->name('cms.boxCreate.submit');
    Route::get('featured_box', 'admin\HomeTestimonyController@GetFeaturedBox')->name('cms.featuredBox');
      // home page pastor intro routes
   Route::get('home/pastor_intro', 'admin\HomeTestimonyController@createPastorIntro')->name('cms.pastorIntro');
   Route::post('home/pastor_intro', 'admin\HomeTestimonyController@createPastorIntroSubmit')->name('cms.pastorIntro.submit');
   Route::get('pastor_intro', 'admin\HomeTestimonyController@GetPastorIntro')->name('cms.pstIntro');
   //    Mission Gallery
    Route::get('mission_intro', 'admin\HomeTestimonyController@GetMissionIntro')->name('cms.missionIntro');
    Route::get('home/mission_intro', 'admin\HomeTestimonyController@createMission')->name('cms.create_mission');
    Route::post('home/mission_intro', 'admin\HomeTestimonyController@createMissionSubmit')->name('cms.create_mission.submit');
	 //    Prayer Tab
 	Route::get('prayertab', 'admin\HomeTestimonyController@getPrayerTab')->name('cms.prayerTab');
    Route::get('prayertab/create', 'admin\HomeTestimonyController@PrayerTab')->name('cms.prayerTabCreate');
    Route::post('prayertab/create', 'admin\HomeTestimonyController@createPrayerTab')->name('cms.prayerTabCreate.submit');

    Route::get('home-board', 'admin\HomeTestimonyController@gethomeFullwithBoard')->name('cms.homeFullwithBoard');
    Route::get('home-board/create', 'admin\HomeTestimonyController@homeFullwithBoard')->name('cms.homeFullwithBoardCreate');
    Route::post('home-board/create', 'admin\HomeTestimonyController@createhomeFullwithBoard')->name('cms.homeFullwithBoardCreate.submit');
  Route::get('info-board', 'admin\HomeTestimonyController@getInfoBoard')->name('cms.infoBoard');
    Route::get('info-board/create', 'admin\HomeTestimonyController@InfoBoard')->name('cms.infoBoardCreate');
    Route::post('info-board/create', 'admin\HomeTestimonyController@createInfoBoard')->name('cms.infoBoardCreate.submit');
	Route::get('about-welcome', 'admin\HomeTestimonyController@getAboutWelcome')->name('cms.aboutWelcome');
    Route::get('about-welcome/create', 'admin\HomeTestimonyController@aboutWelcome')->name('cms.aboutWelcomeCreate');
    Route::post('about-welcome/create', 'admin\HomeTestimonyController@createaboutWelcome')->name('cms.aboutWelcome.submit');

    Route::get('connection-group', 'admin\HomeTestimonyController@getConnectionGroup')->name('cms.connectionGroup');
    Route::get('connection-group/create', 'admin\HomeTestimonyController@connectionGroup')->name('cms.connectionGroupCreate');
    Route::post('connection-group/create', 'admin\HomeTestimonyController@createConnectionGroup')->name('cms.connectionGroup.submit');
    
    Route::get('belief', 'admin\HomeTestimonyController@getBelief')->name('cms.belief');
    Route::get('belief/create', 'admin\HomeTestimonyController@belief')->name('cms.beliefCreate');
    Route::post('belief/create', 'admin\HomeTestimonyController@createBelief')->name('cms.belief.submit');

	 //lession for children church levels
    Route::get('level-Lesson/{classId}/create', 'admin\LessonController@levelLessonForm')->name('cms.levelLessonCreate');
    Route::post('level-lesson/create', 'admin\LessonController@levelLessonFormSubmit')->name('cms.levelLessonCreate.submit');
    Route::get('level-Lesson/{id}/all', 'admin\LessonController@getLevelLesson')->name('cms.levelLessonView');
    // level lesson qustions for children church
    Route::get('level-question/{classId}/create', 'admin\AdminController@LevelquestionForm')->name('cms.levelQuestionCreate');
    Route::post('level-question/create', 'admin\AdminController@createLevelQuestion')->name('cms.levelQuestionCreate.submit');
	
	    //children church
    Route::get('children_church/level', 'admin\LessonController@level')->name('cms.level');
    Route::get('children_church/level/create', 'admin\LessonController@levelForm')->name('cms.levelCreate');
    Route::post('children_church/level', 'admin\LessonController@levelFormSubmit')->name('cms.levelCreate.submit');

   // Website recorded message routes
    Route::get('sermon_page/message', 'admin\HomeTestimonyController@createRecordedMessage')->name('cms.recordedMessageCreate');
    Route::post('sermon_page/message', 'admin\HomeTestimonyController@RecordedMessageSubmit')->name('cms.recordedMessage.submit');
    Route::get('recorded_message', 'admin\HomeTestimonyController@GetRecordedMessage')->name('cms.recordedMessage');
	  // Get involved tab
    Route::get('get_involved', 'admin\HomeTestimonyController@GetInvolved')->name('cms.getInvolved');
    Route::post('get_involved/create', 'admin\HomeTestimonyController@getInvolvedSubmit')->name('cms.getInvolved.submit');
    Route::get('get_involved/create', 'admin\HomeTestimonyController@createGetInvolved')->name('cms.getInvolvedCreate');
	Route::get('sermon/messages', 'HomeController@SermonContactMessages')->name('sermonMessage');



Route::get('all-books', 'HomeController@Books')->name('books');
Route::get('all-series', 'HomeController@sERIES')->name('series');
Route::get('all-gifts', 'HomeController@Gifts')->name('gifts');


Route::get('connect', 'HomeController@Connect')->name('connect');
Route::get('sermons', 'HomeController@Sermon')->name('sermon');
Route::get('sermon/{slug}', 'HomeController@SermonDetails')->name('sermon.details');

//blog
Route::get('blogs', ['uses' => 'PostController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'PostController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::post('/blog/comment/{id}', 'PostController@blogComments')->name('blog.comment');

Route::get('/blog/categories/{slug}', 'PostController@blogCategories')->name('blog.categories');
Route::get('/blog/tags/{slug}', 'PostController@blogTags')->name('blog.tags');
Route::get('/blog/author/{username}', 'PostController@blogAuthor')->name('blog.author');

//error psge routes***
route::get('404', ['as'=> '404', 'uses' =>
'ErrorController@notfound']);
route::get('500', ['as'=> '505', 'uses' =>
'ErrorController@fatal']);

Route::get('/search', 'HomeController@search')->name('search');

Route::post('contact-us-post', [
    'uses'  =>  'HomeController@postMessage',
    'as'    =>  'site.contact.post'
]);


Route::post('newsletter-post', [
    'uses'  =>  'HomeController@postNews',
    'as'    =>  'news.letter.post'
]);

Route::post('new-here', [
    'uses'  =>  'HomeController@NewherePost',
    'as'    =>  'new.here.post'
]);

Route::post('prayer-request', [
    'uses'  =>  'HomeController@RequestPrayer',
    'as'    =>  'prayer.request.post'
]);

Route::post('join-home-cell', [
    'uses'  =>  'HomeController@JoinHomecell',
    'as'    =>  'homecell.post'
]);

Route::post('join-volunteer', [
    'uses'  =>  'HomeController@BecomeVolunteer',
    'as'    =>  'volunteer.post'
]);



//Cart routes ***
Route::get('checkout', 'CartController@Checkout')->name('checkout');
Route::get('cart', 'CartController@cart')->name('cart');
Route::get('cart/add/{id}', 'CartController@addToCart')->name('cart.add');
Route::get('cart/update/{id}/{qty}', 'CartController@updateCart')->name('cart.update');
Route::get('cart/delete/{id}', 'CartController@cartDelete')->name('cart.delete');
Route::get('cart/save/{id}', 'CartController@Savecart')->name('cart.save');
Route::get('cart/restore/{id}', 'CartController@restoreCart')->name('cart.restore');

//checkout routes ***
Route::get('/pay-with-card', 'CheckoutController@payWithCard')->name('paywithcard');
Route::get('/payonpickup', 'CheckoutController@payOnPickup')->name('payonpickup');
Route::get('/payondelivery', 'CheckoutController@payOnDelivery')->name('payondelivery');
Route::get('/pay-with-wallet', 'CheckoutController@payWithWallet')->name('paywithwallet');
Route::get('/pay-withcard-guest', 'CheckoutController@payWithCardGuest')->name('paywithcardguest');


// Admin Login Routes ***
Route::prefix('admin')->group(function () {
    Route::get('/login', 'admin\AdminLoginController@login')->name('admin.login');
    Route::get('/logout', 'admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/login', 'admin\AdminLoginController@loginAdmin')->name('admin.login.submit');
    Route::get('cms', 'admin\AdminController@adminIndex')->name('cms.index');

});

Route::prefix('cms')->group(function () {

//    ***pages routes**

    Route::get('user/list', 'admin\AdminController@UserList')->name('cms.users');
    Route::get('home-intro', 'admin\AdminController@Homeintro')->name('cms.homeintro');
    Route::get('about', 'admin\AdminController@AdminAbout')->name('cms.about');
    Route::get('sliders', 'admin\AdminController@AdminSliders')->name('cms.sliders');
    Route::get('volunteers', 'admin\AdminController@AdminVolunteer')->name('cms.volunteers');
    Route::get('events', 'admin\AdminController@AdminEvent')->name('cms.events');
    Route::get('pending-volunteers', 'admin\AdminController@AdminPendingVolunteer')->name('cms.pendingvolunteers');
    Route::get('prayer/requests', 'admin\AdminController@PrayerRequest')->name('cms.prayerrequests');
    Route::get('prayer/list', 'admin\AdminController@PrayerList')->name('cms.prayerlist');
    Route::get('faqs', 'admin\AdminController@AdminFaq')->name('cms.faqs');
    Route::get('gallery', 'admin\AdminController@AdminGallery')->name('cms.gallery');
    Route::get('privacy-policy', 'admin\AdminController@AdminPrivacy')->name('cms.privacy');
    Route::get('Terms-of-use', 'admin\AdminController@AdminTermsofUse')->name('cms.terms');
    Route::get('contact', 'admin\AdminController@AdminContact')->name('cms.contact');
    Route::put('team/{id}', 'admin\AdminController@teamupdate')->name('cms.team.update');
    Route::get('team/{id}', 'admin\AdminController@teamshow');
    Route::get('church/stories', 'admin\AdminController@ChurchStories')->name('cms.churchstories');
    Route::get('churchstories/{id}', 'admin\AdminController@ChurchStoriesshow');
    Route::put('churchstories/{id}', 'admin\AdminController@ChurchstoriesUpdate')->name('cms.churchstories.update');
    Route::get('announcements', 'admin\AdminController@Adminannouncements')->name('cms.announcements');
    Route::get('appointments', 'admin\AdminController@Adminappointments')->name('cms.appointments');
    Route::get('beginners/class', 'admin\AdminController@Adminbeginnersclass')->name('cms.beginnersclass');
		// Foundation class routes
	Route::get('foundations', 'admin\FoundationController@foundation')->name('cms.foundations');
    Route::get('foundation/create', 'admin\FoundationController@foundationForm')->name('cms.foundationCreate');
    Route::post('foundation/create', 'admin\FoundationController@foundationFormSubmit')->name('cms.foundationCreate.submit');
    Route::get('/foundation/delete/{id}', 'FoundationController@delete')->name('cms.foundation.delete');
	// Lesson routes
    Route::get('lessons', 'admin\LessonController@lesson')->name('cms.lessons');
    Route::get('lesson/create', 'admin\LessonController@lessonForm')->name('cms.lessonCreate');
    Route::post('lesson/create', 'admin\LessonController@lessonFormSubmit')->name('cms.lessonCreate.submit');
    Route::get('/lesson/delete/{id}', 'LessonController@delete')->name('cms.lesson.delete');
	       // podcast routes
       Route::get('podcasts', 'admin\HomeTestimonyController@podcast')->name('cms.podcast');
       Route::get('podcast/create', 'admin\HomeTestimonyController@podcastForm')->name('cms.podcastCreate');
       Route::post('podcast/create', 'admin\HomeTestimonyController@podcastFormSubmit')->name('cms.podcastCreate.submit');
    // Question routes
    Route::get('question/{classId}/create', 'admin\AdminController@questionForm')->name('cms.questionCreate');
    Route::post('question/create', 'admin\AdminController@createQuestion')->name('cms.questionCreate.submit');
    Route::get('conversations', 'admin\AdminController@Adminconversations')->name('cms.conversations');
    Route::get('conversations/requests', 'admin\AdminController@Adminconversationsreq')->name('cms.conversationsreq');
    Route::get('departments', 'admin\AdminController@Admindepartments')->name('cms.departments');
    Route::get('department/members', 'admin\AdminController@Admindepartmentmembers')->name('cms.departmentmembers');
    Route::get('testimonies', 'admin\AdminController@Admintestimonies')->name('cms.testimonies');
    Route::get('chats', 'admin\AdminController@Adminchats')->name('cms.chats');
    Route::get('departments', 'admin\AdminController@Admindepartments')->name('cms.departments');
    Route::get('departmentmembers', 'admin\AdminController@Admindepartmentmembers')->name('cms.departmentmembers');
	
	  Route::get('departments_all', 'admin\DepartmentController@department')->name('cms.departments');
    Route::get('department/create', 'admin\DepartmentController@departmentForm')->name('cms.departmentCreate');
    Route::post('department/create', 'admin\DepartmentController@departmentFormSubmit')->name('cms.departmentCreate.submit');
    Route::get('/delete/{page}/{id}', 'DepartmentController@delete')->name('cms.delete');
	      // Quize routes
    //   Route::get('quize', 'admin\AdminController@quize')->name('cms.quize');
      Route::get('quize/create', 'admin\AdminController@quizeForm')->name('cms.quizeCreate');
      Route::post('quize/create', 'admin\AdminController@createquize')->name('cms.quizeCreate.submit');
	
    Route::get('sermons', 'admin\AdminController@Adminsermons')->name('cms.sermons');
    Route::get('churchprojects', 'admin\AdminController@Adminchurchprojects')->name('cms.churchprojects');
    Route::get('new/members', 'admin\AdminController@Adminnewmembers')->name('cms.newmembers');
    Route::get('church/resources', 'admin\AdminController@Adminchurchresources')->name('cms.churchresources');
    Route::get('pastorschedules', 'admin\AdminController@Adminpastorschedules')->name('cms.pastorschedules');




    // **action routes


    Route::put('pendingvolunteer/{id}', 'admin\AdminController@Pendingvolunteerupdate')->name('cms.pendingvolunteer.update');
    Route::get('pendingvolunteer/{id}', 'admin\AdminController@pendingvolunteerShow');
    Route::put('pendingfeedbacks/{id}', 'admin\AdminController@Pendingfeedbacksupdate')->name('cms.pendingfeedbacks.update');
    Route::get('pendingfeedbacks/{id}', 'admin\AdminController@pendingfeedbacksShow');
    Route::put('upcomingevent/{id}', 'admin\AdminController@UpcomingEventUpdate')->name('cms.upcoming.update');
    Route::get('upcomingevent/{id}', 'admin\AdminController@UpcomingEventshow');
    Route::put('faqs/{id}', 'admin\AdminController@FaqUpdate')->name('cms.faqs.update');
    Route::get('faqs/{id}', 'admin\AdminController@Faqshow');
    Route::get('about/{page}/{id}', 'admin\AdminController@show')->name('cms.show');
    Route::post('about/{page}', 'admin\AdminController@store')->name('cms.store');

    Route::get('delete/{page}/{id}', 'admin\AdminController@destroy')->name('cms.destroy');

    Route::post('post-event', 'admin\AdminController@storeEvent')->name('cms.store.event');

    Route::get('sitesettings', 'admin\AdminController@site_configuration')->name('cms.settings');
    Route::put('site-settings', 'admin\AdminController@site_configuration_update')->name('cms.site-settings.update');
    Route::put('slider/{slider}', 'admin\AdminController@sliders')->name('admin.slider.update');
    Route::get('delete/{slider}', 'admin\AdminController@deleteslider')->name('admin.slider.delete');
    Route::get('explore/{page}/{id}', 'admin\AdminController@show')->name('cms.show');
    Route::put('explore/{page}/{id}', 'admin\AdminController@update')->name('cms.update');

});


//create user routes ***
Route::redirect('users', 'users/index', 301);
Route::get('all/roles', 'admin\AdminController@roles')->name('cms.user.roles');
Route::post('roles', 'admin\AdminController@createRole')->name('cms.roles.store');
Route::post('roles/roles/permissions/update', 'admin\AdminController@permissionUpdate')->name('cms.roles.permissions.update');
Route::get('users/index', 'admin\AdminController@allUsers')->name('cms.users.index');
Route::post('users/store', 'admin\AdminController@createAccount')->name('cms.users.store');
Route::get('users/edit/{id}', 'admin\AdminController@editAccount')->name('cms.users.edit');
Route::put('users/update', 'admin\AdminController@updateAccount')->name('cms.users.update');
Route::get('users/delete/{id}', 'admin\AdminController@deleteAccount')->name('cms.users.delete');
Route::get('roles/delete/{id}', 'admin\AdminController@roleDestroy')->name('roles.delete');

Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback', 'SocialController@Callback');
Route::get('login/twitter', 'SocialController@twitterRedirect');
Route::get('login/twitter/callback', 'SocialController@TwitterCallback');
Route::get('login/facebook', 'SocialController@facebookRedirect');
Route::get('login/facebook/callback', 'SocialController@FacebookCallback');
Route::get('login/google', 'SocialController@googleRedirect');
Route::get('login/google/callback', 'SocialController@GoogleCallback');
Auth::routes();


