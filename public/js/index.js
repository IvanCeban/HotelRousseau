jQuery(document).ready(function($){
    $("select").selectBoxIt();

    $(window).load(function() {
        $('.flexslider').flexslider();
    });

    $('.search_block_header img').on('click', function(){
        $('.middle .search_block').toggleClass('closed');

        if($('.middle .search_block').hasClass('closed')){
            $('.offers_and_news').css({"position":"absolute"});
        }
        else {
            $('.offers_and_news').css({"position":"initial"});
        }
    });

    $('#kids').on('change', function(){
        var kids = $(this).val();
        $("select.ages").remove();
        for(i=0;i<kids;i++){
            $('.age_of_kids').append('<select class="ages" name="age['+i+']"><option label="1">1</option><option label="2">2</option><option label="3">3</option><option label="4">4</option><option label="5">5</option><option label="5">6</option><option label="5">7</option><option label="5">8</option><option label="5">9</option><option label="5">10</option><option label="5">11</option><option label="5">12</option><option label="5">13</option><option label="5">14</option><option label="5">15</option><option label="5">16</option><option label="5">17</option></select>');
            $("select.ages").selectBoxIt();
        }

    });

});