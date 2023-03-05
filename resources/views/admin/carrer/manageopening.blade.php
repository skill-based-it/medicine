@extends('admin.index')
@section('content')


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">All Openings <a href="{{ url('publish_opening') }}" class="float-right btn btn-dark btn-sm">Add Openings</a></h4>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>SL.</th>
									<th>Location</th>
									<th>Jobs</th>
									<th>Opening Title</th>
									<th>Opening Description</th>
									<th>Status</th>
									<th>Option</th>

								</tr>
							</thead>
							<tbody>

								@php $i =1; @endphp
								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $d->location_name }}</td>
									<td>{{ $d->jobs_name }}</td>
									<td>{{ $d->opening_title }}</td>
									<td>{!! $d->opening_description !!}</td>
									<td>
                                        @if($d->status == 1) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Inactive</span>@endif
                                    </td>

									<td>
										<div class="dropdown">
											<button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Select an Option
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="{{ url("editopenings/".$d->id) }}">Edit</a>
												<a class="dropdown-item" href="{{ url("deleteopening/".$d->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
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
