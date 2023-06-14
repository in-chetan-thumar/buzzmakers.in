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
                        <h1 class="text-white">Movers & shakers of the digital marketing hive, as they call us
                        </h1>
                    </div>
                    <div class="col-md-5">
                        <div class="pattern-about-page ">
                            <img src="{{ asset('assets/frontend/images/top.webp') }}" class="box-animate" alt="about-top">
                        </div>
                            <div class="content-pattern-img-1">
                                <img src="{{ asset('assets/frontend/images/orange-ribbon.webp') }} "alt="orange-ribbon"  >
                            </div>

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
                                <h1 class="font-blue">Born to Leave an Impression, Raised with Experiences
                                </h1>
                                <p>
                                    Experiences from the grassroots of India, magnanimous dreams, and an insatiable<br> interest in stories that make brands vividly alive—this is what our leadership <br>team brought to the city some years ago. And this is also what forms <br>the backbone of Buzz Makers today.

{{--                                    <br><br>--}}
{{--                                    Our 95 designers, developers and strategists work from six creative hubs around--}}
{{--                                    the<br> world.--}}
{{--                                    Our independent ownership and 40 year heritage of transforming--}}
{{--                                    brands<br> and business, center around collaboration, a personal approach,--}}
{{--                                    unbiased<br>--}}
{{--                                    advice, and focus on establishing long term partnerships.--}}
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
            <h1>Your Goal, Our Passion. Your Success, Our Badge of Honour
            </h1>
            <p>The first brick of Buzz Makers was laid back in 2014 with a small yet compact team of zealous, mighty, and inquisitive folks. We kicked off this fun ride with brands like Craftsvilla and Junglee Pictures, and over the years, moved up the ladder to bigger names and multinational companies; Viacom 18, Jio brands, LLumar, and Aegon Life are a few to name. </p>
            <p>Today, we are an end-to-end digital marketing agency with a hive in Mumbai and Nagpur, packed with a growing team of young professionals who love navigating the digital landscape. What fuels us to stay at it with a work-life balance that is rare to find these days? Well, it is the ice-breaking coffee breaks, easy but passion-driven work hours, and candid culture for us.</p>

            {{--            <p>Our 95 designers, developers and strategists work from six creative hubs around the world.--}}
{{--                Our independent ownership and 40 year heritage of transforming--}}
{{--                brands and business, center around collaboration, a personal approach, unbiased--}}
{{--                advice, and focus on establishing long term partnerships.--}}
{{--            </p>--}}
{{--            <p>Our 95 designers, developers and strategists work from six creative hubs around the world.--}}
{{--                Our independent ownership and 40 year heritage of transforming--}}
{{--                brands and business, center around collaboration, a personal approach, unbiased--}}
{{--                advice, and focus on--}}
{{--            </p>--}}
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
                    <h1 class="font-blue"> Making the Foundation, the Buzz, and Everything in Between
                    </h1>
                    <p>
                        With a common love for personal storytelling, every team member here shares an interest in all the sweat  <br>and soul that make a business a buzzing one. We are known to take that very raw essence of a brand <br> and use that to break the ceiling and how! In a nutshell, by offering end-to-end digital marketing  <br>services, we not only lead your business in the right direction but also make that journey<br> count.  We believe that to create a buzz in the industry, you must have<br>  a strong digital presence that speaks before you do.
                    </p>
{{--                    <p>Our 95 designers, developers and strategists work from six creative hubs around the<br> world.--}}
{{--                        Our independent ownership and 40 year heritage of transforming--}}
{{--                        brands<br> and business, center around collaboration, a personal approach, unbiased<br>--}}
{{--                        advice, and focus on establishing long term partnerships.--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- section address ends -->

    @include('frontend.components.faqs')
@endsection
