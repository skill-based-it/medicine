@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Slider Information <a href="{{ url('sliderInfo') }}" class="float-right btn btn-dark btn-sm">View Slider</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("updateSlider") }}/{{$data->id}}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">

								<div class="form-group col-md-6">
									<label>Index: <span class="text-danger">*</span></label>
									<input type="number" name="index_no" class="form-control" required="" value="{{$data->index_no}}">
								</div>

								<div class="form-group col-md-6">
									<label>Title: <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control" required="" value="{{$data->title}}">
								</div>

								<div class="form-group col-md-6">
									<label>Button Link: </label>
									<input type="text" name="button_link" class="form-control" value="{!! $data->button_link !!}">
								</div>

								<div class="form-group col-md-6">
									<label>Button Name:</label>
									<input type="text" name="button_name" class="form-control" value="{{ $data->button_name }}">
                                </div>
								<div class="form-group col-md-6">
									<label>Vedio Link:</label>
									<input type="text" name="vedio_link" class="form-control" value="{!! $data->vedio_link !!}">
                                </div>

                                <div class="form-group col-md-12 row">
                                    <div class="col-md-2">
                                        <label>Status:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="container">Active
                                            <input @if($data->status == 1) checked @endif type="radio" name="status" value="1" checked="" required="">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container">Inactive
                                            <input @if($data->status != 1) checked @endif type="radio" name="status" value="0" required="">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>



								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Image:</label>
									<input type="file" name="image" class="form-control" id="imgInp">
                                    <img src="{{asset('backend/sliderImage')}}/{{$data->image}}" alt="" style="max-width: 120px" class="img-fluid">
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


