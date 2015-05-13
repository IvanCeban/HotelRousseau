<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HR Chambres</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/libraries/flexSlider/css/flexslider.css">
    <link rel="stylesheet" href="/css/forms_style.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/common_styles.css">
    <link rel="stylesheet" href="/css/rooms.css">

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
                        <a href="index.php"><img src="/img/logo.jpg"></a>
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
                <div class="col-xs-7">
                    <div class="rooms_types_buttons">
                        <div class="room_type">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 235.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Single classic</h5>
                                </div>
                            </a>
                        </div>
                        <div class="room_type">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 265.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Double classic</h5>
                                </div>
                            </a>
                        </div>
                        <br>
                        <div class="room_type">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 295.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Double Supérieur</h5>
                                </div>
                            </a>
                        </div>
                        <div class="room_type">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 325.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Triple</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambre <br> Simple</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price">66 EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambre <br> Double</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price">72 EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambre <br> Simple</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price">66 EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambre <br> Double</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price">72 EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambre <br> Triple</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price">94 EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-5">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_type">--}}
                                    {{--<h5>Chambres <br> Communicantes</h5>--}}
                                    {{--<span>De</span>--}}
                                    {{--<span class="room_price"> EUR</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="col-xs-1">
                    <div class="show_hide_sidebar_btn"></div>
                </div>
                <div class="col-xs-4 right_sidebar_container">
                    <div class="right_sidebar">
                        <h3>Chambres / Appartement</h3>
                        <p>Nouvelles Chambres et appartement équipés de:</p>
                        <ul class="rooms_options_list">
                            <li>- télévision à écran plat</li>
                            <li>- Wi-Fi gratuit,</li>
                            <li>- machine à café Nespresso</li>
                            <li>- bureau</li>
                            <li>- minibar</li>
                            <li>- coffre-fort</li>
                            <li>- salle de bain</li>
                            <li>- sèche cheveux</li>
                        </ul>
                        <p>Confort et espace pour allier travail et détente.</p>

                        <h3>Single</h3>
                        <span>1 lit simple - 1 personne </span>
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img photo_number="1" src="/img/rooms/gallery/1.jpg">
                                    <img photo_number="2" src="/img/rooms/gallery/2.jpg">
                                    <img photo_number="3" src="/img/rooms/gallery/3.jpg">
                                </li>
                                <li>
                                    <img photo_number="2" src="/img/rooms/gallery/2.jpg">
                                    <img photo_number="3" src="/img/rooms/gallery/3.jpg">
                                    <img photo_number="4" src="/img/rooms/gallery/4.jpg">
                                </li>
                                <li>
                                    <img photo_number="3" src="/img/rooms/gallery/3.jpg">
                                    <img photo_number="4" src="/img/rooms/gallery/4.jpg">
                                </li>
                            </ul>
                        </div>
                        {{--<ul class="room_photos_list">--}}
                            {{--<li><img photo_number="1" src="/img/rooms/gallery/1.jpg"> </li>--}}
                            {{--<li><img photo_number="2" src="/img/rooms/gallery/2.jpg"> </li>--}}
                            {{--<li><img photo_number="3" src="/img/rooms/gallery/3.jpg"> </li>--}}
                            {{--<li><img photo_number="4" src="/img/rooms/gallery/4.jpg"> </li>--}}
                        {{--</ul>--}}
                        {{--<div class="sidebar_purple_line"></div>--}}
                        {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
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

<script src="/libraries/jquery/jquery-1.11.1.min.js"></script>
<script src="/libraries/jquery/jquery-ui-1.11.2.min.js"></script>
<script src="/libraries/flexSlider/js/flexslider.js"></script>
<script src="/js/common.js"></script>
<script src="/js/rooms.js"></script>

</body>
</html>