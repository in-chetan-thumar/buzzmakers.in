@extends('frontend.layouts.master')
@section('title')
    Ratanshi
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
                poster="assets/frontend/case_studies/ratanshi/images/videowrapper.webp">
                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4" />
                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/ogg" />
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
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/fullwidth.png') }}" alt="" />
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
                poster="assets/frontend/case_studies/ratanshi/images/videowrapper2.webp">
                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4" />
                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/ogg" />
            </video>
            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reel2">
                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}" alt="video-icon" />
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
                                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/reelimg1.png') }}"
                                        alt="" />
                                </div>
                                <div class="col-6 col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/reelimg2.png') }}"
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
                            <video class="insta-video" controls="false" id="reelv1"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo1.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video>
                            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv1">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                    alt="video-icon" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="video_wrapper">
                            <video class="insta-video" controls="false" id="reelv2"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo2.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video>
                            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv2">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                    alt="video-icon" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="video_wrapper">
                            <video class="insta-video" controls="false" id="reelv3"
                                poster="assets/frontend/case_studies/ratanshi/images/reelvideo3.webp">
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                    type="video/ogg" />
                            </video>
                            <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelv3">
                                <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                    alt="video-icon" />
                            </div>
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
                        <video class="insta-video" controls="false" id="reelim1"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo1.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim1">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                alt="video-icon" />
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="video_wrapper">
                        <video class="insta-video" controls="false" id="reelim2"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo2.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim2">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                alt="video-icon" />
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="video_wrapper">
                        <video class="insta-video" controls="false" id="reelim3"
                            poster="assets/frontend/case_studies/ratanshi/images/imvideo3.webp">
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/mp4" />
                            <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reelim3">
                            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
                                alt="video-icon" />
                        </div>
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
                    poster="assets/frontend/case_studies/ratanshi/images/videothumbmain.webp">
                    <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4" />
                    <source src="https://cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/ogg" />
                </video>
                <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="videothumbmain1">
                    <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/video_btn.png') }}"
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

            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/designscreen.png') }}" alt="" />
        </div>
    </section>

    <section class="webpagedesign section_padding">
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12">
                    <div class="webpagedesign_lft">
                        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/webpagedesignimg1.png') }}"
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
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/packaging_design_img.png') }}" alt="" />
    </section>

    <section class="reference text-center section_padding">
        <div class="container">
            <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/referenceimg.png') }}" alt="" />
        </div>
    </section>

    <section class="reference text-center section_padding pt0">
        <img src="{{ asset('assets/frontend/case_studies/ratanshi/images/pattern.png') }}" alt="" />
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
