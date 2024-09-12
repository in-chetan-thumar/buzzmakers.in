@extends('enquiry_landing_page.layouts.master')

@section('title')
    {{ $content->title ?? '' }}
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/splide.min.css">
<link rel="stylesheet" href={{ asset('assets/frontend/case_studies/vdc/css/custom.css') }}>
<link rel="stylesheet" href={{ asset('assets/frontend/case_studies/vdc/css/responsive.css') }}>
<link rel="stylesheet" href={{ asset('assets/frontend/case_studies/vdc/css/swiper-bundle.min.css') }}>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }

    .select-style {
        width: 100%;
    }

    .multiselect-dropdown {
        width: 306px !important;
        display: inline-block;
        border-bottom: solid 1px #ced4da;
        background-color: #5504B0;
        position: relative;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='white' stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 16px 12px;
    }

    .multiselect-dropdown span.optext,
    .multiselect-dropdown span.placeholder {
        margin-right: 0.5em;
        margin-bottom: 2px;
        padding: 1px 0;
        border-radius: 4px;
        display: inline-block;
    }

    .multiselect-dropdown span.optext {
        padding: 1px 0.75em;
    }

    .multiselect-dropdown span.optext .optdel {
        float: right;
        margin: 0 -6px 1px 5px;
        font-size: 0.7em;
        margin-top: 2px;
        cursor: pointer;
        color: #666;

    }

    .multiselect-dropdown span.optext .optdel:hover {
        color: #c66;
    }

    .multiselect-dropdown span.placeholder {
        color: white;
        background-color: #5504B0;
        font-size: 14px;

    }

    .multiselect-dropdown-list-wrapper {
        z-index: 100;
        padding: 2px;
        /*border-radius: 4px;*/
        display: none;
        margin: -1px;
        /*position: absolute;*/
        top: 0;
        left: 0;
        right: 0;
        background-color: #5504B0;

    }

    .multiselect-dropdown-list {
        height: 15rem;
        overflow-y: auto;
        overflow-x: hidden;
        font-size: 14px;
    }

    .multiselect-dropdown-list::-webkit-scrollbar {
        width: 6px;
    }

    .multiselect-dropdown-list::-webkit-scrollbar-thumb {
        background-color: #bec4ca;
        border-radius: 3px;
    }

    .multiselect-dropdown-list div {
        padding: 5px;
    }

    .multiselect-dropdown-list input {
        height: 1.15em;
        width: 1.15em;
        margin-right: 0.35em;
        border: 1px;

    }

    .multiselect-dropdown-list div:hover {
        background-color: #5504B0;
    }

    .multiselect-dropdown span.maxselected {
        width: 100%;
    }

    .swiper-button-next,
    .swiper-button-prev {
        background-color: #FBD206;
    }

    element.style {
        margin-left: 20px !important;
    }
</style>
@section('main')
    <!-- section header-image -->

    <a name="home"></a>
    <div class="landing_page "
        style="background-image:url(assets/frontend/images/formimg1.png);background-repeat:no-repeat;background-position: left 50px bottom 80px;">
        <section class="landing_banner responsive-container "
            style="background-image: url(assets/frontend/images/b-1.png);background-repeat: no-repeat;background-position: center bottom;">


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <figcaption>
                            <ul id="scene2">
                                <li class="layer" data-depth="0.8">
                                    <div class="layer1"><img src="{{ asset('assets/frontend/images/line1.png') }}"></div>
                                </li>
                            </ul>
                            <h2>Missing<br> the buzz?</h2>
                            <p>You're in the right place.<br>Let's create it!</p>
                            <ul id="scene3">
                                <li class="layer" data-depth="0.8">
                                    <div class="layer1"><img src="{{ asset('assets/frontend/images/line2.png') }}"></div>
                                </li>
                            </ul>
                        </figcaption>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="landing_form contact-right-side-content ">
                            <h4 class="text-white">Approach for Buzz</h4>
                            {!! Form::open([
                                'url' => route('enquiry.landing.page.store'),
                                'method' => 'POST',
                                'id' => 'contact-form',
                                'files' => true,
                            ]) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => ' Full Name']) !!}
                                    <span class="text-danger" style="font-size:15px ; margin-top:0">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    <span class="text-danger" style="font-size:15px ; margin-top:0">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    {!! Form::number('mobile', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Mobile',
                                        'oninput' =>
                                            'javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);                                         ',
                                        'maxlength' => '10',
                                    ]) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('mobile')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                {{-- <div class="col-md-12">
                                    {!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' => 'Business Name']) !!}
                                    <span class="text-danger" style="font-size:15px ; margin-top:0">
                                        @error('business_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Website']) !!}
                                    <span class="text-danger" style="font-size:15px ; margin-top:3">
                                        @error('website')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <select name="services[]" class="select select-style outcomes" multiple
                                        multiselect-select-all="true" id="outcomes">
                                        <option value="Social Media Marketing">Social Media Marketing</option>
                                        <option value="Website Design and Development">Website Design and Development
                                        </option>
                                        <option value="Branding">Branding</option>
                                        <option value="Performance Marketing">Performance Marketing</option>
                                        <option value="UIUX Designing">UIUX Designing</option>
                                        <option value="Mobile App Design & Development">Mobile App Design & Development
                                        </option>
                                        <option value="Photography/ Videography">Photography / Videography</option>
                                        <option value="Reel Production">Reel Production</option>
                                        <option value="Influencer Marketing">Influencer Marketing</option>
                                    </select>
                                    <span id="outcomeaddress"
                                        style="margin-top: 29px; margin-left: 275px; color: red;"></span>
                                    <div id="div1"></div>
                                    <span class="text-danger" style="font-size:15px">
                                        @error('services')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div> --}}

                                <div class="col-md-12">
                                    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => '4']) !!}
                                    <span class="text-danger" style="font-size:15px ; margin-top:3">
                                        @error('message')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-12">
                                    {!! NoCaptcha::display(['data-theme' => 'light']) !!}
                                    <span class="text-danger" style="font-size:15px">
                                        @error('g-recaptcha-response')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-buzz-connect']) }}
                                </div>
                            </div>
                            {{ Form::close() }}
                            <ul id="scene1">
                                <li class="layer" data-depth="0.8">
                                    <div class="layer1"><img src="{{ asset('assets/frontend/images/formline3.png') }}">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <a name="clients"></a>

    @include('frontend.components.home_featured')
    <a name="services"></a>
    <!-- section services -->
    <section class="services responsive-container">
        <div class="container reveal">
            <div class="text-center mb-5">
                <h2 class="hindi2 "><span>#</span>बाजार</h2>
                <h1 class="font-blue">The Buzz Menu</h1>
                <div>
                    <p class="title-tags">
                        Pick a service to download your success

                        {{--                        Master of all, jack of none<br> --}}
                        {{--                        We've mastered the art of buzz through a holistic approach to<br> --}}
                        {{--                        branding and marketing.Pick a service to get buzzing! --}}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center service-container reveal">
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-4">
                                <img src={{ asset('assets/frontend/images/woman-doing-conversation.svg') }}
                                    class="feature-img-one" alt="woman-doing-conversation">
                            </div>
                            <div class="col-8">
                                <label>Strategy</label>
                                <div class="service-description-one">
                                    <span>Business & Brand Consulting</span><br>
                                    <span>Branding and Identity</span><br>
                                    <span>Branding and Camping Planning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('assets/frontend/images/indian-wife-talking-on-the-telephone.svg') }}"
                                    class="feature-img-two" alt="indian-wife-talking-on-the-telephone">
                            </div>
                            <div class="col-7">
                                <label>Content</label>
                                <div class="service-description-two">
                                    <span>Social Media</span><br>
                                    <span>Influencer Marketing</span><br>
                                    <span>Blogs</span><br>
                                    <span>Website Content</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center service-container reveal">
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-6">
                                <img src={{ asset('assets/frontend/images/bald-man-listening-to-gramophone.svg') }}
                                    class="feature-img-three" alt="bald-man-listening-to-gramophone">
                            </div>
                            <div class="col-6">
                                <label>Technology</label>
                                <div class="service-description-three">
                                    <span>Website</span><br>
                                    <span>Mobile Application</span><br>
                                    <span>Business Solutions</span><br>
                                    <span>AR VR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-5">
                                <img src={{ asset('assets/frontend/images/girl-doing-paiting-on-the-canvas.svg') }}
                                    class="feature-img-four" alt="girl-doing-paiting-on-the-canvas">
                            </div>
                            <div class="col-7">
                                <label>Design</label>
                                <div class="service-description-four">
                                    <span>UI / UX</span><br>
                                    <span>Illustration</span><br>
                                    <span>Print and Digital</span><br>
                                    <span>Logo and Merchandising</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-5">
                                <img src={{ asset('assets/frontend/images/man-taking-photo.svg') }}
                                    class="feature-img-five" alt="man-taking-photo">
                            </div>
                            <div class="col-7">
                                <label>Buzz Studio</label>
                                <div class="service-description-five">
                                    <span>Photoraphy & Videography</span><br>
                                    <span>Corporate Film</span><br>
                                    <span>Live Event Coverage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a name="creative-canvas"></a>

    <section class="creative-canvas responsive-container">
        <div class="container reveal">
            <div class="text-center mb-5">
                <h2 class="hindi2 "><span>#</span>ज़रा हटके ज़रा बचके


                </h2>
                <h1 class="font-blue">Our Creative Canvas</h1>
                <div>
                    <p class="title-tags">
                        Action backs commitment, proof fuels our pitch.
                    </p>
                </div>
            </div>
            <div class="text-center mb-5 reveal">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.poojaent') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/pooja.png') }}" class="w-90 h-90" alt="poojaent">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.purusham') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/purusham.png') }}" class="w-90 h-90"
                                alt="purusham">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.vdc') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/vdc.png') }}" class="w-90 h-90" alt="vdc">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.nutra') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/Nutra-care.png') }}" class="w-90 h-90"
                                alt="nutra">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.jio') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/jiomeet.png') }}" class="w-90 h-90"
                                alt="jio">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('frontend.sarvotkarsh') }}" target="blank">
                            <img src="{{ asset('assets/frontend/images/image6.png') }}" class="w-90 h-90"
                                alt="sarvotkarsh">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.insta_reels')

    <a name="testimonials"></a>

    @include('frontend.components.testimonials')
    <!-- end -->

    <a name="contact"></a>
    <br><br><br><br>

    <!-- section address start -->
    <section class="section-address responsive-container">
        <div class="container">
            <div class="row justify-content-end reveal">
                <div class="col-md-5">
                    <div class="box-address">
                        <h5>Mumbai</h5>

                        <p class="mb-0">Buzz Markers, Conwood Paragon,
                            Opp Indian Oil Petrol Pump,<br>
                            Near Cama Industrial Estate,
                            Goregaon East,<br>
                            Mumbai, Maharashtra - 400063<br>
                            +919890393090
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="box-address">
                        <h5>Nagpur</h5>
                        <p class="mb-0">Buzz Markers, Above Panino,<br>
                            Wardhman Nagar Colony,<br>
                            Nagpur - 440012<br>
                            +919028999566
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section address ends -->

    <a name="faq"></a>

    {!! $table !!}

    {{-- @include('frontend.components.completefaqs') --}}
@endsection

@section('js')
    <script src={{ asset('assets/frontend/js/multi-select-enquiry.js') }}></script>

    <script src={{ asset('assets/frontend/js/faqs.js') }}></script>
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::renderJs('en', true, 'recaptchaCallback') !!}
    <script type="text/javascript">
        $('#scene1').parallax();
        $('#scene2').parallax();
        $('#scene3').parallax();
    </script>
@endsection
