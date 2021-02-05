@extends('layouts.app')
@section('title')
Terms of Use
@endsection
@section('content')

<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>Terms of <span>Use</span></h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">Terms of Use</a></li>

		</ul>

	</div>

</div><!--- PAGE TOP -->

<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12 column">

					<div class="simple-text">

						<h3>Terms of Use</h3>

						<p>   {!! $general->terms_of_use !!}</p>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>



@endsection
