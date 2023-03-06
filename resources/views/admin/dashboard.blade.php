@extends('admin.index')
@section('content')

@php


@endphp



<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Active Posts</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">0</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-6">
                    <div class="card-body">
                        <h3 class="card-title text-white">Inactive Posts</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">0</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Delete Posts</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">0</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="card-title">Upload Corporate Brouchere</h4><br>

                <div class="card">
                    <div class="card-body">
                        <div class="basic-form border p-5">
                            <form method="post" class="row" action="{{ url("uploadcorporatebrouchere") }}" enctype="multipart/form-data">

                                @csrf

                                <div class="col-md-12 row">

                                    <div class="form-group col-md-6">
                                        <label>File:</label>
                                        <input type="file" name="files" class="form-control" id="imgInp" required>
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



    </div>

</div>




@endsection
