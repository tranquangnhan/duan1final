var a = 1;  
$(document).ready(function(){
    var heroSlider = $('.owl-carousel');
        heroSlider.owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        center: true,
        items:1,
        loop: true,
        mouseDrag: false,
        autoplay: true,
        autoplayTimeout: 10000
    });
    $("#li-khuhoi").click(function(){
        $("#trove").css("display", "block");
      });
      $("#li-motchieu").click(function(){
        $("#trove").css({"display" : "none"});
        $( "this" ).removeClass( "background-main-color" );

        
      });
      $("#id-nhieudiemden").click(function(){
        $( "this" ).removeClass( "background-main-color" );

      });
});





