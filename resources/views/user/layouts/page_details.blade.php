@extends('user.layouts.index')
@section('content')


<div class="container pt-4 pb-5">
    <ul class="uk-breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="">{{$data->name}}</a></li>
    </ul>
</div>

<div class="container pt-4 pb-5">
    {!! $data->details !!}
</div>

@endsection
