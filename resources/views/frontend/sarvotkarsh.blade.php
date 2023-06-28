@extends('frontend.layouts.master')
@section('title')webp
    Nutra Care
@endsection
@section('css')
<link rel="stylesheet" href={{ asset('assets/frontend/profilescss/sarvotkarsh.css') }}>
<link rel="stylesheet" href={{ asset('assets/frontend/profilescss/sarvotkarsh-responsive.css') }}>

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
                <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/top-banner.webp')}}" class="w-100" />
            </div>
        </div>
    </section>

    <!-- section text -->
    <section class="responsive-container section-text">
        <div class="container text-center py-5">
            <h1>Illustrating ISB's Ethos &</h1>
            <h1>Shaping The Face Of Business Education</h1>
            <p class="mb-0">ISB's flagship event 'Abhyudaya' gets prime with 'Sarvotkarsh', designed by Buzz Makers.</p>
            <p class="mb-0">We preserved the brand's ethos by unifying(marketing) elements and embodying them in our
                logo design,</p>
            <p>Iconography, Brochures, Standees and other branding collaterals.</p>
{{--            <a href="#" class="btn btn-buzz mt-3" style="padding: 7px 20px !important">Explore More</a>--}}
        </div>
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/brochure.webp')}}" class="w-100" alt="">
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/book.webp')}}" class="w-100" alt="">
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/id.webp')}}" class="w-100" alt="">
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/badge.webp')}}" class="w-100" alt="">
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/hall.webp')}}" class="w-100" alt="">
    </section>

    <!--  -->
    <section>
        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/road-photo.webp')}}" class="w-100" alt="">
    </section>

    <!-- social -->
    <section>
        <div class="social-section">
            <div class="container">
                <div class="sq-title m-auto my-5">
                    <h3 class="mb-0 py-3 text-center fw-bold">Compelling Storytelling Of ISB Over The Digital Space</h3>
                </div>
                <div class="row gx-5 justify-content-center mb-5">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/post1.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/post2.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/post3.webp')}}" class="w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/frontend/images/profile/sarvotkarsh/post4.webp')}}" class="w-100 shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
