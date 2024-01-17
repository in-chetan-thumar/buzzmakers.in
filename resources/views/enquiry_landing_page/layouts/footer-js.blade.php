<script src={{asset('assets/frontend/js/jquery.min.js')}}></script>
<script src={{asset('assets/frontend/js/popper.min.js')}}></script>
<script src={{asset('assets/frontend/js/bootstrap.js')}}></script>
<script src={{asset('assets/frontend/js/slick.js')}}></script>
<script src={{asset('assets/frontend/js/custom.js')}}></script>

<script>
    $(document).ready(function() {
        // Smooth scrolling for section links
        $('a[href^="#"]').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
</script>
