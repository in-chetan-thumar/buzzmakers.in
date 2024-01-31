@extends('enquiry_landing_page.layouts.master')

@section('title')
    {{ $content->title ?? "" }}
@endsection
@section('main')
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
@endsection

@section('js')

    <script type="text/javascript">
        $('#scene1').parallax();
        $('#scene2').parallax();
        $('#scene3').parallax();
    </script>
@endsection

