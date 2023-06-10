$(function () {
    $(".accordion-item").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("#lessfaqs").toggle();
        $(".accordion-item:hidden").slice(0).slideDown();
        if ($(".accordion-item:hidden").length == 0) {
            $("#loadMore").fadeOut('');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });

    $("#lessfaqs").on('click', function (e) {
        $(".accordion-item").slice(3).hide();
        e.preventDefault();
        $("#loadMore").toggle();
        $("#lessfaqs").fadeOut('');

         $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });


});


