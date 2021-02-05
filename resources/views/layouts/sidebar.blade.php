<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="image">
        <img src="{{asset('img/download.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="info">
        <a href="{{route('cms.index')}}"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ Request::is('admin/cms') ? 'active' : '' }}">
        <a href="{{route('cms.index')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview {{ Request::is('cms/sliders')  || Request::is('cms/clients') ||  Request::is('cms/home-intro') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Home Components</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.homeintro')}}"><i class="fa fa-angle-double-right"></i>Home Intro</a></li>
          <li><a href="{{route('cms.sliders')}}"><i class="fa fa-angle-double-right"></i>Sliders</a></li>

        </ul>
      </li>
      <li  class="{{ Request::is('cms/user/list') ? 'active' : '' }}">
      <a href="{{route('cms.users')}}">
        <i class="fa fa-users"></i> <span>User List</span>
      </a>
    </li>
      <li  class="{{ Request::is('cms/prayer/requests') ? 'active' : '' }}">
        <a href="{{route('cms.prayerrequests')}}">
          <i class="fa fa-telegram"></i> <span>Prayer Requests</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/prayer/list') ? 'active' : '' }}">
        <a href="{{route('cms.prayerlist')}}">
          <i class="fa fa-book"></i> <span>Prayer Lists</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/events') ? 'active' : '' }}">
        <a href="{{route('cms.events')}}">
          <i class="fa fa-cubes"></i> <span>Events</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/announcements') ? 'active' : '' }}">
        <a href="{{route('cms.announcements')}}">
          <i class="fa fa-bullhorn"></i> <span>Announcements</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/appointments') ? 'active' : '' }}">
        <a href="{{route('cms.appointments')}}">
          <i class="fa fa-clock-o"></i> <span>Appointments</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/beginners/class') ? 'active' : '' }}">
        <a href="{{route('cms.beginnersclass')}}">
          <i class="fa fa-hospital-o"></i> <span>Beginners Class</span>
        </a>
      </li>
		   <li class="treeview {{ Request::is('cms/children_church')  ||  Request::is('cms/children_church/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Church Level</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.level')}}"><i class="fa fa-angle-double-right"></i>Level</a></li>
          <li><a href="{{route('cms.levelCreate')}}"><i class="fa fa-angle-double-right"></i>Create Level</a></li>
        </ul>
      </li>
		   <li class="treeview {{ Request::is('cms/podcast')  ||  Request::is('cms/podcast/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Podcast</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.podcast')}}"><i class="fa fa-angle-double-right"></i>Podcast</a></li>
          <li><a href="{{route('cms.podcastCreate')}}"><i class="fa fa-angle-double-right"></i>Create Podcast</a></li>
        </ul>
      </li>
		    <li class="treeview {{ Request::is('cms/home-board')  ||  Request::is('cms/home-board/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Fullwidth Board</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.homeFullwithBoard')}}"><i class="fa fa-angle-double-right"></i>Home Fullwidth Board</a></li>
          <li><a href="{{route('cms.homeFullwithBoardCreate')}}"><i class="fa fa-angle-double-right"></i>Create Fullwidth Board</a></li>
        </ul>
      </li>
     <li class="treeview {{ Request::is('cms/get_involved')  ||  Request::is('cms/get_involved/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Get Involved Tab</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.getInvolved')}}"><i class="fa fa-angle-double-right"></i> Get involve</a></li>
          <li><a href="{{route('cms.getInvolvedCreate')}}"><i class="fa fa-angle-double-right"></i>Create get involved</a></li>
        </ul>
      </li>
		 <li class="treeview {{ Request::is('cms/prayertab')  ||  Request::is('cms/prayertab/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Prayer Tab</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.prayerTab')}}"><i class="fa fa-angle-double-right"></i>Prayer Tab</a></li>
          <li><a href="{{route('cms.prayerTabCreate')}}"><i class="fa fa-angle-double-right"></i>Create Prayer Tab</a></li>
        </ul>
      </li>
		 <li class="treeview {{ Request::is('cms/quize')  ||  Request::is('cms/quize/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Quize</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          {{-- <li><a href="{{route('cms.quize')}}"><i class="fa fa-angle-double-right"></i>Quize</a></li> --}}
          <li><a href="{{route('cms.quizeCreate')}}"><i class="fa fa-angle-double-right"></i>Create Quize</a></li>
        </ul>
      </li>
		
		    <li class="treeview {{ Request::is('cms/lessons')  ||  Request::is('cms/lesson/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Lesson</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.lessons')}}"><i class="fa fa-angle-double-right"></i>Lesson</a></li>
          <li><a href="{{route('cms.lessonCreate')}}"><i class="fa fa-angle-double-right"></i>Create Lesson</a></li>
        </ul>
      </li>
		     <li  class="{{ Request::is('cms/sermon/messages') ? 'active' : '' }}">
        <a href="{{route('sermonMessage')}}">
          <i class="fa fa-cubes"></i> <span>Sermon Messages</span>
        </a>
      </li>
		
	 <li class="treeview {{ Request::is('cms/recorded_message') ||  Request::is('cms/sermon_page/message') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Recorded Messages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.recordedMessage')}}"><i class="fa fa-angle-double-right"></i>Pastor Messages</a></li>
          <li><a href="{{route('cms.recordedMessageCreate')}}"><i class="fa fa-angle-double-right"></i>Create Pastor Messages</a></li>
        </ul>
      </li>
		
		<li class="treeview {{ Request::is('cms/foundations')  ||  Request::is('cms/foundation/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Foundation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.foundations')}}"><i class="fa fa-angle-double-right"></i>Foundation Class</a></li>
          <li><a href="{{route('cms.foundationCreate')}}"><i class="fa fa-angle-double-right"></i>Create Foundation Class</a></li>
        </ul>
      </li>
		 <li class="treeview {{ Request::is('cms/home/testimony') ||  Request::is('cms/home/testimony') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>HomeTestimony</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.hometestimony')}}"><i class="fa fa-angle-double-right"></i>Testimony</a></li>
          <li><a href="{{route('cms.testimonyCreate')}}"><i class="fa fa-angle-double-right"></i>Create Testimony</a></li>
        </ul>
      </li>
		  <li class="treeview {{ Request::is('cms/about_welcome')  ||  Request::is('cms/about_welcome/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>About Welcome / learn more</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.aboutWelcome')}}"><i class="fa fa-angle-double-right"></i> About Welcome</a></li>
          <li><a href="{{route('cms.aboutWelcomeCreate')}}"><i class="fa fa-angle-double-right"></i>Create About Welcome</a></li>
        </ul>
      </li>
		
		  <li class="treeview {{ Request::is('cms/info-board')  ||  Request::is('cms/info-board/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Info Board</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.infoBoard')}}"><i class="fa fa-angle-double-right"></i>Info Board</a></li>
          <li><a href="{{route('cms.infoBoardCreate')}}"><i class="fa fa-angle-double-right"></i>Create Info Board</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::is('cms/connection-group')  ||  Request::is('cms/connection-group/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Connection Group</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.connectionGroup')}}"><i class="fa fa-angle-double-right"></i>Connection Group</a></li>
          <li><a href="{{route('cms.connectionGroupCreate')}}"><i class="fa fa-angle-double-right"></i>Create Connection Group</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::is('cms/belief')  ||  Request::is('cms/belief/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Belief</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.belief')}}"><i class="fa fa-angle-double-right"></i>Belief</a></li>
          <li><a href="{{route('cms.beliefCreate')}}"><i class="fa fa-angle-double-right"></i>Create Belief</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::is('cms/home/featuredBox') ||  Request::is('cms/home/featuredBox') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>FeaturedBox</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.featuredBox')}}"><i class="fa fa-angle-double-right"></i>Featured Box</a></li>
          <li><a href="{{route('cms.boxCreate')}}"><i class="fa fa-angle-double-right"></i>Create Featured Box</a></li>
        </ul>
      </li>
		 <li class="treeview {{ Request::is('cms/home/pastorIntro') ||  Request::is('cms/home/pastorIntro') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Pastor Intro</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.pstIntro')}}"><i class="fa fa-angle-double-right"></i>Pastor Intro</a></li>
          <li><a href="{{route('cms.pastorIntro')}}"><i class="fa fa-angle-double-right"></i>Create Pastor Intro</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::is('cms/home/mission_intro') ||  Request::is('cms/home/mission_intro') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Mission</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.missionIntro')}}"><i class="fa fa-angle-double-right"></i>Mission</a></li>
          <li><a href="{{route('cms.create_mission')}}"><i class="fa fa-angle-double-right"></i>Create Mission</a></li>
        </ul>
      </li>
      <li  class="{{ Request::is('cms/chats') ? 'active' : '' }}">
        <a href="{{route('cms.chats')}}">
          <i class="fa fa-comments"></i> <span>Chat Records</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/conversations') ? 'active' : '' }}">
        <a href="{{route('cms.conversations')}}">
          <i class="fa fa-podcast"></i> <span>Conversations</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/conversations/requests') ? 'active' : '' }}">
        <a href="{{route('cms.conversationsreq')}}">
          <i class="fa fa-check"></i> <span>Conversations Requests</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/departments') ? 'active' : '' }}">
        <a href="{{route('cms.departments')}}">
          <i class="fa fa-bank"></i> <span>Departments</span>
        </a>
		</li>
		    <li class="treeview {{ Request::is('cms/departments')  ||  Request::is('cms/department/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Departments Module</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.departments')}}"><i class="fa fa-angle-double-right"></i>All Departments</a></li>
          <li><a href="{{route('cms.departmentCreate')}}"><i class="fa fa-angle-double-right"></i>Create Department</a></li>
        </ul>
      </li>
      <li  class="{{ Request::is('cms/testimonies') ? 'active' : '' }}">
        <a href="{{route('cms.testimonies')}}">
          <i class="fa fa-calendar-check-o"></i> <span>Testimonies</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/sermons') ? 'active' : '' }}">
        <a href="{{route('cms.sermons')}}">
          <i class="fa fa-clone"></i> <span>Sermons</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/churchprojects') ? 'active' : '' }}">
        <a href="{{route('cms.churchprojects')}}">
          <i class="fa fa-cogs"></i> <span>Church Projects</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/new/members') ? 'active' : '' }}">
        <a href="{{route('cms.newmembers')}}">
          <i class="fa fa-user-plus"></i> <span>New Members</span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/church/resources') ? 'active' : '' }}">
        <a href="{{route('cms.churchresources')}}">
          <i class="fa fa-unsorted"></i> <span>Church Resources </span>
        </a>
      </li>
      <li  class="{{ Request::is('cms/pastorschedules') ? 'active' : '' }}">
        <a href="{{route('cms.pastorschedules')}}">
          <i class="fa fa-fax"></i> <span>Pastor Schedules </span>
        </a>
      </li>
      <li class="treeview {{ Request::is('cms/volunteers')  ||  Request::is('cms/pending-volunteers') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-handshake-o"></i>
          <span>Volunteers</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.volunteers')}}"><i class="fa fa-angle-double-right"></i>Active Volunteers</a></li>
          <li><a href="{{route('cms.pendingvolunteers')}}"><i class="fa fa-angle-double-right"></i>Pending Volunteers</a></li>
        </ul>
      </li>
      {{-- <li class="{{ Request::is('cms/church/stories*')  ? 'active' : '' }}">
        <a href="{{ route('cms.churchstories') }}">
       <i class="fa fa-tags"></i>Church Stories
        </a>
      </li> --}}
      <li class="{{ Request::is('cms/sitesettings') ? 'active' : '' }}">
        <a href="{{route('cms.settings')}}">
          <i class="fa fa-cog"></i> <span>Settings</span>
        </a>
      </li>
      <li class="treeview {{ Request::is('cms/contact')  || Request::is('cms/about') ||  Request::is('cms/gallery') || Request::is('cms/faqs') || Request::is('cms/privacy-policy') || Request::is('cms/Terms-of-use') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i>
          <span>Pages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('cms.contact') }}"><i class="fa fa-angle-double-right"></i>Church Happenings</a></li>
          <li><a href="{{ route('cms.contact') }}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
          <li><a href="{{route('cms.about')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
          <li><a href="{{route('cms.gallery')}}"><i class="fa fa-angle-double-right"></i>Gallery</a></li>
          <li><a href="{{route('cms.faqs')}}"><i class="fa fa-angle-double-right"></i>FAQs</a></li>
          <li><a href="{{route('cms.privacy')}}"><i class="fa fa-angle-double-right"></i>Privacy</a></li>
          <li><a href="{{route('cms.terms')}}"><i class="fa fa-angle-double-right"></i>Terms of Use</a></li>
        </ul>
      </li>
      @if(

        \Auth::user()->role->permission->user_module == "yes")
      <li class="treeview {{ Request::is('users/index')  || Request::is('all/roles') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-user"></i>
          <span>User Module</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('cms.users.index')}}"><i class="fa fa-angle-double-right"></i>All Users</a></li>
          <li><a href="{{route('cms.user.roles')}}"><i class="fa fa-angle-double-right"></i>All Roles</a></li>
        </ul>
      </li>
      @endif
      <li>
        <a href="{{url('/')}}">
          <i class="fa fa-globe"></i> <span>Main Website</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.logout') }}">
          <i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>
    </ul>
  </section>
