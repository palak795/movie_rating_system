@extends('layout.app')
@section('content')

<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<div class="col-md-9">
					<div class="slider">
						<ul class="slides">
                              
                               {{-- @dd($movie)  --}}

                                @foreach ($movie as $image)

                                {{-- @dump($image->movie_description) --}}


<li><a href="test/show"><img src="{{asset('/file/'.$image->file)}}" alt="Slide 1"></a></li></a>


                                @endforeach

							{{-- 
							<li><a href="#"><img src="/images/movie3.jpg" alt="Slide 2"></a></li>
							<li><a href="#"><img src="/images/movie5.jpg" alt="Slide 3"></a></li> --}}
							

						</ul>
					</div>
				</div>


                    <div class="col-md-3">
					        
					    <div class="row">

				            @foreach ($movies as $image)

				               {{-- @dump($image->file)  --}}

                				<a href="test/show"><img src="{{asset('/file/'.$image->file)}}" alt="Slide 1"></a>

                            @endforeach

                        </div>

				    </div>

				</div>        


                         

				{{-- <div class="col-md-3">
					<div class="row">
						<div class="col-sm-6 col-md-12">
							<div class="latest-movie">
								<a href="#"><img src="/images/movie6.jpg" alt="Movie 1"></a>
							</div>
						</div>

						<div class="col-sm-6 col-md-12">
							<div class="latest-movie">
								<a href="#"><img src="images/Movie9.jpg" alt="Movie 2"></a>
							</div>
						</div>
					</div>
				</div>
			</div>  --}}


			<div class="row">

				<div class="col-sm-6 col-md-3">

					<div class="latest-movie">

						@foreach ($moviess as $image)

						<a href="test/show"><img src="{{asset('/file/'.$image->file)}}" alt="Movie 3"></a>

						@endforeach


					</div>

				</div>

			</div> 
			








			{{-- <div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="latest-movie">
						<a href="#"><img src="images/MAlang9.jpg" alt="Movie 3"></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="latest-movie">
						<a href="#"><img src="images/movie10.jpg" alt="Movie 4"></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="latest-movie">
						<a href="#"><img src="images/movie11.jpg" alt="Movie 5"></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="latest-movie">
						<a href="#"><img src="images/movie12.jpg" alt="Movie 6"></a>
					</div>
				</div>
			</div> --}}  <!-- .row -->


			
			 <div class="row">
				<div class="col-md-4">
					<h2 class="section-title">December premiere</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<ul class="movie-schedule">
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
					</ul> <!-- .movie-schedule -->
				</div>


				<div class="col-md-4">
					<h2 class="section-title">November premiere</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<ul class="movie-schedule">
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
					</ul> <!-- .movie-schedule -->
				</div>


				<div class="col-md-4">
					<h2 class="section-title">October premiere</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<ul class="movie-schedule">
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
						<li>
							<div class="date">16/12</div>
							<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
						</li>
				  </ul> 
				</div>


			</div>
		</div>
	</div> <!-- .container -->

</main>
@endsection