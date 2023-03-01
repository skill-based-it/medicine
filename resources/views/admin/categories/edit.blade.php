@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Edit Categories</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updatecategories/".$data->id) }}" enctype="multipart/form-data">

							@csrf


							<div class="form-group col-md-12">
								<label>Category Name:</label>
								<input type="text" name="name" class="form-control" required="" value="{{ $data->name }}">
							</div>


							<div class="form-group col-md-6">
								<label>Menu Order:</label>
								<input type="number" name="order_by" class="form-control" value="{{ $data->order_by }}">
							</div>




							<div class="form-group col-md-12 row">
								<div class="col-md-2">
									<label>Status:</label>
								</div>
								<div class="col-md-9">
									<label class="container">Active
										<input type="radio" name="status" value="1" required="" <?php if ($data->status == 1) {
											echo "checked";
										} ?>>
										<span class="checkmark"></span>
									</label>

									<label class="container">Inactive
										<input type="radio" name="status" value="0" required="" <?php if ($data->status == 0) {
											echo "checked";
										} ?>>
										<span class="checkmark"></span>
									</label>

								</div>
							</div>



							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">SEO TOOLS</strong></div>


							<div class="form-group col-md-6">
								<label>SEO Title:</label>
								<input type="text" name="seo_title" class="form-control" value="{{ $data->seo_title }}">
							</div>


							<div class="form-group col-md-6">
								<label>SEO Tag:</label>
								<input type="text" name="seo_tag" class="form-control" value="{{ $data->seo_tag }}">
							</div>

							<div class="form-group col-md-12">
								<label>SEO Description:</label>
								<textarea rows="4" class="form-control" name="seo_description">{{ $data->seo_description }}</textarea>
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


