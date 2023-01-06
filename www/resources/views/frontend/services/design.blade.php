@extends('frontend.layouts.master')

@section('title')
    Design
@endsection

@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-design">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-of-design text-white">
                        <h1>Design</h1>
                        <p>
                            We Keep Our Brand's Best Foot Forward Using The Power Of Great Designs!
                        </p>
                        <a href={{route('frontend.contact')}} class="btn btn-buzz-connect">Let's Connect</a>
                    </div>
                </div>
                <div class="col-md-6 design-img-container text-end">
                    <img src={{ asset('assets/frontend/images/Design/designer.svg') }} class="design-img box-animate"
                        alt="designer">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.featured')

    <!-- strategies section strat-->
    <section class="design-section  responsive-container">
        <div class="container">
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Design/uiux.svg') }} style="width:60% ;" alt="uiux">
                </div>
                <div class="col-md-7 content-design">
                    <h1>UIUX</h1>
                    <p>
                        At Buzz Makers, we believe that a great design that elevates user experience is the key to success
                        of any business or organization. Keeping this in mind, here's
                        what we can do for you.
                    </p>
                    <ul class="list-content">
                        <li>Infomation ARchitecture</li>
                        <li>Wireframe</li>
                        <li>Ux Strategy, Research & Audit</li>
                        <li>Data Visualization</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Design/graphic-designer.svg') }} style="width:60% ;"
                        alt="graphic-designer">
                </div>
                <div class="col-md-7 content-design">
                    <h1>Graphic Design</h1>
                    <p>
                        The roots of Buzz Makers are in graphic design, and we follow traditional principles of classic
                        design, with extremely high standards. But it's more than traditions and
                        rules. Because only after you master the rules are you in a position to bend and break them.And
                        that's an exciting place to be in.
                    </p>
                    <ul class="list-content">
                        <li>Sketching</li>
                        <li>Illustration</li>
                        <li>3D Modeling</li>
                    </ul>
                </div>
            </div>
            <div class="row list-columns align-items-center reveal">
                <div class="col-md-5 text-center">
                    <img src={{ asset('assets/frontend/images/Design/packaging.svg') }} style="width:60% ;" alt="packaging">
                </div>
                <div class="col-md-7 content-design">
                    <h1>Packaging</h1>
                    <p>
                        Packaging Designs speak louder than the packaged product itself. You just get a few seconds to
                        impress
                        your comsumer with the visual appeal of your product and nudge them towards impulsive buying.Buzz
                        Makers
                        is brimming with ideas and innovations that can revolutionize the packaging designsm, eventually
                        helping
                        our clients generate more and more business.
                    </p>
                    <ul class="list-content">
                        <li>Label Design</li>
                        <li>Visuals for the other elements of the product</li>
                        <li>Product Catalog</li>
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
