$(function () {
    $(".accordion-item").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".accordion-item:hidden").slice(0, 3).slideDown();
        if ($(".accordion-item:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
