@extends('frontend.layouts.master')
@section('title')
    Work
@endsection
@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-work">
        <div class="container text-center responsive-container">
            <h1 class="content-work">What’s a commitment without action, and what’s a pitch without proof?

                Well, here is ours
            </h1>

            <a href="{{ route('frontend.contact') }}" class="btn btn-buzz mt-2" style="padding: 7px 20px !important"
                target="_blank">Contact Us</a>
            <div class="row w-100 img-container">
                <div class="col-6">
                    <img src={{ asset('assets/frontend/images/Banner_pot.svg') }} class="img-one" alt="pot">
                </div>
                <div class="col-6">
                    <img src={{ asset('assets/frontend/images/OurWork/work-header.svg') }} class="img-two box-animate"
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
                    <a href={{ route('frontend.jio') }}><img src="{{ asset('assets/frontend/images/OurWork/jiomeet.jpg') }}"
                            class="w-100 image-radius" alt="snap"></a>
                </div>
                <div class="col-md-6">
                    <a href={{ route('frontend.poojaent') }}><img
                            src="{{ asset('assets/frontend/images/OurWork/pooja.jpg') }}" class="w-100 image-radius"
                            alt="snap1"></a>
                </div>
                <div class="col-md-6">
                    <a href={{ route('frontend.llumar') }}><img
                            src="{{ asset('assets/frontend/images/OurWork/llumar.jpg') }}" class="w-100 image-radius"
                            alt="snap"></a>
                </div>
                <div class="col-md-6">
                    <a href={{ route('frontend.nutra') }}><img
                            src="{{ asset('assets/frontend/images/OurWork/nutra.jpg') }}" class="w-100 image-radius"
                            alt="snap1"></a>
                </div>
            </div>

            <div class="content-pattern-img-steps">
                <img src={{ asset('assets/frontend/images/orange-ribbon.webp') }} alt="orange-ribbon">
            </div>

            <div class="text-center mt-5 reveal">
                <img src="{{ asset('assets/frontend/images/OurWork/snap2.webp') }}" style="width:85% ;" alt="snap2">
            </div>

            <div class="content-pattern-img-ribbon">
                <img src="{{ asset('assets/frontend/images/green-ribbon.webp') }}" alt="green-ribbon ">
            </div>

            <div class="row g-3 mt-5 reveal">
                <div class="col-md-6">
                    <a href={{ route('frontend.purusham') }}><img
                            src="{{ asset('assets/frontend/images/OurWork/purusham.jpg') }}" class="w-100 image-radius"
                            alt="snap"></a>
                </div>
                <div class="col-md-6">
                    <a href={{ route('frontend.salvi') }}><img
                            src="{{ asset('assets/frontend/images/OurWork/salvi.jpg') }}" class="w-100 image-radius"
                            alt="snap1"></a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('frontend.sarvotkarsh') }}" target="_blank">
                        <img src="{{ asset('assets/frontend/images/projects/unnamed.png') }}" class="w-100 image-radius">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('frontend.vdc') }}" target="_blank">
                        <img src="{{ asset('assets/frontend/images/projects/vdc-case-study.png') }}"
                            class="w-100 image-radius">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

    @include('frontend.components.faqs')
@endsection
