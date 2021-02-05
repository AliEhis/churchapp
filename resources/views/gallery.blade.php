@extends('layouts.app')
@section('title')
Gallery
@endsection
@section('content')

<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>Church Gallery</h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">Gallery</a></li>

		</ul>

	</div>

</div><!--- PAGE TOP -->



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="remove-ext">

						<div class="row">

							<div class="mas-gallery" >
                                @if(count($galleries) < 1 )
                                <div class="col-md-12">
                                    <p>No Photo available in Gallery.</p>
                                </div>
                                @foreach($galleries as $post)
								<div class="col-md-4">

									<div class="gallery lightbox">

										<img src="{{Storage::url('gallery/'.$post->image)}}" alt="{{ $post->title }}" />

										<div class="gallery-title">

											<i class="fa fa-picture-o"></i>

											<h3>{{ $post->title }}</h3>

										</div>

										<ul>

											<li><a href="{!! $post->link !!}" title=""><img src="{{Storage::url('gallery/'.$post->image)}}" alt="" /></a></li>

											<li><a href="{!! $post->link !!}" title=""><img src="{{Storage::url('gallery/'.$post->image)}}" alt="" /></a></li>

											<li><a href="{!! $post->link !!}" title=""><img src="{{Storage::url('gallery/'.$post->image)}}" alt="" /></a></li>

										</ul>

									</div><!-- GALLERY ITEM -->

                                </div>
                                @endforeach
							</div>

						</div>

					</div>





					<div class="theme-pagination">

						<ul class="pagination">

                            {{ $galleries->links() }}
						</ul>

					</div><!-- PAGINATION -->



				</div>

			</div>

		</div>

	</div>

</section>

@endsection
