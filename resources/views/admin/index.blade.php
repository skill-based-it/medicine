<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/RgJJv3C/dashboard-page-2.webp">
  <!-- Pignose Calender -->
  <link href="{{ asset("backend/admindashboard") }}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
  <!-- Chartist -->
  <link rel="stylesheet" href="{{ asset("backend/admindashboard") }}/plugins/chartist/css/chartist.min.css">
  <link rel="stylesheet" href="{{ asset("backend/admindashboard") }}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
  <!-- Custom Stylesheet -->
  <link href="{{ asset("backend/admindashboard") }}/css/style.css" rel="stylesheet">
  <link href="{{ asset("backend/admindashboard") }}/plugins/summernote/dist/summernote.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">



  <style type="text/css">

    body{
      font-family: 'Poppins','Tiro Bangla',sans-serif;   
    }

    .form-group .form-control{
      height: 40px;
      border: 1px solid #e9e9e9;
    }

    .form-group textarea{
      height: 100px!important;
    }

    .form-group label{
      color: gray;
    }

    /* Customize the label (the container) */
    .container {
      display: block;
      position: relative;
      padding-left: 25px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 14px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom radio button */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 15px;
      width: 15px;
      background-color: #eee;
      border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
      background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
      background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {

    }
  </style>

</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
          <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
          </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
              <div class="brand-logo">
                <a href="{{ url('/dashboard') }}">
                  <b class="logo-abbr"><img src="https://monstar-lab.com/global/wp-content/uploads/sites/11/2019/04/male-placeholder-image.jpeg" alt=""> </b>
                  <span class="logo-compact"><img src="{{ url(Auth()->user()->name) }}" alt=""></span>
                  <span class="brand-title">
                    <h4 style="color: #fff;" class="text-uppercase"><b>Dashboard</b></h4>
                  </span>
                </a>
              </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">    
              <div class="header-content clearfix">

                <div class="nav-control">
                  <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                  </div>
                </div>
                <div class="header-left">
                  <div class="input-group icons">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                      <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                      </form>
                    </div>
                  </div>
                </div>
                <div class="header-right">
                  <ul class="clearfix">


                    <li class="icons dropdown">
                      <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="https://monstar-lab.com/global/wp-content/uploads/sites/11/2019/04/male-placeholder-image.jpeg" height="40" width="40" alt="">
                      </div>
                      <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                          <ul>
                            <li>
                              <a href="{{ url("/profile/".Auth()->user()->id) }}"><i class="icon-user"></i> <span>Profile</span></a>
                            </li>

                            <li><a href="{{ url("adminlogout") }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->


        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="nk-sidebar">           
              <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                  <li class="nav-label" style="color:gray;">Dashboard</li>

                  <li>
                    <a href="{{ url("/dashboard") }}" aria-expanded="false">
                      <i class="icon-speedometer  menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                  </li>

                  <li class="nav-label" style="color:gray;">Menu</li>


                  <li>
                    <a href="{{ url("managepage") }}" aria-expanded="false">
                      <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                    </a>
                  </li>


                  <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                      <i class="icon-grid menu-icon"></i><span class="nav-text">Categories</span>
                    </a>
                    <ul aria-expanded="false">
                      <li><a href="{{ url('/managecategories')}}">Categories</a></li>
                    </ul>
                  </li>


                  <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                      <i class="icon-grid menu-icon"></i><span class="nav-text">Sub Categories</span>
                    </a>
                    <ul aria-expanded="false">
                      <li><a href="{{ url('/managesubcategories')}}">Sub Categories</a></li>
                    </ul>
                  </li>


                  <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                      <i class="icon-grid menu-icon"></i><span class="nav-text">Products Info.</span>
                    </a>
                    <ul aria-expanded="false">
                      <li><a href="{{ url('/addproducts')}}">Products</a></li>
                      <li><a href="{{ url('/manageproducts')}}">Manage Products</a></li>
                    </ul>
                  </li>





                  <li>
                    <a href="{{ url("addsettings") }}" aria-expanded="false">
                      <i class="icon-settings menu-icon"></i><span class="nav-text">Website Settings</span>
                    </a>
                  </li>





                  <li class="nav-label" style="color:gray;">Profile</li>

                  <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                      <i class="icon-user menu-icon"></i><span class="nav-text">Profile</span>
                    </a>
                    <ul aria-expanded="false">
                      <li><a href="{{ url('/profile/'.Auth()->user()->id) }}">My Profile</a></li>
                    </ul>
                  </li>




                </ul>
              </div>
            </div>
        <!--**********************************
            Sidebar end
            ***********************************-->




            @yield('content')



          </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <script src="{{ asset("backend/admindashboard") }}/plugins/common/common.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/js/custom.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/js/settings.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/js/gleek.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/d3v3/index.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/topojson/topojson.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/raphael/raphael.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="{{ asset("backend/admindashboard") }}/plugins/chartist/js/chartist.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="{{ asset("backend/admindashboard") }}/js/dashboard/dashboard-1.js"></script>

        <script src="{{ asset("backend/admindashboard") }}/plugins/summernote/dist/summernote.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/summernote/dist/summernote-init.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
          @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
          }
          @endif
        </script>


        <script src="{{ asset("backend/admindashboard") }}/plugins/tables/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset("backend/admindashboard") }}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

        <style type="text/css">
          .dataTables_filter input{
            border:1px solid lightgray!important;
            height: 30px!important;
          }
        </style>

        <script type="text/javascript">
          (function($) {
            "use strict"

            new quixSettings({
              sidebarPosition: "fixed",
              headerPosition: "fixed"
            });

          })(jQuery);




        </script>

      </body>

      </html>