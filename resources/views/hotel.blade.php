@extends('layouts.main')

@section('title')
    Hotel
@stop

@section('styles')
    <link rel="stylesheet" href="/css/hotel.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap-daterangepicker-master/daterangepicker-bs3.css" />
@stop

@section('scripts')

    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/2.9.0/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker.js"></script>

    <script src="js/hotel.js"></script>
    <script src="libraries/slidesJS/jquery.slides.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-0.12.1.min.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-tpls-0.12.1.js') }}"></script>
    <script src="/js/angular/order.js"></script>



    <script type="text/javascript">
        $(function() {
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment(),
                endDate: moment().add(29, 'days'),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                /*ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                 'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                 },*/
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            });

            // remove 1st th from .calendar-date
            var removeFirstTh = function(){
                $(".daterangepicker .calendar.first  thead tr:first th:first").each(function(){$(this).hide()});
                $(".daterangepicker .calendar.second  thead tr:first th:first").each(function(){$(this).hide()});
                $(".daterangepicker .calendar .calendar-date .month").attr("colspan", "6");
                $(".daterangepicker .calendar .table-condensed  thead .prev i").removeClass("fa fa-arrow-left icon icon-arrow-left glyphicon-arrow-left").addClass("glyphicon-chevron-left");
                $(".daterangepicker .calendar .table-condensed  thead .next i").removeClass("fa fa-arrow-right icon icon-arrow-right glyphicon-arrow-right").addClass("glyphicon-chevron-right");
            };
            $('#reportrange').on("show.daterangepicker", function(){ removeFirstTh(); });
            $('.daterangepicker').bind("DOMSubtreeModified",function(){ removeFirstTh(); });

        });
    </script>
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
                             <li class="active"><div class="header_separator"></div> <a href="{{url('hotel')}}">Hôtel</a></li>
                             <li id="nav_rooms"><div class="header_separator"></div> <a href="{{url('room')}}">Chambres / Appartement</a></li>
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
                                 <h5>Single classic</h5>
                                 <a href="#">CHF 235.-</a>
                             </li>
                             <li class="room_type" id="double_classic">
                                 <h5>Double classic</h5>
                                 <a href="#">CHF 265.-</a>
                             </li>
                             <li class="room_type" id="double_superior">
                                 <h5>Double Supérieur</h5>
                                 <a href="#">CHF 295.-</a>
                             </li>
                             <li class="room_type" id="triple">
                                 <h5>Triple</h5>
                                 <a href="#">CHF 325.-</a>
                             </li>
                             <li class="room_type" id="apartment">
                                 <h5>Appartement</h5>
                                 <a href="#">CHF 590.-</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>
         {{--rooms type select END--}}


    <!--main content START-->
        <section class="main_section" ng-app="orderApp" ng-controller="orderCtrl">
            <div class="main_container">
                <div class="row">
                    <div class="col-md-9 hotel_main_content">
                        {{--<div class="hotel_main_content">--}}
                            <div class="title">
                                <h3>Hôtel Rousseau Genève</h3>
                                <img src="/img/hotel/stars.png">
                            </div>
                            <div class="address">
                                <img src="/img/hotel/pin_address.png">
                                <p>Rue Rousseau, 13 - CH-1201 Genève</p>
                            </div>
                            <a class="add_info_link" href="#">Plus d'information</a>
                            <div class="hotel_main_content_nav">
                                <ul>
                                    <li class="active" name="hotel_rooms">Chambres</li>
                                    <li name="hotel_offers">Offres</li>
                                    <li name="hotel_reservation">Réserver</li>
                                </ul>
                            </div>
                            <div id="hotel_rooms">
                                <p class="sub_nav_title">{{$roomTypes->count()}} types de chambres disponibles</p>

                                <div class="hotel_main_content_block">

                                    @foreach($roomTypes as $roomType)
                                        <div {{--ng-repeat="roomType in roomTypes"--}} class="extra_border">
                                            <div class="hotel_short_info">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="hotel_item_gallery">
                                                            <div class="slides">
                                                                <img src="/img/hotel/photo_example.png">
                                                                <img src="/img/hotel/photo_example.png">
                                                                <img src="/img/hotel/photo_example.png">
                                                                <img src="/img/hotel/photo_example.png">
                                                            </div>
                                                            <div class="gallery_pics_amount">
                                                                <span>12 photos</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="hotel_item_short_info_right">
                                                            <div class="hotel_item_header">
                                                                <h4 class="single_room">{{$roomType->title}}</h4>
                                                            </div>
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
                                                        <p><span class="currency">chf</span> 185.-</p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="selectbox_container">
                                                            <select name="topic" ng-model="order.nonAnnullable" ng-change="updateCart()">
                                                                <option value="{{$roomType->id}}-0">Select amount</option>
                                                                <?php $i=0; ?>
                                                                @foreach($roomType->rooms as $room)
                                                                    <?php $i++; ?>
                                                                    <option value="{{$roomType->id}}-{{$i}}">{{$i}} (chf {{$i*185}}.-)</option>
                                                                @endforeach
                                                                {{--<option value="2"><span class="select_box_text">2 (chf 2 960.-)</span></option>
                                                                <option value="3"><span class="select_box_text">3 (chf 3 960.-)</span></option>
                                                                <option value="4"><span class="select_box_text">4 (chf 4 960.-)</span></option>--}}
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
                                                        <p><span class="currency">chf</span> 215.-</p>
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
                                    @endforeach


                                    <div class="extra_border">
                                        <div class="hotel_short_info">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="hotel_item_gallery">
                                                        <div class="slides">
                                                            <img src="/img/hotel/photo_example.png">
                                                            <img src="/img/hotel/photo_example.png">
                                                            <img src="/img/hotel/photo_example.png">
                                                            <img src="/img/hotel/photo_example.png">
                                                        </div>
                                                        <div class="gallery_pics_amount">
                                                            <span>12 photos</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="hotel_item_short_info_right">
                                                        <div class="hotel_item_header">
                                                            <h4 class="double_room">Double</h4>
                                                        </div>
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
                                                    <p><span class="currency">chf</span> 185.-</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1">1 (<span class="currency">chf</span> 1 960.-)</option>
                                                            <option value="2">2 (<span class="currency">chf</span> 2 960.-)</option>
                                                            <option value="3">3 (<span class="currency">chf</span> 3 960.-)</option>
                                                            <option value="4">4 (<span class="currency">chf</span> 4 960.-)</option>
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
                                                    <p><span class="currency">chf</span> 215.-</p>
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
                            </div>
                            <div id="hotel_offers">
                                <p class="sub_nav_title">3 offres disponibles</p>
                                <div class="hotel_main_content_block">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="/img/hotel/offer_img1.jpg">
                                            <h4>Morbi et ullamcorper justo semper nam posuere sed</h4>
                                            <div class="offer_date_separator"></div>
                                            <p class="offer_date">Jusqu'au 15 juillet 2015</p>
                                            <p class="offer_description">
                                                Donec eu sapien lobortis, commodo velit sed, lacinia lacus.
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                per inceptos himenaeos. Morbi et ullamcorper justo, sit amet ullamcorper dui.
                                                Sed sed dapibus nisi.
                                            </p>
                                            <a href="#">Plus d'information</a>
                                            <div class="offer_price">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span class="currency">chf</span> 135. -
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p>Quantité</p>
                                                        <div class="selectbox_container">
                                                            <select name="topic">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="/img/hotel/offer_img2.jpg">
                                            <h4>Offre 2</h4>
                                            <div class="offer_date_separator"></div>
                                            <p class="offer_date">Jusqu'au 15 juillet 2015</p>
                                            <p class="offer_description">
                                                Donec eu sapien lobortis, commodo velit sed, lacinia lacus.
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                per inceptos himenaeos. Morbi et ullamcorper justo, sit amet ullamcorper dui.
                                                Sed sed dapibus nisi. Donec eu sapien lobortis, commodo velit sed, lacinia lacus.
                                                Class aptent taciti sociosqu...
                                            </p>
                                            <a href="#">Plus d'information</a>
                                            <div class="offer_price">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span class="currency">chf</span> 135. -
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p>Quantité</p>
                                                        <div class="selectbox_container">
                                                            <select name="topic">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="/img/hotel/offer_img3.jpg">
                                            <h4>Justo semper nam posuere sed</h4>
                                            <div class="offer_date_separator"></div>
                                            <p class="offer_date">Jusqu'au 15 juillet 2015</p>
                                            <p class="offer_description">
                                                Donec eu sapien lobortis, commodo velit sed, lacinia lacus.
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                Morbi et ullamcorper justo, sit amet ullamcorper dui.
                                                Sed sed dapibus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                                            </p>
                                            <a href="#">Plus d'information</a>
                                            <div class="offer_price">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <span class="currency">chf</span> 135. -
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p>Quantité</p>
                                                        <div class="selectbox_container">
                                                            <select name="topic">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my_btn">
                                        <p>Revenir aux chambres</p>
                                    </div>
                                </div>
                            </div>
                            <div id="hotel_reservation">
                                <p class="sub_nav_title">Informations personnelles</p>
                                <div class="hotel_main_content_block">
                                    <div class="extra_border">
                                        <div class="reservatioon_form_block">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p class="reservation_form_item_placeholder">Titre*</p>
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">Mr</span></option>
                                                            <option value="2"><span class="select_box_text">Mrs</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="reservation_form_item_placeholder">Prénom*</p>
                                                    <input type="text" name="firstname" placeholder="-">
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="reservation_form_item_placeholder">Nom*</p>
                                                    <input type="text" name="name" placeholder="-">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="reservation_form_item_placeholder">E-mail*</p>
                                                    <input type="email" name="email" placeholder="-">
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="reservation_form_item_placeholder">*</p>
                                                    <input type="text" name="text" placeholder="-">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="reservation_form_item_placeholder">No de téléphone*</p>
                                                    <input type="email" name="phone" placeholder="-">
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="reservation_form_item_placeholder">Pays de résidence</p>
                                                    <div class="selectbox_container" placeholder="-">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">Suisse</span></option>
                                                            <option value="2"><span class="select_box_text">France</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="sub_nav_title">Occupation par chambre</p>
                                <div class="hotel_main_content_block">
                                    <div class="extra_border">
                                        <div class="reservatioon_form_block">
                                            <h4>Chambre Single Classic - 1 occupant</h4>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p class="reservation_form_item_placeholder">Titre*</p>
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">Mr</span></option>
                                                            <option value="2"><span class="select_box_text">Mrs</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="reservation_form_item_placeholder">Prénom*</p>
                                                    <input type="text" name="firstname" placeholder="-">
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="reservation_form_item_placeholder">Nom*</p>
                                                    <input type="text" name="name" placeholder="-">
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="reservation_form_item_placeholder">Age*</p>
                                                    <div class="selectbox_container" placeholder="-">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">1 an</span></option>
                                                            <option value="2"><span class="select_box_text">2 ans</span></option>
                                                            <option value="1"><span class="select_box_text">5 ans</span></option>
                                                            <option value="2"><span class="select_box_text">10 ans</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="add_visitor_btn">
                                                <span>Ajouter un occupant</span>
                                            </button>
                                            <h4>Chambre Single Classic - 1 occupant</h4>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p class="reservation_form_item_placeholder">Titre*</p>
                                                    <div class="selectbox_container">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">Mr</span></option>
                                                            <option value="2"><span class="select_box_text">Mrs</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="reservation_form_item_placeholder">Prénom*</p>
                                                    <input type="text" name="firstname" placeholder="-">
                                                </div>
                                                <div class="col-lg-4">
                                                    <p class="reservation_form_item_placeholder">Nom*</p>
                                                    <input type="text" name="name" placeholder="-">
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="reservation_form_item_placeholder">Age*</p>
                                                    <div class="selectbox_container" placeholder="-">
                                                        <select name="topic">
                                                            <option value="1"><span class="select_box_text">1 an</span></option>
                                                            <option value="2"><span class="select_box_text">2 ans</span></option>
                                                            <option value="1"><span class="select_box_text">5 ans</span></option>
                                                            <option value="2"><span class="select_box_text">10 ans</span></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="add_visitor_btn">
                                                <span>Ajouter un occupant</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="sub_nav_title">Demandes spéciales (facultatif)</p>
                                <div class="hotel_main_content_block">
                                    <div class="extra_border">
                                        <div class="reservatioon_form_block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="reservation_form_item_placeholder">Vous pouvez décrire toute demande particulière. Les demandes spéciales ne peuvent être garanties, mais nous ferons tout notre possible pour les satisfaire.</p>
                                                    <textarea type="textarea" name="firstname" placeholder="-"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="sub_nav_title">Conditions générales de vente</p>
                                <div class="hotel_main_content_block general_conditions">
                                    <p>Depot de garantie: 11 875, 00 CHF (100% du montant total sans les extras sont debites a la reservation)<br>
                                       Conditions dannulation:  Des la reseervation effectuee, 100% de la reseervation est facture.</p>

                                        <div>
                                          <input id="conditions_checkbox" type="checkbox" name="field" value="conditions_checkbox">
                                          <label for="conditions_checkbox"><span><span></span></span>J' ai lu <a href="">les Conditions générales</a> de vente et je confirme les comprendre et les accespter.</label>
                                        </div>

                                        <button type="button">
                                            <span>Confirme ma reservation</span>
                                        </button>

                                        <div class="security_info">
                                            <img src="/img/hotel/lock.png">
                                            <p>Vous allez être dirigé vers notre site sécurisé pour renseigner vos informations de poiement</p>
                                        </div>

                                </div>
                            </div>
                        {{--</div>--}}
                    </div>
                    <div class="col-md-3 hotel_right_sidebar">
                        {{--<div class="hotel_right_sidebar">--}}
                        <div class="sidebar-scroll">

                            <h3>Votre choix</h3>
                            <p>{{$order->checkin_date}}{{--Du lundi 20 juillet 2015--}}</p>
                            <p>{{$order->checkout_date}}{{--au mardi 28 juillet 2015 (8 nuits)--}}</p>
                            <p>{{$order->adults}} adultes, {{$order->kids}} enfants, {{$order->infants}} bebes</p>
                            <button type="submit" id="reportrange">
                                <span>Modifier</span>
                            </button>
                            <div class="hotel_right_sidebar_ifoblock" ng-repeat="(key,val) in cartNA track by $index" ng-if="val != null">
                                <h4 class="single_room"><% indexedRoomTypes[key] %> <% $index %> | <% val %></h4>
                                <p><% val %> chambres, <% order.nights %> nuits <span class="price"><span class="currency">chf</span> <% val * order.nights * 185 %>.-</span></p>
                                {{--<p>1 lit supplémentaire <span class="price"><span class="currency">chf</span> 80.-</span></p>--}}
                            </div>
                            {{--<div class="hotel_right_sidebar_ifoblock">
                                <h4 class="double_room">Single double</h4>
                                <p>1 chambres, 8 nuits <span class="price"><span class="currency">chf</span> 2 960.-</span></p>
                            </div>--}}
                            {{--<div class="hotel_right_sidebar_ifoblock">
                                <h4>Offre 1</h4>
                                <p>Quantité: 2 <span class="price"><span class="currency">chf</span> 199.-</span></p>
                            </div>--}}
                            <div class="hotel_right_sidebar_ifoblock total">
                                <h4>Total <span class="price"><span class="currency">chf</span> <% cartSum %>.-</span></h4>
                                <a href="#">Conditions générales de vente</a>
                            </div>
                            <p>Adultes 5/5</p>
                            <p>Enfants 3/4</p>
                            <p>Bébés 1/3</p>
                            <div class="my_btn">
                                <p>Passer aux offres (etapes 2/3)</p>
                            </div>

                            <p>Transaction sécurisée</p>

                        </div>
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