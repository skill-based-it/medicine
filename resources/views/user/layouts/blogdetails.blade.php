@extends('user.layouts.index')
@section('content')


<div class="container pt-4 pb-5">
    <ul class="uk-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><span>{{$data->title}}</span></li>
    </ul>

    <div class="row align-items-center mt-5 pt-5">

        <div class="blog-image">
            <img src="{{asset("$data->image")}}" alt="" class="img-fluid">
        </div>
        @php
        $explode = explode('-',$data->date);
        @endphp

        <div class="blog-info">
            <h2>{{$data->title}}</h2>
            <b>{{$data->writer_name}}</b> <label style="font-size: 12px;">{{$explode[2]}} / {{$explode[1]}} / {{$explode[0]}}</label>
        </div>

        <div class="blog-description">
            {!! $data->details !!}
        </div>

    </div>
</div>




    @endsection
