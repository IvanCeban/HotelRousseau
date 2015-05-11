<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HR Home</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="libraries/selectBoxIt/css/selectBoxIt.css">
    <link rel="stylesheet" href="libraries/flexSlider/css/flexslider.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/forms_style.css">
    <link rel="stylesheet" href="css/common_styles.css">
    <link rel="stylesheet" href="css/index.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="//use.typekit.net/azj4qhr.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>

<body>

<div class="main_wrapper">

    <!--header START-->
    <section class="header">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo">
                        <a href="/"><img src="img/logo.jpg"></a>
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

    <!--middle section START-->
    <section class="middle">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="search_block">
                        <div class="search_block_header">
                            <h1>Reservation en ligne</h1>
                            <img src="/img/homepage/search_block_arrow.png">
                        </div>
                        <div class="search_block_line"></div>
                        <form>
                            <div class="row">
                                <div class="col-xs-6 date_of_coming">
                                    <p>Date de debut</p>
                                    <input type="date" name="in">
                                </div>
                                <div class="col-xs-6 date_of_leaving">
                                    <p>Date de fin</p>
                                    <input type="date" name="out">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 num_of_adults">
                                    <p>Adultes</p>
                                    <select name="adultes">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 num_of_kids">
                                    <p>Enfants</p>
                                    <select name="kids">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search_block_separator_line"></div>
                            <div class="row">
                                <div class="col-xs-12 age_of_kids">
                                    <p>Age des enfants a la fin du sejur</p>
                                    <select name="age1">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age2">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age3">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age4">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="text" name="promo_code" placeholder="Code promotionel" class="search_block_promo_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="search_block_results_button">Verifier les disponibilies</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--middle section END-->

    <!--offers and news START-->
    <section class="offers_and_news">
        <div class="main_container">
            <div class="row">
                <div class="col-md-6 offers">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="row">
                                    <div class="col-xs-5 offer_img">
                                        <img src="/img/homepage/offers/1.jpg">
                                    </div>
                                    <div class="col-xs-6 offer_short_info">
                                        <h3>Graida atcur ecuus istique</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>
                                        <span class="offer_price">135.-CHF</span>
                                        <button type="button" class="offer_more_info_button">Plus d'information</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-5 offer_img">
                                        <img src="/img/homepage/offers/1.jpg">
                                    </div>
                                    <div class="col-xs-6 offer_short_info">
                                        <h3>Graida atcur ecuus istique</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>
                                        <span class="offer_price">135.-CHF</span>
                                        <button type="button" class="offer_more_info_button">Plus d'information</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-5 offer_img">
                                        <img src="/img/homepage/offers/1.jpg">
                                    </div>
                                    <div class="col-xs-6 offer_short_info">
                                        <h3>Graida atcur ecuus istique</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>
                                        <span class="offer_price">135.-CHF</span>
                                        <button type="button" class="offer_more_info_button">Plus d'information</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 news">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="row">
                                    <div class="col-xs-11">
                                        <h3>Elituris ferentum tuma</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.
                                            Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-11">
                                        <h3>Elituris ferentum tuma</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.
                                            Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-11">
                                        <h3>Elituris ferentum tuma</h3>
                                        <div class="offer_blue_line"></div>
                                        <span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>
                                        <p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.
                                            Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offers and news START-->

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

<!--Scripts start-->
<script src="libraries/jquery/jquery-1.11.1.min.js"></script>
<script src="libraries/jquery/jquery-ui-1.11.2.min.js"></script>
<script src="libraries/selectBoxIt/js/selectBoxIt.js"></script>
<script src="libraries/flexSlider/js/flexslider.js"></script>
<script src="js/common.js"></script>
<script src="js/index.js"></script>
</body>
</html>