@extends('frontend.layouts.master')
@section('title')
    Pooja
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
                    <img src="{{ asset('assets/frontend/images/profile/poojaent/top-banner.webp') }}" class="w-100" />
                </div>
            </div>
        </section>

        <!-- section text -->
        <section class="responsive-container section-text">
            <div class="container text-center py-5">
                <h1>Getting Filmy Over The Internet</h1>
                <p class="mb-0">Buzz Makers adopts JioMeet brand identity by delivering a paradigm of digital marketing
                    solutions</p>
                <p>with a devised social media strategy for their B2B as well as usual clients.</p>
                <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Explore More</a>
            </div>
        </section>
    </div>
    
    <!-- section post -->
    <section class="responsive-container section-post">
        <div class="img-eyes-left">
            <img src="{{ asset('assets/frontend/images/profile/poojaent/eyes-left.webp')}}" alt="">
        </div>
        <div class="container text-center py-5">
            <h1 class="text-uppercase">Content So coole-ie,<br />it had to be no.1</h1>
        </div>
        <div class="main-ent-container">
            <div class="container mt-5 position-relative">
                <div class="top-hash-tag-container">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-3">
                            <div class="aspect-r-11 large-hash">
                                <img src="{{ asset('assets/frontend/images/profile/poojaent/big-hash-tag.webp')}}" class="w-100" alt="">
                            </div>
                            <div class="name-text-hash">
                                <img src="{{ asset('assets/frontend/images/profile/poojaent/name.webp')}}" alt="">
                            </div>
                            <div class="img-eyes-up">
                                <img src="{{ asset('assets/frontend/images/profile/poojaent/eyes-up.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="aspect-r-11 screen-post-main">
                                <img src="{{ asset('assets/frontend/images/profile/poojaent/postfilmtop.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="aspect-r-11 small-hash">
                                <img src="{{ asset('assets/frontend/images/profile/poojaent/small-hash-tag.webp')}}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-5 g-5">
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/postfilmsub1.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/postfilmsub2.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/postfilmsub3.webp')}}" class="w-100" alt="">
                        </div>
                    </div>

                    <!--  -->
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts1.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="img-eyes-right-bottom">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/eyes-riht-bottom.webp')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts2.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts3.webp')}}" class="w-100" alt="">
                        </div>
                        <div class="img-eyes-left-bottom">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/eyes-left-bottom.webp')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid mt-5">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts4.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="heading-bar">
                            <h3 class="fw-bold">Moment Marketing</h3>
                            <label>Kyunki Kal Kisne Dekha?</label>
                        </div>
                        <div class="aspect-r-11 shadow-solid">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts5.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid mt-5">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts6.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid mt-5">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts7.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="heading-bar">
                            <h3 class="fw-bold">We Manipulate.</h3>
                            <label>You Relate!</label>
                        </div>
                        <div class="aspect-r-11 shadow-solid">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts8.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="aspect-r-11 shadow-solid mt-5">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/posts9.webp')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer section starts -->
    <div class="footer-line p-3"></div>
@endsection
