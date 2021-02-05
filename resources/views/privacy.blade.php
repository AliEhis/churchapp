@extends('layouts.app')
@section('title')
Privacy Policy
@endsection
@section('content')

<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>Privacy  <span>Policy</span></h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">Privacy Policy</a></li>

		</ul>

	</div>

</div><!--- PAGE TOP -->

<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12 column">

					<div class="simple-text">

						<h3>Privacy Policy</h3>

                        <p>   {!! $general->privacy_policy !!}</p>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>


@endsection
