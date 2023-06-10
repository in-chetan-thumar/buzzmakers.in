@extends('frontend.layouts.master')

@section('title')
    Technology
@endsection

@section('main')
    <!-- section header-image -->
    <section class="pt-5 header-hero-section-tech">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-of-tech text-white">
                        <h1>Tech</h1>
                        <p>
                            To stay in the game, your business must stay relevant, constantly catching up to the world, and that my friend, is where tech enters the game. Don’t ‘tech’ this for granted.

                            {{--                            We "Tech" Our Brands To Greater Heights!--}}
                        </p>
                        <a href={{route('frontend.contact')}} class="btn btn-buzz-connect-blue">Let's Connect</a>
                    </div>
                </div>
                <div class="col-md-6 tech-img-container text-end">
                    <img src={{ asset('assets/frontend/images/Tech/technology-header.svg') }} class="tech-img box-animate"
                        alt="technology-header">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.featured')

    <!-- strategies section strat-->
    <section class="tech-section responsive-container">
        <div class="container">
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Tech/web-development.svg') }} style="width:60% ;"
                        alt="web-development">
                </div>
                <div class="col-md-7 content-tech">
                    <h1 class="font-blue">Website Development</h1>
                    <p class="font-blue">
                        Buzz Makers utilizes web development technologies that are both proven and practical. With the
                        options available in the
                        market today, we can help you determine what is best for your needs.
                    </p>
                    <ul class="list-content">
                        <li>shopify Website Development Service</li>
                        <li>Corporate/Brand Website Development Service</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Tech/app-development.svg') }} style="width:60% ;"
                        alt="app-development">
                </div>
                <div class="col-md-7 content-tech">
                    <h1 class="font-blue">Mobile App Development</h1>
                    <p class="font-blue">
                        Our team of expert software engineers and developers craft Scalable and reliable mobile app
                        solutionsto improve your business
                        capabilities.We have powered several B2B applications by integrating modern technologies like
                        Artificial Intelligence, Machine Learning,
                        AR/VR and others.
                    </p>
                    <ul class="list-content">
                        <li>Native App Development Services</li>
                        <li>Enterprise Mobile Apps</li>
                        <li>Hybrid Cross-platform App Development Services</li>
                        <li>Business Analysis & Consultin Services</li>
                        <li>Business Apps And Api Integration Services</li>
                        <li>Search Engine Optimization</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Tech/seo.svg') }} style="width:60% ;" alt="seo">
                </div>
                <div class="col-md-7 content-tech">
                    <h1 class="font-blue">Search Engine Optimization</h1>
                    <p class="font-blue">
                        With Buzz Makers, you will not be outsourcing your SEO Project but will be getting a Search Engine
                        Optimization(SEO) Partner
                        to work with you and help you indentify the right internet marketing plan.
                    </p>
                    <ul class="list-content">
                        <li>E-commerce Seo Service</li>
                        <li>SEO Audit Services</li>
                        <li>Content Marketing Service</li>
                        <li>Local Seo Service</li>
                        <li>Google Penalty Recovery Service</li>
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
