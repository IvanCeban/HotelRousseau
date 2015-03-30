<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/admins/img/favicon.png') }}">

    <title>Hotels @yield('title')</title>

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
</head>

  <body class="login-body">

    <div class="container">

        @yield('content')

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/admins/js/jquery.js') }}"></script>
    <script src="{{ asset('/admins/js/bootstrap.min.js') }}"></script>


  </body>
</html>