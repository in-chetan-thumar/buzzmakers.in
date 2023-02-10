@extends('frontend.layouts.master')
@section('title')
    Lumar
@endsection

@section('main')
    <!-- collpase menu for mobile start -->
    {{-- <div class="collapse mobile-menu-area" id="buzzmenu">
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
    </div> --}}
    <!-- collpase menu for mobile end -->

    <!-- section top header -->
    <div class="container-back-top-section">
        <section class="responsive-container">
            <!-- <div class="container-fluid reveal"> -->
            <div class="container pt-5">
                <div class="img-header-container">
                    <img src="{{ asset('assets/frontend/images/profile/lumar/top-banner.webp')}}" class="w-100" />
                </div>
            </div>
        </section>

        <!-- section text -->
        <section class="responsive-container section-text">
            <div class="container text-center py-5">
                <h1>LLumar's Essence Showcased Through<br />Branding, Design & Other Marketing Solutions</h1>
                <p class="mb-0">Business to autophiles, all are LLumar's prime customers and we incorporate its essence
                    with a</p>
                <p>360 view over the digital media space and design marketing solutions.</p>
                <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Explore More</a>
            </div>
        </section>
    </div>


    <!-- section post -->
    <section class="responsive-container section-post">

        <div class="container text-center py-5">
            <h1 class="text-uppercase">Designing Premium Minimalism</h1>
        </div>
        <div class="main-ent-container">
            <div>
                <img src="{{ asset('assets/frontend/images/profile/lumar/book.webp')}}" class="w-100" alt="">
            </div>
        </div>

        <!--  -->
        <div class="btn-buzz w-25 m-auto my-5">
            <h3 class="mb-0 py-3 text-center fw-bolder">Space Branding</h3>
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
