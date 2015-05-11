<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HR Restaurant</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/forms_style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/common_styles.css">
    <link rel="stylesheet" href="css/restaurant.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="main_wrapper">

    <!--header START-->
    <section class="header">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-xs-6 languages">
                    <ul>
                        <li class="active"><a href="#">FR</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 header_menu">
                    <ul>
                        <li class="active"><a href="#">Hotel</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="#">Offres / Packages</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="#">Centre bien-etre / Lousiris</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('contact')}}">Contact</a></li>
                        <li>
                            <div class="news_block_icon">
                                <img src="/img/news_block_icon.png">
                            </div>
                            <div class="news_block">
                                <p>depeches-vous</p>
                                <span>Il nous reste plus que 5 chambres</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--header END-->

    <!--main content START-->
    <section class="rooms_main_section">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-push-8 col-xs-4">
                    <div class="right_sidebar">
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                        blablabla<br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main content END-->

    <!--footer START-->
    <section class="footer">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="copyright">&copy;2015 Hotel Rousseau</li>
                        <li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Plan du site</a></li>
                        <li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Mentions legales</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--footer END-->

</div>

<script src="libraries/jquery/jquery-1.11.1.min.js"></script>
<script src="libraries/jquery/jquery-ui-1.11.2.min.js"></script>
<script src="js/common.js"></script>

</body>
</html>