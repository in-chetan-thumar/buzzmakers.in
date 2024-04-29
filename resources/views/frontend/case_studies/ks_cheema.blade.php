@extends('frontend.layouts.master')
@section('title')
    Ks Cheema
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ks/css/custom.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ks/css/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ks/css/swiper-bundle.min.css') }}>
@endsection
@section('main')
    <!-- Example section post start-->
    <section class="page_banner section_padding section-post film_banner ks_banner pb0">
        <div class="container text-center">
            <img src="{{ asset('assets/frontend/case_studies/ks/images/ksbanner.svg') }}" alt="" />
            <h2>
                A future ready<br />
                automobile business
            </h2>
        </div>
    </section>
    <!-- Example section post end-->

    <section class="middle_cnt section_padding p0">
        <div class="container">
            <h2>It is a long established fact that a reader</h2>
            <p>
                It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout.
            </p>
        </div>
    </section>

    <section class="logo_main section_padding">
        <div class="container">
            <div class="title_2">
                <h2>
                    There are many variations of passages<br />
                    of Lorem Ipsum available,
                </h2>
            </div>
        </div>
        <div class="logo_design section_padding"
            style="
          background: url(assets/frontend/case_studies/ks/images/rotate_img2.webp),
            url('assets/frontend/case_studies/ks/images/logosliderbg.webp');
          background-repeat: no-repeat, no-repeat;
          background-size: 100% auto, cover;
          background-position: bottom -1px center, center;
        ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9 col-xl-9">
                        <div class="title_2">
                            <h2>Logo Design</h2>
                        </div>
                        <div class="slider_wrapper">
                            <div class="swiper mySwiper_logo">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="logo_wrpr">
                                            <img src="{{ asset('assets/frontend/case_studies/ks/images/sliderlogo1.webp') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo_wrpr">
                                            <img src="{{ asset('assets/frontend/case_studies/ks/images/sliderlogo1.webp') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo_wrpr">
                                            <img src="{{ asset('assets/frontend/case_studies/ks/images/sliderlogo1.webp') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_arrow">
                                <div class="swiper-button-prev-logo swiper-button-prev">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.738 7.77778L2.12693 7.77778L7.96026 13.6112L7.22215 14.4444L3.59239e-05 7.22222L7.22226 -3.72236e-07L7.96026 0.833344L2.12693 6.66667L15.738 6.66667L15.738 7.77778Z"
                                            fill="#fad30c" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next-logo swiper-button-next">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M-3.39977e-07 6.66656L13.6111 6.66656L7.77778 0.833113L8.51589 -0.000110045L15.738 7.22211L8.51578 14.4443L7.77778 13.611L13.6111 7.77767L-2.91409e-07 7.77767L-3.39977e-07 6.66656Z"
                                            fill="#fad30c" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photography section_padding pt0">
        <div class="container">
            <div class="title_2">
                <h2>Photography</h2>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable<br />
                    content of a page when looking at its layout.
                </p>
            </div>
            <div class="row g-0">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                    <div class="photography_img">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/photographyimg1.webp') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                    <div class="photography_img">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/photographyimg2.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                    <div class="photography_img">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/photographyimg3.webp') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                    <div class="photography_img">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/photographyimg4.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="photography_card section_padding">
        <div class="container">
            <div class="title_2">
                <h2>Photography</h2>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable<br />
                    content of a page when looking at its layout.
                </p>
            </div>
        </div>
        <div class="photography_inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="photography_img">
                            <img src="{{ asset('assets/frontend/case_studies/ks/images/cardimg1.webp') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="photography_img">
                            <img src="{{ asset('assets/frontend/case_studies/ks/images/cardimg2.webp') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="webdesignmain"
        style="
        background: url(assets/frontend/case_studies/ks/images/webdesignbg.webp);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      ">
        <section class="webdesign section_padding">
            <div class="webdesign_wrpr">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                            <div class="webdesign_cnt">
                                <div class="title_2 text-left">
                                    <h2>webdesign</h2>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking
                                        at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12">
                    <div class="wd_img">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/webdesignimg.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="screenshot_main">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="first_row">
                        <div class="screenshot noshadow">
                            <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot1.webp') }}"
                                alt="" />
                        </div>
                        <div class="screenshot">
                            <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot2.webp') }}"
                                alt="" />
                        </div>
                        <div class="screenshot">
                            <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot3.webp') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="screenshot">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot4.webp') }}"
                            alt="" />
                    </div>
                    <div class="screenshot">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot5.webp') }}"
                            alt="" />
                    </div>
                    <div class="screenshot">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot6.webp') }}"
                            alt="" />
                    </div>
                    <div class="screenshot noshadow">
                        <img src="{{ asset('assets/frontend/case_studies/ks/images/screenshot7.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src={{ asset('assets/frontend/case_studies/ks/js/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/frontend/case_studies/ks/js/custom.js') }}></script>
    <script>
        var swiperlogo = new Swiper(".mySwiper_logo", {
            autoplay: true,
            speed: 1000,

            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: ".swiper-button-next-logo",
                prevEl: ".swiper-button-prev-logo",
            },
        });
    </script>
@endsection
