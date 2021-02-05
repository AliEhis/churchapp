@extends('layouts.app')
@section('title')
Prayer Lists
@endsection
@section('content')
<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>PRAYERS <span>Lists</span></h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">Prayers Lists</a></li>

		</ul>

	</div>

</div><!--- PAGE TOP -->



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12 column">

					<div class="row">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

						<div class="remove-ext">

							<div class="prayers-columns">
                                @if(count($prayers) < 1 )
                                <div class="col-md-12">
                                    <p>No Prayer Available.</p>
                                </div>
                                @endif
                                @foreach($prayers as $post)
							<div class="col-md-6 column">

								<div class="prayer">

									<p>{!! $post->body !!}</p>

									<img src="{{Storage::url('prayer/'.$post->image)}}" alt="{{$post->title}}" />

									<h4>{{$post->title}}</h4>

									<span>{{ date('M j, Y', strtotime($post->created_at)) }}</span>

								</div>

							</div>
                          @endforeach

							</div>

						</div>

					</div>
                    <div class="theme-pagination">

                        <ul class="pagination">

                            {{ $prayers->links() }}

                        </ul>

                    </div><!-- PAGINATION -->
                    <a data-toggle="modal" data-target="#myPrayer" class="theme-btn darkblue inverse" title="">ASK FOR A PRAYER REQUEST</a>
                    <div class="modal fade" id="myPrayer" tabindex="-1" role="dialog" aria-hidden="true">

                        <div class="donation-popup">

                            <div class="popup-title">

                                <h5>PRAYER REQUEST FORM</h5>

                            </div>
                            <div class="popup-content">

                                <form class="theme-form" action="{{ route('prayer.request.post') }}" method="post">
                                    {{csrf_field()}}
                                    <input name="name" class="half-field form-control" type="text" id="name"  placeholder="Name" />
                                    <input name="email" class="half-field form-control" type="email" id="email" placeholder="Email" />
                                    <input name="phone" class="half-field form-control" type="text" id="email" placeholder="Phone" />
                                    <input name="address" class="half-field form-control" type="text" id="email" placeholder="Address" />
                                    <textarea name="body" class="form-control" id="comments" placeholder="Type your prayer request" ></textarea>
                                    <input class="submit" type="submit"  id="submit" value="SUBMIT" />
                                </form><!--- FORM -->


                            </div>

                        </div>

                    </div>
				</div>

			</div>

		</div>

	</div>

</section>
@endsection
