@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Page <a href="{{ url('managepage') }}" class="float-right btn btn-dark btn-sm">Manage Page</a></h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("insertpages") }}" enctype="multipart/form-data">

							@csrf


							<div class="form-group col-md-12">
								<label>Page Name:</label>
								<input type="text" name="name" class="form-control" required="">
							</div>

							
							<div class="form-group col-md-12">
								<label>Details:</label>
								<textarea rows="4" class="form-control summernote" name="details"></textarea>
							</div>

							<div class="form-group col-md-6">
								<label>Menu Order:</label>
								<input type="number" name="order_by" class="form-control" value="1">
							</div>

							<div class="form-group col-md-12 row">
								<div class="col-md-2">
									<label>Location:</label>
								</div>
								<div class="col-md-9">
									<label class="container">Footer
										<input type="radio" name="location" value="2" checked="">
										<span class="checkmark"></span>
									</label>

									<label class="container">Top Menu
										<input type="radio" name="location" value="1">
										<span class="checkmark"></span>
									</label>

								</div>
							</div>


							<div class="form-group col-md-12 row">
								<div class="col-md-2">
									<label>Status:</label>
								</div>
								<div class="col-md-9">
									<label class="container">Active
										<input type="radio" name="status" value="1" checked="">
										<span class="checkmark"></span>
									</label>

									<label class="container">Inactive
										<input type="radio" name="status" value="0">
										<span class="checkmark"></span>
									</label>

								</div>
							</div>



							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">SEO TOOLS</strong></div>


							<div class="form-group col-md-6">
								<label>SEO Title:</label>
								<input type="text" name="seo_title" class="form-control">
							</div>


							<div class="form-group col-md-6">
								<label>SEO Tag:</label>
								<input type="text" name="seo_tag" class="form-control">
							</div>

							<div class="form-group col-md-12">
								<label>SEO Description:</label>
								<textarea rows="4" class="form-control" name="seo_description"></textarea>
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


