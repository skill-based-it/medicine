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
                                @if($category)
                                @foreach ($category as $cat)
								<li class="uk-parent @if($cat->id == $cat_id) uk-open @endif">
									<a href="#"> <i class="fa fa-truck-medical"></i> <span id="category_name">{{$cat->name}}</span> <span uk-nav-parent-icon></span></a>
									<ul class="uk-nav-sub">
                                        @if($subcategorey)
                                        @foreach ($subcategorey as $subcat)
                                        @if($cat->id == $subcat->cat_id)
										<li class="@if($subcat->id == $sub_catid) active @endif"><a href="{{url('categorey_product')}}/{{$cat->id}}/{{$subcat->id}}">{{$subcat->name}}</a></li>
                                        @endif
                                        @endforeach
                                        @endif
									</ul>
								</li>
                                @endforeach
                                @endif
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-9">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @if($subcategorey)
                    @foreach ($subcategorey as $subcat)
                    @if($cat_id == $subcat->cat_id)
					<li class="nav-item" role="presentation">
						<a href="{{url('categorey_product')}}/{{$cat_id}}/{{$subcat->id}}" class="nav-link @if($subcat->id == $sub_catid) active @endif">{{$subcat->name}}</a>
					</li>
                    @endif
                    @endforeach
                    @endif
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="pills-home-tab">



						<div class="row">

                            @if($product)
                            @foreach ($product as $v)
							<div class="col-md-4 uk-transition-toggle mt-4">
								<div class="uk-panel bg-white p-4 pb-5" style="border-bottom:2px solid #7E8CD6;">
									<center><img src="{{ asset("$v->image") }}"></center><br>
									<div class="head">
										<center>
											<strong>{{$v->product_name}}</strong><br>
											<div class="mt-3"><label>{{$v->product_code}} </label></div>
										</center>
									</div>
									<div class="uk-position-center uk-panel" style="width: 100%; height: 100%;">
										<div class="uk-transition-slide-bottom-small p-4 productdetails" style="background: #7E8CD6; height: 100%;">
											<strong>{{$v->product_name}}</strong><br><span>{{$v->product_code}}</span><br>
											<p>{{substr($v->short_details,0,100)}}</p>
											<div class="mt-5"><center><a href="{{url("productdetails")}}/{{$v->product_code}}/{{$v->id}}">VIEW</a></center></div>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                            @endif

						</div>




					</div>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection
