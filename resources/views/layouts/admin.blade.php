<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/admins/img/favicon.png') }}">

    <title>Hotel Admin @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/admins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admins/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('/admins/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('/admins/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/admins/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/admins/js/html5shiv.js') }}"></script>
      <script src="{{ asset('/admins/js/respond.min.js') }}"></script>
    <![endif]-->

    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
    <script src="{{ asset('/admins/js/angular/app.js') }}"></script>
  </head>

<body class="full-width">
    <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars"></span>
              </button>

              <!--logo start-->
              <a href="{{url('admin')}}" class="logo" >Hotel Rousseau <span>Admin</span></a>
              <!--logo end-->
              <div class="horizontal-menu navbar-collapse collapse ">
                  <ul class="nav navbar-nav">
                      <li><a href="{{url('admin')}}">Dashboard</a></li>
                      <li class="active"><a href="{{url('admin/rooms')}}">Rooms</a></li>
                      <li><a href="{{url('admin/rooms')}}">Reservations</a></li>
                      <li><a href="{{url('admin/rooms')}}">Vouchers</a></li>
                      <li><a href="{{url('admin/rooms')}}">Special offers</a></li>
                      <li class="dropdown">
                          <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Extra <b class=" fa fa-angle-down"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="blank.html">Blank Page</a></li>
                              <li><a href="boxed_page.html">Boxed Page</a></li>
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="invoice.html">Invoice</a></li>
                              <li><a href="search_result.html">Search Result</a></li>
                              <li><a href="404.html">404 Error Page</a></li>
                              <li><a href="500.html">500 Error Page</a></li>
                          </ul>
                      </li>
                  </ul>

              </div>
              <div class="top-nav ">
                  <ul class="nav pull-right top-menu">
                      <li>
                          <input type="text" class="form-control search" placeholder=" Search">
                      </li>
                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <img alt="" src="/admins/img/avatar1_small.jpg">
                              <span class="username">{{ Auth::user()->name }}</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                              <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                              <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                              <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
              </div>

          </div>

      </header>
      <!--header end-->
      <!--sidebar start-->

      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              @yield('content')
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; Hotel Rousseau
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
    </section>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/admins/js/jquery.js') }}"></script>
    <script src="{{ asset('/admins/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('/admins/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('/admins/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/admins/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admins/js/respond.min.js') }}" ></script>

    <!--common script for all pages-->
    <script src="{{ asset('/admins/js/common-scripts.js') }}"></script>



</body>
</html>
