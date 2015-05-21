<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>HR Contact</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/libraries/selectBoxIt/css/selectBoxIt.css">
    <!--    <link rel="stylesheet" href="libraries/flexSlider/css/flexslider.css">-->
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/forms_style.css">
    <link rel="stylesheet" href="/css/common_styles.css">
    <link rel="stylesheet" href="/css/contact.css">
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
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Lousiris</a></li>
                        <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('contact')}}">Contact</a></li>
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

    <div id="googlemaps"></div>

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
                                <img class="page_icon" src="/img/contact/contact_right_sidebar_icon.png">
                                <h3>Contact</h3>
                                <p class="address">Hôtel Rousseau Genève <br>
                                    Rue Rousseau, 13 <br>
                                    ch - 1201 Genève
                                </p>
                                <ul class="contact_info">
                                    <li>
                                        <span>Tél. +41 22 732 50 30</span><br>
                                        <span>Fax. +41 22 732 50 32</span>
                                    </li>
                                    <li>
                                        <span>info@hotelrousseau.ch</span><br>
                                        <a href="http://hotelrousseau.ch">www.hotelrousseau.ch</a>
                                    </li>
                                </ul>
                                <form name="contactForm" ng-app="contactApp"  ng-controller="contactCtrl" novalidate class="contact_form" method="post" action="{{url('contact')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    @if($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <p style="color: red;">{{$error}}</p>
                                        @endforeach
                                    @endif
                                    @if(isset($status) && $status == 'success')

                                        <div class="message_sent_success_container">
                                            <div class="message_sent_success">
                                                {{--<img src="/img/contact/email_sent.png">--}}
                                                <p> Votre message a bien été envoyé !</p>
                                                {{--<span>We will get back to you as soon as we can</span>--}}
                                            </div>
                                        </div>
                                    @else

                                        <h4>Formulaire de contact</h4>

                                        <p class="form_placeholder">Prénom & Nom</p>
                                        <div class="contact_form_input_container" ng-class="contactForm.name.$error.required ? 'error' : 'success'">
                                            <div class="contact_form_input">
                                                <input type="text" name="name" ng-model="name" required>
                                            </div>
                                            <span ng-show="contactForm.name.$dirty && contactForm.name.$invalid">
                                                <span class="error_message" ng-show="contactForm.name.$error.required">Ce champ est obligatoire</span>
                                            </span>
                                        </div>


                                        <p class="form_placeholder">Nom de la société (sociétés & institutions)</p>
                                        <div class="contact_form_input_container">
                                            <div class="contact_form_input">
                                                <input type="text" name="societe">
                                            </div>
                                        </div>


                                        <p class="form_placeholder">E-mail</p>
                                        <div class="contact_form_input_container" ng-class="contactForm.email.$error.required || contactForm.email.$error.email ? 'error' : 'success'">
                                            <div class="contact_form_input">
                                                <input type="email" name="email" ng-model="email" required>
                                            </div>
                                            <span ng-show="contactForm.email.$dirty && contactForm.email.$invalid">
                                                <span class="error_message" ng-show="contactForm.email.$error.required">Ce champ est obligatoire</span>
                                                <span class="error_message" ng-show="contactForm.email.$error.email">Cette adresse email n’est pas valide</span>
                                            </span>
                                        </div>

                                        <p class="form_placeholder">Téléphone</p>
                                        <div class="contact_form_input_container ">
                                            <div class="contact_form_input">
                                                <input type="tel" name="telephone">
                                            </div>
                                        </div>

                                        <p class="form_placeholder">Sujet</p>
                                        <div class="contact_form_input_container ">
                                            <div class="contact_form_input">
                                                <select name="topic">
                                                    <option value="info@hotelrousseau.ch">Informations divers</option>
                                                    <option value="resa@hotelrousseau.ch">Reservation</option>
                                                    <option value="resa@hotelrousseau.ch">Demande de prix</option>
                                                    <option value="gm@hotelrousseau.ch">Demande de contrat</option>
                                                    <option value="gm@hotelrousseau.ch">Suggestion ou recommandation</option>
                                                    <option value="gm@hotelrousseau.ch">Facturation</option>
                                                    <option value="gm@hotelrousseau.ch">Reclamation</option>
                                                </select>
                                            </div>
                                        </div>

                                        <p class="form_placeholder">Message</p>
                                        <div class="contact_form_input_container"  ng-class="contactForm.message.$error.required ? 'error' : 'success'">
                                            <div class="contact_form_input">
                                                <textarea name="message"  ng-model="message" required></textarea>
                                            </div>
                                            <span ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                                                <span class="error_message" ng-show="contactForm.message.$error.required">Ce champ est obligatoire</span>
                                            </span>
                                        </div>
                                        <button type="submit" class="book_the_room" ng-disabled="contactForm.$invalid">Envoyer le message</button>
                                    @endif

                                </form>
                                <div class="share">
                                    <h4>Share</h4>
                                    <ul class="social_networks_list">
                                        <li><a href="#"><img src="/img/contact/social_networks/light/facebook.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/twitter.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/youtube.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/gmail.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/picasa.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/oo.png"></a></li>
                                        <li><a href="#"><img src="/img/contact/social_networks/light/owl.png"></a></li>
                                    </ul>
                                </div>
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
<script src="/libraries/selectBoxIt/js/selectBoxIt.js"></script>
<script src="/js/common.js"></script>
<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script src="/js/contact.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="/js/angular/contact.js"></script>
</body>
</html>