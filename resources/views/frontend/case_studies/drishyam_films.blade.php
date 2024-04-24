@extends('frontend.layouts.master')
@section('title')
    Drishyam films
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/custom.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/swiper-bundle.min.css') }}>
@endsection
@section('main')
    <!-- Example section post start-->
    <section class="page_banner section_padding section-post film_banner pb0">
        <div class="container text-center">
            <img src="{{ asset('assets/frontend/images/vdc/filmbanner.webp') }}" alt="" />
            <h2>
                Lorem Ipsum<br />
                is simply dummy text
            </h2>
        </div>
    </section>
    <!-- Example section post end-->

    <section class="middle_cnt section_padding">
        <div class="container">
            <h2>It is a long established fact that a reader</h2>
            <p>
                It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout.
            </p>
        </div>
    </section>

    <section class="movie_poster section_padding pt0"
        style="
        background-image: url(assets/frontend/images/vdc/toppattern1.webp),
          url(assets/frontend/images/vdc/bottompattern2.webp);
        background-repeat: no-repeat, no-repeat;
        background-position: right top 170px, bottom left;
      ">
        <div class="container">
            <div class="title_2">
                <h2>
                    There are many variations of passages<br />
                    of Lorem Ipsum available,
                </h2>
            </div>
        </div>
        <div class="belt">
            <img src="{{ asset('assets/frontend/images/vdc/belt1.webp') }}" alt="" />
        </div>
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                    <p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout. It is a
                        long established fact that a reader will be distracted by the
                        readable content.
                    </p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
                    <div class="row align-items-center">
                        <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <img src="{{ asset('assets/frontend/images/vdc/visphot.webp') }}" alt="" />
                        </div>
                        <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <img src="{{ asset('assets/frontend/images/vdc/Tamso.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="movie_poster song_poster section_padding pt0"
        style="
        background-image: url(assets/frontend/images/vdc/toppattern2.webp),
          url(assets/frontend/images/vdc/toppattern3.webp);
        background-repeat: no-repeat, no-repeat;
        background-position: right top 140px, bottom left;
      ">
        <div class="belt">
            <img src="{{ asset('assets/frontend/images/vdc/belt2.svg') }}" alt="" />
        </div>
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
                    <div class="row align-items-center">
                        <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <img src="{{ asset('assets/frontend/images/vdc/Dhakaad.webp') }}" alt="" />
                        </div>
                        <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <img src="{{ asset('assets/frontend/images/vdc/EkakiMann.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                    <p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout. It is a
                        long established fact that a reader will be distracted by the
                        readable content.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="movie_pramotion section_padding pb0"
        style="
        background-image: url(assets/frontend/images/vdc/bgsection.webp);
        background-repeat: no-repeat;
        background-position: top center;
        background-size: 100% auto;
      ">
        <div class="video_main">
            <div class="container">
                <div class="title_2">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-8">
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout,
                                established fact that a reader will be distracted by the
                                readable content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8">
                        <div class="video_img">
                            <img src="{{ asset('assets/frontend/images/vdc/videoimg.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pramotion_poster section_padding"
        style="
        background-image: url(assets/frontend/images/vdc/shape.webp);
        background-repeat: no-repeat;
        background-position: top center;
        background-size: 100% auto;
      ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8">
                    <div class="row g-xxl-4 g-xl-4 g-lg-4 g-md-4 g-2 justify-content-center">
                        <div class="col-6 col-xxl-4 col-xl-4 col-lg-4 col-ms-4 col-sm-4">
                            <img src="{{ asset('assets/frontend/images/vdc/poster1.webp') }}" alt="" />
                        </div>
                        <div class="col-6 col-xxl-4 col-xl-4 col-lg-4 col-ms-4 col-sm-4">
                            <img src="{{ asset('assets/frontend/images/vdc/poster2.webp') }}" alt="" />
                        </div>
                        <div class="col-6 col-xxl-4 col-xl-4 col-lg-4 col-ms-4 col-sm-4">
                            <img src="{{ asset('assets/frontend/images/vdc/poster3.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logo_poster p0">
        <section class="section_padding pb0"
            style="
          background-image: url(assets/frontend/images/vdc/rotate_img.webp), url(assets/frontend/images/vdc/logobg.svg);
          background-repeat: no-repeat, no-repeat;
          background-position: bottom center, top center;
          background-size: 100% auto, cover;
        ">
            <div class="container">
                <div class="title_2">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-8">
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout,
                                established fact that a reader will be distracted by the
                                readable content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-xxl-4 g-xl-4 g-lg-4 g-md-2 g-1">
                    <div class="col">
                        <div class="logo_box">
                            <img src="{{ asset('assets/frontend/images/vdc/logo1.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo_box">
                            <img src="{{ asset('assets/frontend/images/vdc/logo2.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo_box">
                            <img src="{{ asset('assets/frontend/images/vdc/logo3.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo_box">
                            <img src="{{ asset('assets/frontend/images/vdc/logo4.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo_box">
                            <img src="{{ asset('assets/frontend/images/vdc/logo5.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="social_media section_padding">
        <div class="container">
            <div class="title_2">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8">
                        <h2>Social Media</h2>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout,
                            established fact that a reader will be distracted by the
                            readable content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="social_img_wrpr"
            style="
          background-image: url(assets/frontend/images/vdc/social_bg.svg);
          background-repeat: no-repeat;
          background-position: center center;
          background-size: cover;
        ">
            <div class="container">
                <div class="row g-xxl-4 g-xl-4 g-lg-4 g-md-4 g-2">
                    <div class="col-6 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="social_img">
                            <img src="{{ asset('assets/frontend/images/vdc/socialimg1.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="social_img">
                            <img src="{{ asset('assets/frontend/images/vdc/socialimg2.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="social_img">
                            <img src="{{ asset('assets/frontend/images/vdc/socialimg3.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="social_img">
                            <img src="{{ asset('assets/frontend/images/vdc/socialimg4.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram_section section_padding pt0">
        <div class="container">
            <div class="instagram_wrpr">
                <div class="title_2 text-left">
                    <h2>It is a long established fact that a reader</h2>
                </div>
                <div class="row g-xxl-4 g-xl-4 g-lg-4 g-md-4 g-2">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="insta_box">
                            <img src="{{ asset('assets/frontend/images/vdc/instaimg1.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="insta_box">
                            <img src="{{ asset('assets/frontend/images/vdc/instaimg2.webp') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="insta_box">
                            <img src="{{ asset('assets/frontend/images/vdc/instaimg3.webp') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src={{ asset('assets/frontend/images/vdc/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/frontend/images/vdc/custom.js') }}></script>
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
