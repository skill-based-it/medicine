@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">All Products <a href="{{ url('addproducts') }}" class="float-right btn btn-dark btn-sm">Add Products</a></h4>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>SL.</th>
									<th>Date</th>
									<th>Category Name</th>
									<th>Product Name</th>
									<th>Option</th>

								</tr>
							</thead>
							<tbody>

								@php $i =1; @endphp
								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $d->date }}</td>
									<td>{{ $d->name }}</td>
									<td>{{ $d->product_name }}</td>

									<td>
										<div class="dropdown">
											<button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Select an Option
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="{{ url("editproducts/".$d->id) }}">Edit</a>
												<a class="dropdown-item" href="{{ url("deleteproducts/".$d->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
											</div>
										</div>
										
									</td>

								</tr>

								@endforeach
								@endif

							</table>
						</div>
					</div>
				</div>
			</div>




		</div>
	</div>

	@endsection