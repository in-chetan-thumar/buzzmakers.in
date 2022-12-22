@extends('frontend.layouts.master')
@section('title')
    Work
@endsection
@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-work">
        <div class="container text-center responsive-container">
            <h1 class="content-work">It is a long established fact<br> that a reader will be<br> distracted by the
                readable</h1>
            <a href="#" class="btn btn-buzz mt-2" style="padding: 7px 20px !important">Get in Touch</a>
            <div class="row w-100 img-container">
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/pot.svg') }} class="img-one" alt="pot">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/work-header.svg') }} class="img-two"
                        alt="work-header">
                </div>
            </div>
        </div>
    </section>

    <!-- center content -->
    <section class="center-content responsive-container reveal">
        <div class="container relative">
            <div class="row g-3 mt-5">
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap.webp') }} class="w-100" alt="snap">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap1.webp') }} class="w-100" alt="snap1">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap.webp') }} class="w-100" alt="snap">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap1.webp') }} class="w-100" alt="snap1">
                </div>
            </div>

            <div class="content-pattern-img-steps">
                <img src={{ asset('assets/frontend/images/orange-ribbon.webp') }} alt="orange-ribbon">
            </div>

            <div class="text-center mt-5 reveal">
                <img src={{ asset('assets/frontend/images/OurWork/snap2.webp') }} style="width:85% ;" alt="snap2">
            </div>

            <div class="content-pattern-img-ribbon">
                <img src={{ asset('assets/frontend/images/green-ribbon.webp') }} alt="green-ribbon">
            </div>

            <div class="row g-3 mt-5 reveal">
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap.webp') }} class="w-100" alt="snap">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap1.webp') }} class="w-100" alt="snap1">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap.webp') }} class="w-100" alt="snap">
                </div>
                <div class="col-md-6">
                    <img src={{ asset('assets/frontend/images/OurWork/snap1.webp') }} class="w-100" alt="snap1">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.faqs')
@endsection
