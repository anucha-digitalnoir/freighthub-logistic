$(document).ready(function() {
    $("html").niceScroll();
    $(window).scroll(function() {
        navigation.scroll();
    });
    $("#gallery").owlCarousel({
        singleItem : true,
        //autoPlay:true,
        pagination : false,
        transitionStyle : "fade"
    });
    var owl = $("#gallery").data('owlCarousel');

    $('.gallery-nav.prev').on('click',function (){
        owl.prev();
    });
    $('.gallery-nav.next').on('click',function (){
        owl.next();
    });

    $('.main-navigation').onePageNav({
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        filter: ':not(.external)',
        changeHash: true
    });
});

var navigation = {
    settings : {
        offset: 0
    },
    scroll : function() {
        var scroll_top = $(window).scrollTop(); // current vertical position from the top

        if( scroll_top > navigation.settings.offset ) {
            if($('#wpadminbar').length == 0)
                $('header').css({ 'position': 'fixed', 'top': '0' });
            else $('header').css({ 'position': 'fixed', 'top': '32px' });
        } else {
            $('header').css({ 'position': 'absolute', 'top': navigation.settings.offset + 'px' });
        }
    }
};