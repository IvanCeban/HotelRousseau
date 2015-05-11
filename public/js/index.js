jQuery(document).ready(function($){
    $("select").selectBoxIt();

    $(window).load(function() {
        $('.flexslider').flexslider();
    });

    $('.search_block_header img').on('click', function(){
        $('.middle .search_block').toggleClass('open');

        if($('.middle .search_block').hasClass('open')){
            $('.offers_and_news').css({"position":"absolute"});
        }
        else {
            $('.offers_and_news').css({"position":"initial"});
        }
    });
});