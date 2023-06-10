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

        <div class="backround-square">
            <div class="main-ent-container backround-square">
                <img src="{{ asset('assets/frontend/images/profile/lumar/book.webp')}}" class="w-100" alt="">
            </div>

            <!--  -->
            <div class="sq-title m-auto my-5">
                <h3 class="mb-0 py-3 text-center fw-bold">Space Branding</h3>
            </div>

            <div class="container">
                <div>
                    <img src="{{ asset('assets/frontend/images/profile/lumar/lumarbanner.webp')}}" class="w-100" alt="">
                </div>
                <div class="row my-5">
                    <div class="col-lg-9">
                        <img src="{{ asset('assets/frontend/images/profile/lumar/lumarbanner1.webp')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('assets/frontend/images/profile/lumar/lumarbannersub2.webp')}}" class="w-100" alt="">
                        <img src="{{ asset('assets/frontend/images/profile/lumar/lumarbannersub3.webp')}}" class="w-100" alt="">
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/frontend/images/profile/lumar/lumarbanner2.webp')}}" class="w-100" alt="">
                </div>
            </div>

            <div class="position-relative">
                <img src="{{ asset('assets/frontend/images/profile/lumar/standee1.webp')}}" class="w-100" alt="">
                <img src="{{ asset('assets/frontend/images/profile/lumar/standee2.webp')}}" class="standee-banner" alt="">
                <h2 class="heading-standy">Out-Standee<br />Designs</h2>
            </div>

            <div class="sq-title m-auto my-5">
                <h3 class="mb-0 py-3 text-center fw-bold">A Tint Of Creativity</h3>
            </div>

            {{-- <div class="yellow-back">
                <div class="container inner-post-container">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts1.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts2.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts3.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts4.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts5.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shadow-solid aspect-r-11">
                                <img src="{{ asset('assets/frontend/images/profile/lumar/posts6.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="yellow-back">
                <div class="container">
                    <div class="inner-post-container">
                        <div class="row">
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts1.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts2.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts3.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts4.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts5.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="shadow-solid aspect-r-11">
                                    <img src="{{ asset('assets/frontend/images/profile/lumar/posts6.webp')}}" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/frontend/images/profile/lumar/video.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
