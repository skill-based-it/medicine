@extends('user.layouts.index')
@section('content')







<div class="container slidersection mt-4 d-none d-sm-block">
	<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="ratio: 10:3; animation: scale">

		<ul class="uk-slideshow-items">

            @if($slider)
            @foreach ($slider as $v)
			<li>
                <div class="row">
                    <div class="col-md-6">


                            <!-- This is a button toggling the modal -->
                            @if($v->vedio_link != '')
                            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example-{{$v->id}}">
                                <i class="bi bi-play-circle"></i>&nbsp;&nbsp;Watch Our Video
                            </button>
                            @endif


                            <!-- This is the modal -->
                            <div id="modal-example-{{$v->id}}" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body" style="padding: 0px;width:560px;">

                                    {!! $v->vedio_link !!}

                                </div>
                            </div>
							<div class="mt-4 mb-4"><strong>{{$v->title}}</strong></div><br>
                            @if($v->button_link != '' || $v->button_name != '')
							<a href="{{url($v->button_link)}}" class="button">{{$v->button_name}}</a>
                            @endif

					</div>

					<div class="col-md-6">
                        <img src="{{ asset("backend/sliderImage") }}/{{$v->image}}">
					</div>
				</div>
			</li>
            @endforeach
            @endif

		</ul>

		<ul class="uk-slideshow-nav uk-dotnav uk-margin"></ul>



	</div>
</div>








<div class="container slidersection mt-4 d-block d-sm-none">
	<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="ratio: 2:3; animation: scale">

		<ul class="uk-slideshow-items">

            @if($slider)
            @foreach ($slider as $v)
			<li>
                <div class="row">
                    <div class="col-md-6">


                            <!-- This is a button toggling the modal -->
                            @if($v->vedio_link != '')
                            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example-{{$v->id}}">
                                <i class="bi bi-play-circle"></i>&nbsp;&nbsp;Watch Our Video
                            </button>
                            @endif


                            <!-- This is the modal -->
                            <div id="modal-example-{{$v->id}}" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body" style="padding: 0px;width:560px;">

                                    {!! $v->vedio_link !!}

                                </div>
                            </div>
							<div class="mt-4 mb-4"><strong>{{$v->title}}</strong></div><br>
                            @if($v->button_link != '' || $v->button_name != '')
							<a href="{{url($v->button_link)}}" class="button">{{$v->button_name}}</a>
                            @endif

					</div>

					<div class="col-md-6">
                        <img src="{{ asset("backend/sliderImage") }}/{{$v->image}}">
					</div>
				</div>
			</li>
            @endforeach
            @endif

		</ul>

		<ul class="uk-slideshow-nav uk-dotnav uk-margin"></ul>



	</div>
</div>



















<section class="helpdesk pt-5 pb-5">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="row">
					<div class="col-2">
						<center><i class="bi bi-chat-square-dots"></i></center>
					</div>
					<div class="col-10">
						<strong class="text-dark">Research and Development</strong>
						<div class="mt-3" style="width: 40px; height: 2px; background: darkblue;"></div>

					</div>
				</div><br>
			</div>


			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="row">
					<div class="col-2">
						<center><i class="bi bi-bag"></i></center>
					</div>
					<div class="col-10">
						<strong class="text-dark">Manufacturing Capability</strong>
						<div class="mt-3" style="width: 40px; height: 2px; background: darkblue;"></div>

					</div>
				</div><br>
			</div>


			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="row">
					<div class="col-2">
						<center><i class="bi bi-broadcast-pin"></i></center>
					</div>
					<div class="col-10">
						<strong class="text-dark">Global Reach</strong>
						<div class="mt-3" style="width: 40px; height: 2px; background: darkblue;"></div>

					</div>
				</div>
			</div>





		</div>
	</div>
</section>











<section class="productsection">
	<div class="container">

		<div class="row pb-4 pcathead">
			<div class="col-lg-8 text-sm-start text-center">
				<div>
					<strong>Find the product you need</strong>
				</div>
			</div>

			<div class="col-lg-4 text-sm-end text-center">
				<div class="">
					<a href="{{url('/products')}}"><span>View All Products &nbsp;&nbsp;<i class="bi bi-plus-lg"></i></a>
					</div>
				</div>
			</div>

			<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

				<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-4@m uk-grid">

                    @if($product)
                    @foreach ($product as $v)
					<li class="uk-transition-toggle" tabindex="0">
						<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
							<center><img src="{{ asset("$v->image") }}"></center><br>
							<div class="head">
                                @php
                                $catName = DB::table('categories')->where('id',$v->cat_id)->first();
                                @endphp
								<center>
									<strong>{{$v->product_name}}</strong><br>
									<div class="mt-3"><label>{{$catName->name}}</label></div>
								</center>
							</div>
							<div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
								<div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
									<strong>{{$v->product_name}}</strong><br><span>{{$catName->name}}</span><br>
                                    @php
                                    $shortDetails = substr($v->short_details,0,50);
                                    @endphp
									<p>{!! $shortDetails !!}</p>
									<div class="mt-5"><center><a href="{{ url("productdetails") }}/{{$v->product_code}}/{{$v->id}}">VIEW</a></center></div>
								</div>
							</div>

						</div>
					</li>
                    @endforeach
                    @endif

				</ul>

				<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

			</div>



		</div>
	</section>


	<section class="clientsection" style="background-image: url({{ asset("user") }}/image/bgg.jpg);">

		<div class="container">
			<div class="clientdetails">
				Building Stronger<br> Partnerships in In-Vitro<br> Diagnostics For Over 25 Years
			</div>
			<div class="col-md-8 mt-3 text-center text-sm-start">
				<div class="row">
					<div class="col-md-4 mt-4">
						<h1>{{$data->country_support}} +</h1>
						<label>COUNTRIES</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>{{$data->customers}} +</h1>
						<label>CUSTOMERS</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>{{$data->workforce}} +</h1>
						<label>WORKFORCE</label>
					</div>
				</div>
                @php
                    $brouchere = DB::table('corporate_broucheres')->where('id',1)->first();
                @endphp
				<br><br>
                    <a href="{{url('/about')}}">ABOUT OPTIMUM</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a download="" href="{{asset('/backend/corporateBrouchere')}}/{{$brouchere->file_name}}">CORPORATE BROCHURE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</div>
		</div>
	</div>
</section>




<section class="pt-5">
	<div class="container">
		<div>
			<center>
				<strong class="cathead">Agappe - The Best Diagnostics and IVD Company</strong><br>
				<div class="mt-3 catdetails">Agappe is committed towards the welfare of mankind by providing customers with superior quality In-Vitro Diagnostic (IVD)<br> products and services. With a well-developed in-house R&D centre, Agappe is focused on the research and manufacturing of<br> IVD Reagents and Equipment to meet the needs of every laboratory.</div>
			</center>
		</div>
		<div class="row pt-5">


			<div class="col-lg-6 col-sm-12 mt-4">
				<div class="mostcat p-4">
					<div class="row">
						<div class="col-md-6">
							<center><img src="{{ asset("user") }}/image/s1.webp" class="img-fluid"></center>
						</div>

						<div class="col-md-6">
							<strong>Engineering and Design Marvel Design</strong>
							<div class="mt-4">
								<a href="">View All Equipment</a>
							</div>
						</div>
					</div>
				</div>

			</div>


			<div class="col-lg-6 col-sm-12 mt-4">
				<div class="mostcat p-4">
					<div class="row">
						<div class="col-md-6">
							<center><img src="{{ asset("user") }}/image/s2.webp" class="img-fluid"></center>
						</div>

						<div class="col-md-6">
							<strong>Quality Reagents for Quality Results</strong>
							<div class="mt-4">
								<a href="">VIEW ALL REAGENTS</a>
							</div>
						</div>
					</div>
				</div>

			</div>





		</div>
	</div>
</section>




<section class="career mt-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="">
					<strong>Career@Agappe <i class="bi bi-dash-lg"></i></strong><br>
					<h3>Agappe is for those who step up. Do you?</h3>
					<p>We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</p>
					<div class="mt-5">
						<a href="">GO TO CAREERS</a>
					</div>
				</div><br>
			</div>

			<div class="col-lg-5">
				<center><img src="{{ asset("user") }}/image/heading_image2.jpg" class="img-fluid rounded"></center>
			</div>
		</div>

	</div>

</section>





<section class="blogsection">
	<div class="container pt-4 pb-4">

		<div class="row mb-4 pcathead pb-3">
			<div class="col-lg-8">
				<div>
					<strong>What's New at Agappe</strong>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="float-end">
					{{-- <a href="">View All Articles &nbsp;&nbsp;<i class="bi bi-plus-lg"></i></a> --}}
				</div>
			</div>
		</div>


		<div class="uk-slider-container-offset" uk-slider>

			<div class="uk-position-relative uk-visible-toggle" tabindex="-1">

				<ul class="uk-slider-items uk-child-width-1-3@s uk-grid">

                    @if($blogs)
                    @foreach ($blogs as $v)
					<li class="blogdescription">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<a href="{{url('blogdetails')}}/{{$v->id}}"><img src="{{ asset("$v->image")}} "class="img-fluid" alt=""></a>
							</div>
							<div class="uk-card-body p-4">
								<span>{{$v->writer_name}}</span>
								<div class="mt-2"><a href="{{url('blogdetails')}}/{{$v->id}}">{{$v->title}}</a></div>
								<div class="mt-5">
                                    @php
                                    $explode = explode('-',$v->date);
                                    @endphp
									<label>{{$explode[2]}} / {{$explode[1]}} / {{$explode[0]}}</label>
								</div>

							</div>
						</div>
					</li>
                    @endforeach
                    @endif
				</ul>

				<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

			</div>

			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

		</div>




	</div>
</section>







<section class="helpdesk pt-5 pb-5">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-4">
				<div class="row align-items-center">
					<div class="col-2">
						<center><i class="bi bi-chat-square-dots"></i></center>
					</div>
					<div class="col-10">
						<strong>Need Help?</strong>
						<div class="mt-2">
							<span>Find the support you need 24x7</span>
						</div>
					</div>
				</div><br>
			</div>


			<div class="col-lg-4">
				<div class="row align-items-center">
					<div class="col-2">
						<center><i class="bi bi-bag"></i></center>
					</div>
					<div class="col-10">
						<strong>Making A Purchase?</strong>
						<div class="mt-2">
							<span>Browse Products or Quick Order</span>
						</div>
					</div>
				</div><br>
			</div>


			<div class="col-lg-4">
				<div class="row align-items-center">
					<div class="col-2">
						<center><i class="bi bi-broadcast-pin"></i></center>
					</div>
					<div class="col-10">
						<strong>Latest Research</strong>
						<div class="mt-2">
							<span>Review Agappe's Latest Research</span>
						</div>
					</div>
				</div><br>
			</div>





		</div>
	</div>
</section>



@endsection
