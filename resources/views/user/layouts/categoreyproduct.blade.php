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


            <div class="col-md-12">
                <div class="row">
                    @if($product)
                    @foreach ($product as $v)

                    <div class="col-md-4 col-12">
                        <li class="uk-transition-toggle" tabindex="0" style="list-style: none">
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
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
		</div>
	</div>

</section>


@endsection
