@extends('enquiry_landing_page.layouts.master')

@section('title')
    {{ $content->title ?? "" }}
@endsection
@section('main')
    <a name="home"></a>

    <div class=" thankyou_page " style="background-image:url(assets/frontend/images/formimg1.png);background-repeat:no-repeat;background-position: left 50px bottom 80px;">
        <section class="landing_banner responsive-container ">


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 thank-you">
                        <figcaption>
                            <ul id="scene2">
                                <li class="layer" data-depth="0.8">
                                    <div class="layer1"><img src="{{asset('assets/frontend/images/line1.png')}}"></div>
                                </li>
                            </ul>
                            <h2>Thank you!</h2>
                            <p>Your submission has been received!</p>
                            <ul id="scene3">
                                <li class="layer" data-depth="0.8">
                                    <div class="layer1"><img src="{{asset('assets/frontend/images/line2.png')}}"></div>
                                </li>
                            </ul>
                        </figcaption>
                    </div>
{{--                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">--}}
{{--                        <div class="landing_form contact-right-side-content thank-you">--}}

{{--                            <ul id="scene1">--}}
{{--                                <li class="layer" data-depth="0.8">--}}
{{--                                    <div class="layer1"><img src="{{asset('assets/frontend/images/formline3.png')}}"></div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

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

                        {{--                        Master of all, jack of none<br>--}}
                        {{--                        We've mastered the art of buzz through a holistic approach to<br>--}}
                        {{--                        branding and marketing.Pick a service to get buzzing!--}}
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
                        <img src="{{ asset('assets/frontend/images/image1.png') }}" class="w-90 h-90" alt="proj4">
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <img src="{{ asset('assets/frontend/images/image2.png') }}" class="w-90 h-90" alt="proj4">

                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <img src="{{ asset('assets/frontend/images/image3.png') }}" class="w-90 h-90" alt="proj4">
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <img src="{{ asset('assets/frontend/images/image4.png') }}" class="w-90 h-90" alt="proj4">

                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <img src="{{ asset('assets/frontend/images/image5.png') }}" class="w-90 h-90" alt="proj4">

                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <img src="{{ asset('assets/frontend/images/image6.png') }}" class="w-90 h-90" alt="proj4">

                    </div>

                </div>
            </div>
        </div>
    </section>

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
@endsection

@section('js')
    <script src={{ asset('assets/frontend/js/faqs.js') }}></script>

    <script type="text/javascript">
        $('#scene1').parallax();
        $('#scene2').parallax();
        $('#scene3').parallax();
    </script>
@endsection

