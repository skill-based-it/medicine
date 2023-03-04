@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Values Box Information <a href="{{ url('manageValueBox') }}" class="float-right btn btn-dark btn-sm">Manage Vale Box</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("insertValueBox") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-12">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="values_title" class="form-control" required="">
								</div>



								<div class="form-group col-md-12">
									<label>Description:</label>
									<textarea rows="5" class="form-control summernote" name="values_description"></textarea>
								</div>



								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Icon</strong></div>

								<div class="form-group col-md-6">
									<label>Icon:</label>
									<input type="file" name="image" class="form-control" id="imgInp">
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


