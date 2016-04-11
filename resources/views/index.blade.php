@extends('layouts.main')

@section('title')
    Accueil
@stop

@section('styles')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap-daterangepicker-master/daterangepicker-bs3.css" />
@stop

@section('scripts')

    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/2.9.0/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker.js"></script>
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="/js/angular/registration.js"></script>

    <script type="text/javascript">
        $(function() {

            $('#reportrange span').html(moment().format('MMMM D, YYYY') + ' - ' + moment().add(29, 'days').format('MMMM D, YYYY'));
            $('#checkin_date').val(moment().format('YYYY-MM-DD'));
            $('#checkout_date').val(moment().add(29, 'days').format('YYYY-MM-DD'));
            $('#nights').val(29);


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
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#checkin_date').val(start.format('YYYY-MM-DD'));
                $('#checkout_date').val(end.format('YYYY-MM-DD'));
                var duration = moment.duration(end.diff(start));
                var nights = Math.floor(duration.asDays());
                $('#nights').val(nights);

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
                        <li class="active"><a href="/">Accueil</a></li>
                        <li><div class="header_separator"></div><a href="{{url('hotel')}}">Hôtel</a></li>
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
    {{--<section class="rooms_types_section">--}}
        {{--<div class="main_container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-12">--}}
                    {{--<ul class="rooms_types_buttons">--}}
                        {{--<li class="room_type" id="single_classic">--}}
                            {{--<h5>Single classic</h5>--}}
                            {{--<a href="#">CHF 235.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="double_classic">--}}
                            {{--<h5>Double classic</h5>--}}
                            {{--<a href="#">CHF 265.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="double_superior">--}}
                            {{--<h5>Double Supérieur</h5>--}}
                            {{--<a href="#">CHF 295.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="triple">--}}
                            {{--<h5>Triple</h5>--}}
                            {{--<a href="#">CHF 325.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="apartment">--}}
                            {{--<h5>Appartement</h5>--}}
                            {{--<a href="#">CHF 590.-</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--rooms type select END--}}

            <!--middle section START-->
    <section class="page_content">
        <div class="main_container">
            <div class="search_block opened">
                <img id="" class="svg ornament" src="../img/homepage/ornament_reservation.svg"/>
                <h1>réservation en ligne</h1>
                <img id="" class="svg ornament" src="../img/homepage/ornament_reservation.svg"/>

                <form class="search_block_inner" name="formPicker" id="formPicker" action="https://sb.ghix.net/default.aspx" method="get" target="_blank">
                    <input type="hidden" name="WhatIsChanged" id="WhatIsChanged" value="1">
                    <input type="hidden" name="View" value="Superbooking1">
                    <input type="hidden" name="HotelID" id="HotelID" value="2986959">
                    <input type="hidden" name="Language" value="4">
                    <input type="hidden" name="Template" value="Template">


                    <table border="0" cellpadding="3" cellspacing="3" align="center" width="100%">
                        <tbody><tr>
                            <td nowrap="nowrap" width="11%" class="search_block_label">Arrival:</td>
                            <td nowrap="nowrap" width="20%">
                                <input class="search_block_calendar" style="background-color:white; padding: 0;" onclick="displayDatePicker('tdate', false, 'dmy', '.');" type="text" readonly="" size="13" id="tdate" name="tdate" value="11.04.2016">
                                <script type="text/javascript">
                                    var date = new Date();var d  = date.getDate(); var day = (d < 10) ? '0' + d : d; var m = date.getMonth() + 1; var month = (m < 10) ? '0' + m : m; var yy = date.getYear(); var year = (yy < 1000) ? yy + 1900 : yy; var currDate = day + "." + month + "." + year;
                                    document.getElementById('tdate').value = currDate;
                                </script>
                            </td>
                            <td align="right" nowrap="nowrap" width="5%" class="search_block_label">Nights:</td>
                            <td width="18%">
                                <select name="tnights">
                                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                                </select>
                            </td>
                            <td align="center" width="25%"><input type="submit" class="btn" value="Book Now"></td>
                        </tr>
                        </tbody></table>
                </form>
                <style>
                    body {
                        font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                        font-size: .8em;
                    }
                    .dpDiv {
                    }
                    .dpTable {
                        font-family: Tahoma, Arial, Helvetica, sans-serif;
                        font-size: 12px;
                        text-align: center;
                        color: #505050;
                        background-color: #ece9d8;
                        border: 1px solid #AAAAAA;
                    }
                    .dpTR {
                    }
                    .dpTitleTR {
                    }
                    .dpDayTR {
                    }
                    .dpTodayButtonTR {
                    }
                    .dpTD {
                        border: 1px solid #ece9d8;
                    }
                    .dpDayHighlightTD {
                        background-color: #CCCCCC;
                        border: 1px solid #AAAAAA;
                    }
                    .dpTDHover {
                        background-color: #aca998;
                        border: 1px solid #888888;
                        cursor: pointer;
                        color: red;
                    }
                    .dpTitleTD {
                    }
                    .dpButtonTD {
                    }
                    .dpTodayButtonTD {
                    }
                    .dpDayTD {
                        background-color: #CCCCCC;
                        border: 1px solid #AAAAAA;
                        color: white;
                    }
                    .dpTitleText {
                        font-size: 12px;
                        color: gray;
                        font-weight: bold;
                    }
                    .dpDayHighlight {
                        color: 4060ff;
                        font-weight: bold;
                    }
                    .dpButton {
                        font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                        font-size: 10px;
                        color: gray;
                        background: #d8e8ff;
                        font-weight: bold;
                        padding: 0px;
                    }
                    .dpTodayButton {
                        font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                        font-size: 10px;
                        color: gray;
                        background: #d8e8ff;
                        font-weight: bold;
                    }
                </style>

                <script type="text/javascript">
                    var datePickerDivID = "datepicker";
                    var iFrameDivID = "datepickeriframe";

                    var dayArrayShort = new Array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
                    var dayArrayMed = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                    var dayArrayLong = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                    var monthArrayShort = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                    var monthArrayMed = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
                    var monthArrayLong = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                    var defaultDateSeparator = ".";
                    var defaultDateFormat = "dmy";
                    var dateSeparator = defaultDateSeparator;
                    var dateFormat = defaultDateFormat;

                    // for current date

                    function displayDatePicker(dateFieldName, displayBelowThisObject, dtFormat, dtSep)
                    {
                        var targetDateField = document.getElementsByName (dateFieldName).item(0);

                        if (!displayBelowThisObject)
                            displayBelowThisObject = targetDateField;

                        if (dtSep)
                            dateSeparator = dtSep;
                        else
                            dateSeparator = defaultDateSeparator;

                        if (dtFormat)
                            dateFormat = dtFormat;
                        else
                            dateFormat = defaultDateFormat;

                        var x = displayBelowThisObject.offsetLeft;
                        var y = displayBelowThisObject.offsetTop + displayBelowThisObject.offsetHeight ;

                        var parent = displayBelowThisObject;
                        while (parent.offsetParent) {
                            parent = parent.offsetParent;
                            x += parent.offsetLeft;
                            y += parent.offsetTop ;
                        }

                        drawDatePicker(targetDateField, x, y);
                    }

                    function drawDatePicker(targetDateField, x, y)
                    {
                        var dt = getFieldDate(targetDateField.value );

                        if (!document.getElementById(datePickerDivID)) {
                            var newNode = document.createElement("div");
                            newNode.setAttribute("id", datePickerDivID);
                            newNode.setAttribute("class", "dpDiv");
                            newNode.setAttribute("style", "visibility: hidden;");
                            document.body.appendChild(newNode);
                        }

                        var pickerDiv = document.getElementById(datePickerDivID);
                        pickerDiv.style.position = "absolute";
                        pickerDiv.style.left = x + "px";
                        pickerDiv.style.top = y + "px";
                        pickerDiv.style.visibility = (pickerDiv.style.visibility == "visible" ? "hidden" : "visible");
                        pickerDiv.style.display = (pickerDiv.style.display == "block" ? "none" : "block");
                        pickerDiv.style.zIndex = 10000;

                        refreshDatePicker(targetDateField.name, dt.getFullYear(), dt.getMonth(), dt.getDate());
                    }

                    function refreshDatePicker(dateFieldName, year, month, day)
                    {
                        var thisDay = new Date();

                        if ((month >= 0) && (year > 0)) {
                            thisDay = new Date(year, month, 1);
                        } else {
                            day = thisDay.getDate();
                            thisDay.setDate(1);
                        }

                        var crlf = "\r\n";
                        var TABLE = "<table cols=7 class='dpTable'>" + crlf;
                        var xTABLE = "</table>" + crlf;
                        var TR = "<tr class='dpTR'>";
                        var TR_title = "<tr class='dpTitleTR'>";
                        var TR_days = "<tr class='dpDayTR'>";
                        var TR_todaybutton = "<tr class='dpTodayButtonTR'>";
                        var xTR = "</tr>" + crlf;
                        var TD = "<td class='dpTD' onMouseOut='this.className=\"dpTD\";' onMouseOver=' this.className=\"dpTDHover\";' ";
                        var TD_title = "<td colspan=5 class='dpTitleTD'>";
                        var TD_buttons = "<td class='dpButtonTD'>";
                        var TD_todaybutton = "<td colspan=7 class='dpTodayButtonTD'>";
                        var TD_days = "<td class='dpDayTD'>";
                        var TD_selected = "<td class='dpDayHighlightTD' onMouseOut='this.className=\"dpDayHighlightTD\";' onMouseOver='this.className=\"dpTDHover\";' ";
                        var xTD = "</td>" + crlf;
                        var DIV_title = "<div class='dpTitleText'>";
                        var DIV_selected = "<div class='dpDayHighlight'>";
                        var xDIV = "</div>";

                        var html = TABLE;

                        html += TR_title;
                        html += TD_buttons + getButtonCode(dateFieldName, thisDay, -1, "&lt;") + xTD;
                        html += TD_title + DIV_title + monthArrayLong[ thisDay.getMonth()] + " " + thisDay.getFullYear() + xDIV + xTD;
                        html += TD_buttons + getButtonCode(dateFieldName, thisDay, 1, "&gt;") + xTD;
                        html += xTR;

                        html += TR_days;
                        for(i = 0; i < dayArrayShort.length; i++)
                            html += TD_days + dayArrayShort[i] + xTD;
                        html += xTR;

                        html += TR;

                        for (i = 0; i < thisDay.getDay(); i++)
                            html += TD + "&nbsp;" + xTD;

                        do {
                            dayNum = thisDay.getDate();
                            TD_onclick = " onclick=\"updateDateField('" + dateFieldName + "', '" + getDateString(thisDay) + "');\">";

                            if (dayNum == day)
                                html += TD_selected + TD_onclick + DIV_selected + dayNum + xDIV + xTD;
                            else
                                html += TD + TD_onclick + dayNum + xTD;

                            if (thisDay.getDay() == 6)
                                html += xTR + TR;

                            thisDay.setDate(thisDay.getDate() + 1);
                        } while (thisDay.getDate() > 1)

                        if (thisDay.getDay() > 0) {
                            for (i = 6; i > thisDay.getDay(); i--)
                                html += TD + "&nbsp;" + xTD;
                        }
                        html += xTR;

                        var today = new Date();
                        var todayString = "Today is " + dayArrayMed[today.getDay()] + ", " + monthArrayMed[ today.getMonth()] + " " + today.getDate();
                        html += TR_todaybutton + TD_todaybutton;
                        html += "<button class='dpTodayButton' onClick='refreshDatePicker(\"" + dateFieldName + "\");'>this month</button> ";
                        html += "<button class='dpTodayButton' onClick='updateDateField(\"" + dateFieldName + "\");'>close</button>";
                        html += xTD + xTR;

                        html += xTABLE;

                        document.getElementById(datePickerDivID).innerHTML = html;
                        adjustiFrame();
                    }

                    function getButtonCode(dateFieldName, dateVal, adjust, label)
                    {
                        var newMonth = (dateVal.getMonth () + adjust) % 12;
                        var newYear = dateVal.getFullYear() + parseInt((dateVal.getMonth() + adjust) / 12);
                        if (newMonth < 0) {
                            newMonth += 12;
                            newYear += -1;
                        }

                        return "<button class='dpButton' onClick='refreshDatePicker(\"" + dateFieldName + "\", " + newYear + ", " + newMonth + ");'>" + label + "</button>";
                    }

                    function getDateString(dateVal)
                    {
                        var dayString = "00" + dateVal.getDate();
                        var monthString = "00" + (dateVal.getMonth()+1);
                        dayString = dayString.substring(dayString.length - 2);
                        monthString = monthString.substring(monthString.length - 2);

                        switch (dateFormat) {
                            case "dmy" :
                                return dayString + dateSeparator + monthString + dateSeparator + dateVal.getFullYear();
                            case "ymd" :
                                return dateVal.getFullYear() + dateSeparator + monthString + dateSeparator + dayString;
                            case "mdy" :
                            default :
                                return monthString + dateSeparator + dayString + dateSeparator + dateVal.getFullYear();
                        }
                    }

                    function getFieldDate(dateString)
                    {
                        var dateVal;
                        var dArray;
                        var d, m, y;

                        try {
                            dArray = splitDateString(dateString);
                            if (dArray) {
                                switch (dateFormat) {
                                    case "dmy" :
                                        d = parseInt(dArray[0], 10);
                                        m = parseInt(dArray[1], 10) - 1;
                                        y = parseInt(dArray[2], 10);
                                        break;
                                    case "ymd" :
                                        d = parseInt(dArray[2], 10);
                                        m = parseInt(dArray[1], 10) - 1;
                                        y = parseInt(dArray[0], 10);
                                        break;
                                    case "mdy" :
                                    default :
                                        d = parseInt(dArray[1], 10);
                                        m = parseInt(dArray[0], 10) - 1;
                                        y = parseInt(dArray[2], 10);
                                        break;
                                }
                                dateVal = new Date(y, m, d);
                            } else if (dateString) {
                                dateVal = new Date(dateString);
                            } else {
                                dateVal = new Date();
                            }
                        } catch(e) {
                            dateVal = new Date();
                        }

                        return dateVal;
                    }


                    function splitDateString(dateString)
                    {
                        var dArray;
                        if (dateString.indexOf("/") >= 0)
                            dArray = dateString.split("/");
                        else if (dateString.indexOf(".") >= 0)
                            dArray = dateString.split(".");
                        else if (dateString.indexOf("-") >= 0)
                            dArray = dateString.split("-");
                        else if (dateString.indexOf("\\") >= 0)
                            dArray = dateString.split("\\");
                        else
                            dArray = false;

                        return dArray;
                    }

                    /**
                     Update the field with the given dateFieldName with the dateString that has been passed,
                     and hide the datepicker. If no dateString is passed, just close the datepicker without
                     changing the field value.

                     Also, if the page developer has defined a function called datePickerClosed anywhere on
                     the page or in an imported library, we will attempt to run that function with the updated
                     field as a parameter. This can be used for such things as date validation, setting default
                     values for related fields, etc. For example, you might have a function like this to validate
                     a start date field:

                     function datePickerClosed(dateField)
                     {
                       var dateObj = getFieldDate(dateField.value);
                       var today = new Date();
                       today = new Date(today.getFullYear(), today.getMonth(), today.getDate());

                       if (dateField.name == "StartDate") {
                         if (dateObj < today) {
                           // if the date is before today, alert the user and display the datepicker again
                           alert("Please enter a date that is today or later");
                           dateField.value = "";
                           document.getElementById(datePickerDivID).style.visibility = "visible";
                           adjustiFrame();
                         } else {
                           // if the date is okay, set the EndDate field to 7 days after the StartDate
                           dateObj.setTime(dateObj.getTime() + (7 * 24 * 60 * 60 * 1000));
                           var endDateField = document.getElementsByName ("EndDate").item(0);
                           endDateField.value = getDateString(dateObj);
                         }
                       }
                     }

                     */
                    function updateDateField(dateFieldName, dateString)
                    {
                        var targetDateField = document.getElementsByName (dateFieldName).item(0);
                        if (dateString)
                            targetDateField.value = dateString;

                        var pickerDiv = document.getElementById(datePickerDivID);
                        pickerDiv.style.visibility = "hidden";
                        pickerDiv.style.display = "none";

                        adjustiFrame();
                        targetDateField.focus();

                        if ((dateString) && (typeof(datePickerClosed) == "function"))
                            datePickerClosed(targetDateField);
                    }

                    function adjustiFrame(pickerDiv, iFrameDiv)
                    {
                        var is_opera = (navigator.userAgent.toLowerCase().indexOf("opera") != -1);
                        if (is_opera)
                            return;

                        try {
                            if (!document.getElementById(iFrameDivID)) {
                                var newNode = document.createElement("iFrame");
                                newNode.setAttribute("id", iFrameDivID);
                                newNode.setAttribute("src", "javascript:false;");
                                newNode.setAttribute("scrolling", "no");
                                newNode.setAttribute ("frameborder", "0");
                                document.body.appendChild(newNode);
                            }

                            if (!pickerDiv)
                                pickerDiv = document.getElementById(datePickerDivID);
                            if (!iFrameDiv)
                                iFrameDiv = document.getElementById(iFrameDivID);

                            try {
                                iFrameDiv.style.position = "absolute";
                                iFrameDiv.style.width = pickerDiv.offsetWidth;
                                iFrameDiv.style.height = pickerDiv.offsetHeight ;
                                iFrameDiv.style.top = pickerDiv.style.top;
                                iFrameDiv.style.left = pickerDiv.style.left;
                                iFrameDiv.style.zIndex = pickerDiv.style.zIndex - 1;
                                iFrameDiv.style.visibility = pickerDiv.style.visibility ;
                                iFrameDiv.style.display = pickerDiv.style.display;
                            } catch(e) {
                            }

                        } catch (ee) {
                        }

                    }
                </script>
            </div>
        </div>
    </section>


    <!--middle section START-->

    <!--middle section END-->

    <!--offers and news START-->
    {{--<section class="offers_and_news">--}}
    {{--<div class="main_container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-6 offers">--}}
    {{--<div class="flexslider">--}}
    {{--<ul class="slides">--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Graida atcur ecuus istique</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Aucune offre pour l’instant</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Graida atcur ecuus istique</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offers">--}}
    {{--<div class="flexslider">--}}
    {{--<ul class="slides">--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Graida atcur ecuus istique</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Aucune offre pour l’instant</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-5 offer_img">--}}
    {{--<img src="/img/homepage/offers/1.jpg">--}}
    {{--</div>--}}
    {{--<div class="col-xs-6 offer_short_info">--}}
    {{--<h3>Graida atcur ecuus istique</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
    {{--<span class="offer_price">135.-CHF</span>--}}
    {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 news">--}}
    {{--<div class="flexslider">--}}
    {{--<ul class="slides">--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-11">--}}
    {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
    {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-11">--}}
    {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
    {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-11">--}}
    {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
    {{--<div class="offer_blue_line"></div>--}}
    {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
    {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
    {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
            <!--offers and news START-->

    <!--footer START-->
    <section class="footer">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="copyright">&copy; 2015 Hotel Rousseau</li>
                        <!--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Plan du site</a></li>-->
                        <!--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Mentions legales</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--footer END-->
@stop