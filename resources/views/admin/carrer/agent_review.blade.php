@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Create Agent Review <a href="{{ url('manageagent_review') }}" class="float-right btn btn-dark btn-sm">Manage Agent Review</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("insertagent_review") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">



                                <div class="form-group col-md-12">
                                    <label>Descripton:</label>
									<textarea rows="5" class="form-control summernote" name="description"></textarea>
								</div>


                                <div class="form-group col-md-4">
                                    <label>Agent Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="agent_name" class="form-control" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Designation: <span class="text-danger">*</span></label>
                                    <input type="text" name="designation" class="form-control" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Location: <span class="text-danger">*</span></label>
                                    <input type="text" name="location" class="form-control" required="">
                                </div>



                                <div class="form-group col-md-12 row">
                                    <div class="col-md-2">
                                        <label>Status:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="container">Active
                                            <input type="radio" name="status" value="1" checked="" required="">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="container">Inactive
                                            <input type="radio" name="status" value="0" required="">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
									<label>Image:</label>
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


