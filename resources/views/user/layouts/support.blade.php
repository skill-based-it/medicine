@extends('user.layouts.index')
@section('content')


<section class="supportsection bg-white pt-5 pb-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<label>Online Support <i class="bi bi-dash-lg"></i></label>
				<div class="mt-3">
					<strong>Our Services</strong><br>
					Care With a Difference.
				</div>

				<div class="mt-4">
					Talk to us<br>
					<a href="tel:{{$settings->phone}}">Tel: {{ $settings->phone }}</a><br><br>

					Write to us<br>
					<a href="">Email : {{$settings->email}}</a><br>
				</div>
				<br>
			</div>

			<div class="col-md-6">
				<center><img src="{{ asset("user") }}/image/support-img.png" class="img-fluid"></center>
			</div>
		</div>
	</div>
</section>



@php
$support = DB::table('services')->first();
$contacts = DB::table('contacts')->first();
@endphp

<section class="supportsection2 p-5 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<center><img src="{{ asset("user") }}/image/Service_1608193412.webp" class="img-fluid"></center>
			</div>

			<div class="col-md-8">
				<label>Sales & Service</label><br>
				<div class="mt-2">
					<strong>The Journey Towards Customer Delight</strong>
				</div>
				<div class="mt-3">
					<p>
						{!! $support->sales_service !!}
					</p>
				</div>

			</div>
		</div>
	</div>
</section>




<section class="servicessection pt-4 pb-5">
	<div class="container">
		<h3>Our Service.</h3>
		<div class="row">

			<div class="col-md-6">
				<p>
					{!! $support->services1 !!}
				</p>
			</div>

			<div class="col-md-6">
				<p>
					{!! $support->services2 !!}
				</p>
			</div>

		</div>
	</div>
</section>






<section class="customersection3 pt-5 pb-5">
	<div class="container">
		<center><strong>Global Access Point</strong></center>
		<br>
		<div class="row">
			<div class="col-md-6 mt-4 bg-white">
				<img src="{{ asset("user") }}/image/oap.png" class="img-fluid w-100">
			</div>

			<div class="col-md-6 mt-4 bg-white p-4">
				{!! $contacts->access_point !!}
			</div>
		</div>
	</div>
</section>




<section class="customersection2 pt-5">
	<div class="container">

		<div class="row align-items-center	">
			<div class="col-md-6">
				<strong>Customer Technical Support</strong>
				{!! $contacts->support_info !!}

			</div>

			<div class="col-md-6 row">
				<center><img src="{{ asset("user") }}/image/right-cwx (2).svg" class="img-fluid"></center>
			</div>
		</div>
	</div>
</section>



@endsection
