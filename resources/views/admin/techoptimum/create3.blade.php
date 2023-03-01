@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Add Techoptimum Books <a href="{{ url('managetechoptimumbooks') }}" class="float-right btn btn-dark btn-sm">Manage Techoptimum Books</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("inserttechoptimumbooks") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-12">
									<label>Category: <span class="text-danger">*</span></label>

									@php 
									$category = DB::table('techoptimumscats')->get(); 
									@endphp

									<select class="form-control" name="cat_id" id="cat_id">
										
										<option value="">Select Category</option>
										@if($category)
										@foreach($category as $cat)

										<option value="{{ $cat->id }}">{{ $cat->title }}</option>

										@endforeach
										@endif


									</select>
								</div>


								
								<div class="form-group col-md-12">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control" required="">
								</div>





								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image/Files</strong></div>

								<div class="form-group col-md-6">
									<label>Image: <span class="text-danger">*</span></label>
									<input type="file" name="image" class="form-control" id="imgInp" required="">
									<img id="blah" src="https://via.placeholder.com/300.png"  style="max-height: 100px;">

								</div>


								<div class="form-group col-md-6">
									<label>File: <span class="text-danger">*</span></label>
									<input type="file" name="file" class="form-control"required="">

								</div>





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


<script type="text/javascript">
	
	imgInp.onchange = evt => {
		const [file] = imgInp.files
		if (file) {
			blah.src = URL.createObjectURL(file)
		}
	}




</script>

@endsection


