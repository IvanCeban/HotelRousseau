jQuery(document).ready(function($){
    $("select").selectBoxIt();
    $(function(){
        $(".slides").slidesjs({
            width: 460,
            height: 400,
            pagination: {
                active: false
            }
        });
    });

    $('.hotel_main_content_nav ul li').on('click', function(){
        $('.hotel_main_content_nav ul li').removeClass('active');
        $(this).addClass('active');
    });
});