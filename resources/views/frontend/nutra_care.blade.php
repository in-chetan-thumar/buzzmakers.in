@extends('frontend.layouts.master')
@section('title')
    Nutra Care
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/profilescss/nutra.css') }}>
    <link rel="stylesheet" href={{ asset('assets/frontend/profilescss/nutra-responsive.css') }}>


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
        <div class="container">
            <div class="img-header-container">
                <img src="{{ asset('assets/frontend/images/profile/nutra/top-banner.webp')}}" class="w-100" />
            </div>
        </div>
    </section>

    <!-- section text -->
    <section class="responsive-container section-text">
        <div class="container text-center py-5">
            <h1>Empowering Brand Identity</h1>
            <h1>Through Creatives & Marketing Strategies</h1>
            <p class="mb-0">Communiting the importance of health-amplifying products and building brand resonance</p>
            <p class="mb-0">with the audience via interactive web design, digital marketing, and branding.</p>
            <a href="#" class="btn btn-buzz mt-5" style="padding: 7px 20px !important">Explore More</a>
        </div>
    </section>

    <!--  -->
    <section>
        <div class="website-screens">
            <img src="{{ asset('assets/frontend/images/profile/nutra/second-post.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- social -->
    <section>
        <div class="social-section">
            <div class="container">
                <h2 class="text-center mb-5">Consistently Creative</h2>
                <div class="row gx-5 justify-content-center mb-5">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/nutra/post1.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/nutra/post2.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/nutra/post3.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/nutra/post4.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- books -->
    <section>
        <div><img src="{{ asset('assets/frontend/images/profile/nutra/brochure.webp')}}" class="w-100" alt=""></div>
    </section>

    <!-- brochure -->
    <section>
        <div class="brochure">
            <img src="{{ asset('assets/frontend/images/profile/nutra/brochure-green.webp')}}" class="w-100" alt="">
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
