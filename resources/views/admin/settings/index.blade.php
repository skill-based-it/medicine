@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Website Settings</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("updatesettings/".$data->id) }}" enctype="multipart/form-data">

							@csrf


							<div class="form-group col-md-12">
								<label>Website Name:</label>
								<input type="text" name="website_name" class="form-control" required="" value="{{ $data->website_name }}">
							</div>

							<div class="form-group col-md-4">
								<label>Address:</label>
								<input type="text" name="address" class="form-control" required="" value="{{ $data->address }}">
							</div>

							<div class="form-group col-md-4">
								<label>Email:</label>
								<input type="text" name="email" class="form-control" required="" value="{{ $data->email }}">
							</div>

							<div class="form-group col-md-4">
								<label>Phone:</label>
								<input type="text" name="phone" class="form-control" required="" value="{{ $data->phone }}">
							</div>

							<div class="form-group col-md-12">
								<label>About us:</label>
								<textarea rows="4" class="form-control summernote" name="about_us">{{ $data->about_us }}</textarea>
							</div>

							


							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Logo Settings</strong></div>

							<div class="form-group col-md-6">
								<label>Main Logo:</label>
								<input type="file" name="logo" class="form-control" >
								<img src="@if(isset($data->logo)) {{ url($data->logo) }} @endif" style="height: 100px;">
							</div>


							<div class="form-group col-md-6">
								<label>Favicon:</label>
								<input type="file" name="favicon" class="form-control" >
								<img src="@if(isset($data->favicon)) {{ url($data->favicon) }} @endif" style="height: 60px;">
							</div>


							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Social Media Settings</strong></div>


							<div class="form-group col-md-6">
								<label>Facebook (URL):</label>
								<input type="url" name="fb" class="form-control"  value="{{ $data->fb }}">
							</div>
							<div class="form-group col-md-6">
								<label>Twitter (URL)</label>
								<input type="url" name="tw" class="form-control"  value="{{ $data->tw }}">
							</div>

							<div class="form-group col-md-6">
								<label>Instagram (URL)</label>
								<input type="url" name="in" class="form-control"  value="{{ $data->in }}">
							</div>

							<div class="form-group col-md-6">
								<label>Linkdin (URL)</label>
								<input type="url" name="li" class="form-control"  value="{{ $data->li }}">
							</div>
							<div class="form-group col-md-6">
								<label>Telegram (URL)</label>
								<input type="url" name="te" class="form-control"  value="{{ $data->te }}">
							</div>

							<div class="form-group col-md-6">
								<label>Youtube (URL)</label>
								<input type="url" name="yo" class="form-control"  value="{{ $data->yo }}">
							</div>



							





							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Plugin</strong></div>


							<div class="form-group col-md-12">
								<label>Facebook Comment (Plugin):</label>
								<textarea rows="4" class="form-control" name="comment_plugin">{{ $data->comment_plugin }}</textarea>
							</div>

							<div class="form-group col-md-6">
								<label>Copyright Text:</label>
								<textarea rows="1" class="form-control" name="copyright_text">{{ $data->copyright_text }}</textarea>
							</div>

							<div class="form-group col-md-6">
								<label>Developer Text:</label>
								<textarea rows="1" class="form-control" name="developer_text">{{ $data->developer_text }}</textarea>
							</div>


							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Maintenance</strong></div>


							<div class="form-group col-md-12">
								<label>Maintenance Text:</label>
								<textarea rows="4" class="form-control" name="maintenance_text">{{ $data->maintenance_text }}</textarea>
							</div>

							<div class="form-group col-md-12 row">
								<div class="col-md-2">
									<label>Maintenance Status:</label>
								</div>
								<div class="col-md-9">
									<label class="container">Enabled
										<input type="radio" name="maintenance_status" value="1" required="" <?php if ($data->maintenance_status == 1) {
											echo "checked";
										} ?>>
										<span class="checkmark"></span>
									</label>

									<label class="container">Disbled
										<input type="radio" name="maintenance_status" value="0" required="" <?php if ($data->maintenance_status == 0) {
											echo "checked";
										} ?>>
										<span class="checkmark"></span>
									</label>

								</div>
							</div>



							<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">SEO TOOLS</strong></div>


							<div class="form-group col-md-6">
								<label>Meta Title:</label>
								<input type="text" name="meta_title" class="form-control" value="{{ $data->meta_title }}">
							</div>


							<div class="form-group col-md-6">
								<label>Meta Tag:</label>
								<input type="text" name="meta_tag" class="form-control" value="{{ $data->meta_tag }}">
							</div>

							<div class="form-group col-md-12">
								<label>Meta Description:</label>
								<textarea rows="4" class="form-control" name="meta_description">{{ $data->meta_description }}</textarea>
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


