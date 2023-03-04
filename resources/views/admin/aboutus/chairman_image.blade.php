@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Chairman Message </h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("updateChairmanMessage") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-12">
									<label>Message:</label>
									<textarea rows="5" class="form-control summernote" name="message">{!! $data->message !!}</textarea>
								</div>



								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Founder Image:</label>
									<input type="file" name="chairman_image" class="form-control" id="imgInp">
                                    <img src="{{asset('backend/chairmanImage')}}/{{$data->chairman_image}}" style="max-width: 120px;" class="img-fluid">
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


