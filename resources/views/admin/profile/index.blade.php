@extends('admin.index')
@section('content')



<div class="content-body">
 <div class="container-fluid mt-3">
  <div class="bg-white p-5">

   <h2>My Profile Update</h2><br>
   <form method="post" class="row" action="{{ url('/updateprofile') }}/{{$data->id}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group col-md-12">
     <label >Name</label>
     <input type="text" name="name" placeholder="Name" class="form-control" value="{{$data->name}}" required="">
   </div>

   <div class="form-group col-md-6">
     <label >Email</label>
     <input type="email" name="email" placeholder="Email" class="form-control" value="{{$data->email}}" required="">
   </div>

   
   <div class="form-group col-md-6">
     <label >Change Password</label>
     <input type="text" name="password" placeholder="Change Password" class="form-control" value="{{$data->set_password}}" required="">
   </div>



   <div class="input-group mt-3 col-md-12">
     <input type="submit" value="Update Information" class="btn btn-success text-white">
   </div>
 </form>
</div>



</div>

</div>

@endsection
