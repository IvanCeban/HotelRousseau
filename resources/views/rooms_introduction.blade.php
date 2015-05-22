<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HR Rooms preview</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/libraries/selectBoxIt/css/selectBoxIt.css">
    <!--    <link rel="stylesheet" href="libraries/flexSlider/css/flexslider.css">-->
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/forms_style.css">
    <link rel="stylesheet" href="/css/common_styles.css">
    <link rel="stylesheet" href="/css/hotel.css">
    <link rel="stylesheet" href="/css/media_queries.css">

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
                        <a href="/resources/views/index.blade.php"><img src="/img/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-xs-6 languages">
                    {{--<ul>--}}
                        {{--<li class="active"><a href="#">FR</a></li>--}}
                        {{--<li><a href="#">EN</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 header_menu">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('hotel')}}">Hotel</a></li>
                        <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Lousiris</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('contact')}}">Contact</a></li>
                        <li>
                            {{--<div class="news_block_icon">--}}
                                {{--<img src="/img/news_block_icon.png">--}}
                            {{--</div>--}}
                            {{--<div class="news_block">--}}
                                {{--<p>depeches-vous</p>--}}
                                {{--<span>Il nous reste plus que 5 chambres</span>--}}
                            {{--</div>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--header END-->


    <!--main content START-->
        <section class="main_section">
            <div class="main_container">
                <div class="row">
                    <div class="col-xs-1">
                        {{--<div id="close" style="height: 50px; width: 50px; background: brown; margin-top: 500px"></div>--}}
                    </div>
                    <div class="col-xs-push-7 col-xs-4">
                        <div class="sidebar_parent">
                            <div class="show_hide_sidebar_btn"></div>
                            <div class="right_sidebar_container">
                                <div class="right_sidebar">
                                    <img class="page_icon" src="/img/hotel/hotel_right_sidebar_icon.png">
                                    <h3>Chambres / Appartement</h3>
                                    <p>Chambres entièrement rénovées, meubles robustes et sobres, plate-forme lumineuse en guise de plafonnier, tête de lit avec led,
                                    veilleuses, liseuses, un jeux de lumière qui vous procure une grande luminosité mais aussi qui vous permet de tamiser à désir afin
                                    d’apporter la touche qui conviendra à l’ambiance que vous souhaité, enfin les couleurs douces et  reposantes  du plancher,
                                    des meubles rideaux et jetée de lit font de nos chambres un espace chaleureux et cosy ou il fait bon allier le travail et la détente.<br>
                                       <br>Installez-vous et sentez-vous chez vous.<br>
                                    </p>
                                </div>
                            </div>
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
                        <li class="copyright">&copy; 2015 Hotel Rousseau</li>
                        {{--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Plan du site</a></li>--}}
                        {{--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Mentions legales</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--footer END-->

</div>

<script src="/libraries/jquery/jquery-1.11.1.min.js"></script>
<script src="/libraries/jquery/jquery-ui-1.11.2.min.js"></script>
{{--<script src="/libraries/selectBoxIt/js/selectBoxIt.js"></script>--}}
<script src="/js/common.js"></script>

{{--<script src="/js/contact.js"></script>--}}
</body>
</html>