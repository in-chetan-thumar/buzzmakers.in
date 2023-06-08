@extends('frontend.layouts.master')

@section('title')
    Strategy
@endsection

@section('main')
    <!-- section header-image -->
    <section class="header-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-of-strategy text-white">
                        <h1>Strategy</h1>
                        <p>
                            You can create a masterpiece worth millions, but it is the right branding, that distinct identity that will lead it to leave a lasting impression.

                            {{--                            It is A Long Established Fact That A Reader Will Be Distracted--}}
{{--                            By The Readable Content Of A Page When Looking At Its Layout.--}}
                        </p>
                        <a href={{route('frontend.contact')}} class="btn btn-buzz-connect">Let's Connect</a>
                    </div>
                </div>
                <div class="col-md-6 strategy-img-container text-end">
                    <img src={{ asset('assets/frontend/images/stratey/strategy-header.svg') }}
                        class="strategy-img box-animate" alt="strategy-header">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.featured')

    <!-- strategies section strat-->
    <section class="strategy-section responsive-container">
        <div class="container">
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/stratey/brand-strategy.svg') }} class="w-75"
                        alt="brand-strategy">
                </div>
                <div class="col-md-7 content-strategy">
                    <h1>Brand Strategy</h1>
                    <p>
                        We believe that a powerful brand is the result of a powerful
                        strategy. The key is to find way into the hearts and minds of your
                        customers, redefine and own the conversation in your industry, and
                        engage people on as many levels as possible.
                    </p>
                    <ul class="list-content">
                        <li>Brand Name & Nomenclature</li>
                        <li>Brand Positioning</li>
                        <li>Brand Architecture</li>
                        <li>Brand Culture</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/stratey/brand-identity.svg') }} style="width:60% "
                        alt="brand-identity">
                </div>
                <div class="col-md-7 content-strategy">
                    <h1>Brand Identity Design</h1>
                    <p>
                        The Identity of the brand is the most important visible symbol
                        representing the very values of the brand. It goes beyond the
                        logo, and manifests itself in every Graphic, every element, tone
                        and manner of communication and service delivery as well.
                    </p>
                    <ul class="list-content">
                        <li>Logo Identity</li>
                        <li>Brand Guideline</li>
                        <li>Corporate Identity</li>
                        <li>Brand Culture</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/stratey/brand-management.svg') }} class="w-75"
                        alt="brand-management">
                </div>
                <div class="col-md-7 content-strategy">
                    <h1>Brand Management</h1>
                    <p>
                        Helping companies monitor, plan and review their brands over a
                        longer period of time and ensuring that there is a synergy in
                        everything that goes out. We operate like an offshoot of the
                        client's marketing team and are responsible for creating long term
                        brand equity.
                    </p>
                    <ul class="list-content">
                        <li>Marketing Planning</li>
                        <li>On-Going Communication Design</li>
                        <li>Campaign Planning & Design</li>
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
