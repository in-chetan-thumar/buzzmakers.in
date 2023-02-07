@extends('frontend.layouts.master')
@section('title')
    Pooja
@endsection

@section('main')

    <!-- section top header -->
    <div class="container-back-top-section">
        <section class="responsive-container">
            <!-- <div class="container-fluid reveal"> -->
            <div class="container pt-5">
                <div class="img-header-container">
                    <img src="{{ asset('assets/frontend/images/profile/poojaent/top-banner.png')}}" class="w-100" />
                </div>
            </div>
        </section>

        <!-- section text -->
        <section class="responsive-container section-text">
            <div class="container text-center py-5">
                <h2>Getting Filmy Over The Internet</h2>
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
            <img src="{{ asset('assets/frontend/images/profile/poojaent/eyes-left.png')}}" alt="">
        </div>
        <div class="container text-center py-5">
            <h2 class="text-uppercase">Content So coole-ie,<br />it had to be no.1</h2>
        </div>
            <div class="main-ent-container">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/big-hash-tag.png')}}" class="w-100" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('assets/frontend/images/profile/poojaent/postfilmtop.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection