@extends('layouts.main')

@section('title')
    Chambres / Appartement
@stop

@section('styles')
    <link rel="stylesheet" href="/css/rooms.css">
@stop

@section('scripts')

    <script src="libraries/bootstrap/js/bootstrap.js"></script>
    <script src="js/rooms.js"></script>
@stop

@section('content')
    <!--header START-->
     <section class="header">
         <div class="main_container">
             <div class="row">
                 <div class="col-xs-6 languages">
                     <!--<ul>-->
                         <!--<li class="active"><a href="#">FR</a></li>-->
                         <!--<li><a href="#">EN</a></li>-->
                     <!--</ul>-->
                 </div>
             </div>
             <div class="row">
                 <div class="col-xs-12 header_menu">
                     <ul>
                         <li class="logo"><a href="/"><img src="img/logo.svg"></a></li>
                         <li><a href="/">Accueil</a></li>
                         <li><div class="header_separator"></div> <a href="{{url('hotel')}}">Hôtel</a></li>
                         <li class="active" id="nav_rooms"><div class="header_separator"></div> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                         <li><div class="header_separator"></div> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                         <li><div class="header_separator"></div> <a href="{{url('offers')}}">Offres / Packages</a></li>
                         {{--<li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
                         <li><div class="header_separator"></div> <a href="{{url('contact')}}">Contact</a></li>
                         {{--<li>--}}
                             {{--<!--<div class="news_block_icon">-->--}}
                                 {{--<!--<img src="/img/news_block_icon.png">-->--}}
                             {{--<!--</div>-->--}}
                             {{--<!--<div class="news_block">-->--}}
                                 {{--<!--<p>depeches-vous</p>-->--}}
                                 {{--<!--<span>Il nous reste plus que 5 chambres</span>-->--}}
                             {{--<!--</div>-->--}}
                         {{--</li>--}}
                     </ul>
                     <div class="header_rightside_btns">
                         <a href="#" class="header_login_btn">Connexion</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
    <!--header END-->

    {{--rooms type select START--}}
     <section class="rooms_types_section">
         <div class="main_container">
             <div class="row">
                 <div class="col-xs-12">
                     <ul class="rooms_types_buttons">
                         <li class="room_type" id="single_classic">
                             <h5>Single classique</h5>
                             {{--<a href="#">CHF 235.-</a>--}}
                             <a href="#"><img src="/img/rooms/gallery/single_classic_img1.jpg" /></a>
                         </li>
                         <li class="room_type" id="double_classic">
                             <h5>Double classique</h5>
                             {{--<a href="#">CHF 265.-</a>--}}
                             <a href="#"><img src="/img/rooms/gallery/double_classic_img1.jpg" /></a>
                         </li>
                         <li class="room_type" id="double_superior">
                             <h5>Double Supérieure</h5>
                             {{--<a href="#">CHF 295.-</a>--}}
                             <a href="#"><img src="/img/rooms/gallery/double_superior_img1.jpg" /></a>
                         </li>
                         <li class="room_type" id="triple">
                             <h5>Triple</h5>
                             {{--<a href="#">CHF 325.-</a>--}}
                             <a href="#"><img src="/img/rooms/gallery/triple_img2.jpg" /></a>
                         </li>
                         <li class="room_type" id="apartment">
                             <h5>Appartement</h5>
                             {{--<a href="#">CHF 590.-</a>--}}
                             <a href="#"><img src="/img/rooms/gallery/appartement_img5.jpg" /></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>
     {{--rooms type select END--}}

    <!--main content START-->
    <section class="main_section rooms_main_section">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-8">
                    {{--<div class="rooms_types_buttons">--}}
                        {{--<div class="room_type" id="single_classic">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_price_block">--}}
                                    {{--<span class="room_price">CHF 235.-</span>--}}
                                {{--</div>--}}
                                {{--<div class="room_type_name">--}}
                                    {{--<h5>Single classic</h5>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="room_type" id="double_classic">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_price_block">--}}
                                    {{--<span class="room_price">CHF 265.-</span>--}}
                                {{--</div>--}}
                                {{--<div class="room_type_name">--}}
                                    {{--<h5>Double classic</h5>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="room_type" id="double_superior">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_price_block">--}}
                                    {{--<span class="room_price">CHF 295.-</span>--}}
                                {{--</div>--}}
                                {{--<div class="room_type_name">--}}
                                    {{--<h5>Double Supérieur</h5>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="room_type" id="triple">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_price_block">--}}
                                    {{--<span class="room_price">CHF 325.-</span>--}}
                                {{--</div>--}}
                                {{--<div class="room_type_name">--}}
                                    {{--<h5>Triple</h5>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="room_type" id="apartment">--}}
                            {{--<a href="#">--}}
                                {{--<div class="room_price_block">--}}
                                    {{--<span class="room_price">CHF 590.-</span>--}}
                                {{--</div>--}}
                                {{--<div class="room_type_name">--}}
                                    {{--<h5>Appartement</h5>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="col-xs-1">--}}
                    {{--<div class="show_hide_sidebar_btn"></div>--}}
                {{--</div>--}}
                <div class="col-xs-4">
                    <div class="sidebar_parent">
                        {{--<div class="show_hide_sidebar_btn"></div>--}}
                        <div class="right_sidebar_container">
                            <div class="right_sidebar" id="rooms_introduction_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>Chambres / Appartement</h3>
                                <p>L’hôtel se compose de 25 chambres dont un appartement, entièrement rénovés en 2015, parfaitement insonorisés,
                                    équipés d’un mobilier cossu et d’une décoration aux couleurs reposantes et agréables. Les chambres sont spacieuses pouvant allier travail et détente.<br>
                                </p>
                            </div>

                            <div class="right_sidebar" id="single_classic_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>SINGLE CLASSIQUE</h3>
                                <p>Idéale pour un séjour de courte durée, pour une personne.</p>
                                <ul class="rooms_options_list">
                                    <li class="room_icon_surface"> Chambre de 13m<sup>2</sup></li>
                                    <li class="room_icon_mattress"> Matelas confortable de 28 cm d’épaisseur</li>
                                    <li class="room_icon_bed"> Un lit de 160 cm x 200cm</li>
                                    <li class="room_icon_ac"> Climatisé</li>
                                    <li class="room_icon_non_smoking"> Chambres non fumeur</li>
                                    <li class="room_icon_tv"> TV écran LCD 82 cm avec chaînes câblées</li>
                                    <li class="room_icon_working_space"> Espace de travail</li>
                                    <li class="room_icon_wifi"> Wifi gratuit</li>
                                    <li class="room_icon_nespresso"> Machine à café Nespresso avec 1 capsule et un sachet d’infusion offerts</li>
                                    <li class="room_icon_minibar"> Minibar avec soda et snacks</li>
                                    <li class="room_icon_safe"> Coffre-fort avec emplacement pour laptop</li>
                                    <li class="room_icon_bath"> Salle de bain avec douche</li>
                                    <li class="room_icon_hair_dryer"> Sèche cheveux</li>
                                </ul>

                                <div id="img_carousel_triple" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img photo_number="single_classic_img1" src="/img/rooms/gallery/single_classic_img1.jpg" >
                                            <img photo_number="single_classic_img2" src="/img/rooms/gallery/single_classic_img2.jpg" >
                                            <img photo_number="single_classic_img3" src="/img/rooms/gallery/single_classic_img3.jpg" >
                                        </div>
                                    </div>
                                    {{--<a class="left carousel-control" href="#img_carousel_triple" role="button" data-slide="prev">--}}
                                        {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                                    {{--</a>--}}
                                    {{--<a class="right carousel-control" href="#img_carousel_triple" role="button" data-slide="next">--}}
                                        {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                                    {{--</a>--}}
                                </div>
                            </div>

                            <div class="right_sidebar" id="double_classic_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>DOUBLE CLASSIQUE</h3>
                                <p>Idéale pour une ou deux personnes.</p>
                                <ul class="rooms_options_list">
                                    <li class="room_icon_surface"> Chambre de 15m<sup>2</sup> à 18m<sup>2</sup></li>
                                    <li class="room_icon_mattress"> Matelas confortable de 28 cm d’épaisseur</li>
                                    <li class="room_icon_bed"> A choix, deux lits jumeaux de 90 cm x 200 cm ou un grand lit 160 cm x 200cm</li>
                                    <li class="room_icon_ac"> Climatisé</li>
                                    <li class="room_icon_non_smoking"> Chambres non fumeur</li>
                                    <li class="room_icon_tv"> TV écran LCD 82 cm avec chaînes câblées</li>
                                    <li class="room_icon_working_space"> Espace de travail</li>
                                    <li class="room_icon_wifi"> Wifi gratuit</li>
                                    <li class="room_icon_nespresso"> Machine à café Nespresso avec 1 capsule et un sachet d’infusion offerts</li>
                                    <li class="room_icon_minibar"> Minibar avec soda et snacks</li>
                                    <li class="room_icon_safe"> Coffre-fort avec emplacement pour laptop</li>
                                    <li class="room_icon_bath"> Salle de bain avec douche</li>
                                    <li class="room_icon_hair_dryer"> Sèche cheveux</li>
                                </ul>

                                {{--<div class="flexslider">--}}
                                    {{--<ul class="slides room_photos_list">--}}
                                        {{--<li>--}}
                                            {{--<img photo_number="double_classic_img1" src="/img/rooms/gallery/double_classic_img1.jpg" >--}}
                                            {{--<img photo_number="double_classic_img2" src="/img/rooms/gallery/double_classic_img2.jpg" >--}}
                                            {{--<img photo_number="double_classic_img3" src="/img/rooms/gallery/double_classic_img3.jpg" >--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img photo_number="double_classic_img5" src="/img/rooms/gallery/double_classic_img5.jpg" >--}}
                                            {{--<img photo_number="double_classic_img6" src="/img/rooms/gallery/double_classic_img6.jpg" >--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                <div id="img_carousel_double_classic" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img photo_number="double_classic_img1" src="/img/rooms/gallery/double_classic_img1.jpg" >
                                            <img photo_number="double_classic_img2" src="/img/rooms/gallery/double_classic_img2.jpg" >
                                            <img photo_number="double_classic_img3" src="/img/rooms/gallery/double_classic_img3.jpg" >
                                        </div>
                                        <div class="item">
                                            <img photo_number="double_classic_img5" src="/img/rooms/gallery/double_classic_img5.jpg" >
                                            <img photo_number="double_classic_img6" src="/img/rooms/gallery/double_classic_img6.jpg" >
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#img_carousel_double_classic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    </a>
                                    <a class="right carousel-control" href="#img_carousel_double_classic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="right_sidebar" id="double_superior_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>DOUBLE SUPÉRIEURE</h3>
                                <p>Chambre spacieuse pouvant accueillir de 1 à 3 adultes ou maximum 2 adultes et 2 enfants.</p>
                                <ul class="rooms_options_list">
                                    <li class="room_icon_surface"> Chambre de 20m<sup>2</sup></li>
                                    <li class="room_icon_mattress"> Matelas confortable de 28 cm d’épaisseur</li>
                                    <li class="room_icon_bed"> Deux lits jumeaux de 90 cm x 200 cm et un canapé-lit</li>
                                    <li class="room_icon_ac"> Climatisé</li>
                                    <li class="room_icon_non_smoking"> Chambres non fumeur</li>
                                    <li class="room_icon_tv"> TV écran LCD 82 cm avec chaînes câblées</li>
                                    <li class="room_icon_working_space"> Espace de travail</li>
                                    <li class="room_icon_wifi"> Wifi gratuit</li>
                                    <li class="room_icon_nespresso"> Machine à café Nespresso avec 1 capsule et un sachet d’infusion offerts</li>
                                    <li class="room_icon_minibar"> Minibar avec soda et snacks</li>
                                    <li class="room_icon_safe"> Coffre-fort avec emplacement pour laptop</li>
                                    <li class="room_icon_bath"> Salle de bain avec douche</li>
                                    <li class="room_icon_hair_dryer"> Sèche cheveux</li>
                                </ul>

                                <div id="img_carousel_double_superior" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img photo_number="double_superior_img1" src="/img/rooms/gallery/double_superior_img1.jpg" >
                                            <img photo_number="double_superior_img2" src="/img/rooms/gallery/double_superior_img2.jpg" >
                                            <img photo_number="double_superior_img3" src="/img/rooms/gallery/double_superior_img3.jpg" >
                                        </div>
                                        <div class="item">
                                            <img photo_number="double_superior_img4" src="/img/rooms/gallery/double_superior_img4.jpg" >
                                            <img photo_number="double_superior_img5" src="/img/rooms/gallery/double_superior_img5.jpg" >
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#img_carousel_double_superior" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    </a>
                                    <a class="right carousel-control" href="#img_carousel_double_superior" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="right_sidebar" id="triple_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>TRIPLE</h3>
                                <p>Chambre spacieuse pouvant accueillir de 1 à 3 personnes.</p>
                                <ul class="rooms_options_list">
                                    <li class="room_icon_surface"> Chambre de 23m<sup>2</sup></li>
                                    <li class="room_icon_mattress"> Matelas confortable de 28 cm d’épaisseur</li>
                                    <li class="room_icon_bed"> Deux lits jumeaux de 90 cm x 200 cm et un canapé-lit</li>
                                    <li class="room_icon_ac"> Climatisé</li>
                                    <li class="room_icon_non_smoking"> Chambres non fumeur</li>
                                    <li class="room_icon_tv"> TV écran LCD 82 cm avec chaînes câblées</li>
                                    <li class="room_icon_working_space"> Espace de travail</li>
                                    <li class="room_icon_wifi"> Wifi gratuit</li>
                                    <li class="room_icon_nespresso"> Machine à café Nespresso avec 1 capsule et un sachet d’infusion offerts</li>
                                    <li class="room_icon_minibar"> Minibar avec soda et snacks</li>
                                    <li class="room_icon_safe"> Coffre-fort avec emplacement pour laptop</li>
                                    <li class="room_icon_bath"> Salle de bain avec douche</li>
                                    <li class="room_icon_hair_dryer"> Sèche cheveux</li>
                                </ul>

                                <div id="img_carousel_triple" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img photo_number="triple_img1" src="/img/rooms/gallery/triple_img1.jpg" >
                                            <img photo_number="triple_img2" src="/img/rooms/gallery/triple_img2.jpg" >
                                            <img photo_number="triple_img3" src="/img/rooms/gallery/triple_img3.jpg" >
                                        </div>
                                    </div>
                                    {{--<a class="left carousel-control" href="#img_carousel_triple" role="button" data-slide="prev">--}}
                                        {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                                    {{--</a>--}}
                                    {{--<a class="right carousel-control" href="#img_carousel_triple" role="button" data-slide="next">--}}
                                        {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                                    {{--</a>--}}
                                </div>
                            </div>

                            <div class="right_sidebar" id="apartment_right_sidebar">
                                <div class="page_icon"></div>
                                <h3>APPARTEMENT</h3>
                                <p>Il est composé de deux chambres avec chacune leur salle de bain et d'un hall avec cuisine équipée.</p>
                                <ul class="rooms_options_list">
                                    <li class="room_icon_mattress"> Matelas confortable de 28 cm d’épaisseur</li>
                                    <li class="room_icon_bed1"> Chambre 1 : Deux lits jumeaux de 90 cm x 200 cm et un canapé-lit</li>
                                    <li class="room_icon_bed"> Chambre 2 : Un lit de 160 cm x 200cm</li>
                                    <li class="room_icon_ac"> Climatisé</li>
                                    <li class="room_icon_non_smoking"> Chambres non fumeur</li>
                                    <li class="room_icon_tv"> TV écran LCD 82 cm avec chaînes câblées</li>
                                    <li class="room_icon_working_space"> Espace de travail</li>
                                    <li class="room_icon_wifi"> Wifi gratuit</li>
                                    <li class="room_icon_nespresso"> Machine à café Nespresso avec 1 capsule et un sachet d’infusion offerts</li>
                                    <li class="room_icon_minibar"> Minibar avec soda et snacks</li>
                                    <li class="room_icon_safe"> Coffre-fort avec emplacement pour laptop</li>
                                    <li class="room_icon_hair_dryer"> Sèche cheveux</li>
                                </ul>

                                <div id="img_carousel_appartement" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img photo_number="appartement_img1" src="/img/rooms/gallery/appartement_img1.jpg" >
                                            <img photo_number="appartement_img2" src="/img/rooms/gallery/appartement_img2.jpg" >
                                            <img photo_number="appartement_img3" src="/img/rooms/gallery/appartement_img3.jpg" >
                                        </div>
                                        <div class="item">
                                            <img photo_number="appartement_img4" src="/img/rooms/gallery/appartement_img4.jpg" >
                                            <img photo_number="appartement_img5" src="/img/rooms/gallery/appartement_img5.jpg" >
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#img_carousel_appartement" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    </a>
                                    <a class="right carousel-control" href="#img_carousel_appartement" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </div>
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
@stop