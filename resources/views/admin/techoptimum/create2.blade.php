@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Add Category <a href="{{ url('managetechoptimumcat') }}" class="float-right btn btn-dark btn-sm">Manage Category</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("inserttechoptimumcat") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">
								
								<div class="form-group col-md-12">
									<label>Category Name: <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control" required="">
								</div>


								<div class="form-group col-md-12">
									<label>Details:</label>
									<textarea rows="5" class="form-control summernote" name="details"></textarea>
								</div>




								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Image: <span class="text-danger">*</span></label>
									<input type="file" name="image" class="form-control" id="imgInp" required="">
									<img id="blah" src="https://via.placeholder.com/300.png"  style="max-height: 100px;">

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


