jQuery(document).ready(function($){
    $("select").selectBoxIt();
    $(function(){
        $("#slides").slidesjs({
            width: 500,
            height: 350
        });
    });

    $('.hotel_main_content_nav ul li').on('click', function(){
        $('.hotel_main_content_nav ul li').removeClass('active');
        $(this).addClass('active');
    });
});