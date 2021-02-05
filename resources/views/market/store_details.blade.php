@extends('layouts.app')
@section('title')
{{$eventdetails->title}}
@endsection

@section('content')
<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>{{$eventdetails->title}}</h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">{{$eventdetails->title}}</a></li>

		</ul>

	</div>

</div>



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="single-product">

						<div class="tab-content" id="myTabContent">

							<div id="tab1" class="tab-pane fade in active">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

							<div id="tab2" class="tab-pane fade">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

							<div id="tab3" class="tab-pane fade">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

							<div id="tab4" class="tab-pane fade">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

							<div id="tab5" class="tab-pane fade">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

							<div id="tab6" class="tab-pane fade">

								<img src="{{asset($eventdetails->image)}}" alt="" />

							</div>

						</div>

						<ul class="nav nav-tabs" id="myTab">

							<li class="active"><a data-toggle="tab" href="#tab1"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

							<li><a data-toggle="tab" href="#tab2"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

							<li><a data-toggle="tab" href="#tab3"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

							<li><a data-toggle="tab" href="#tab4"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

							<li><a data-toggle="tab" href="#tab5"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

							<li><a data-toggle="tab" href="#tab6"><img src="{{asset($eventdetails->image)}}" alt="" /></a></li>

						</ul>



						<div class="single-page">

							<h2>{{$eventdetails->title}}</h2>

							<span class="amount"><ins><i>$</i>2575</ins><del>$2575</del></span>

							<div class="meta">

								<ul>

									<li><i class="fa fa-reply"></i> Posted In <a href="#" title="">Sermons</a></li>

									<li><i class="fa fa-calendar-o"></i> November 01, 2013</li>


								</ul>

								<img src="images/resource/author.jpg" alt="" />

							</div><!-- POST META -->

							<div class="quantity-field">

								<button onclick="setQuantity('up');" id="up">+</button>

								<input type="text" value="01" id="quantity">

								<button onclick="setQuantity('down');" id="down">-</button>

							</div>

							<a href="#" title=""><i class="fa fa-heart"></i>ADD TO WISHLIST</a>

							<a href="#" title=""><i class="fa fa-shopping-cart"></i>ADD TO CART</a>

						</div><!-- SERMON SINGLE -->



						<p>Lorem Ipsum is simply dummy text of the printing anwes typesetting industry. Lorem Ipsum has been the industw standard dummy text ever since the 1500s, when an unw nown prnter took a galley of type and crambled it to miakei type pecimen book. It has survived not only five centuries but also the leap into. Ultrafine wool in sold black shapes a wardobe essential that pairs a notch-lapel blazer with flat-front rousers. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce vel arcwu in turpis dignissim dictum. Nullam ut fringilla sapien. Phasellus auctor fermentum eros, itae vehicula erat vestibulum elementum. Phasellus quis mi lectus. Duis vehicula dolor eget libero suscipt imperdiet. Lorem Ipsum is simply dummy text of the printing anwes typesetting industry. Lorem psum hias been the industw standard dummy text ever since the 1500s, when an unw nown printer took a galley of type andsci ambled it to miakei type specimen book. It has survived not only five centuries but also the leap into. Ultrafine wool int solid black shapes a wardrobe essential that pairs a notch-lapel blazer with flat-front trousers. Class aptent taciti sociovqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce vel arcu in turpis dignissim dictum. Lorem Ipsum is simply dummy text of the printing anwes typesetting industry. Lorem Ipsum has been the industw standard dummy text ever sinnter took a galley of type and scrambled it to miakei type pecimen book. It has survived not only five centuries but also the leap into. Ultrafine wool in sold black shapes a wardobe essential that pairs a notch-lapel blazer with flat-front trousers. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce vel arcwu in turpis dignissim dictum. Nullam ut fringilla sapien. Phasellus auctor fermentum eros, vitae vehicula erat vestibulum elementum. Phasellus quis mi lectus. Duis vehicula dolor eget libero suscipt imperdiet. Lorem Ipsum is simply dummy text of the printing anwes typesetting industry. Lorem Ipsum hias been the industw standard dummy text ever since the 1500s, when an unw nown printer took a galley of type andsci ambled it to miakei type specimen book. It has survived not only five centuries but also the leap into. Ultrafine wool int solid black shapes a wardrobe essential that pairs a notch-lapel blazer with flat-front trousers. Class aptent taciti sociovqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce vel arcu in turpis dignissim dictum. </p>



					</div>

				</div>

			</div>

		</div>

	</div>

</section>


@endsection
