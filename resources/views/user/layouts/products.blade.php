@extends('user.layouts.index')
@section('content')

<section class="slidersections">
	<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 20:3; animation: scale">

		<ul class="uk-slideshow-items">
			<li>
				<img src="{{ asset("user") }}/image/s1.png" alt="" uk-cover>
			</li>
			<li>
				<img src="{{ asset("user") }}/image/s2.png" alt="" uk-cover>
			</li>
		</ul>

		<a class="uk-position-center-left uk-position-small uk-hidden-hover bg-white text-dark rounded-circle" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
		<a class="uk-position-center-right uk-position-small uk-hidden-hover bg-white text-dark rounded-circle" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

	</div>
</section>


<section class="productpagesection pt-5 pb-5">
	<div class="container">
		<div class="row">


			<div class="col-md-3">
				<div class="categorey-list">
					<div class="categorey-list-wrap">
						<div class="bg-white p-4">
							<ul class="uk-nav-default" uk-nav="multiple: true">
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-truck-medical"></i> <span id="category_name">Clinical Chamistry</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Open Reagents</a></li>
										<li><a href="#">Auxiliary Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vials"></i> <span id="category_name">Hematology</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Open Reagents</a></li>
										<li><a href="#">Auxiliary Reagents</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-lightbulb"></i> <span id="category_name">Nephelometry
									</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-syringe"></i> <span id="category_name">Immunology
									</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-kit-medical"></i> <span id="category_name">Coagulaiton
									</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-kit-medical"></i> <span id="category_name">Electrolyte
									</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Pre-Analytical</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Urine 
									Analytics</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Rapids</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Rapids</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Molecular Diagonistics</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
								<li class="uk-parent">
									<a href="#"> <i class="fa fa-vial"></i> <span id="category_name">Controls & Calibators</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
										<li><a href="#">Equipement</a></li>
										<li><a href="#">System Reagents</a></li>
										<li><a href="#">Controls & Calibrators</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>







			<div class="col-md-9">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Equipment</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">System Reagents</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Open Reagents</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Auxiliary Reagents</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Controls & Calibrators</button>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="pills-home-tab">

						<div class="mt-4">
							<strong>Biochemistry Analyzer</strong>
						</div>

						<div class="row">

							
							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod1.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
										</center>
									</div>
									<div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
										<div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
											<strong>Mispa i2</strong><br><span>Specific Protein Analyzer</span><br>
											<p>Mispa-i2 is a semi-automated specific protein analyzer that offers high precision and quick...</p>
											<div class="mt-5"><center><a href="{{url("productdetails")  }}">VIEW</a></center></div>
										</div>
									</div>
								</div>
							</div>



							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod2.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
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
							</div>



							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod3.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
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
							</div>



							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod2.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
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
							</div>


							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod1.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
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
							</div>


							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("user") }}/image/prod3.jpg"></center><br>
									<div class="head">
										<center>
											<strong>Mispa CX4</strong><br>
											<div class="mt-3"><label>Specific Protein Analyzer </label></div>
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
							</div>


						</div>




					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="mt-4">
							<strong>Please select an equipment to find the reagents</strong>
							<div class="row">


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



							</div>
						</div>


					</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="mt-4">
							<strong>Please select an equipment to find the reagents</strong>
							<div class="row">


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>


								<div class="col-md-2 mt-3">
									<div class="bg-white border rounded">
										<center>
											<a href=""><img src="{{ asset("user") }}/image/p2.jpg" class="img-fluid" style="max-height:80px;"></a><br>
											<div class="mt-2">
												<span style="font-size: 13px;">TBA-2000FR</span>
											</div>
										</center>
									</div>
								</div>



							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>


@endsection