@extends('frontend.layouts.master')
@section('title')
    VDC
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/custom.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/swiper-bundle.min.css') }}>
@endsection
@section('main')
    <section class="page_banner section_padding section-post pb0">
        <div class="container text-center">
            <img src="{{ asset('assets/frontend/images/vdc/casestudybanner.webp') }}" alt="" />
        </div>
    </section>

    <section class="explore_section section_padding">
        <div class="container">
            <div class="title_1 text-center">
                <div class="title_green">
                    <h1>
                        Crafting the Complete Brand Experience
                    </h1>
                </div>
                <p class="title-tags">
                    Explore our journey with VDC - Vegan Drink Company, from logo design to digital marketing. Discover how
                    our services elevated their brand presence and engaged conscious consumers.
                </p>
                {{-- <a href="" class="btn btn-buzz btn_xl mt-2">Explore More</a> --}}
            </div>
        </div>
    </section>

    <section class="vdc_section section_padding pt0">
        <img src="{{ asset('assets/frontend/images/vdc/vdc_banner.webp') }}" alt="" />
    </section>

    <section class="middle_text section_padding pt0">
        <div class="container">
            <h2>
                The logo was conceived with the intent of embodying the essence of
                Indian taste and health. The letters 'V,' 'D,' and 'C' were
                strategically chosen to represent Tasty, Creamy, and Healthy,
                respectively. The 'V' signifies Tasty, 'D' represents Creamy, and 'C'
                stands for Healthy. This fusion of design elements created a visually
                appealing and culturally resonant logo that encapsulates the values of
                VDC.
            </h2>
        </div>
    </section>

    <section class="vdc_section section_padding p0">
        <img src="{{ asset('assets/frontend/images/vdc/middlebanner.gif') }}" alt="" />
    </section>

    <section class="mid_section section_padding p0">
        <div class="row align-items-center">
            <div class="col-xxl-4 col-xl-4">
                <img class="lft_img" src="{{ asset('assets/frontend/images/vdc/lft_img.webp') }}" alt="" />
            </div>
            <div class="col-xxl-4 col-xl-4">
                <img src="{{ asset('assets/frontend/images/vdc/mid_img.webp') }}" alt="" />
            </div>
            <div class="col-xxl-4 col-xl-4">
                <img class="rgt_img" src="{{ asset('assets/frontend/images/vdc/rgt_img.webp') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="section2">
        <img src="{{ asset('assets/frontend/images/vdc/section2.webp') }}" alt="" />
    </section>

    <section class="column_section">
        <div class="row g-0 m-0">
            <div class="col">
                <figure class="column_box">
                    <div class="column_img">
                        <img src="{{ asset('assets/frontend/images/vdc/column_img1.webp') }}" alt="" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/vdc/column_img1inner.webp') }}" alt="" />
                </figure>
            </div>
            <div class="col">
                <figure class="column_box">
                    <div class="column_img">
                        <img src="{{ asset('assets/frontend/images/vdc/column_img2.webp') }}" alt="" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/vdc/column_img2inner.webp') }}" alt="" />
                </figure>
            </div>
            <div class="col">
                <figure class="column_box">
                    <div class="column_img">
                        <img src="{{ asset('assets/frontend/images/vdc/column_img3.webp') }}" alt="" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/vdc/column_img3inner.webp') }}" alt="" />
                </figure>
            </div>
            <div class="col">
                <figure class="column_box">
                    <div class="column_img">
                        <img src="{{ asset('assets/frontend/images/vdc/column_img4.webp') }}" alt="" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/vdc/column_img4inner.webp') }}" alt="" />
                </figure>
            </div>
            <div class="col">
                <figure class="column_box">
                    <div class="column_img">
                        <img src="{{ asset('assets/frontend/images/vdc/column_img5.webp') }}" alt="" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/vdc/column_img5inner.webp') }}" alt="" />
                </figure>
            </div>
        </div>
    </section>

    <section class="section2 p0">
        <img src="{{ asset('assets/frontend/images/vdc/section_pro.gif') }}" alt="" />
    </section>

    <section class="section2 p0">
        <img src="{{ asset('assets/frontend/images/vdc/full_img1.webp') }}" alt="" />
    </section>

    <section class="section2 p0">
        <img src="{{ asset('assets/frontend/images/vdc/full_img2.webp') }}" alt="" />
    </section>

    <section class="section2 p0">
        <img src="{{ asset('assets/frontend/images/vdc/full_img3.webp') }}" alt="" />
    </section>

    <section class="section2 p0">
        <img src="{{ asset('assets/frontend/images/vdc/full_img4.webp') }}" alt="" />
    </section>

    <section class="websitedesign section_padding">
        <div class="container">
            <div class="title_1 text-center">
                <div class="title_green">
                    <h1>Website Design</h1>
                </div>
            </div>
            <img src="{{ asset('assets/frontend/images/vdc/websitedesign.webp') }}" alt="" />
        </div>
    </section>

    <section class="socialmediadesign section_padding p0">
        <div class="title_1 text-center">
            <div class="title_green">
                <h1>Social Media Design</h1>
            </div>
        </div>
        <div class="swiper mySwiper_instagram">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="instagram_box">
                        <a href="#"><img src="{{ asset('assets/frontend/images/vdc/instagram1.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram_box">
                        <a href="#"><img src="{{ asset('assets/frontend/images/vdc/instagram2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram_box">
                        <a href="#"><img src="{{ asset('assets/frontend/images/vdc/instagram3.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram_box">
                        <a href="#"><img src="{{ asset('assets/frontend/images/vdc/instagram4.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instagram_box">
                        <a href="#"><img src="{{ asset('assets/frontend/images/vdc/instagram5.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section_padding section2 video_slider">
        <div class="container">
            <div class="swiper mySwiper_video">
                <div class="main_arrow">
                    <div class="swiper-button-prev swiper-button-prev-video">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M14.6 6L16 7.4L11.4 12L16 16.6L14.6 18L8.6 12L14.6 6Z" fill="white" />
                        </svg>
                    </div>

                    <div class="swiper-button-next swiper-button-next-video">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect width="24" height="24" rx="12" fill="#a1cc39" />
                            <path d="M9.4 18L8 16.6L12.6 12L8 7.4L9.4 6L15.4 12L9.4 18Z" fill="white" />
                        </svg>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video class="insta-video" controls="" id="reel1"
                            poster="{{ asset('assets/frontend/images/vdc/videothumb1.webp') }}">
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCGame.mp4') }}" type="video/mp4" />
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCGame.mp4') }}" type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reel1">
                            <img src="{{ asset('assets/frontend/images/vdc/video-icon.webp') }}" alt="video-icon" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <video class="insta-video" controls="" id="reel2"
                            poster="{{ asset('assets/frontend/images/vdc/videothumb2.webp') }}">
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCGym.mp4') }}" type="video/mp4" />
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCGym.mp4') }}" type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel2" data-reel="reel2">
                            <img src="{{ asset('assets/frontend/images/vdc/video-icon.webp') }}" alt="video-icon" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <video class="insta-video" controls="" id="reel3"
                            poster="{{ asset('assets/frontend/images/vdc/videothumb3.webp') }}">
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCHoli.mp4') }}" type="video/mp4" />
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCHoli.mp4') }}" type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel3" data-reel="reel3">
                            <img src="{{ asset('assets/frontend/images/vdc/video-icon.webp') }}" alt="video-icon" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <video class="insta-video" controls="" id="reel4"
                            poster="{{ asset('assets/frontend/images/vdc/videothumb4.webp') }}">
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCStopMotionReel.mp4') }}"
                                type="video/mp4" />
                            <source src="{{ asset('assets/frontend/images/vdc/video/VDCStopMotionReel.mp4') }}"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel4" data-reel="reel4">
                            <img src="{{ asset('assets/frontend/images/vdc/video-icon.webp') }}" alt="video-icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src={{ asset('assets/frontend/js/vdc/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/frontend/js/vdc/custom.js') }}></script>
    <script>
        var swiperverticals = new Swiper(".mySwiper_video", {
            //autoplay:2000,
            speed: 1000,

            slidesPerView: 4,
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
                    //centeredSlides: true,
                    spaceBetween: 30,
                },

                991: {
                    slidesPerView: 4,
                    centeredSlides: true,
                    spaceBetween: 30,
                },
                767: {
                    slidesPerView: 3,
                    centeredSlides: true,
                    spaceBetween: 20,
                },
                575: {
                    slidesPerView: 2,
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

    <script>
        var swiperinstagram = new Swiper(".mySwiper_instagram", {
            autoplay: true,
            speed: 1000,

            slidesPerView: 5,
            spaceBetween: 0,
            breakpoints: {
                1200: {
                    //centeredSlides: true,
                    spaceBetween: 0,
                },

                991: {
                    slidesPerView: 5,
                },
                767: {
                    slidesPerView: 3,
                },
                575: {
                    slidesPerView: 2,
                },
                480: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 2,
                },
            },
        });
    </script>
@endsection
