@extends('frontend.layouts.master')
@section('title')
    About
@endsection
@section('main')
    <!-- section about- header -->
    <section>
        <div class="about-header">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white">It is a long establishment fact that <br>a reader will be distracted.
                        </h1>
                    </div>
                    <div class="col-md-5">
                        <div class="pattern-about-page box-animate">
                            <img src={{ asset('assets/frontend/images/top.webp') }} alt="about-top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- center about- page START-->

    <section>
        <div class="about-center-section  responsive-container">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-3 px-0 reveal">
                        <img src={{ asset('assets/frontend/images/reader-established.svg') }} class="w-100"
                            alt="reader-established">
                    </div>
                    <div class="col-md-8 px-0">
                        <div class="about-content-yellow-bg reveal">
                            <div>
                                <h1>It is a long establishment fact that <br>a reader will be great established.</h1>
                                <p>Our 95 designers, developers and strategists work from six creative hubs around
                                    the<br> world.
                                    Our independent ownership and 40 year heritage of transforming
                                    brands<br> and business, center around collaboration, a personal approach,
                                    unbiased<br>
                                    advice, and focus on establishing long term partnerships.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- center about- page END -->

    <!-- image of about -->
    <section class="responsive-container mt-5">
        <div class="container-fluid reveal">
            <img src={{ asset('assets/frontend/images/Group1.webp') }} class="w-100">
        </div>
    </section>

    <!-- descriptive content of about start -->
    <section class="descriptive-content reveal">
        <div class="container">
            <h1>It is a long establishment fact that a reader will<br> be great established.</h1>
            <p>Our 95 designers, developers and strategists work from six creative hubs around the world.
                Our independent ownership and 40 year heritage of transforming
                brands and business, center around collaboration, a personal approach, unbiased
                advice, and focus on establishing long term partnerships.
            </p>
            <p>Our 95 designers, developers and strategists work from six creative hubs around the world.
                Our independent ownership and 40 year heritage of transforming
                brands and business, center around collaboration, a personal approach, unbiased
                advice, and focus on
            </p>
        </div>
    </section>
    <!-- descriptive content of about end -->

    <!-- section address start -->
    <section class="section-description">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-4 text-center reveal">
                    <img src={{ asset('assets/frontend/images/Aboutus/establishment-spring-arrow.webp') }} class="w-75"
                        alt="establishment-spring-arrow">
                </div>
                <div class="col-md-8 reveal">
                    <h1>It is a long establishment fact that <br>a reader will be great</h1>
                    <p>Our 95 designers, developers and strategists work from six creative hubs around the<br> world.
                        Our independent ownership and 40 year heritage of transforming
                        brands<br> and business, center around collaboration, a personal approach, unbiased<br>
                        advice, and focus on establishing long term partnerships.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- section address ends -->

    @include('frontend.components.faqs')
@endsection
