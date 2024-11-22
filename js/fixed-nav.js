$('a[href^="#"]').click(function (event) {
    var id = $(this).attr("href");
    var target = $(id).offset().top;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});

var offset = $('nav').offset().top;
$(window).scroll(function () {
    if ($(this).scrollTop() >= offset) {
        $('nav').addClass('isFixed');
        $('html').addClass('whiteSpace');
    } else {
        $('nav').removeClass('isFixed');
        $('html').removeClass('whiteSpace');
    }
});