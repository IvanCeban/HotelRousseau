@extends('layouts.main')

@section('title')
    Hotel
@stop

@section('styles')
    <link rel="stylesheet" href="/css/hotel.css">
    <script src="libraries/slidesJS/example.css"></script>
@stop

@section('scripts')
    <script src="js/hotel.js"></script>
    {{--<script src="libraries/selectBoxIt/js/selectBoxIt.js"></script>--}}
    {{--<script src="http://code.jquery.com/jquery-latest.min.js"></script>--}}
    <script src="libraries/slidesJS/jquery.slides.min.js"></script>
@stop


@section('content')
    <!--header START-->
    <section class="header">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12 header_menu">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('hotel')}}">Hotel</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>
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

            <div class="row">
                <div class="col-xs-6">
                    <div class="logo">
                        <a href="/"><img src="/img/hotel/logo.png"></a>
                    </div>
                </div>
                <div class="col-xs-6 languages">
                    {{--<ul>--}}
                        {{--<li class="active"><a href="#">FR</a></li>--}}
                        {{--<li><a href="#">EN</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </section>
    <!--header END-->



    <!--main content START-->
        <section class="main_section">
            <div class="main_container">
                <div class="row">
                    <div class="col-md-9 hotel_main_content">
                        {{--<div class="hotel_main_content">--}}
                            <h3>Hôtel Rousseau Genève</h3>
                            <div class="address">
                                <img src="/img/hotel/pin_address.png">
                                <p>Rue Rousseau, 13 - CH-1201 Genève</p>
                            </div>
                            <a href="#">Plus d'information</a>
                            <div class="hotel_main_content_nav">
                                <ul>
                                    <li class="active">Chambres</li>
                                    <li>Offres</li>
                                    <li>Réserver</li>
                                </ul>
                            </div>

                            <p class="number_of_available_rooms">2 types de chambres disponibles</p>

                            <div class="hotel_main_content_block">
{{--<div class="contact_form_input_container ">--}}
    {{--<div class="contact_form_input">--}}
        {{--<select name="topic">--}}
            {{--<option value="info@hotelrousseau.ch">Informations divers</option>--}}
            {{--<option value="resa@hotelrousseau.ch">Reservation</option>--}}
            {{--<option value="resa@hotelrousseau.ch">Demande de prix</option>--}}
            {{--<option value="gm@hotelrousseau.ch">Demande de contrat</option>--}}
            {{--<option value="gm@hotelrousseau.ch">Suggestion ou recommandation</option>--}}
            {{--<option value="gm@hotelrousseau.ch">Facturation</option>--}}
            {{--<option value="gm@hotelrousseau.ch">Reclamation</option>--}}
        {{--</select>--}}
    {{--</div>--}}
{{--</div>--}}

                                <div class="extra_border">
                                    <div class="hotel_short_info">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div id="slides">
                                                    <img src="/img/hotel/photo_example.png">
                                                    <img src="/img/hotel/photo_example.png">
                                                    <img src="/img/hotel/photo_example.png">
                                                    <img src="/img/hotel/photo_example.png">
                                                </div>
                                                <div class="gallery_pics_amount">
                                                    <span>12 photos</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="hotel_item_short_info_right">
                                                    <h4>Single Classic</h4>
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/tv.png">
                                                                <p>Télévision à écran plat</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/desk.png">
                                                                <p>Bureau</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/bathroom.png">
                                                                <p>Salle de douche</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/wi-fi.png">
                                                                <p>Wi-Fi acces gratuit</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/bar.png">
                                                                <p>Minibar</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/hair_dryer.png">
                                                                <p>Sèche cheveux</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/cofee_machine.png">
                                                                <p>Machine à café Nespresso</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/safe.png">
                                                                <p>Coffe-fort</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/surface.png">
                                                                <p>De 17 à 20 m2</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">
                                                        Un nouveau concept. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                                                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                                        dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                                        Quisque rutrum. Aenean imperdiet. Cras dapibus. Vivamus elementum semper nisi.
                                                        Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">Il nous reste plus que 3 chambres</a>
                                    </div>
                                </div>
                                <div class="hotel_item_conditions">
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5>Conditions</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>Tarif par nuit</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>Chambres (Prix pour 8 nuits)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="condition_description">
                                                    <img src="/img/hotel/condition_icon_false.png">
                                                    <p>Non-annulable, non remboursable</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>chf 185.-</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="selectbox_container">
                                                    <select name="topic">
                                                        <option value="1"><span class="select_box_text">1 (chf 1 960.-)</span></option>
                                                        <option value="2"><span class="select_box_text">2 (chf 2 960.-)</span></option>
                                                        <option value="3"><span class="select_box_text">3 (chf 3 960.-)</span></option>
                                                        <option value="4"><span class="select_box_text">4 (chf 4 960.-)</span></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="condition_description">
                                                    <img src="/img/hotel/condition_icon_true.png">
                                                    <p>Annulation gratuite avant le 27 juillet 2015</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>chf 215.-</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="selectbox_container">
                                                    <select name="topic">
                                                        <option value="1">1 (chf 1 960.-)</option>
                                                        <option value="2">2 (chf 2 960.-)</option>
                                                        <option value="3">3 (chf 3 960.-)</option>
                                                        <option value="4">4 (chf 4 960.-)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="condition_items">
                                        <div class="condition_item">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <img src="/img/hotel/condition1.png">
                                                    <div class="condition_item_text">
                                                        <h5>Lit suplimentaire</h5>
                                                        <p>Gratuit pour les enfants de moins de 7 ans.<br>
                                                           Lit supplimentaire sur demande, veuillez contacter le hôtel.</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1">1 (chf 1 960.-)</option>
                                                            <option value="2">2 (chf 2 960.-)</option>
                                                            <option value="3">3 (chf 3 960.-)</option>
                                                            <option value="4">4 (chf 4 960.-)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="condition_item">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <img src="/img/hotel/condition2.png">
                                                    <div class="condition_item_text">
                                                        <h5>Lit enfant</h5>
                                                        <p>Gratuit pour les enfants de moins de 7 ans.<br>
                                                           Lit supplimentaire sur demande, veuillez contacter le hôtel.</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1">1 (chf 1 960.-)</option>
                                                            <option value="2">2 (chf 2 960.-)</option>
                                                            <option value="3">3 (chf 3 960.-)</option>
                                                            <option value="4">4 (chf 4 960.-)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="condition_item">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <img src="/img/hotel/condition3.png">
                                                    <div class="condition_item_text">
                                                        <h5>Berceau</h5>
                                                        <p>Gratuit pour les enfants de moins de 7 ans.<br>
                                                           Lit supplimentaire sur demande, veuillez contacter le hôtel.</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1">chf 1 960.-</option>
                                                            <option value="2">chf 2 960.-</option>
                                                            <option value="3">chf 3 960.-</option>
                                                            <option value="4">chf 4 960.-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="extra_border">
                                    <div class="hotel_short_info">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="hotel_item_gallery">
                                                    <img src="/img/hotel/photo_example.png">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="hotel_item_short_info_right">
                                                    <h4>Single Classic</h4>
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/tv.png">
                                                                <p>Télévision à écran plat</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/desk.png">
                                                                <p>Bureau</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/bathroom.png">
                                                                <p>Salle de douche</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/wi-fi.png">
                                                                <p>Wi-Fi acces gratuit</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/bar.png">
                                                                <p>Minibar</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/hair_dryer.png">
                                                                <p>Sèche cheveux</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/cofee_machine.png">
                                                                <p>Machine à café Nespresso</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/safe.png">
                                                                <p>Coffe-fort</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="room_option">
                                                                <img src="/img/rooms/rooms_options_icons_brown/surface.png">
                                                                <p>De 17 à 20 m2</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">
                                                        Un nouveau concept. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                                                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                                        dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                                        Quisque rutrum. Aenean imperdiet. Cras dapibus. Vivamus elementum semper nisi.
                                                        Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">Il nous reste plus que 3 chambres</a>
                                    </div>
                                </div>
                                <div class="hotel_item_conditions">
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5>Conditions</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>Tarif par nuit</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>Chambres (Prix pour 8 nuits)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="condition_description">
                                                    <img src="/img/hotel/condition_icon_false.png">
                                                    <p>Non-annulable, non remboursable</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>chf 185.-</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="selectbox_container">
                                                    <select name="topic">
                                                        <option value="1">1 (chf 1 960.-)</option>
                                                        <option value="2">2 (chf 2 960.-)</option>
                                                        <option value="3">3 (chf 3 960.-)</option>
                                                        <option value="4">4 (chf 4 960.-)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="condition">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="condition_description">
                                                    <img src="/img/hotel/condition_icon_true.png">
                                                    <p>Annulation gratuite avant le 27 juillet 2015</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>chf 215.-</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="selectbox_container">
                                                    <select name="topic">
                                                        <option value="1">1 (chf 1 960.-)</option>
                                                        <option value="2">2 (chf 2 960.-)</option>
                                                        <option value="3">3 (chf 3 960.-)</option>
                                                        <option value="4">4 (chf 4 960.-)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{--</div>--}}
                    </div>
                    <div class="col-md-3 hotel_right_sidebar">
                        {{--<div class="hotel_right_sidebar">--}}
                            <h3>Votre choix</h3>
                            <p>Du lundi 20 juillet 2015</p>
                            <p>au mardi 28 juillet 2015 (8 nuits)</p>
                            <p>5 adultes, 4 enfants, 3 bebes</p>
                            <button type="submit" ng-disabled="contactForm.$invalid" disabled="disabled">Modifier</button>
                            <div class="hotel_right_sidebar_ifoblock">
                                <h4>Single classic</h4>
                                <p>2 chambres, 8 nuits <span class="price"><span class="currency">chf</span> 2 960.-</span></p>
                                <p>1 lit supplémentaire <span class="price"><span class="currency">chf</span> 80.-</span></p>
                            </div>
                            <div class="hotel_right_sidebar_ifoblock">
                                <h4>Single double</h4>
                                <p>1 chambres, 8 nuits <span class="price"><span class="currency">chf</span> 2 960.-</span></p>
                            </div>
                            <div class="hotel_right_sidebar_ifoblock">
                                <h4>Offre 1</h4>
                                <p>Quantité: 2 <span class="price"><span class="currency">chf</span> 199.-</span></p>
                            </div>
                            <div class="hotel_right_sidebar_ifoblock total">
                                <h4>Total <span class="price"><span class="currency">chf</span> 199.-</span></h4>
                                <a href="#">Conditions générales de vente</a>
                            </div>
                            <p>Adultes 5/5</p>
                            <p>Enfants 3/4</p>
                            <p>Bébés 1/3</p>
                            <div class="next_step">
                                <p>Passer aux offres (etapes 2/3)</p>
                            </div>
                            <p>Transaction sécurisée</p>
                        {{--</div>--}}
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