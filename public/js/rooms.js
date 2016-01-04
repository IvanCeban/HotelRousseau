jQuery(document).ready(function($){

    $('.right_sidebar .carousel .item img').on('click', function () {
        var number = $(this).attr('photo_number');
        $('body').css({'background': 'url(/img/rooms/gallery/'+number+'.jpg) no-repeat center center fixed'});
    });
//izvrashenie bleati! START
    $('.room_type').on('click', function(){
        $('.room_type').removeClass('active');
        $(this).addClass('active');
        var active_element_id = $(this).attr('id');

        $('.right_sidebar').css('display','none');
        $('#'+active_element_id+'_right_sidebar').css('display','block');

        //$('.flex-viewport').height('107px');
        //$('.room_photos_list').height('107px');
        //$('.room_photos_list li').width('50%');

        if(active_element_id == 'single_classic'){
            $('body').css({'background': 'url(/img/rooms/gallery/single_classic_img1.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'double_classic'){
            $('body').css({'background': 'url(/img/rooms/gallery/double_classic_img1.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'double_superior'){
            $('body').css({'background': 'url(/img/rooms/gallery/double_superior_img1.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'triple'){
            $('body').css({'background': 'url(/img/rooms/gallery/triple_img2.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'apartment'){
            $('body').css({'background': 'url(/img/rooms/gallery/appartement_img5.jpg) no-repeat center center fixed'});
        }
    });
//izvrashenie bleati! END

    $("#nav_rooms").on("mouseover", function(){
        $(".rooms_types_section").fadeIn(100);
        $(".rooms_main_section .right_sidebar").css({"padding-top":"260px"});
    });
    $(".rooms_types_section").on("mouseleave", function(){
        $(".rooms_types_section").fadeOut(100);
        $(".rooms_main_section .right_sidebar").css({"padding-top":"190px"});
    });


    //$('.flexslider').flexslider();

    //$('.right_sidebar .carousel').on('slid.bs.carousel', checkitem);

    //function checkitem()
    //{
    //    var $this = $('.right_sidebar .carousel');
    //    if ($('.carousel-inner .item:first').hasClass('active')) {
    //        $this.children('.left.carousel-control').hide();
    //        $this.children('.right.carousel-control').show();
    //    } else if ($('.carousel-inner .item').last().hasClass('active')) {
    //        $this.children('.right.carousel-control').hide();
    //        $this.children('.left.carousel-control').show();
    //    } else {
    //        $this.children('.carousel-control').show();
    //    }
    //}

});

//$(window).load(function() {
//    $('.flexslider').flexslider();
//});
