@extends('frontend.layouts.master')
@section('title')
    Pooja
@endsection

@section('main')

        <!-- collpase menu for mobile start -->
        <div class="collapse mobile-menu-area" id="buzzmenu">
            <img src="./images/logo.svg" style="width:125px;" alt="logo">
            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="strategy.html">Strategy</a></li>
                        <li><a class="dropdown-item" href="marketing.html">Marketing</a></li>
                        <li><a class="dropdown-item" href="technology.html">Technology</a></li>
                        <li><a class="dropdown-item" href="design.html">Design</a></li>
                        <li><a class="dropdown-item" href="studio.html">Buzz Studio</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="work.html">Our Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.html">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.html">Careers</a>
                </li>
                <li class="close-menu-btn">
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#buzzmenu" aria-expanded="false"
                        aria-controls="buzzmenu"><i class="bi bi-x-circle-fill"></i></a>
                </li>
            </ul>
        </div>
        <!-- collpase menu for mobile end -->

        <!-- section top header -->
        <div class="container-back-top-section">
            <section class="responsive-container">
                <!-- <div class="container-fluid reveal"> -->
                <div class="container pt-5">
                    <div class="img-header-container">
                        <img src="{{ asset('assets/frontend/images/profile/jio/top-banner.png')}}" class="w-100" />
                    </div>
                </div>
            </section>

            <!-- section text -->
            <section class="responsive-container section-text">
                <div class="container text-center py-5">
                    <h2>Marketing JioMeet's</h2>
                    <h2>Made-In-India Digital Services To The World</h2>
                    <p class="mb-0">Buzz Makers adopts JioMeet brand identity by delivering a paradigm of digital
                        marketing
                        solutions</p>
                    <p>with a devised social media strategy for their B2B as well as usual clients.</p>
                    <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Explore More</a>
                </div>
            </section>
        </div>


        <!-- section post -->
        <section class="responsive-container section-post">
            <div class="container text-center py-5">
                <h2 class="text-uppercase">Content that connects</h2>
                <div class="post-container">
                    <div class="post-container-inner-1">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg1.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg2.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg3.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-container-inner-2">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg4.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg5.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="post-box-design shadow">
                                    <div class="post-img-title-container p-1">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/posttitle.png')}}" alt="title" class="w-50">
                                    </div>
                                    <div class="post-img-container px-2">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/postimg6.png')}}" alt="post" class="w-100">
                                    </div>
                                    <div class="post-img-title-container">
                                        <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" alt="title" class="w-100">
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
                                <img src="{{ asset('assets/frontend/images/profile/jio/mob-post1.png')}}" class="w-100" alt="img-page">
                                <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" class="w-100" alt="img-page">
                            </div>
                            <div class="mobile-phone-1 mobile-screen">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mobile.png')}}" class="w-100" alt="img-page">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 box-mob-img-2">
                            <div class="box-mob-img-container">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mob-post2.png')}}" class="w-100" alt="img-page">
                                <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" class="w-100" alt="img-page">
                            </div>
                            <div class="mobile-phone-2 mobile-screen">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mobile.png')}}" class="w-100" alt="img-page">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 box-mob-img-3">
                            <div class="box-mob-img-container">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mob-post3.png')}}" class="w-100" alt="img-page">
                                <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" class="w-100" alt="img-page">
                            </div>
                            <div class="mobile-phone-3 mobile-screen">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mobile.png')}}" class="w-100" alt="img-page">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 box-mob-img-4">
                            <div class="box-mob-img-container">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mob-post4.png')}}" class="w-100" alt="img-page">
                                <img src="{{ asset('assets/frontend/images/profile/jio/actionbtn.png')}}" class="w-100" alt="img-page">
                            </div>
                            <div class="mobile-phone-4 mobile-screen">
                                <img src="{{ asset('assets/frontend/images/profile/jio/mobile.png')}}" class="w-100" alt="img-page">
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
                    <div class="col-md-3">
                        <div class="reel-photo-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobs1.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="reel-photo-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobs2.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="reel-photo-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobs3.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="reel-photo-screen">
                            <img src="{{ asset('assets/frontend/images/profile/jio/mobs4.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-line p-3"></div>
@endsection
