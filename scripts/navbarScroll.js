$(window).scroll(
    function () {
        $('nav').toggleClass("scrolled", $(this).scrollTop() > 200);
    })

$('a[href*="navbar"]').on('click', function (e) {
    $('html,body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 60
    }, 500);
    e.preventDefault();
});