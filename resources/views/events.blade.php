@extends('layouts.app')
@section('title')
Events
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">Attend Our Events</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item all" href="#">We have a variety of weekly events to support you on your faith journey.
                    <br>
                    Click below to find our what's happening in our church.</a>
            </div>

        </div>
    </div>
</div>
<h4 class="sc_title sc_title_regular sc_align_center" style="color: black">Scheduled Events</h4>
<h6 class="sc_title sc_title_regular sc_align_center" style="color: black">Here are some of our upcoming events. Use filter below to help find the event you are interested in.</h6>

@foreach($events as $post)
<div class="hp1_mission_section1">
    <div class="content_wrap">
        <div class="columns_wrap sc_columns columns_fluid no_margins sc_columns_count_2">
            <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                <a href="{{ route('event.details', [ 'slug' => $post->slug]) }}" title="{{$post->title}}">
                <h2 class="sc_title sc_title_regular sc_align_right">{{$post->title}}</h2>
                </a>
            </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                <div class="sc_section">
                    <div class="sc_section_inner">
                        <h4 class="tpl_light">
                         Towards a winning half
                        </h4>
                        <p class="tpl_light">{{ date('M j, Y', strtotime($post->event_date)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sc_services_wrap sc_title sc_title_regular sc_align_center">
    <div class="sc_services sc_services_style_services-5 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols width_100_per" data-interval="5040" data-slides-min-width="250">
        <h3>
            <a href="{{ route('event.details', [ 'slug' => $post->slug]) }}" title="{{$post->title}}" style="color: #130b47">
            {{$post->title}}</h3>
    </div>
        <div class="sc_services_descr sc_item_descr" style="color: black">{!! str_limit($post->body,150) !!}</div>
        <a href="{{ route('event.details', [ 'slug' => $post->slug]) }}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
            LEARN MORE</a>
        </div>
</div>
<div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
@endforeach


<br>

<div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
<div class="sc_services_wrap sc_title_regular sc_title sc_align_center">
    <div class="sc_services sc_services_style_services-5 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols width_100_per" data-interval="5040" data-slides-min-width="250">
        <h2 style="color: black">JOIN OUR ONLINE EXPERIENCE</h2>
        <div class="sc_services_descr sc_item_descr">corvnhre vrvr vrjehvore verjvero verhvrebveuiiiiiiiiiiiii rehvrehv erv ervhrev ervheroh</div>
        <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">JOIN IN</a>
    </div>
</div>
<div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
<div class="hp1_testimonials_section">
    <div class="content_wrap text-center">
     <h2 class="sc_title sc_title_regular sc_align_center" style="color: white">STAY CONNECTED </h2>
     <P style="color: white" class="sc_title sc_title_regular sc_align_center">Subscribe to our weekely newsletter to stay up to date with every happenings</P>
     <div class="sc_services_wrap sc_title sc_title_regular sc_align_center">
     <form class="prayer-request" action="{{route('news.letter.post')}}" method="post">
        @csrf
     <input type="text" name="email" placeholder="Enter your email" size="100">

     <input type="submit" value="Subscribe" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 "/>
     </form>
     </div>
        </div>
    </div>
@endsection
