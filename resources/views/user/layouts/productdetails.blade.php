@extends('user.layouts.index')
@section('content')


<div class="container pt-4 pb-5">
    <ul class="uk-breadcrumb">
        <li><a href="">Home</a></li>
        <li><a href="">Clinical Chemistry</a></li>
        <li><span>TBA-2000FR</span></li>
    </ul>

    <div class="row align-items-center mt-5 pt-5">
        <div class="col-md-5">



            <div class="container">


                <div class="uk-slider-container-offset" uk-slider>

                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid">


                            <li>
                                <center><img src="{{ asset("user") }}/image/prod2.jpg"></center>
                            </li>

                            <li>
                                <center><img src="{{ asset("user") }}/image/prod3.jpg"></center>
                            </li>

                            <li>
                                <center><img src="{{ asset("user") }}/image/prod1.jpg"></center>
                            </li>


                            <li>
                                <center><img src="{{ asset("user") }}/image/prod3.jpg"></center>
                            </li>





                        </ul>

                        <a class="uk-position-center-left uk-position-small bg-light" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small bg-light" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>


                </div>



            </div>

        </div>

        <div class="col-md-7 productdetails2">
            <label>TBA-2000FR</label><br><br>
            <strong>Fully Automated Clinical Chemistry Analyzer</strong><br>
            <em>This product is not available in your country</em><br><br>

            <b> Overview</b><br>
            <p>High precision, simple operation, ecological protection. Experimental analysis of data accuracy, high reliability, stability and security design, TBA - 2000FR in pursuit of new concepts of form and function, and provides a convenient and simple operation.</p>
        </div>
    </div>
</div>




<div class="container pt-5 pb-5">


    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Features</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Technology</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Assay</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FAQ</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Customer Testimonials</button>
        </li>
    </ul>
    <div class="tab-content mt-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="mt-4">
                <strong>Biochemistry Analyzer</strong>
            </div>





        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            sdfs

        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

            sdfsdgfsd
        </div>
    </div>

    
</div>












<section class="productsection">
    <div class="container">

        <div class="row pb-4 pcathead">
            <div class="col-lg-8">
                <div>
                    <strong>Related Products</strong>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="float-end">
                    <span>View All Products &nbsp;&nbsp;<i class="bi bi-plus-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">

                    <li class="uk-transition-toggle" tabindex="0">
                        <div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
                            <center><img src="{{ asset("user") }}/image/prod1.jpg"></center><br>
                            <div class="head">
                                <center>
                                    <strong>Mispa i2</strong><br>
                                    <div class="mt-3"><label>Specific Protein Analyzer Specific Protein Analyzer</label></div>
                                </center>
                            </div>
                            <div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
                                <div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
                                    <strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
                                    <p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
                                    <div class="mt-5"><center><a href="">VIEW</a></center></div>
                                </div>
                            </div>

                        </div>
                    </li>


                    <li class="uk-transition-toggle" tabindex="0">
                        <div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
                            <center><img src="{{ asset("user") }}/image/prod2.jpg"></center><br>
                            <div class="head">
                                <center>
                                    <strong>Mispa Count Plus</strong><br>
                                    <div class="mt-3"><label>Specific Protein Analyzer Specific Protein Analyzer</label></div>
                                </center>
                            </div>
                            <div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
                                <div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
                                    <strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
                                    <p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
                                    <div class="mt-5"><center><a href="">VIEW</a></center></div>
                                </div>
                            </div>

                        </div>
                    </li>


                    <li class="uk-transition-toggle" tabindex="0">
                        <div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
                            <center><img src="{{ asset("user") }}/image/prod3.jpg"></center><br>
                            <div class="head">
                                <center>
                                    <strong>Mispa Count</strong><br>
                                    <div class="mt-3"><label>Specific Protein Analyzer Specific Protein Analyzer</label></div>
                                </center>
                            </div>
                            <div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
                                <div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
                                    <strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
                                    <p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
                                    <div class="mt-5"><center><a href="">VIEW</a></center></div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="uk-transition-toggle" tabindex="0">
                        <div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
                            <center><img src="{{ asset("user") }}/image/p2.jpg"></center><br>
                            <div class="head">
                                <center>
                                    <strong>Mispa Plus</strong><br>
                                    <div class="mt-3"><label>Specific Protein Analyzer Specific Protein Analyzer</label></div>
                                </center>
                            </div>
                            <div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
                                <div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
                                    <strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
                                    <p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
                                    <div class="mt-5"><center><a href="">VIEW</a></center></div>
                                </div>
                            </div>

                        </div>
                    </li>


                    <li class="uk-transition-toggle" tabindex="0">
                        <div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
                            <center><img src="{{ asset("user") }}/image/p2.jpg"></center><br>
                            <div class="head">
                                <center>
                                    <strong>Mispa CX4</strong><br>
                                    <div class="mt-3"><label>Specific Protein Analyzer Specific Protein Analyzer</label></div>
                                </center>
                            </div>
                            <div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
                                <div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
                                    <strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
                                    <p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
                                    <div class="mt-5"><center><a href="">VIEW</a></center></div>
                                </div>
                            </div>

                        </div>
                    </li>





                </ul>

                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>



        </div>
    </section>



    @endsection