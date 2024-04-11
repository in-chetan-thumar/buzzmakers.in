<section class=" section2 video_slider">
    <div class="container">
        <div class="swiper mySwiper_video">
            <div class="main_arrow">
                <div class="swiper-button-prev swiper-button-prev-video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14.6 6L16 7.4L11.4 12L16 16.6L14.6 18L8.6 12L14.6 6Z" fill="white" />
                    </svg>
                </div>

                <div class="swiper-button-next swiper-button-next-video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect width="24" height="24" rx="12" fill=" #FBD206" />
                        <path d="M9.4 18L8 16.6L12.6 12L8 7.4L9.4 6L15.4 12L9.4 18Z" fill="white" />
                    </svg>
                </div>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide" style="margin-left: 12px">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/C3IJNZiBmPq/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>

                </div>
                <div class="swiper-slide">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/CaMtXFgKcTa/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>

                </div>
                <div class="swiper-slide">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/C5BI7q7Co59/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>

                </div>
                <div class="swiper-slide">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/C17B77iPL_E/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="swiper-slide">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/C32pVIUSGys/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>

                </div>
            </div>
        </div>
    </div>
</section>
<script src={{ asset('assets/frontend/js/vdc/swiper-bundle.min.js') }}></script>
<script>
    var swiperverticals = new Swiper(".mySwiper_video", {
        // autoplay: 3000,
        speed: 1000,

        slidesPerView: 3,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-video",
            prevEl: ".swiper-button-prev-video",
        },
        breakpoints: {
            1200: {
                // centeredSlides: true,
                spaceBetween: 30,
            },

            991: {
                slidesPerView: 3,
                centeredSlides: true,
                spaceBetween: 30,
            },
            767: {
                slidesPerView: 2,
                centeredSlides: true,
                spaceBetween: 20,
            },
            575: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
        },
    });
</script>
