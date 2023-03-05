@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Create About US</h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("carrerinfo_update") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-4">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="carrer_title" class="form-control" required="" value="{{$data->carrer_title}}">
								</div>


								<div class="form-group col-md-12">
									<label>Company History:</label>
									<textarea rows="5" class="form-control summernote" name="carrer_description">{!! $data->carrer_description !!}</textarea>
								</div>


								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Image:</label>
									<input type="file" name="image" class="form-control" id="imgInp">
                                    <img src="{{asset('backend/carrerInfoImage')}}/{{$data->image}}" alt="" class="img-fluid" style="max-width: 100px;">
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


