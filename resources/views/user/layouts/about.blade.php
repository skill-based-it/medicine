@extends('user.layouts.index')
@section('content')


<section class="aboutsection">
	<div class="container p-5">
		<div class="row align-items-center">
			<div class="col-md-2">
				<span>About us&nbsp;&nbsp;<i class="bi bi-dash-lg"></i></span>
			</div>

			<div class="col-md-10">
				<strong>{{ $data->about_us_title }}</strong>
			</div>
		</div>
	</div>
</section>



<section class="aboutsection">
	<div class="container p-5">
		<div class="row align-items-center">
            @if($aboutUsImages)
            @foreach ($aboutUsImages as $v)
			<div class="col-md-3">
				<img src="{{ asset('/backend/aboutUsImage') }}/{{$v->images}}" class="img-fluid">
			</div>
            @endforeach
            @endif
		</div>
	</div>
</section>




<section class="aboutsection2">
	<div class="container p-5">
		<div class="row">
			<div class="col-md-3">
				<span>SINCE</span>
				<div><strong>SINCE {{$data->company_est}}</strong></div>
			</div>

			<div class="col-md-9">
				<p>
					{!! $data->company_history !!}
				</p>

				<div class="row">
					<div class="col-md-3 mt-4">
						<h1>{{$data->country_support}} +</h1>
						<label>COUNTRIES</label>
					</div>

					<div class="col-md-3 mt-4">
						<h1>{{$data->customers}} +</h1>
						<label>CUSTOMERS</label>
					</div>

					<div class="col-md-3 mt-4">
						<h1>{{$data->workforce}} +</h1>
						<label>WORKFORCE</label>
					</div>

					<div class="col-md-3 mt-4">
						<h1>{{$data->customer_support}}</h1>
						<label>WORKFORCE</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="aboutsection3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5">
				<img src="{{ asset('/backend/valueIcon')  }}/{{$values->icon}}" class="img-fluid">
				<h3>{{$values->title}}</h3>
				<div class="mt-4">
					<span>{!! $values->description !!}</span>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">

                    @if($valueBox)
                    @foreach ($valueBox as $v)
					<div class="col-md-6 box mt-5">
						<div class="border rounded p-4">
							<label><img src="{{ asset('/backend/valueBoxIcon') }}/{{$v->image}}" style="max-width: 20px;">  &nbsp;&nbsp;{{$v->values_title}}</label>
							<div class="mt-3">
								<p>
									{!! $v->values_description !!}
								</p>
							</div>
						</div>
					</div>
                    @endforeach
                    @endif

				</div>

			</div>
		</div>
	</div>
</section>







<section class="pt-5 pb-5 systemsection">
	<div class="container">
		<div>
			<center>
				<strong class="cathead">{{$beliefSystem->belief_title}}</strong><br>
				<div class="mt-3 catdetails">{!! $beliefSystem->description !!}</div>
			</center>
		</div>
		<div class="row pt-5">


			<div class="col-lg-6 mt-4">
				<div class="mostcat2 p-5">
					<strong>Our Mission</strong><br>
					<div class="mt-3">
						<span>{!! $beliefSystem->mission !!}</span>
					</div>

				</div>

			</div>



		<div class="col-lg-6 mt-4">
				<div class="mostcat2 p-5">
					<strong>Our Vision</strong><br>
					<div class="mt-3">
						<span>{!! $beliefSystem->vision !!}</span>
					</div>

				</div>

			</div>





		</div>
	</div>
</section>





<div class="container slidersection">
	<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="ratio: 10:3; animation: scale">

		<ul class="uk-slideshow-items">


			<li>
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<span><i class="bi bi-dash-lg"></i>&nbsp;&nbsp;Our History</span>
							<div class="mt-4 mb-4"><strong>Your Best Partner In Diagonistic</strong></div><br>
							<a href="" class="button">Explore Products</a>
						</div>
					</div>

					<div class="col-md-6">
						<img src="{{ url("user") }}/image/banner 1_1608114112.webp">
					</div>
				</div>
			</li>



			<li>
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<span><i class="bi bi-dash-lg"></i>&nbsp;&nbsp;Our History</span>
							<div class="mt-4 mb-4"><strong>Performance Ahead Of Expectation</strong></div><br>
							<a href="" class="button">Explore Products</a>
						</div>
					</div>

					<div class="col-md-6">
						<img src="{{ url("user") }}/image/banner_1608717989.webp">
					</div>
				</div>
			</li>



			<li>
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<span><i class="bi bi-dash-lg"></i>&nbsp;&nbsp;Our History</span>
							<div class="mt-4 mb-4"><strong>Your Best Partner In Diagonistic</strong></div><br>
							<a href="" class="button">Explore Products</a>
						</div>
					</div>

					<div class="col-md-6">
						<img src="{{ url("user") }}/image/banner 2 (1)_1608114172 (2).webp">
					</div>
				</div>
			</li>




		</ul>

		<ul class="uk-slideshow-nav uk-dotnav uk-margin"></ul>



	</div>
</div>




<section class="membersection">
	<div class="container">
		<div class="row">


			<div class="col-md-5">
				<center><img src="{{ asset('backend/founderImage') }}/{{$founderMessage->founder_image}}" class="img-fluid"></center>
			</div>


			<div class="col-md-7">
				<label>Message From Founder&nbsp;&nbsp;<i class="bi bi-dash-lg"></i></label>

                <div class="message mt-3">
                    {!! $founderMessage->message !!}
                </div>

				<div class="mt-5">
					<a href="">View Profile</a>
				</div>


			</div>


		</div>
	</div>
</section>







<section class="membersection">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<label>Message From Chairman&nbsp;&nbsp;<i class="bi bi-dash-lg"></i></label>

                <div class="mt-3">
                    {!! $chairmanMessage->message !!}
                </div>

				<div class="mt-5">
					<a href="">View Profile</a>
				</div>


			</div>

			<div class="col-md-5">
				<center><img src="{{ asset('backend/chairmanImage') }}/{{$chairmanMessage->chairman_image}}" class="img-fluid"></center>
			</div>
		</div>
	</div>
</section>







<section class="membersection pb-2">
	<div class="container">
		<div class="row">


			<div class="col-md-5">
				<center><img src="{{ asset('backend/mdImage') }}/{{$mdMessage->md_image}}" class="img-fluid"></center>
			</div>


			<div class="col-md-7">
				<label>Message From MD&nbsp;&nbsp;<i class="bi bi-dash-lg"></i></label>

                <div class="mt-3">
                    {!! $mdMessage->message !!}
                </div>

				<div class="mt-5">
					<a href="">View Profile</a>
				</div>


			</div>

		</div>
	</div>
</section>




{{-- <section class="blogsection">
	<div class="container pt-4 pb-4">

		<div class="row mb-4 pcathead pb-3">
			<div class="col-lg-8">
				<div>
					<strong>What's New at Agappe</strong>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="float-end">
					<a href="">View All Articles &nbsp;&nbsp;<i class="bi bi-plus-lg"></i></a>
				</div>
			</div>
		</div>


		<div class="uk-slider-container-offset" uk-slider>

			<div class="uk-position-relative uk-visible-toggle" tabindex="-1">

				<ul class="uk-slider-items uk-child-width-1-3@s uk-grid">


					<li class="blogdescription">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<a href=""><img src="{{ url("user") }}/image/b1.webp" class="img-fluid" alt=""></a>
							</div>
							<div class="uk-card-body p-4">
								<span>HR Sandesh</span>
								<div class="mt-2"><a href="">There Is Always Two Sides to A Story</a></div>
								<div class="mt-5">
									<label><?php echo date('M d-y') ?></label>
								</div>

							</div>
						</div>
					</li>


					<li class="blogdescription">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<a href=""><img src="{{ url("user") }}/image/b2.webp" class="img-fluid" alt=""></a>
							</div>
							<div class="uk-card-body p-4">
								<span>HR Sandesh</span>
								<div class="mt-2"><a href="">There Is Always Two Sides to A Story</a></div>
								<div class="mt-5">
									<label><?php echo date('M d-y') ?></label>
								</div>

							</div>
						</div>
					</li>

					<li class="blogdescription">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<a href=""><img src="{{ url("user") }}/image/b3.webp" class="img-fluid" alt=""></a>
							</div>
							<div class="uk-card-body p-4">
								<span>HR Sandesh</span>
								<div class="mt-2"><a href="">There Is Always Two Sides to A Story</a></div>
								<div class="mt-5">
									<label><?php echo date('M d-y') ?></label>
								</div>

							</div>
						</div>
					</li>

					<li class="blogdescription">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<a href=""><img src="{{ url("user") }}/image/b4.webp" class="img-fluid" alt=""></a>
							</div>
							<div class="uk-card-body p-4">
								<span>HR Sandesh</span>
								<div class="mt-2"><a href="">There Is Always Two Sides to A Story</a></div>
								<div class="mt-5">
									<label><?php echo date('M d-y') ?></label>
								</div>

							</div>
						</div>
					</li>





				</ul>

				<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

			</div>

			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

		</div>




	</div>
</section> --}}



@endsection
