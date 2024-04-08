@extends('frontend.layouts.master')
@section('title')
    VDC
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/custom.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/css/vdc/responsive.css') }}>
@endsection
@section('main')
    <!-- Example section post start-->
    <section class="page_banner section_padding section-post pb0">
        <div class="container text-center">
            <img src="{{ asset('assets/frontend/images/vdc/casestudybanner.webp') }}" alt="" />
        </div>
    </section>
    <!-- Example section post end-->

    <section class="explore_section section_padding">
        <div class="container">
            <div class="title_1 text-center">
                <div class="title_green">
                    <h1>
                        Lorem ipsum dolor sit<br />
                        amet, consectetur adipiscing elit
                    </h1>
                </div>
                <p class="title-tags">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                    ipsum
                </p>
                <a href="" class="btn btn-buzz btn_xl mt-2">Explore More</a>
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
        <img src="{{ asset('assets/frontend/images/vdc/middlebanner.webp') }}" alt="" />
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
        <img src="{{ asset('assets/frontend/images/vdc/column_full_img.webp') }}" alt="" />
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
        <img src="{{ asset('assets/frontend/images/vdc/socialMediaDesign.webp') }}" alt="" />
    </section>

    <section class="socialmediadesign section_padding section2 pt0">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-4">
                    <figure class="video_box">
                        <video controls src="{{ asset('assets/frontend/images/vdc/video/VDCGame.mp4') }}"></video>
                    </figure>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-4">
                    <figure class="video_box">
                        <video controls src="{{ asset('assets/frontend/images/vdc/video/VDCGym.mp4') }}"></video>
                    </figure>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-4">
                    <figure class="video_box">
                        <video controls src="{{ asset('assets/frontend/images/vdc/video/VDCHoli.mp4') }}"></video>
                    </figure>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-4">
                    <figure class="video_box">
                        <video controls
                            src="{{ asset('assets/frontend/images/vdc/video/VDCStopMotionReel.mp4') }}"></video>
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
