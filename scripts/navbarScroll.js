$(window).scroll(
    function () {
        $('nav').toggleClass("scrolled", $(this).scrollTop() > 200);
    })

$('a[href*="#"]').on('click', function (e) {
    $('html,body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 62
    }, 500);
    e.preventDefault();
});