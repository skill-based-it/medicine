<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Optimum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset("user") }}/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.23/dist/css/uikit.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


</head>
<body>


  <!-- Header -->
  <section class="mainheader">
    <div uk-sticky class="boxshadowheader ">
      <div class="container">
       <div class="row align-items-center">
        <div class="col-xl-3 ">
          <a href="{{ url('/') }}"><img src="{{ asset("user") }}/image/logo.png" class="img-responsive" ></a>
        </div>
        <div class="col-xl-9">
          <div class="float-end">
            <li><a href="{{ url("about") }}">ABOUT US</a></li>
            <li><a href="{{ url("products") }}">PRODUCTS</a></li>
            <li><a href="{{ url("support") }}">SUPPORT</a></li>
            <li><a href="{{ url("careers") }}">CAREERS</a></li>
            <li><a href="{{ url("techoptimum") }}">TECH OPTIMUM</a></li>
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
  <div class="uk-offcanvas-bar">

    <button class="uk-offcanvas-close" type="button" uk-close></button>

    <li><a href="">সর্বশেষ</a></li><hr>
    <li><a href="category.php">বিশেষ সংবাদ</a></li><hr>
    <li><a href="category.php">বাংলাদেশ</a></li><hr>
    <li><a href="category.php">রাজনীতি</a></li><hr>
    <li><a href="category.php">করোনাভাইরাস</a></li><hr>
    <li><a href="category.php">বিশ্ব</a></li><hr>
    <li><a href="category.php">বাণিজ্য</a></li><hr>
    <li><a href="category.php">মতামত</a></li><hr>
    <li><a href="category.php">খেলা</a></li><hr>
    <li><a href="category.php">বিনোদন</a></li><hr>
    <li><a href="category.php">চাকরি</a></li><hr>
    <li><a href="category.php">জীবনযাপন</a></li><hr>

  </div>
</div>









@yield('content')












<section class="footersection pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-3">
        <img src="{{ asset("user") }}/image/footerlogo.svg" class="form-control">
      </div>

      <div class="col-xl-4">
        <div class="subscribedetails">
          <strong>Subscribe to Tech Agappe!</strong><br>
          <span>
            Get promotions,inspiration and the latest news <br>about brands and products directly in your inbox.
          </span>
        </div>
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
          <li><a href="">About Us</a></li>
          <li><a href="">News</a></li>
          <li><a href="">Support</a></li>
          <li><a href="">Careers</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Blog</a></li>
          
        </div>
      </div>

      <div class="col-xl-4 mt-4">
        <strong>Products</strong><br><br>
        <div class="row">
          <div class="col-md-6">
            <li><a href="">Clinical Chemistry</a></li>
            <li><a href="">Hematology</a></li>
            <li><a href="">Nephelometry</a></li>
            <li><a href="">Immunology</a></li>
            <li><a href="">Coagulation</a></li>
            <li><a href="">Electrolyte</a></li>
            <li><a href="">Pre- Analytical</a></li>
          </div>

          <div class="col-md-6">
            <li><a href="">Urine Analysis</a></li>
            <li><a href="">Point Of Care</a></li>
            <li><a href="">Rapids</a></li>
            <li><a href="">Serology</a></li>
            <li><a href="">Molecular Diagnostics</a></li>
            <li><a href="">Controls & Calibrators</a></li>
            <li><a href="">Covid 19 Products</a></li>
          </div>
        </div>
      </div>




      <div class="col-xl-4 mt-4">
        <strong>Optimum Made Trade Ltd.</strong><br><br>
        <div class="contactdetails">
          <br>
        Purana Paltan, Dhaka-1000<br><br>

          Tel:+8801875570169<br>
          Email: info@OptimumMadeTradeLtd.com<br>
          Web: ww.optimumMadeTradeLtd.com
        </div>
      </div>

      <div class="col-xl-2 mt-4">
        <strong>Follow</strong><br><br>
        <div class="socialmedia">

          <li><a href=""><i class="bi bi-facebook"></i></a></li>
          <li><a href=""><i class="bi bi-twitter"></i></a></li>
          <li><a href=""><i class="bi bi-instagram"></i></a></li>
          <li><a href=""><i class="bi bi-youtube"></i></a></li>
          <li><a href=""><i class="bi bi-linkedin"></i></a></li>
          
        </div>
      </div>


    </div><br><hr>



    <div class="row developertext align-items-center">
      <div class="col-xl-8 mt-4">
        <strong>All rights reserved |</strong>  
        <li><a href="">Terms & Conditions</a></li>
        <li><a href="">FAQ</a></li>
        <li><a href="">Privacy Policy</a></li>
      </div>

      <div class="col-xl-4 mt-4">
        <div class="float-end">
          <strong>Designed by <a href="" class="developer">S B I T</a></strong>
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

</body>
</html>