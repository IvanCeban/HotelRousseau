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
    <link rel="stylesheet" href="css/media_queries.css">

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
                        <a href="/"><img src="/img/logo.jpg"></a>
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
                        <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('rooms_introduction')}}">Chambres / Appartement</a></li>
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
    <section class="rooms_main_section">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-8">
                    <div class="rooms_types_buttons">
                        <div class="room_type active" id="single_classic">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 235.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Single classic</h5>
                                </div>
                            </a>
                        </div>
                        <div class="room_type" id="double_classic">
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
                        <div class="room_type" id="double_superior">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 295.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Double Supérieur</h5>
                                </div>
                            </a>
                        </div>
                        <div class="room_type" id="triple">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 325.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Triple</h5>
                                </div>
                            </a>
                        </div>
                        <br>
                        <div class="room_type" id="apartment">
                            <a href="#">
                                <div class="room_price_block">
                                    <span class="room_price">CHF 590.-</span>
                                </div>
                                <div class="room_type_name">
                                    <h5>Appartement</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-xs-1">--}}
                    {{--<div class="show_hide_sidebar_btn"></div>--}}
                {{--</div>--}}
                <div class="col-xs-4">
                    <div class="sidebar_parent">
                        <div class="show_hide_sidebar_btn"></div>
                        <div class="right_sidebar_container">
                            <div class="right_sidebar" id="single_classic_right_sidebar">
                                <img class="page_icon" src="/img/rooms/rooms_right_sidebar_icon.png">
                                <h3>Chambre Classic Single</h3>
                                <p>Chambre équipée de :</p>
                                <ul class="rooms_options_list">
                                    <li>- Télévision à écran plat</li>
                                    <li>- Wi-Fi accès gratuit,</li>
                                    <li>- Machine à café Nespresso</li>
                                    <li>- Bureau</li>
                                    <li>- Minibar</li>
                                    <li>- Coffre-fort</li>
                                    <li>- Salle de douche</li>
                                    <li>- Sèche cheveux</li>
                                    <li>- De 17 à 20 m<sup>2</sup></li>
                                </ul>
                                <p>Confort et espace pour allier travail et détente.</p>

                                {{--<h4>Single</h4>--}}
                                {{--<span>1 lit simple - 1 personne </span>--}}
                                <div class="flexslider">
                                    <ul class="slides room_photos_list">
                                        <li>
                                            <img photo_number="011" src="/img/rooms/gallery/011.jpg">
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="sidebar_purple_line"></div>--}}
                                {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
                            </div>

                            <div class="right_sidebar" id="double_classic_right_sidebar">
                                <img class="page_icon" src="/img/rooms/rooms_right_sidebar_icon.png">
                                <h3>Chambre Classic Double</h3>
                                <p>Chambre équipée de :</p>
                                <ul class="rooms_options_list">
                                    <li>- Télévision à écran plat</li>
                                    <li>- Wi-Fi accès gratuit,</li>
                                    <li>- Machine à café Nespresso</li>
                                    <li>- Bureau</li>
                                    <li>- Minibar</li>
                                    <li>- Coffre-fort</li>
                                    <li>- Salle de douche</li>
                                    <li>- Sèche cheveux</li>
                                    <li>- De 17 à 20 m<sup>2</sup></li>
                                </ul>
                                <p>Confort et espace pour allier travail et détente.</p>

                                {{--<h4>Single</h4>--}}
                                {{--<span>1 lit simple - 1 personne </span>--}}
                                <div class="flexslider">
                                    <ul class="slides room_photos_list">
                                        <li>
                                            <img photo_number="011" src="/img/rooms/gallery/011.jpg">
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="sidebar_purple_line"></div>--}}
                                {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
                            </div>

                            <div class="right_sidebar" id="double_superior_right_sidebar">
                                <img class="page_icon" src="/img/rooms/rooms_right_sidebar_icon.png">
                                <h3>Chambre Classic Supérieure</h3>
                                <p>Chambre équipée de :</p>
                                <ul class="rooms_options_list">
                                    <li>- Télévision à écran plat</li>
                                    <li>- Wi-Fi accès gratuit,</li>
                                    <li>- Machine à café Nespresso</li>
                                    <li>- Bureau</li>
                                    <li>- Minibar</li>
                                    <li>- Coffre-fort</li>
                                    <li>- Salle de douche</li>
                                    <li>- Sèche cheveux</li>
                                    <li>- 25 m<sup>2</sup> avec son coin salon</li>
                                </ul>
                                <p>Confort et espace pour allier travail et détente.</p>

                                {{--<h4>Single</h4>--}}
                                {{--<span>1 lit simple - 1 personne </span>--}}
                                <div class="flexslider">
                                    <ul class="slides room_photos_list">
                                        <li>
                                            <img photo_number="002" src="/img/rooms/gallery/002.jpg">
                                            <img photo_number="008" src="/img/rooms/gallery/008.jpg">
                                            <img photo_number="023" src="/img/rooms/gallery/023.jpg">
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="sidebar_purple_line"></div>--}}
                                {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
                            </div>

                            <div class="right_sidebar" id="triple_right_sidebar">
                                <img class="page_icon" src="/img/rooms/rooms_right_sidebar_icon.png">
                                <h3>Chambre Triple</h3>
                                <p>Chambre équipée de :</p>
                                <ul class="rooms_options_list">
                                    <li>- Télévision à écran plat</li>
                                    <li>- Wi-Fi accès gratuit,</li>
                                    <li>- Machine à café Nespresso</li>
                                    <li>- Bureau</li>
                                    <li>- Minibar</li>
                                    <li>- Coffre-fort</li>
                                    <li>- Salle de douche</li>
                                    <li>- Sèche cheveux</li>
                                    <li>- 25 à 30 m<sup>2</sup>, vraie couchage</li>
                                </ul>
                                <p>Confort et espace pour allier travail et détente.</p>

                                {{--<h4>Single</h4>--}}
                                {{--<span>1 lit simple - 1 personne </span>--}}
                                <div class="flexslider">
                                    <ul class="slides room_photos_list">
                                        <li>
                                            <img photo_number="024" src="/img/rooms/gallery/024.jpg">
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="sidebar_purple_line"></div>--}}
                                {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
                            </div>

                            <div class="right_sidebar" id="apartment_right_sidebar">
                                <img class="page_icon" src="/img/rooms/rooms_right_sidebar_icon.png">
                                <h3>Appartement</h3>
                                <p>Chambre équipée de :</p>
                                <ul class="rooms_options_list">
                                    <li>- Télévision à écran plat</li>
                                    <li>- Wi-Fi accès gratuit,</li>
                                    <li>- Machine à café Nespresso</li>
                                    <li>- Bureau</li>
                                    <li>- Minibar</li>
                                    <li>- Coffre-fort</li>
                                    <li>- Salle de douche</li>
                                    <li>- Sèche cheveux</li>
                                    <li>- Entrée de 8m<sup>2</sup></li>
                                    <li>- Cuisine équipée de 8m<sup>2</sup></li>
                                </ul>
                                <p>Confort et espace pour allier travail et détente.</p>

                                {{--<h4>Single</h4>--}}
                                {{--<span>1 lit simple - 1 personne </span>--}}
                                <div class="flexslider">
                                    <ul class="slides room_photos_list">
                                        <li>
                                            <img photo_number="006" src="/img/rooms/gallery/006.jpg">
                                            <img photo_number="015" src="/img/rooms/gallery/015.jpg">
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="sidebar_purple_line"></div>--}}
                                {{--<button type="button" class="book_the_room_button">Réserves dès maintenant</button>--}}
                            </div>
                        </div>
                        {{--<div class="clearfix"></div>--}}
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
<script src="/libraries/flexSlider/js/flexslider.js"></script>
<script src="/js/common.js"></script>
<script src="/js/rooms.js"></script>

</body>
</html>