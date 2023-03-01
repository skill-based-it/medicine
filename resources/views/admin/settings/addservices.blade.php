@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Supports Info.</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updateservices/".$data->id) }}" enctype="multipart/form-data">

							@csrf


							<div class="form-group col-md-12">
								<label>Top Title:</label>
								<textarea rows="5" class="form-control summernote" name="top_title">{{ $data->top_title }}</textarea>
							</div>

							<div class="form-group col-md-12">
								<label>Sales Services Info.:</label>
								<textarea rows="5" class="form-control summernote" name="sales_service">{{ $data->sales_service }}</textarea>
							</div>

							<div class="form-group col-md-6">
								<label>Services Details:</label>
								<textarea rows="5" class="form-control summernote" name="services1">{{ $data->services1 }}</textarea>
							</div>

							<div class="form-group col-md-6">
								<label>Services Details:</label>
								<textarea rows="5" class="form-control summernote" name="services2">{{ $data->services2 }}</textarea>
							</div>

						

							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Sales Services Image</strong></div>

							<div class="form-group col-md-6">
								<label>Image:</label>
								<input type="file" name="image" class="form-control" >
								<img src="@if(isset($data->services_image)) {{ url($data->services_image) }} @endif" style="height: 100px;">
							</div>


				




							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark">Save Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection


