$(document).ready(function() {
    var height = $( document ).height();    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 736) {
            $('.div-right-inblogdt').addClass('l-div-right-fixed');
        } else {
            $('.div-right-inblogdt').removeClass('l-div-right-fixed');
            $('.div-right-inblogdt').css('top', 0);
        } 
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > height - 1500) {
            $('.div-right-inblogdt').removeClass('l-div-right-fixed');
            $('.div-right-inblogdt').addClass('l-div-right-absolute');
            $('.l-div-right-absolute').css('top', height - 2000);
        } else {
            $('.div-right-inblogdt').removeClass('l-div-right-absolute');
            $('.l-div-right-fixed').css('top', -500);
        } 
    });
});