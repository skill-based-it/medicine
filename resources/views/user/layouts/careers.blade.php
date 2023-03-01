@extends('user.layouts.index')
@section('content')





<section class="aboutsection pt-5">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-md-5 col-12">

                <div class="section-title-c">
                    <span><b>Career@Optimum</b></span>
                </div>
                <div class="page-title">
                    <p>Optimum is for those who step up.</p>
                    <b>Do You ?</b>
                </div>
                <div class="section-description">
                    <span>Being an Agappean, is an enriching and exciting experience. Here, we consider people to be our greatest asset. We understand that business growth is a result of talent growth and hence we are committed towards building a team which is constantly learning and evolving. We seek professionals who aim beyond the limits, who are thriving to fly high, and who never settle for the usual.</span>
                </div>
                <div class="mail-drop">
                    <b>Drop Your Mail In <a href="mailto:careers@optimum.in">careers@optimum.in</a></b>
                </div>
                <div class="view-opening mt-3">
                    <a href="#">View All Opening</a>
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12">
                <div class="carer-image">
                    <div class="carer-main-image">
                        <img src="{{ url("user") }}/image/carrers_person.webp" alt="" class="img-fluid">
                        <img src="{{ url("user") }}/image/carer-polygyon.png" alt="" class="img-fluid rotate linear infinite" id="carer_polygyon">
                        <img src="{{ url("user") }}/image/carer-triangle.png" alt="" class="img-fluid" id="carer_triangle">
                        <img src="{{ url("user") }}/image/carer-dotted.png" alt="" class="img-fluid" id="carer_dotted">
                        <img src="{{ url("user") }}/image/carer-circle.png" alt="" class="img-fluid" id="carer_circle">
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
                        </select>
                    </div>
                    <div class="col-6" id="formSingle">
                        <label>Jobs By Role</label>
                        <select class="form-select" name="" id="">
                        <option>All</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="opening-single">
                    <a href="#">
                        <div class="opening-single-box-title">
                            <b>Manager - International Sales</b>
                        </div>
                        <div class="opening-sigle-description mt-3">
                            <span>Presently at Head Office. In the later stage, he should be ready to relocate to any of the Spanish-speaking countries.</span>
                        </div>
                        <hr>
                        <div class="opening-bottom">
                            <b>Openings - 1</b><br> <b>Place: Colombia</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-button">
            <a href="#">View All Opening</a>
        </div>

	</div>
</section>


<section class="aboutsection" style="padding-bottom:200px;padding-top:30px;">
	<div class="container">
		<div class="row">
            <div class="col-lg-5 col-md-5 col-12">

                <div class="section-middle-title">
                <b>Career@Optimum</b><br>
                <span>Right Place to Work.</span>
                </div>
                <div class="section-description mt-3">
                    <span>Being an Agappean, is an enriching and exciting experience. Here, we consider people to be our greatest asset. We understand that business growth is a result of talent growth and hence we are committed towards building a team which is constantly learning and evolving. We seek professionals who aim beyond the limits, who are thriving to fly high, and who never settle for the usual.</span>
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12">
                <div class="lifecycle-image">
                    <img src="{{ url("user") }}/image/lifecycle1.webp" alt="" class="img-fluid">
                    <img src="{{ url("user") }}/image/lifecycle2.webp" alt="" class="img-fluid">
                    <img src="{{ url("user") }}/image/lifecycle3.webp" alt="" class="img-fluid">
                    <img src="{{ url("user") }}/image/lifecycle4.webp" alt="" class="img-fluid">
                </div>
                <div class="background-design">

                </div>
            </div>

            
        </div>


        <div class="row" id="lifecycle-reel">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="lifecycle-single">
                    <div class="lc-icon">
                        <img src="{{ url("user") }}/image/lifecycle_reel1.svg" alt="" class="img-fluid">
                    </div>
                    <div class="lc-title">
                        <span>Extraordinary Opportunities For Growth</span>
                    </div>
                    <div class="lc-description">
                        <span>We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="lifecycle-single">
                    <div class="lc-icon">
                        <img src="{{ url("user") }}/image/lifecycle_reel2.svg" alt="" class="img-fluid">
                    </div>
                    <div class="lc-title">
                        <span>Extraordinary Opportunities For Growth</span>
                    </div>
                    <div class="lc-description">
                        <span>We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="lifecycle-single">
                    <div class="lc-icon">
                        <img src="{{ url("user") }}/image/lifecycle_reel3.svg" alt="" class="img-fluid">
                    </div>
                    <div class="lc-title">
                        <span>Extraordinary Opportunities For Growth</span>
                    </div>
                    <div class="lc-description">
                        <span>We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="lifecycle-single">
                    <div class="lc-icon">
                        <img src="{{ url("user") }}/image/lifecycle_reel3.svg" alt="" class="img-fluid">
                    </div>
                    <div class="lc-title">
                        <span>Extraordinary Opportunities For Growth</span>
                    </div>
                    <div class="lc-description">
                        <span>We offer positions that allow you to challenge the tried and true, and to collaborate across technologies and continents.</span>
                    </div>
                </div>
            </div>
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
						<h1>65 +</h1>
						<label>COUNTRIES</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>40k +</h1>
						<label>CUSTOMERS</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>750 +</h1>
						<label>WORKFORCE</label>
					</div>
				</div>

				<br><br>
				<a href="">ABOUT AGAPPE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="">CORPORATE BROCHURE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=""><i class="bi bi-play-fill"></i>&nbsp; CORPORATE VIDEO</a>

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




	<section class="clientsection" style="background-image: url({{ url("user") }}/image/bgg.webp);">
		<div class="container">
			<div class="clientdetails">
				Building Stronger<br> Partnerships in In-Vitro<br> Diagnostics For Over 25 Years
			</div>
			<div class="col-md-8 mt-3">
				<div class="row">
					<div class="col-md-4 mt-4">
						<h1>65 +</h1>
						<label>COUNTRIES</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>40k +</h1>
						<label>CUSTOMERS</label>
					</div>

					<div class="col-md-4 mt-4">
						<h1>750 +</h1>
						<label>WORKFORCE</label>
					</div>
				</div>

				<br><br>
				<a href="">ABOUT AGAPPE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="">CORPORATE BROCHURE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=""><i class="bi bi-play-fill"></i>&nbsp; CORPORATE VIDEO</a>

			</div>
		</div>
	</div>
</section>

<section class="productsection">
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
	</section>




@endsection