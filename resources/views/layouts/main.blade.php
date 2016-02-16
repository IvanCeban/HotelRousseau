<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Hôtel Rousseau Genève - @yield('title')</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="libraries/selectBoxIt/css/selectBoxIt.css">
    <link rel="stylesheet" href="libraries/flexSlider/css/flexslider.css">
    <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/forms_style.css">
    <link rel="stylesheet" href="css/common_styles.css">



    @yield('styles')
    <link rel="stylesheet" href="css/media_queries.css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="main_wrapper">

    @yield('content')

</div>

<!--Scripts start-->
<script src="libraries/jquery/jquery-1.11.1.min.js"></script>
<script src="libraries/jquery/jquery-ui-1.11.2.min.js"></script>
<script src="libraries/selectBoxIt/js/selectBoxIt.js"></script>
<script src="libraries/flexSlider/js/flexslider.js"></script>


<script src="js/common.js"></script>


@yield('scripts')


</body>
</html>