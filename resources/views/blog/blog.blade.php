@extends('layouts.app')
@section('title')
Church Stories
@endsection
@section('content')
<div class="page-top">

	<div class="parallax" style="background:url({{asset('images/parallax1.jpg')}});"></div>

	<div class="container">

		<h1>Church Story/<span>Blog</span></h1>

		<ul>

			<li><a href="{{url('/')}}" title="">Home</a></li>

			<li><a href="#" title="">Church Stories</a></li>

		</ul>

	</div>

</div>



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-8 column">

					<div class="remove-ext">
                        @if(count($posts) < 1 )
                        <div class="col-md-12">
                            <p>No Church Story/ Blog Available.</p>
                        </div>
                        @endif
                        @foreach($posts as $post)

						<div class="blog-post">

							<div class="row">

								<div class="col-md-5">
                                    @if(Storage::disk('public')->exists('posts/'.$post->image) && $post->image)
									<div class="image">

										<img src="{{Storage::url('posts/'.$post->image)}}" alt="" />

										<a href="{{ route('blog.single',$post->slug) }}" title=""><i class="fa fa-link"></i></a>

                                    </div>
                                    @endif

								</div>

								<div class="col-md-7">

									<div class="blog-detail">

										<h3><a href="{{ route('blog.single',$post->slug) }}" title="">{{ $post->title }}</a></h3>

                                        <p>{!! str_limit($post->body,320) !!}</p>

                                        <span><a href="#" tabindex="0"> <i class="fa fa-calendar-o"></i> {{$post->created_at->diffForHumans()}}</a></span>
                                        <span><a href="#" tabindex="0"> <i class="fa fa-user"></i>{{$post->user->name}}</a></span>
                                        <span><a href="{{ route('blog.single',$post->slug) . '#comments' }}" tabindex="0"> <i class="fa fa-comment"></i>{{$post->comments_count}}</a></span>
                                        @foreach($post->tags as $key => $tag)
                                        <span><a href="{{ route('blog.tags',$tag->slug) }}" tabindex="0"> <i class="fa fa-tag"></i>{{$tag->name}}</a></span>
                                        @endforeach
                                        @foreach($post->categories as $key => $category)
                                        <span><a href="{{ route('blog.categories',$category->slug) }}" tabindex="0"> <i class="fa fa-group"></i>{{$category->name}}</a></span>
                                        @endforeach
                                        <span><a href="#" tabindex="0"> <i class="fa fa-eye"></i>{{$post->view_count}}</a></span>

									</div>

								</div>

							</div>

                        </div><!-- BLOG POST -->
                        @endforeach


					</div>



					<div class="theme-pagination">

						<ul class="pagination">

                            {{ $posts->links() }}

						</ul>

					</div><!-- PAGINATION -->



				</div>



				<aside class="col-md-4 sidebar column">

					<div class="widget">

						<div class="widget-title"><h4>OUR GALLERY</h4></div>

						<div class="gallery-widget lightbox">
                            @foreach($galleries as $post)
							<div class="col-md-3"><a href="{{Storage::url('gallery/'.$post->image)}}"><img src="{{Storage::url('gallery/'.$post->image)}}" alt="" /></a></div>
                            @endforeach

						</div>

					</div><!-- GALLERY -->
					<div class="widget">

						<div class="widget-title"><h4>TAGS</h4></div>

						<div class="tagclouds">
                            @if(count($tags) < 1 )
                            <div class="col-md-12">
                                <p>No Tag available.</p>
                            </div>
                            @endif
                            @foreach($tags as $tag)
                            <a href="{{ route('blog.tags',$tag->slug) }}" title="{{ $tag->name }}">{{ $tag->name }}</a>
                            @endforeach
						</div>

					</div><!-- TAG CLOUD -->




					<div class="widget">

						<div class="widget-title"><h4>CATEGORIES</h4></div>


                            <div class="tagclouds">
                                @if(count($categories) < 1 )
                                <div class="col-md-12">
                                    <p>No Category available.</p>
                                </div>
                                @endif
                                @foreach($categories as $category)
                                <a href="{{ route('blog.categories',$category->slug) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                                @endforeach
                            </div>

					</div><!-- CATEGORIES -->



					<div class="widget">

						<div class="widget-title"><h4>POPULAR POSTS</h4></div>

						<div class="remove-ext">

                            @if(count($popularposts) < 1 )
                            <div class="col-md-12">
                                <p>No Popular post available.</p>
                            </div>
                            @endif
                            @foreach($popularposts as $post)

							<div class="widget-blog">

								<div class="widget-blog-img"><img src="{{Storage::url('posts/'.$post->image)}}" alt="" /></div>

								<p><a href="{{ route('blog.single',$post->slug) }}" title="{{ $post->title }}">{{ $post->title }}</a></p>

								<span><i class="fa fa-calendar-o"></i> {{$post->created_at->diffForHumans()}}</span>

                            </div><!-- WIDGET BLOG -->
                            @endforeach

						</div>

                    </div><!-- POPULAR POSTS -->
                    <div class="widget">

						<div class="widget-title"><h4>ARCHIVES</h4></div>

						<ul>
                            @if(count($archives) < 1 )
                            <div class="col-md-12">
                                <p>No Archives available.</p>
                            </div>
                            @endif
                            @foreach($archives as $stats)
                            <li><a href="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}"><i class="fa fa-hand-o-right"></i> {{ $stats['month'] . ' ' . $stats['year'] }} <span>({{ $stats['published'] }})</span></a></li>
                            @endforeach

						</ul>

					</div><!-- META -->

				</aside><!-- SIDEBAR -->



			</div>

		</div>

	</div>

</section>
@endsection
