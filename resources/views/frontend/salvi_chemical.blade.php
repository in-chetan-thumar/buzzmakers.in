@extends('frontend.layouts.master')
@section('title')
    Salvi Chemical
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/profilescss/salvi.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/profilescss/salvi-responsive.css') }}>
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

    <section class="responsive-container">
        <div class="container pt-5">
            <div class="img-header-container">
                <img src="{{ asset('assets/frontend/images/profile/salvi/top-banner.webp')}}" class="w-100" />
            </div>
        </div>
    </section>

    <!-- section text -->
    <section class="responsive-container section-text">
        <div class="container text-center py-5">
            <h1>Innovation & Sustenance Gets A Marketing Flair</h1>
            <p class="mb-0">Salvi Chemical Industries Ltd is a Chemical manufacturing company with quality and</p>
            <p class="mb-0">cost-effective solution. Buzz Makers reshapes the brand identity from a digital perception
            </p>
            <p>incorporating its core elements and ethos via thorough branding, marketing, and merchandising.</p>
            <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Explore More</a>
        </div>
    </section>

    <!--  -->
    <section>
        <h2 class="text-center">A Digital Narrative Of A Chemical Company</h2>
        <div class="website-screens">
            <img src="{{ asset('assets/frontend/images/profile/salvi/second-post.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- products -->
    <section>
        <div class="products">
            <div class="container">
                <img src="{{ asset('assets/frontend/images/profile/salvi/productnomen.webp')}}" class="w-100" alt="">
            </div>
        </div>
    </section>

    <!-- social -->
    <section>
        <div class="social-section">
            <div class="container">
                <h2 class="text-center mb-5">Its Good To Be Social</h2>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/post1.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/post2.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/post3.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/post4.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- standy section -->
    <section>
        <div class="standy-section">
            <div class="container-fluid">
                <div class="row g-0 align-items-center justify-content-center">
                    <div class="col-lg-3">
                        <div class="title-standy">
                            <h2>Efficiently Appealing.</h2>
                            <h2>Effictively Creative</h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/banner.webp')}}" class="w-100 standy-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- packaging section -->
    <section>
        <div class="packaging-section">
            <div class="container">
                <div class="row g-0 align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h1>Packaging<br /> Brand Persona</h1>
                    </div>
                </div>
                <div class="packets-line">
                    <img src="{{ asset('assets/frontend/images/profile/salvi/packet1.webp')}}" alt="">
                    <img src="{{ asset('assets/frontend/images/profile/salvi/packet2.webp')}}" alt="">
                    <img src="{{ asset('assets/frontend/images/profile/salvi/packet3.webp')}}" alt="">
                    <img src="{{ asset('assets/frontend/images/profile/salvi/packet4.webp')}}" alt="">
                    <img src="{{ asset('assets/frontend/images/profile/salvi/packet5.webp')}}" alt="">
                </div>
                <!-- <div class="row g-0 align-items-center justify-content-center">
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet1.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet2.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet3.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet4.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/frontend/images/profile/salvi/packet5.webp')}}" class="w-100" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- books -->
    <section>
        <div><img src="{{ asset('assets/frontend/images/profile/salvi/books.webp')}}" class="w-100" alt=""></div>
    </section>

    <!-- brochure -->
    <section>
        <div class="brochure">
            <img src="{{ asset('assets/frontend/images/profile/salvi/brochure.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- expo -->
    <section>
        <div class="expo">
            <h1 class="py-5 text-center">Expo Branding</h1>
            <img src="{{ asset('assets/frontend/images/profile/salvi/expo.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- photo gallery -->
    <section>
        <div class="photo-gallery">
            <h1 class="pt-5 text-center">Photo-Packaged Solutions</h1>
            <img src="{{ asset('assets/frontend/images/profile/salvi/photogallery.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
