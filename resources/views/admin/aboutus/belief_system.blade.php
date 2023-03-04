@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Belief System</h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("updateBeliefSystem") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-4">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="belief_title" class="form-control" required="" value="{{$data->belief_title}}">
								</div>



								<div class="form-group col-md-12">
									<label>Description:</label>
									<textarea rows="5" class="form-control summernote" name="description">{!! $data->description !!}</textarea>
								</div>

								<div class="form-group col-md-12">
									<label>Mission:</label>
									<textarea rows="5" class="form-control summernote" name="mission">{!! $data->mission !!}</textarea>
								</div>
								<div class="form-group col-md-12">
									<label>Vision:</label>
									<textarea rows="5" class="form-control summernote" name="vision">{!! $data->vision !!}</textarea>
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


