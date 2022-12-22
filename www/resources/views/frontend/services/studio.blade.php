@extends('frontend.layouts.master')

@section('title')
    Studio
@endsection

@section('main')
    <!-- section header-image -->
    <section class="pt-5 header-hero-section-studio">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-of-studio text-white">
                        <h1>Studio</h1>
                        <p>
                            We Keep Our Brand's Best Foot Forward Using The Power Of Great studios!
                        </p>
                        <a href="#" class="btn btn-buzz-connect">Let's Connect</a>
                    </div>
                </div>
                <div class="col-md-6 studio-img-container text-end">
                    <img src={{ asset('assets/frontend/images/Studio/studio-header.svg') }} class="studio-img box-animate"
                        alt="studio-header">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.featured')

    <!-- strategies section strat-->
    <section class="studio-section responsive-container">
        <div class="container">
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Studio/video-explainer.svg') }} style="width:65%;"
                        alt="video-explainer">
                </div>
                <div class="col-md-7 content-studio">
                    <h1>Explainer Video</h1>
                    <p>
                        From product awareness to demand generation, our animated explainer video production helps you tell
                        great
                        stories to simplify your
                        message and connect with your audience in a whole new way!
                    </p>
                    <ul class="list-content">
                        <li>2D Animated Explainer Video Company</li>
                        <li>Product Mixed Media Animated Explainer Video Services</li>
                        <li>Cartoon Explainer Video Agency</li>
                        <li>B2B Animated Explainer Video Company</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center">
                <div class="col-md-5 text-center">
                    <!-- <img src="images/Studio/Group 5504.svg" width="65%" /> -->
                </div>
                <div class="col-md-7 content-studio">
                    <h1>Motion Graphic Video</h1>
                    <!-- <p>
                  From product awareness to demand generation, our animated explainer video production helps you tell great stories to simplify your
                  message and connect with your audience in a whole new way!
                </p>
                <ul class="list-content">
                  <li>2D Animated Explainer Video Company</li>
                  <li>Product Mixed Media Animated Explainer Video Services</li>
                  <li>Cartoon Explainer Video Agency</li>
                  <li>B2B Animated Explainer Video Company</li>
                </ul> -->
                </div>
            </div>
            <div class="row list-columns align-items-center">
                <div class="col-md-5 text-center">
                    <!-- <img src="images/Studio/Group 5504.svg" width="65%" /> -->
                </div>
                <div class="col-md-7 content-studio">
                    <h1>Shoot & Edit</h1>
                    <!-- <p>
                  From product awareness to demand generation, our animated explainer video production helps you tell great stories to simplify your
                  message and connect with your audience in a whole new way!
                </p>
                <ul class="list-content">
                  <li>2D Animated Explainer Video Company</li>
                  <li>Product Mixed Media Animated Explainer Video Services</li>
                  <li>Cartoon Explainer Video Agency</li>
                  <li>B2B Animated Explainer Video Company</li>
                </ul> -->
                </div>
            </div>
        </div>
    </section>
    <!-- strategies section end -->


    @include('frontend.components.case_studies')

    @include('frontend.components.process')

    @include('frontend.components.why_section')

    @include('frontend.components.industries_we_work')

    @include('frontend.components.testimonials')

    @include('frontend.components.services_career')

    @include('frontend.components.completefaqs')
@endsection
