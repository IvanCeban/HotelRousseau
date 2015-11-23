jQuery(document).ready(function($){

    $('.languages ul li').on('click', function () {
        $('.languages ul li').removeClass('active');
        $(this).addClass('active');
    });

    $('.header_menu ul li:not(:last-child)').on('click', function () {
        $('.header_menu ul li').removeClass('active');
        $(this).addClass('active');
    });

    //$("#close").on('click', function(){
    //    $(".right_sidebar").hide( "slide", { direction: "right"  }, 500 );
    //    $('.right_sidebar').parent().css({'padding-right':'0'});
    //});
    //
    //$("#open").click(function(){
    //    $(".right_sidebar").show( "slide", {direction: "right" }, 500 );
    //});
    //$("#close").on('click', function(){
    //    //$(".right_sidebar").slideToggle("slow");
    //    $('.right_sidebar').animate({width: 'toggle'});
    //});
    $(".show_hide_sidebar_btn").on('click', function() {
        // Set the effect type
        var effect = 'slide';

        // Set the options for the effect type chosen
        var options = { direction: "right" };

        // Set the duration (default: 400 milliseconds)
        var duration = 500;

        $('.right_sidebar_container').toggle(effect, options, duration);

        $('.sidebar_parent').toggleClass('sidebar_hidden');
    });


});