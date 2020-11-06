$(document).ready(function(){
    var heroSlider = $('.owl-carousel');
        heroSlider.owlCarousel({
        animateOut: 'fadeOut',
        items:1,
        loop: true,
        mouseDrag: false,
        autoplay: true,
        autoplayTimeout: 10000
    })
    heroSlider.on("changed.owl.carousel", function(event){
        // selecting the current active item
        var item = event.item.index-2;
        // first removing animation for all captions
        $('.anim1-pn1').removeClass('animated fadeInUp');
        $('.anim2-pn1').removeClass('animated fadeInUp');
        $('.anim3-pn1').removeClass('animated fadeInUp');
        $('.anim4-pn1').removeClass('animated fadeInUp');
        $('.anim1-pn2').removeClass('animated fadeInUp');
        $('.anim2-pn2').removeClass('animated fadeInUp');
        $('.anim3-pn2').removeClass('animated fadeInUp');
        $('.anim1-pn3').removeClass('animated fadeInUp');
        $('.anim2-pn3').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim1-pn1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim2-pn1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim3-pn1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim4-pn1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim1-pn2').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim2-pn2').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim3-pn2').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim1-pn3').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.anim2-pn3').addClass('animated fadeInUp');
    })
});
