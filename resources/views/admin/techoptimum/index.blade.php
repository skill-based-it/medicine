@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Techoptimum Info.</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updatetechoptimum/".$data->id) }}" enctype="multipart/form-data">

							@csrf


							<div class="form-group col-md-12">
								<label>Details:</label>
								<textarea rows="5" class="form-control summernote" name="details">{{ $data->details }}</textarea>
							</div>

					

							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

							<div class="form-group col-md-6">
								<label>Image:</label>
								<input type="file" name="image" class="form-control" >
								<img src="@if(isset($data->image)) {{ url($data->image) }} @endif" style="height: 100px;">
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


