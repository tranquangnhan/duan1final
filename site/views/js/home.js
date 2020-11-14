$(document).ready(function() {
    var heroSlider = $('#owl-1');
    heroSlider.owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        center: true,
        items: 1,
        loop: true,
        mouseDrag: false,

        autoplay: true,

        autoplayTimeout: 10000
    });
    var slide1 = $('#owl-2');
    slide1.owlCarousel({
        loop: true,
        margin: 30,
        items: 4,
        nav: true,
        center: true,
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#l-menu-fixed').show();
        } else {
            $('#l-menu-fixed').hide();
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.l-bt-fixed-to-top').fadeIn();
        } else {
            $('.l-bt-fixed-to-top').fadeOut();
        }
    });
    $('#bt-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 500)
        return false;
    });
    $("#li-khuhoi").click(function() {
        $("#trove").css("display", "block");
    });
    $("#li-motchieu").click(function() {
        $("#trove").css({ "display": "none" });
        $("this").removeClass("background-main-color");
    });
    $("#id-nhieudiemden").click(function() {
        $("this").removeClass("background-main-color");
    });
    // $( ".l-box-ud" ).hover(
    //   function() {
    //     $(".bt-datve ").show();
    //   }, function(){
    //   $(".bt-datve").hide();
    // });
});