@extends('user.layouts.index')
@section('content')


<style>
    .lifecycle-images img {
    max-width: 179px;
    margin-top: 20px;
    padding: 0px;
}

.lifecycle-images .col-6 {
    padding: 0px;
    margin: 0px;
    text-align: center;
    width: 195px;
}
</style>


<section class="aboutsection pt-5">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-md-5 col-12">

                <div class="section-title-c">
                    <span><b>Career@Optimum</b></span>
                </div>
                <div class="page-title">
                    <p>{{$carrers_info->carrer_title}}</p>
                </div>
                <div class="section-description">
                    {!! $carrers_info->carrer_description !!}
                </div>
                {{-- <div class="mail-drop">
                    <b>Drop Your Mail In <a href="mailto:careers@optimum.in">careers@optimum.in</a></b>
                </div>
                <div class="view-opening mt-3">
                    <a href="#">View All Opening</a>
                </div> --}}

            </div>

            <div class="col-lg-7 col-md-7 col-12">
                <div class="carer-image">
                    <div class="carer-main-image">
                        <img src="{{ asset('/backend/carrerInfoImage') }}/{{$carrers_info->image}}" alt="" class="img-fluid">
                        <img src="{{ url("user") }}/image/carer-polygyon.png" alt="" class="img-fluid rotate linear infinite" id="carer_polygyon">
                        <img src="{{ url("user") }}/image/carer-triangle.png" alt="" class="img-fluid" id="carer_triangle">
                        {{-- <img src="{{ url("user") }}/image/carer-dotted.png" alt="" class="img-fluid" id="carer_dotted"> --}}
                        {{-- <img src="{{ url("user") }}/image/carer-circle.png" alt="" class="img-fluid" id="carer_circle"> --}}
                    </div>
                </div>
            </div>

        </div>
	</div>
</section>


<section class="pt-5 pb-5 systemsection">
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-12">
                <div class="opening-title">
                    <b>Current Openings</b>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group row">
                    <div class="col-6" id="formSingle">
                        <label>Jobs By Location</label>
                        <select class="form-select" name="" id="">
                        <option>All</option>
                        @if($location)
                        @foreach ($location as $v)
                            <option value="{{$v->id}}">{{$v->location_name}}</option>
                        @endforeach
                        @endif
                        </select>
                    </div>
                    <div class="col-6" id="formSingle">
                        <label>Jobs By Role</label>
                        <select class="form-select" name="" id="">
                        <option>All</option>
                        @if($jobs)
                        @foreach ($jobs as $v)
                            <option value="{{$v->id}}">{{$v->jobs_name}}</option>
                        @endforeach
                        @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            @if($openings)
            @foreach ($openings as $v)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="opening-single">
                    <a href="#">
                        <div class="opening-single-box-title">
                            <b>{{$v->opening_title}}</b>
                        </div>
                        <div class="opening-sigle-description mt-3">
                            <span>{!! $v->opening_description !!}</span>
                        </div>
                        <hr>
                        @php
                        $location = DB::table('opening_locations')->where('id',$v->location_id)->first();
                        @endphp
                        <div class="opening-bottom">
                            <b>Openings - {{$v->opening_amount}}</b><br> <b>Place: {{$location->location_name}}</b>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        {{-- <div class="section-button">
            <a href="#">View All Opening</a>
        </div> --}}

	</div>
</section>


<section class="aboutsection" style="padding-bottom:200px;padding-top:30px;">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-md-5 col-12">

                <div class="section-middle-title">
                <b>{{$workplace->title}}</b><br>
                </div>
                <div class="section-description mt-3">
                    <span>{!! $workplace->description !!}</span>
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12">
                <div class="lifecycle-images">
                    <div class="row">
                        @php
                        $images = DB::table('work_place_images')->where('work_place_id',1)->get();
                        @endphp
                        @if($images)
                        @foreach ($images as $i)
                        <div class="col-6">
                            <img src="{{ asset('/backend/workplaceImage/') }}/{{$i->images}}" alt="" class="img-fluid">
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="background-design">

                </div>
            </div>


        </div>


        <div class="row" id="lifecycle-reel">
            @if($promisses)
            @foreach ($promisses as $v)

            <div class="col-lg-3 col-md-6 col-12">
                <div class="lifecycle-single">
                    <div class="lc-icon">
                        <img src="{{ asset('/backend/carrerPromisses') }}/{{$v->icon}}" alt="" class="img-fluid">
                    </div>
                    <div class="lc-title">
                        <span>{{$v->title}}</span>
                    </div>
                    <div class="lc-description">
                        <span>{!! $v->description !!}</span>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>


	</div>
</section>


<section class="clientsection" style="background-image: url({{ url("user") }}/image/bgg.webp);">
		<div class="container">
			<div class="clientdetails">
				Building Stronger<br> Partnerships in In-Vitro<br> Diagnostics For Over 25 Years
			</div>
			<div class="col-md-8 mt-3">
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

				<br><br>
				{{-- <a href="">ABOUT AGAPPE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="">CORPORATE BROCHURE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=""><i class="bi bi-play-fill"></i>&nbsp; CORPORATE VIDEO</a> --}}

			</div>
		</div>
	</div>
</section>

<section class="aboutsection" style="padding-bottom:200px;padding-top:30px;">
	<div class="container">

    <div uk-slider>

        <div class="uk-position-relative">

            <div class="uk-slider-container uk-light">
                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                    <li>
                        <div class="row">

                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="manager-image">
                                <img src="{{ url("user") }}/image/optimum-manager.webp" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="manager-speech">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                <b>Mr Jailson Varghese - Asistant General Manger - Reagent Production</b>
                            </div>
                        </div>

                        </div>
                    </li>
                    <li>
                        <div class="row">

                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="manager-image">
                                <img src="{{ url("user") }}/image/optimum-manager.webp" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="manager-speech">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                <b>Mr Jailson Varghese - Asistant General Manger - Reagent Production</b>
                            </div>
                        </div>

                        </div>
                    </li>
                </ul>
            </div>

            <div class="uk-hidden@s uk-light">
                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>

            <div class="uk-visible@s">
                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>


	</div>
</section>






{{-- <section class="productsection">
	<div class="container">

		<div class="row pb-4 pcathead">
			<div class="col-lg-8">
				<div>
					<strong>What's New at Agappe?</strong>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="float-end">
					<span>View All Articles &nbsp;&nbsp;<i class="bi bi-plus-lg"></i></a>
					</div>
				</div>
			</div>

			<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

				<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">

					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>
					<li class="uk-transition-toggle" tabindex="0">
						<div class="whats-new-single">
                            <a href="http://">
                                <div class="box-image">
                                    <img src="{{ url("user") }}/image/new-image1.webp" alt="" class="img-fluid">
                                </div>
                                <div class="public-name">
                                    <span>Hr Sandesh</span>
                                </div>
                                <div class="box-title">
                                    <b>The Man Who Bent Light</b>
                                </div>
                                <div class="publish-date">
                                    February 20-23
                                </div>
                            </a>
                        </div>
					</li>

				</ul>

				<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

			</div>



		</div>
	</section> --}}




@endsection
