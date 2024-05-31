@extends('frontend.layouts.master')
@section('title')
    {{ $content->title }}
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ratanshi/css/custom.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ratanshi/css/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/case_studies/ratanshi/css/swiper-bundle.min.css') }}>
@endsection
@section('main')
    <section class="ratanshibanner section_padding">
        <div class="container">
            <div class="ratanshibanner_img">
                <figcaption class="heading_1">
                    <div class="heading">
                        Lorem Isum,<br />
                        Ratanshi kheraj .
                    </div>
                </figcaption>
                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/ratanshibanner.webp') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="explorenow section_padding pt0">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Digital Marketing</div>
                <p>
                    Lorem ipsum is women's apparel brand with it’s roots in ethnic and
                    indo-fusion fashion.<br />
                    The need to be fulfilled was to depict Purusham’s aesthetic of
                    luxury and
                </p>
                <a href="" class="btn btn-buzz btn_xl mt-2">Explore More</a>
            </div>
        </div>
    </section>

    <section class="video_full">
        <div class="video_wrapper">
            <video class="insta-video" controls="false" id="reel1"
                poster="{{ asset('assets/frontend/case_studies/ratanshi/images/videowrapper.webp') }}">
                <source src="https://cdn.shopify.com/videos/c/o/v/bc263682510c43b7b730e7dff288cbb4.mp4" type="video/mp4" />
                <source src="https://cdn.shopify.com/videos/c/o/v/bc263682510c43b7b730e7dff288cbb4.mp4" type="video/ogg" />
            </video>
            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reel1">
                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}" alt="video-icon" />
            </div>
        </div>
    </section>

    <section class="section_padding section2 story_slider">
        <div class="container">
            <div class="swiper mySwiper_story">
                <div class="main_arrow">
                    <div class="swiper-button-prev swiper-button-prev-story">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M14.6 6L16 7.4L11.4 12L16 16.6L14.6 18L8.6 12L14.6 6Z" fill="#252525" />
                        </svg>
                    </div>

                    <div class="swiper-button-next swiper-button-next-story">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M9.4 18L8 16.6L12.6 12L8 7.4L9.4 6L15.4 12L9.4 18Z" fill="#252525" />
                        </svg>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg1.webp') }}"
                                alt="" />
                            <h2>Couture 2024</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg2.webp') }}"
                                alt="" />
                            <h2>Featured</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg3.webp') }}"
                                alt="" />
                            <h2>Nazaakat</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg4.webp') }}"
                                alt="" />
                            <h2>Gulmohar</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg5.webp') }}"
                                alt="" />
                            <h2>Roop</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg6.webp') }}"
                                alt="" />
                            <h2>Weaves</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg6.webp') }}"
                                alt="" />
                            <h2>Baatein</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg6.webp') }}"
                                alt="" />
                            <h2>Weaves</h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="story_box">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/storyimg6.webp') }}"
                                alt="" />
                            <h2>Baatein</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="columnimgs">
        <div class="container">
            <div class="row g-2 g-xxl-4 g-xl-4 g-lg-4 g-md-3 g-sm-3">
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg1.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg2.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg3.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg4.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg5.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg6.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg7.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg8.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg9.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg10.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg11.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/columnimg12.webp') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="fullwidthbanner section_padding">
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/fullwidth.webp') }}" alt="" />
    </section>

    <section class="videosec_cnt fullwidthbanner section_padding pt0">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Lorem <span>ipsum</span> dolor</div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                            ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video_full">
        <div class="video_wrapper">
            <video class="insta-video" controls="false" id="reel2"
                poster="{{ asset('assets/frontend/case_studies/ratanshi/images/videowrapper2.webp') }}">
                <source src="https://cdn.shopify.com/videos/c/o/v/2f47680543d94823b4e22dc610917c18.mp4"
                    type="video/mp4" />
                <source src="https://cdn.shopify.com/videos/c/o/v/2f47680543d94823b4e22dc610917c18.mp4"
                    type="video/ogg" />
            </video>
            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reel2">
                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}" alt="video-icon" />
            </div>
        </div>
    </section>

    <section class="columnimgs section_padding">
        <div class="container">
            <div class="row g-2 g-xxl-4 g-xl-4 g-lg-4 g-md-3 g-sm-3">
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg1.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg2.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg3.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg4.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg5.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg6.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg7.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg8.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/gulmoharimg9.webp') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="reel_wrapper section_padding">
        <div class="reel_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="reel_title">
                            <div class="heading_1">
                                <div class="heading">
                                    Lorem<br />
                                    Copy here!
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="reel_top_rgt">
                            <div class="row g-4">
                                <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/reelimg1.webp') }}"
                                        alt="" />
                                </div>
                                <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/reelimg2.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="reel_bottom section_padding">
            <div class="container">
                <div class="heading_1 text-center">
                    <div class="heading">Reels</div>
                </div>
                <div class="row g-4">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="video_wrapper">
                            {{-- <video class="insta-video" controls="false" id="reelv1"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo1.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video> --}}
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/C1GyddJSHak/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:16px;"> <a
                                        href="https://www.instagram.com/reel/C1GyddJSHak/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                        target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                                width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div
                                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                View this post on Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div
                                            style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                </div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                </div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div
                                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                            </div>
                                        </div>
                                    </a>
                                    <p
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/reel/C1GyddJSHak/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                            target="_blank">A post shared by Ratanshi Kheraj Sarees
                                            (@ratanshikherajsarees)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                            <script async src="//www.instagram.com/embed.js"></script>
                            {{-- <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv1">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                    alt="video-icon" />
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="video_wrapper">
                            {{-- <video class="insta-video" controls="false" id="reelv2"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo2.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video> --}}
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/C21hmtxSyvA/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:16px;"> <a
                                        href="https://www.instagram.com/reel/C21hmtxSyvA/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                        target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                                width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div
                                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                View this post on Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div
                                            style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                </div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                </div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div
                                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                            </div>
                                        </div>
                                    </a>
                                    <p
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/reel/C21hmtxSyvA/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                            target="_blank">A post shared by Ratanshi Kheraj Sarees
                                            (@ratanshikherajsarees)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                            <script async src="//www.instagram.com/embed.js"></script>
                            {{-- <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv2">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                    alt="video-icon" />
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="video_wrapper">
                            {{-- <video class="insta-video" controls="false" id="reelv3"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo3.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video> --}}
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/C0jsHuUSrvZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:16px;"> <a
                                        href="https://www.instagram.com/reel/C0jsHuUSrvZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                        target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                                width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div
                                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                View this post on Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div
                                            style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                </div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                </div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div
                                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                            </div>
                                        </div>
                                    </a>
                                    <p
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/reel/C0jsHuUSrvZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                            target="_blank">A post shared by Ratanshi Kheraj Sarees
                                            (@ratanshikherajsarees)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                            {{-- <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv3">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                    alt="video-icon" />
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="performance_marketing section_padding">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Performance Marketing</div>
            </div>
            <div class="row g-2 g-xxl-4 g-xl-4 g-lg-4 g-md-3 g-sm-3">
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/pmimg1.webp') }}" alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/pmimg2.webp') }}" alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/pmimg3.webp') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="about_brand section_padding pt0">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">About Brand</div>
                <p>
                    A luxury saree brand that epitomizes elegance and craftsmanship.
                    Specializing in handloom techniques, each saree is a masterpiece of
                    artistry and aesthetics. Collaborating with Buzz Makers, RKS
                    embarked on a digital journey to amplify its reach and redefine the
                    narrative of traditional wear.
                </p>
            </div>
            <div class="about_brand_sub">
                <div class="row g-4 align-items-center flex-row-reverse">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/abimg.webp') }}"
                            alt="" />
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="heading_1">
                            <div class="heading">Insight</div>
                            <p>
                                Recognizing the evolving consumer consciousness, RKS leveraged
                                the growing interest in traditional Indian wear among global
                                audiences. The insight was to showcase RKS Sarees not just as
                                garments but as embodiments of artistry, heritage, and modern
                                sophistication.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="column_sec">
        <div class="container">
            <div class="column_sec_sub section_padding">
                <div class="row g-4 justify-content-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                        <div class="column_sec_box">
                            <div class="heading_1 text-center">
                                <div class="heading">Challanges</div>
                                <p>
                                    Weak social following Weak social engagement No online sales
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                        <div class="column_sec_box">
                            <div class="heading_1 text-center">
                                <div class="heading">Objectives</div>
                                <p>
                                    Maximize Reach Increase Followers Generate Enquiries Boost
                                    Sales
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                        <div class="column_sec_box">
                            <div class="heading_1 text-center">
                                <div class="heading">Digital Journey</div>
                                <p>
                                    Facebook<br />
                                    Instagram<br />
                                    Organic (SEO)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="result text-center section_padding">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Results</div>
                <p>
                    In a short span of time, the RK Sarees digital campaign achieved
                    remarkable milestones. The campaign reached out to
                    <strong>2,364,2368</strong> enthusiasts, immersing them in the world
                    of RK's exquisite sarees. These engagements resulted in
                    <strong>9,12,46,078</strong> impressions, weaving RK's narrative
                    intricately into the digital fabric of fashion and culture.
                </p>

                <p>
                    Moreover, the campaign garnered <strong>1,03,457 clicks</strong>,
                    symbolizing the journeys embarked upon by curious individuals, from
                    initial curiosity to the delightful discovery of RK's collections.
                    The Return on Ad Spend (ROAS) stood strong at 85.78%, a testament
                    not only to RK's digital resonance but also to Buzz Makers'
                    strategic acumen in crafting and executing impactful digital
                    campaigns.
                </p>

                <p>
                    The impact extended beyond mere numbers. The campaign resonated
                    deeply with the audience, leading to a 298% increase in followers on
                    Instagram, showcasing the growing community of the brand
                </p>
            </div>
        </div>
    </section>

    <section class="influencer_arketing section_padding">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Influencer Marketing</div>
            </div>
            <div class="row g-4">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="video_wrapper">
                        {{-- <video class="insta-video" controls="false" id="reelim1"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo1.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim1">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                alt="video-icon" />
                        </div> --}}
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/reel/C2-FA7RoUPf/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/reel/C2-FA7RoUPf/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/reel/C2-FA7RoUPf/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by Ratanshi Kheraj Sarees (@ratanshikherajsarees)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="video_wrapper">
                        {{-- <video class="insta-video" controls="false" id="reelim2"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo2.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim2">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                alt="video-icon" />
                        </div> --}}
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/reel/Ctb0sb9o9Jy/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/reel/Ctb0sb9o9Jy/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/reel/Ctb0sb9o9Jy/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by Ratanshi Kheraj Sarees (@ratanshikherajsarees)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="video_wrapper">
                        {{-- <video class="insta-video" controls="false" id="reelim3"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo3.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim3">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                                alt="video-icon" />
                        </div> --}}
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/reel/C3Snyqyyw35/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/reel/C3Snyqyyw35/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/reel/C3Snyqyyw35/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by Ratanshi Kheraj Sarees (@ratanshikherajsarees)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content_production section_padding pb0">
        <div class="container">
            <div class="heading_1 section_padding pt0 text-center">
                <div class="heading">Content Production</div>
            </div>
        </div>
        <div class="video_full">
            <div class="video_wrapper">
                <video class="insta-video" controls="false" id="videothumbmain1"
                    poster="{{ asset('assets/frontend/case_studies/ratanshi/images/videothumbmain.webp') }}">
                    <source src="https://cdn.shopify.com/videos/c/o/v/964c25b058cd4de1a29980dcf306c421.mp4"
                        type="video/mp4" />
                    <source src="https://cdn.shopify.com/videos/c/o/v/964c25b058cd4de1a29980dcf306c421.mp4"
                        type="video/ogg" />
                </video>
                <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="videothumbmain1">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.webp') }}"
                        alt="video-icon" />
                </div>
            </div>
        </div>
    </section>

    <section class="columnimgs section_padding">
        <div class="container">
            <div class="row g-2 g-xxl-4 g-xl-4 g-lg-4 g-md-3 g-sm-3">
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg1.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg2.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg3.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg4.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg5.webp') }}"
                        alt="" />
                </div>
                <div class="col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/postimg6.webp') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="pr section_padding"
        style="
        background-image: url(assets/frontend/case_studies/ratanshi/images/pr_bg.webp);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      ">
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="pr_lft">
                        <div class="heading_1">
                            <div class="heading">PR</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="pr_rgt">
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/primg.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="imgcnt section_padding">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-xxl-6 col-xl-6">
                    <div class="imgcnt_lft">
                        <div class="heading_1">
                            <div class="heading">Brand S.E.O</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida. Risus commodo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="imgcnt_img"><img
                            src="{{ asset('assets/frontend/case_studies/ratanshi/images/noimg.webp') }}"
                            alt="" /></div>
                </div>
            </div>
        </div>
    </section>

    <section class="designscreen section_padding pb0">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Lorem ipsum</div>
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing<br />
                    elit, sed do eiusmod tempor incididunt
                </p>
            </div>

            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/designscreen.webp') }}" alt="" />
        </div>
    </section>

    <section class="webpagedesign section_padding">
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12">
                    <div class="webpagedesign_lft">
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/webpagedesignimg1.webp') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <div class="webpagedesign_rgt">
                        <div class="heading_1 text-center">
                            <div class="heading">Lorem ipsum</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et
                            </p>
                        </div>
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/webpagedesignimg2.webp') }}"
                            alt="" />
                        <div class="heading_1 text-center mt-5">
                            <div class="heading">Lorem ipsum</div>
                        </div>
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/webpagedesignimg3.webp') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packaging_design section_padding pb0">
        <div class="container">
            <div class="heading_1 text-center">
                <div class="heading">Packaging Design</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                    ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis.
                </p>
            </div>
        </div>
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/packaging_design_img.webp') }}"
            alt="" />
    </section>

    <section class="reference text-center section_padding">
        <div class="container">
            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/referenceimg.webp') }}" alt="" />
        </div>
    </section>

    <section class="reference text-center section_padding pt0">
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/pattern.webp') }}" alt="" />
    </section>

    <section class="bottom_img">
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/bottomimg1.webp') }}" alt="" />
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/bottomimg2.webp') }}" alt="" />
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/bottomimg3.webp') }}" alt="" />
    </section>
@endsection
@section('js')
    <script src={{ asset('assets/frontend/case_studies/ratanshi/js/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/frontend/case_studies/ratanshi/js/custom.js') }}></script>
    <script>
        var swiperstory = new Swiper(".mySwiper_story", {
            autoplay: true,
            speed: 1000,

            slidesPerView: 7,
            spaceBetween: 0,
            navigation: {
                nextEl: ".swiper-button-next-story",
                prevEl: ".swiper-button-prev-story",
            },
            breakpoints: {
                1200: {
                    slidesPerView: 7,
                },
                1199: {
                    slidesPerView: 5,
                },
                990: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 4,
                },
                575: {
                    slidesPerView: 3,
                },
                380: {
                    slidesPerView: 3,
                },
                0: {
                    slidesPerView: 2,
                },
            },
        });
    </script>
@endsection
