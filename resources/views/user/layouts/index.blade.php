<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $websettings->website_name }}</title>
  <link rel="icon" href="{{asset($websettings->favicon)}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset("user") }}/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.23/dist/css/uikit.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


</head>
<body>


  <!-- Header -->
  <section class="mainheader">
    <div uk-sticky class="boxshadowheader ">
      <div class="container">
       <div class="row align-items-center">
        <div class="col-lg-3   col-md-3 col-7">
          <a href="{{ url('/') }}"><img src="{{ asset("$websettings->logo") }}" class="img-fluid" ></a>
        </div>
        <div class="col-lg-9 col-md-9 col-5">
          <div class="float-end d-block d-md-none">
            <strong uk-toggle="target: #offcanvas-slide"><i class="bi bi-list" style="font-size: 30px;"></i></strong>
          </div>
          <div class="float-end d-none d-md-block">
            <li><a href="{{ url("about") }}">ABOUT US</a></li>
            <li><a href="{{ url("products") }}">PRODUCTS</a></li>
            <li><a href="{{ url("support") }}">SUPPORT</a></li>
            <li><a href="{{ url("careers") }}">CAREERS</a></li>
            {{-- <li><a href="{{ url("techoptimum") }}">TECH OPTIMUM</a></li> --}}
            <!--<li><a href="#">VIRTUAL DEMO</a></li>-->
            <li><a href="{{ url("contact") }}">CONTACT US</a></li>
            <!--<li><a href="" class="iconmenu"><i class="bi bi-globe2"></i>&nbsp;&nbsp;EN</a></li>-->
            <!--<li><a href="" class="iconmenu"><i class="bi bi-search"></i></a></li>-->
          </div>
        </div>
      </div>

    </div>
  </div>
</section>








<!-- Side Menu -->


<div id="offcanvas-slide" uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar" style="font-size: 14px!important;">

    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <br>

    <li><a href="{{ url("about") }}">ABOUT US</a></li><hr>
    <li><a href="{{ url("products") }}">PRODUCTS</a></li><hr>
    <li><a href="{{ url("support") }}">SUPPORT</a></li><hr>
    <li><a href="{{ url("careers") }}">CAREERS</a></li><hr>
    {{-- <li><a href="{{ url("techoptimum") }}">TECH OPTIMUM</a></li> --}}
    <!--<li><a href="#">VIRTUAL DEMO</a></li>-->
    <li><a href="{{ url("contact") }}">CONTACT US</a></li><hr>
    <!--<li><a href="" class="iconmenu"><i class="bi bi-globe2"></i>&nbsp;&nbsp;EN</a></li>-->
    <!--<li><a href="" class="iconmenu"><i class="bi bi-search"></i></a></li>-->

  </div>
</div>









@yield('content')












<section class="footersection pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-3">
        <img src="{{ asset("$websettings->logo") }}" class="form-control"><br>
      </div>

      <div class="col-xl-4">
        <div class="subscribedetails">
          <strong>Subscribe to Tech Agappe!</strong><br>
          <span>
            Get promotions,inspiration and the latest news <br>about brands and products directly in your inbox.
          </span>
        </div><br>
      </div>

      <div class="col-xl-3">

        <div class="input-group">
          <span class="input-group-text bg-white rounded-0" id="basic-addon1"><i class="bi bi-envelope"></i></span>
          <input type="text" class="form-control rounded-0" placeholder="Enter Your Email Address" aria-label="Username" aria-describedby="basic-addon1">
        </div>

      </div>

      <div class="col-xl-2">
        <button type="submit" class="w-100">SUBSCRIBE</button>
      </div>

    </div><br><hr>



    <div class="row footermenu">


      <div class="col-xl-2 mt-4">
        <strong>Quick Links</strong><br><br>
        <div>
          <li><a href="{{url('/about')}}">About Us</a></li>
          <li><a href="{{url('/support')}}">Support</a></li>
          <li><a href="{{url('/careers')}}">Careers</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>

        </div>
      </div>

      <div class="col-xl-4 mt-4">
        <strong>Products</strong><br><br>
        <div class="row">
          <div class="col-md-6">
            @if($cat_first)
            @foreach ($cat_first as $v)
            <li><a href="{{url('categoryprod')}}/{{$v->id}}">{{$v->name}}</a></li>
            @endforeach
            @endif
          </div>

          <div class="col-md-6">
            @if($cat_second)
            @foreach ($cat_second as $v)
            <li><a href="{{url('categoryprod')}}/{{$v->id}}">{{$v->name}}</a></li>
            @endforeach
            @endif
          </div>
        </div>
      </div>




      <div class="col-xl-4 mt-4">
        <strong>{{$websettings->website_name}}</strong><br><br>
        <div class="contactdetails">
          <br>
          {!! $websettings->address !!}<br><br>

          Tel:{{$websettings->phone}}<br>
          Email: {{$websettings->email}}<br>
        </div>
      </div>

      <div class="col-xl-2 mt-4">
        <strong>Follow</strong><br><br>
        <div class="socialmedia">

          <li><a href="{{url("$websettings->fb")}}"><i class="bi bi-facebook"></i></a></li>
          <li><a href="{{url("$websettings->tw")}}"><i class="bi bi-twitter"></i></a></li>
          <li><a href="{{url("$websettings->in")}}"><i class="bi bi-instagram"></i></a></li>
          <li><a href="{{url("$websettings->yo")}}"><i class="bi bi-youtube"></i></a></li>
          <li><a href="{{url("$websettings->li")}}"><i class="bi bi-linkedin"></i></a></li>

        </div>
      </div>


    </div><br><hr>



    <div class="row developertext align-items-center text-center text-sm-start">
      <div class="col-xl-8 mt-4">
        <strong>All rights reserved&nbsp;&nbsp;&nbsp;|</strong>
        @if ($pages)
        @foreach ($pages as $v)
        <li><a href="{{url('pages')}}/{{$v->slug}}/{{$v->id}}">{{$v->name}}</a></li>
        @endforeach
        @endif
      </div>

      <div class="col-xl-4 mt-4">
        <div class="text-sm-end text-center">
          <strong>Developed by <a href="" class="developer">S B I T</a></strong>
        </div>
      </div>
    </div>





  </div>
</section>






<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.23/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.23/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

  $('.single-item').slick();

  var angle = 0;
  setInterval(function() {
    console.log(angle);
    $("#carer_polygyon")
    .css('-webkit-transform', 'rotate('+angle+'deg)')
    .css('-moz-transform', 'rotate('+angle+'deg)')
    .css('-ms-transform', 'rotate('+angle+'deg)');
    angle++;
  }, 100);

</script>


@if(Session::has('success'))
<script>
  swal('', '{{ session('success') }}', 'success');
</script>

@endif

@if(Session::has('error'))
<script>
  swal('', '{{ session('error') }}', 'error');
</script>

@endif

@if(Session::has('info'))
<script>
  swal('', '{{ session('info') }}', 'info');
</script>

@endif

</body>
</html>
