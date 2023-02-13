@extends('frontend.layouts.master')
@section('title')
    JioMeet
@endsection

@section('main')
    <!-- section top header -->
    <div class="container-back-top-section">
        <section class="responsive-container">
            <!-- <div class="container-fluid reveal"> -->
            <div class="container pt-5">
                <div class="img-header-container">
                    <img src="{{ asset('assets/frontend/images/profile/jio/top-banner.webp') }}" class="w-100" />
                </div>
            </div>
        </section>

        <!-- section text -->
        <section class="responsive-container section-text">
            <div class="container text-center py-5">
                <h1>Marketing JioMeet's</h1>
                <h2>Made-In-India Digital Services To The World</h2>
                <p class="mb-0">Buzz Makers adopts JioMeet brand identity by delivering a paradigm of digital marketing
                    solutions</p>
                <p>with a devised social media strategy for their B2B as well as usual clients.</p>
                <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Explore More</a>
            </div>
        </section>
    </div>

    <!-- section post -->
    <section class="responsive-container section-post">
        <div class="container text-center py-5">
            <h1 class="text-uppercase">Content that connects</h1>
            <div class="post-container">
                <div class="post-container-inner-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg1.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg2.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg3.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-container-inner-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg4.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg5.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="post-box-design shadow">
                                <div class="post-img-title-container p-1">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.webp') }}"
                                        alt="title" class="w-50">
                                </div>
                                <div class="post-img-container px-2">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/postimg6.webp') }}"
                                        alt="post" class="w-100">
                                </div>
                                <div class="post-img-title-container">
                                    <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}"
                                        alt="title" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section mobile-->
    <section>
        <div class="container mob-container-section text-center">
            <div class="mob-post-container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 box-mob-img-1">
                        <div class="box-mob-img-container">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mob-post1.webp') }}" class="w-100"
                                alt="img-page">
                            <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                        <div class="mobile-phone-1 mobile-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobile.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 box-mob-img-2">
                        <div class="box-mob-img-container">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mob-post2.webp') }}" class="w-100"
                                alt="img-page">
                            <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                        <div class="mobile-phone-2 mobile-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobile.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 box-mob-img-3">
                        <div class="box-mob-img-container">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mob-post3.webp') }}" class="w-100"
                                alt="img-page">
                            <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                        <div class="mobile-phone-3 mobile-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobile.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 box-mob-img-4">
                        <div class="box-mob-img-container">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mob-post4.webp') }}" class="w-100"
                                alt="img-page">
                            <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                        <div class="mobile-phone-4 mobile-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobile.webp') }}" class="w-100"
                                alt="img-page">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section reels -->
    <section class="mb-5">
        <div class="container reels-container">
            <h1 class="mb-4">A Reel Outlook</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="reel-photo-screen">
                        <img src="{{ asset('assets/frontend/images/profile/jio/mobs1.webp') }}" class="w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="reel-photo-screen">
                        <img src="{{ asset('assets/frontend/images/profile/jio/mobs2.webp') }}" class="w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="reel-photo-screen">
                        <img src="{{ asset('assets/frontend/images/profile/jio/mobs3.webp') }}" class="w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="reel-photo-screen">
                        <img src="{{ asset('assets/frontend/images/profile/jio/mobs4.webp') }}" class="w-100"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-line p-3"></div>
@endsection
