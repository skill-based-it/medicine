@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid">


		<div class="col-lg-12 pt-2">

			<h4 class="card-title">Add Products <a href="{{ url('manageproducts') }}" class="float-right btn btn-dark btn-sm">Manage Products</a></h4><br>

			<div class="card">
				<div class="card-body">
					<div class="basic-form border p-5">
						<form method="post" class="row" action="{{ url("insertproducts") }}" enctype="multipart/form-data">

							@csrf

							<div class="col-md-12 row">
								
								<div class="form-group col-md-4">
									<label>Product Code: <span class="text-danger">*</span></label>
									<input type="text" name="product_code" class="form-control" required="">
								</div>


								<div class="form-group col-md-8">
									<label>Name: <span class="text-danger">*</span></label>
									<input type="text" name="product_name" class="form-control" required="">
								</div>



								<div class="form-group col-md-6">
									<label>Short Details:</label>
									<textarea rows="2" class="form-control" name="short_details"></textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Overview:</label>
									<textarea rows="5" class="form-control" name="overview"></textarea>
								</div>



								<div class="form-group col-md-6">
									<label>Features:</label>
									<textarea rows="5" class="form-control summernote" name="features"></textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Technology:</label>
									<textarea rows="5" class="form-control summernote" name="technology"></textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Assay:</label>
									<textarea rows="5" class="form-control summernote" name="assay"></textarea>
								</div>

								<div class="form-group col-md-6">
									<label>FAQ:</label>
									<textarea rows="5" class="form-control summernote" name="faq"></textarea>
								</div>






								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">CATEGORY SELECT <span class="text-danger">*</span></strong></div>

								<div class="form-group col-md-6">

									@php 
									$category = DB::table('categories')->where('status', 1)->get(); 
									@endphp

									<select class="form-control" name="cat_id" id="cat_id" onchange="getsubcategory();">
										
										<option value="">Select Category</option>
										@if($category)
										@foreach($category as $cat)

										<option value="{{ $cat->id }}">{{ $cat->name }}</option>

										@endforeach
										@endif


									</select>
								</div>



								<div class="form-group col-md-6">

									<select class="form-control" name="subcat_id" id="subcat_id">
									</select>
								</div>






								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">Image</strong></div>

								<div class="form-group col-md-6">
									<label>Image: <span class="text-danger">*</span></label>
									<input type="file" name="image" class="form-control" id="imgInp" required="">
									<img id="blah" src="https://via.placeholder.com/300.png"  style="max-height: 100px;">

								</div>

								
								

								<div class="form-group col-md-12"><strong class="bg-light p-2 d-block text-center">SEO TOOLS</strong></div>


								<div class="form-group col-md-6">
									<label>Meta Title:</label>
									<input type="text" name="seo_title" class="form-control">
								</div>


								<div class="form-group col-md-6">
									<label>Meta Tag:</label>
									<input type="text" name="seo_tag" class="form-control">
								</div>

								<div class="form-group col-md-12">
									<label>Meta Description:</label>
									<textarea rows="4" class="form-control" name="seo_description"></textarea>
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



	function getsubcategory(){

		var cat_id = $("#cat_id").val();
		$.ajax({
			url:'{{ url('getsubcategory') }}/'+cat_id,
			method:'GET',

			success:function(data){

				$("#subcat_id").html(data);

			},
			error:function(error){
				console.log(error)
			}
		});


	}

</script>

@endsection


