@extends('frontend.layouts.master')
@section('title')
    Purusham
@endsection

@section('main')
    {{-- <!-- collpase menu for mobile start -->
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
    <!-- collpase menu for mobile end --> --}}

    <!-- section top header -->
    <div class="backround-square">
        <section class="responsive-container">
            <div class="container">
                <div class="img-header-container">
                    <img src="{{ asset('assets/frontend/images/profile/purusham/top-banner.webp')}}" class="w-100" />
                </div>
            </div>
        </section>

        <!-- section text -->
        <section class="responsive-container section-text">
            <div class="container text-center py-5">
                <div>
                    <h1>Urbane Expose To Suave Appare</h1>
                    <p class="mb-0">Purusham is an elite men's apparel brand with it's roots in ethnic and indo-fusion
                        fashion.</p>
                    <p class="mb-0">The need to be fulfilled was to depict Purusham's aesthetic of luxury and elegance
                        through its</p>
                    <p class="mb-0">digital presence via web design, social media outlook, and e-commerce front.</p>
                    <a href="#" class="btn btn-buzz mt-3" style="padding: 7px 20px !important">Explore More</a>
                </div>

                <div class="mt-5">
                    <img src="{{ asset('assets/frontend/images/profile/purusham/logo.webp')}}" class="w-50" alt="logo purusham"><br />
                    <label class="f24">Campaigning Purusham's fine</label><br />
                    <label class="f24">garments in an illustrious digital exhibit</label>
                </div>
            </div>
        </section>
    </div>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/purusham/video.webp')}}" class="w-100" alt="">
    </section>

    <!-- social -->
    <section>
        <div class="social-section">
            <div class="container">
                <div class="row gy-4 mb-5">
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post1.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post2.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post3.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post4.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post5.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post6.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post7.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post8.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post9.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/post10.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post section one -->
    <section>
        <div class="container">
            <h2 class="text-center py-5">Aesthetically Engaging</h2>
            <div class="row gy-4 mb-5">
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/apost.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/apost1.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/apost2.webp')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post section one -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/photov1.webp')}}" class="w-100 mb-3" alt="">
                    </div>
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/photov2.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/photov.webp')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post video section one -->
    <section>
        <div class="container">
            <div class="row gy-4 mb-5">
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/vv1.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/vv2.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/vv3.webp')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post reels status section -->
    <section class="reels-back">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-4">
                    <h1>Upraise<br />The Praise</h1>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/insta.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/insta1.webp')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section one post -->
    <section>
        <div class="container py-5">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="aspect-r-11">
                        <img src="{{ asset('assets/frontend/images/profile/purusham/instapost.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/purusham/insta1.webp')}}" class="w-100" alt="">
                        </div>
                    </div> -->
                <div class="col-lg-4">
                    <h1>CTA Driven<br />Engagement</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- post shopify section -->
    <section class="shopify">
        <div class="container text-center">
            <h2>Amplifying The <br /> Consumer Experience</h2>
            <img src="{{ asset('assets/frontend/images/profile/purusham/shopify.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- section website -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/frontend/images/profile/purusham/website.webp')}}" class="w-100" alt="">
                </div>
                <div class="col-md-5">
                    <div>
                        <h2 class="py-5 text-center mt-5">BESPOKE</h2>
                        <img src="{{ asset('assets/frontend/images/profile/purusham/website1.webp')}}" class="w-100" alt="">
                    </div>
                    <div>
                        <h2 class="py-4 text-center">SUAVE</h2>
                        <img src="{{ asset('assets/frontend/images/profile/purusham/website2.webp')}}" class="w-100" alt="">
                    </div>
                    <div>
                        <h2 class="py-4 text-center">APPAREL</h2>
                        <img src="{{ asset('assets/frontend/images/profile/purusham/website3.webp')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
