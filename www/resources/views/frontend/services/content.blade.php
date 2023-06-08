@extends('frontend.layouts.master')

@section('title')
    Content
@endsection

@section('main')
    <!-- section header-image -->
    <section class="pt-5 header-hero-section-marketing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-of-marketing text-white">
                        <h1>Marketing</h1>
                        <p>

                            To reach success, you need to reach your audience, and to get to them, you need the right driving force. Safe to say, marketing is the key here.


                        </p>
                        <a href={{route('frontend.contact')}} class="btn btn-buzz-connect-blue">Let's Connect</a>
                    </div>
                </div>
                <div class="col-md-6 marketing-img-container text-end">
                    <img src={{ asset('assets/frontend/images/Marketing/marketing-header.svg') }}
                        class="marketing-img box-animate" alt="marketing-header">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.featured')

    <!-- strategies section strat-->
    <section class="marketing-section responsive-container">
        <div class="container">
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Marketing/social-media-marketing.svg') }} style="width:80% ;"
                        alt="social-media-marketing">
                </div>
                <div class="col-md-7 content-marketing">
                    <h1 class="font-blue">Social Media marketing</h1>
                    <p class="font-blue">
                        We craft social-first strategies for our brands. Through social
                        listening, in-house research and community engagement we stay
                        ahead of the ever-changing landscape and deliver an unparalleled
                        organic and paid social media service.
                    </p>
                    <ul class="list-content">
                        <li>Content Marketing</li>
                        <li>Response Management</li>
                        <li>Social Analytics</li>
                        <li>Design</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Marketing/influencer-marketing.svg') }} style="width:60% ;"
                        alt="influencer-marketing">
                </div>
                <div class="col-md-7 content-marketing">
                    <h1 class="font-blue">Influencer Marketing</h1>
                    <p class="font-blue">
                        Right selection of influencers with the correct communication
                        strategy can do wonders for your social reach.We help brands do
                        just that! We select the right influencers using various
                        engagement metrics, reach out to them, negotiate with them on your
                        behalf and get campaigns executed.
                    </p>
                    <ul class="list-content">
                        <li>Campaign Planning</li>
                        <li>Content Management</li>
                        <li>Photography & Videography</li>
                        <li>Space Design</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Marketing/performance-marketing.svg') }} class="w-75"
                        alt="performance-marketing">
                </div>
                <div class="col-md-7 content-marketing">
                    <h1 class="font-blue">Performance Marketing</h1>
                    <p class="font-blue">
                        Using our vast experience in running performance campaigns, we
                        provide an array of services to use the most popular platforms &
                        tactics to achieve leads and conversations for your business.
                    </p>
                    <ul class="list-content">
                        <li>Lead Generation</li>
                        <li>Retargeting</li>
                        <li>Trending Activities</li>
                    </ul>
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

    {{-- @include('frontend.components.services_career') --}}
    {!! $table !!}
    {{-- @include('frontend.components.completefaqs') --}}
@endsection

@section('js')
    <script src={{ asset('assets/frontend/js/faqs.js') }}></script>
@endsection
