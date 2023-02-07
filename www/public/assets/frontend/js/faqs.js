$(function () {
    $(".accordion-item").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("#lessMore").toggle();
        $(".accordion-item:hidden").slice(0).slideDown();
        if ($(".accordion-item:hidden").length == 0) {
            $("#loadMore").fadeOut('');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });

});


