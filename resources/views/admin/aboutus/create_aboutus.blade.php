@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Create About US</h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("aboutUsUpdateInfo") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-4">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="about_us_title" class="form-control" required="" value="{{$data->about_us_title}}">
								</div>


								<div class="form-group col-md-8">
									<label>Company EST:</label>
									<input type="text" name="company_est" class="form-control" value="{{$data->company_est}}">
								</div>


								<div class="form-group col-md-12">
									<label>Company History:</label>
									<textarea rows="5" class="form-control summernote" name="company_history">{!! $data->company_history !!}</textarea>
								</div>

                                <div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Services</strong></div>

                                <div class="form-group col-md-4">
									<label>Country: </label>
									<input type="text" name="country_support" class="form-control" value="{{$data->country_support}}">
								</div>

                                <div class="form-group col-md-4">
									<label>Customers: </label>
									<input type="text" name="customers" class="form-control" value="{{ $data->customers }}">
								</div>

                                <div class="form-group col-md-4">
									<label>Workforce: </label>
									<input type="text" name="workforce" class="form-control" value="{{ $data->workforce }}">
								</div>


                                <div class="form-group col-md-4">
									<label>Customer Support: </label>
									<input type="text" name="customer_support" class="form-control" value="{{ $data->customer_support }}">
								</div>





								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Image:</label>
									<input type="file" name="image[]" class="form-control" id="imgInp" multiple>
                                    @if($images)
                                    @foreach ($images as $v)
                                    <img src="{{asset('backend/aboutUsImage')}}/{{$v->images}}" alt="" class="img-fluid" style="float: left;max-width:120px;">
                                    @endforeach
                                    @endif
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


