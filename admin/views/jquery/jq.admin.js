// show menu left
var qltitle = $(".click_title");
var qlcontent = $(".menu-alert");
var icon = $(".fa-archive");
for (let i = 0; i < qltitle.length; i++) {
    $(qltitle[i]).click(function(e) {
        e.preventDefault();
        $(qlcontent[i]).slideToggle();
        $(qlcontent[i]).parent().siblings().children('.menu-alert').slideUp();
    });

    $(icon[i]).click(function(e) {
        e.preventDefault();
        $(qlcontent[i]).slideToggle();
    });
}