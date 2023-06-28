@extends('frontend.layouts.master')

@section('title')
    {{ $content->title }}
@endsection

@section('main')
    <!-- section header-image -->
    <section class="pt-5 mb-5 responsive-container">
        <div class="home-header">
            <div class="project-screens">
                <div class="proj-1">
                    <a href="{{route('frontend.nutra')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj4.webp') }}" class="w-100 h-100" alt="proj4">
                    </a>
                </div>
                <div class="proj-2">
                    <a href="{{route('frontend.poojaent')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj1.webp') }}" class="w-100 h-100" alt="proj1">
                    </a>
                </div>
                <div class="proj-3">
                    <a href="{{route('frontend.salvi')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj5.webp') }}" class="w-100 h-100" alt="proj5">
                    </a>
                </div>
                <div class="proj-4">
                    <a href="{{route('frontend.jio')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj2.webp') }}" class="w-100 h-100" alt="proj2">
                    </a>
                </div>
                <div class="proj-5">
                    <a href="{{route('frontend.sarvotkarsh')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj7.png') }}" class="w-100 h-100" alt="proj7">
                    </a>
                </div>
                <div class="proj-6">
                    <a href="{{route('frontend.purusham')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj6.webp') }}" class="w-100 h-100" alt="proj6">
                    </a>
                </div>
                <div class="proj-7">
                    <a href="{{route('frontend.llumar')}}" target="_blank">
                    <img src="{{ asset('assets/frontend/images/projects/proj3.webp') }}" class="w-100 h-100" alt="proj3">
                    </a>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.components.home_featured')

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
                                <div>
                                    <img src={{ asset('assets/frontend/images/yellow-arrow.webp') }} class="go-icon-one"
                                        alt="yellow-arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box">
                        <div class="row">
                            <div class="col-5">
                                <img src={{ asset('assets/frontend/images/indian-wife-talking-on-the-telephone.svg') }}
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
                                <div>
                                    <img src={{ asset('assets/frontend/images/yellow-arrow.webp') }} class="go-icon-two"
                                        alt="yellow-arrow">
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
                                <div>
                                    <img src={{ asset('assets/frontend/images/yellow-arrow.webp') }} class="go-icon-three"
                                        alt="yellow-arrow">
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
                                <div>
                                    <img src={{ asset('assets/frontend/images/yellow-arrow.webp') }} class="go-icon-four"
                                        alt="yellow-arrow">
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
                                <div>
                                    <img src={{ asset('assets/frontend/images/yellow-arrow.webp') }} class="go-icon-five"
                                        alt="yellow-arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.components.testimonials')

    <section class="careers">
        <div class="text-center mt-3 reveal">
            <h2 class="hindi2"><span>#</span>उड़ान</h2>
            <h1 class="font-blue"> The Buzz Dream</h1>
            <div class="careers-content">
                <p class="title-tags">
                    Think you got what it takes to get buzzing with us? Apply Now!
                </p>
            </div>
        </div>
        <div class="container reveal">
            <div class="careersslider pt-3">
                <div>
                    <div class="careers-box mb-5 img-ui-icon-pen">
                        <div class="career-author">
                            <label>Sr. Graphic Designer </label><br>
                            <span>3 to 4 Years Experience</span>
                        </div>
                        <a href=https://www.linkedin.com/company/buzzmakersindia/jobs/ target="_blank" class="btn btn-buzz">Apply Now</a>
                        <img src={{ asset('assets/frontend/images/title-point.svg') }} class="img-icon" alt="title-point">
                    </div>
                </div>
                <div>
                    <div class="careers-box mb-5 img-ui-icon-camera">
                        <div class="career-author">
                            <label>Sr. Social Media Manager</label><br>
                            <span>3 to 4 Years Experience</span>
                        </div>
                        <a href=https://www.linkedin.com/company/buzzmakersindia/jobs/ target="_blank" class="btn btn-buzz">Apply Now</a>
                        <img src={{ asset('assets/frontend/images/title-point.svg') }} class="img-icon" alt="title-point">
                    </div>
                </div>

                <div>
                    <div class="careers-box mb-5 img-ui-icon-pen">
                        <div class="career-author">
                            <label>Sr. Content Writer</label><br>
                            <span>3 to 4 Years Experience</span>
                        </div>
                        <a href=https://www.linkedin.com/company/buzzmakersindia/jobs/ target="_blank" class="btn btn-buzz">Apply Now</a>
                        <img src={{ asset('assets/frontend/images/title-point.svg') }} class="img-icon"
                            alt="title-point">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    {!! $table !!}

    {{-- @include('frontend.components.completefaqs') --}}
@endsection

@section('js')
    <script src={{ asset('assets/frontend/js/faqs.js') }}></script>
@endsection

