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

    @yield('styles')

    <!-- Custom styles for this template -->
    <link href="{{ asset('/admins/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/admins/css/style-responsive.css') }}" rel="stylesheet" />

    <link href="{{ asset('/admins/css/sweetalert.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/admins/js/html5shiv.js') }}"></script>
      <script src="{{ asset('/admins/js/respond.min.js') }}"></script>
    <![endif]-->
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
              <a href="{{url('admin')}}" class="logo" >HR <span>Admin</span></a>
              <!--logo end-->
              <div class="horizontal-menu navbar-collapse collapse ">
                  <ul class="nav navbar-nav">
                      <li class="@if(Request::url() === url('admin')) active @endif"><a href="{{url('admin')}}">Dashboard</a></li>
                      <li class="@if(Request::url() === url('admin/room-types')) active @endif"><a href="{{route('admin.room-types.index')}}">Room types</a></li>
                      <li class="@if(Request::url() === url('admin/rooms')) active @endif"><a href="{{route('admin.rooms.index')}}">Rooms</a></li>
                      <li class="@if(Request::url() === url('admin/reservations')) active @endif"><a href="{{route('admin.reservations.index')}}">Reservations</a></li>
                      {{--<li class="@if(Request::url() === url('admin/roomsapp')) active @endif"><a href="{{url('admin/roomsapp')}}">Rooms</a></li>
                      <li class="@if(Request::url() === url('admin/roomtypesapp')) active @endif"><a href="{{url('admin/roomtypesapp')}}">Room Types</a></li>
                      <li class="@if(Request::url() === url('admin/reservationsapp')) active @endif"><a href="{{url('admin/reservationsapp')}}">Reservations</a></li>--}}
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
                              <img height="29" alt="" src="/{{ !empty(Auth::user()->photo) ? Auth::user()->photo : 'admins/img/no-photo-available-hi.png' }}">
                              <span class="username">{{ Auth::user()->name }}</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li><a href="{{url('admin/profileapp')}}"><i class=" fa fa-suitcase"></i>Profile</a></li>
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
              @include('backend.partials.alerts')
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
    <script src="{{ asset('/admins/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admins/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('/admins/js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('/admins/js/jquery.customSelect.min.js') }}" ></script>
    <script src="{{ asset('/admins/js/respond.min.js') }}" ></script>

    <!--common script for all pages-->
    <script src="{{ asset('/admins/js/common-scripts.js') }}"></script>
    <script src="{{ asset('/admins/js/gritter.js') }}" type="text/javascript"></script>

    <script src="{{ asset('/admins/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('/admins/js/helpers.js') }}"></script>

    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-0.12.1.min.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-tpls-0.12.1.js') }}"></script>
    @yield('scripts')

    @if (session('success.message'))
        <script>
            $(function () {
                showMessage("{!! addcslashes(session('success.message'), '"') !!}", 'success');
            });
        </script>
    @endif
    @if (session('error.message'))
        <script>
            $(function () {
                showMessage("{!! addcslashes(session('error'), '"') !!}", 'error');
            });
        </script>
    @endif

</body>
</html>
