@extends('frontend.layouts.master')
@section('title')
    Contact
@endsection
@section('css')
{{--    <link rel="stylesheet" href={{ asset('assets/frontend/css/rangeslider.css') }}>--}}

<style>
    .select-style{
        width: 100%;
    }
    .multiselect-dropdown{

        display: inline-block;
        padding: 2px 5px 0px 5px;
        border-radius: 4px;
        border-bottom: solid 1px #ced4da;
        background-color: #5504B0;
        position: relative;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='white' stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 16px 12px;
    }
    .multiselect-dropdown span.optext, .multiselect-dropdown span.placeholder{
        margin-right:0.5em;
        margin-bottom:2px;
        padding:1px 0;
        border-radius: 4px;
        display:inline-block;
    }
    .multiselect-dropdown span.optext{
        padding:1px 0.75em;
    }
    .multiselect-dropdown span.optext .optdel {
        float: right;
        margin: 0 -6px 1px 5px;
        font-size: 0.7em;
        margin-top: 2px;
        cursor: pointer;
        color: #666;

    }
    .multiselect-dropdown span.optext .optdel:hover { color: #c66;}
    .multiselect-dropdown span.placeholder{
        color:white;
        background-color: #5504B0;


    }
    .multiselect-dropdown-list-wrapper{
        z-index: 100;
        padding:2px;
        /*border-radius: 4px;*/
        display: none;
        margin: -1px;
        /*position: absolute;*/
        top:0;
        left: 0;
        right: 0;
        background-color: #5504B0;

    }

    .multiselect-dropdown-list{
        padding:2px;
        height: 15rem;
        overflow-y:auto;
        overflow-x: hidden;
    }
    .multiselect-dropdown-list::-webkit-scrollbar {
        width: 6px;
    }
    .multiselect-dropdown-list::-webkit-scrollbar-thumb {
        background-color: #bec4ca;
        border-radius:3px;
    }

    .multiselect-dropdown-list div{
        padding: 5px;
    }
    .multiselect-dropdown-list input{
        height: 1.15em;
        width: 1.15em;
        margin-right: 0.35em;
        border: 1px;

    }

    .multiselect-dropdown-list div:hover{
        background-color: #5504B0;
    }
    .multiselect-dropdown span.maxselected {width:100%; }
</style>

@endsection


@section('main')
    <!-- section contact- header -->
    <section>
        <div class="contact-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        {{--                        <h1><img src="{{ asset('assets/frontend/images/Contact/smiley.webp') }}" style="width:45px ;"--}}
                        {{--                                class="smiley" alt=""> Get in--}}
                        {{--                            touch to discuss--}}
                        {{--                            your<br>--}}
                        {{--                            project, request a quote or even<br> just to pick our brains.</h1><br>--}}
                        <h1 class="font-blue"><img src="{{ asset('assets/frontend/images/Contact/smiley.webp') }}"
                                                   style="width:45px ;"
                                                   class="smiley" alt="">We only love the buzz and traffic when it is
                            driving towards your business.
                            Let’s discuss the pathway?
                        </h1><br>
                        <div class="text-center btn-contact">
                            <a href="{{ route('frontend.contact') }}" class="btn btn-buzz-connect-blue" target="_blank">Let's
                                Connect</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pattern-contact-page">
                            <img src={{ asset('assets/frontend/images/Blogs/cross.svg') }} style="width:10% ;"
                            class="pat-1" alt="cross">
                            <img src="{{ asset('assets/frontend/images/orange-ribbon.webp') }}" style="width:30% ;"
                                 class="mt-5 pat-2" alt="orange-ribbon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- center form contact- page START-->
    <section>
        <div class="contact-center-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-left-side-content reveal">
                            <div>
                                <h3>How to get started?
                                </h3>
                                <p>A few clicks and your job is done here.
                                </p>
                            </div>
                            <div class="mt-5 row">
                                <div class="col-1">
                                    <div class="h-100 side-pattern-border">
                                        <span class="dot-sign-one"><img
                                                src="{{asset('assets/frontend/images/Contact/dot.webp')}}"
                                                style="width:18px ;"
                                                alt=""></span>
                                        <span class="dot-sign-two"><img
                                                src="{{asset('assets/frontend/images/Contact/dot.webp')}}"
                                                style="width:18px ;"
                                                alt=""></span>
                                        <span class="dot-sign-three"><img
                                                src="{{asset('assets/frontend/images/Contact/dot.webp')}}"
                                                style="width:18px ;"
                                                alt=""></span>
                                        <span class="dot-sign-four"><img
                                                src="{{asset('assets/frontend/images/Contact/dot.webp')}}"
                                                style="width:18px ;"
                                                alt=""></span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="mb-5">
                                        <h5>1. Tell Us About You</h5>
                                        <p>Share a little about yourself, your business, and your goals with us.
                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <h5>2. Schedule a Call
                                        </h5>
                                        <p>Our team will hop on a detailed call with you to dig deeper into your
                                            marketing needs and goals.

                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <h5>3. Seal the Deal
                                        </h5>
                                        <p>A few more discussions until we all are convinced of the action plan. Next
                                            thing, we just put them in motion with a contract.


                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <h5>4. Feel the Buzz
                                        </h5>
                                        <p>Once you seal the deal, you sit back as our team moves things around to lead
                                            your business into the limelight. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-right-side-content">
                            {!! Form::open([
                                'url' => route('frontend.contact.store'),
                                'method' => 'POST',
                                'id' => 'contact-form',
                                'files' => true,
                            ]) !!}
                            <div class="mb-4 reveal ">
                                <h4 class="text-white">1. Tell us about you</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <input type="text" class="form-control" placeholder="Your Name"> --}}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Name']) !!}
                                        <span class="text-danger" style="font-size:15px ; margin-top:0">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- <input type="email" class="form-control" placeholder="Your Email"> --}}
                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}
                                        <span class="text-danger" style="font-size:15px ; margin-top:3">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- <input type="tel" class="form-control" placeholder="Your Phone Number"> --}}
                                        {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Your Phone Number']) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('phone')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- <input type="text" class="form-control" placeholder="Company Website"> --}}
                                        {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Company Website']) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('website')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 reveal">
                                <h4 class="text-white">2. What are you looking to work on?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <input type="text" class="form-control" placeholder="Describe Your Project"> --}}
                                        {!! Form::text('project', null, ['class' => 'form-control', 'placeholder' => 'Describe Your Project']) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('project')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-4 reveal">
                                <h4 class="text-white">3. {{ Form::label('What\'s Your Budget') }}</h4>
                                <div class="row">

                                    <div class="col-md-12">

                                        <h4 class="text-white"></h4>
                                        {!! Form::text('budget', null, ['class' => 'form-control', 'placeholder' => 'Your Budget']) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('budget')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                        {{--                                        <section class="range-slider" id="facet-price-range-slider">--}}
                                        {{--                                            <input name="range1" value="3000" min="3000" max="50000"--}}
                                        {{--                                                   step="1" type="range">--}}
                                        {{--                                            <input name="range2" value="50000" min="0" max="50000"--}}
                                        {{--                                                   step="1" type="range">--}}
                                        {{--                                        </section>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 reveal">
                                <h4 class="text-white">4. What Services are you interested in?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="services[]" class="select select-style outcomes" multiple  multiselect-select-all="true" id="outcomes" >
                                            <option value="Social Media Marketing">Social Media Marketing</option>
                                            <option value="Website Design and Development">Website Design and Development</option>
                                            <option value="Branding">Branding</option>
                                            <option value="Performance Marketing">Performance Marketing</option>
                                            <option value="UIUX Designing">UIUX Designing</option>
                                            <option value="Mobile App Design & Development">Mobile App Design & Development</option>
                                            <option value="Photography/ Videography">Photography / Videography</option>
                                            <option value="Reel Production">Reel Production</option>
                                            <option value="Influencer Marketing">Influencer Marketing</option>

                                        </select>
                                        <span id="outcomeaddress" style="margin-top: 29px; margin-left: 275px; color: red;"></span>
                                        <div id="div1"></div>
{{--                                        {!! Form::select('services', config('constants.SERVICE'), '', [--}}
{{--                                            'class' => 'form-control  dd  one',--}}
{{--                                        ]) !!}--}}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('services')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 reveal">
                                <div class="row">
                                <h4 class="text-white">5. List-down Your Key Competitors</h4>
                                    <div class="col-md-12">
                                        {!! Form::text('competitors', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'List-down Your Key Competitors',
                                        ]) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('competitors')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-4 reveal">
                                    <div class="row">
                                    <h4 class="text-white">6. How did you get to know about us?</h4>
                                    <div class="col-md-12">

                                        {!! Form::text('reference', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'How did you get to know about us?',
                                        ]) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('reference')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    </div>
                                </div>
                            <div class="mb-4 reveal">
                                <div class="row">
                                    <div class="input-group">

                                        {{ Form::label('inputGroupFile01', 'Attach Document (If Any)') }}
                                        <div class="col-md-12">
                                            {!! Form::file('documents', ['class' => 'form-control ']) !!}
                                            <span class="text-danger" style="font-size:15px">
                                            @error('documents')
                                                {{ $message }}
                                                @enderror
                                        </span>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 reveal">
                                <div class="row">
                                    <div class="input-group">

                            {!! NoCaptcha::display(['data-theme' => 'light' ]) !!}
                            <span class="text-danger" style="font-size:15px">
                                                    @error('g-recaptcha-response')
                                {{ $message }}
                                @enderror
                            </span>
                                    </div>
                            </div>
                            </div>

{{--                            <div class="mb-2 reveal">--}}
{{--                                <h4 class="text-white">7. Schedule a call with our tech expert. Get a detailed tech--}}
{{--                                    consultation for--}}
{{--                                    free!</h4>--}}
{{--                                <div class="my-4 radio-date-container">--}}
{{--                                    <div id="radio-example" class="radio-date-scroll">--}}

{{--                                        @for ($day = 0; $day < 15; $day++)--}}
{{--                                            @php--}}
{{--                                                $today = Carbon\Carbon::now();--}}
{{--                                                $date = $today->addDays($day);--}}
{{--                                                $radioId = $date->format('d');--}}
{{--                                                $value = $date->format('Y-m-d');--}}
{{--                                            @endphp--}}


{{--                                            <label class="radioselect" for={{ 'radio' . $radioId }}>--}}
{{--                                                <span>{{ $date->format('D') }}</span><br/>--}}
{{--                                                <b>{{ $date->format('M d') }}</b>--}}
{{--                                                {{ Form::radio('schedule_date', $value, false, ['id' => 'radio' . $radioId]) }}--}}
{{--                                            </label>--}}
{{--                                        @endfor--}}

{{--                                        <span class="text-danger" style="font-size:15px">--}}
{{--                                            @error('schedule_date')--}}
{{--                                            {{ $message }}--}}
{{--                                            @enderror--}}
{{--                                        </span>--}}
{{--                                        --}}{{-- <label class="radioselect" for="radio8">--}}
{{--                                            <span>Mon</span><br />--}}
{{--                                            <b>Mar 8</b>--}}
{{--                                            <input type="radio" name="radio" id="radio8"/>--}}
{{--                                          </label> --}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <label>Time Zone</label>--}}
{{--                                    <div class="col-lg-4 ">--}}
{{--                                        {!! Form::label('IST','IST' ,['class' => 'form-control dd ']) !!}--}}
{{--                                        <input type="hidden" name="timezone" value="IST" >--}}
{{--                                        {!! Form::select('timezone', [ 'IST' => 'IST','EST' => 'EST', '31' => 'Option3'], null, [--}}
{{--                                            'class' => 'form-control dd form-select one',--}}
{{--                                        ]) !!}--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-8">--}}
{{--                                        {!! Form::select(--}}
{{--                                            'schedule_time',--}}
{{--                                            [--}}
{{--                                                '10:00AM-12:00PM' => 'Schedule at - 10:00AM to 12:00PM',--}}
{{--                                                '01:00PM-03:00PM' => 'Schedule at - 01:00PM to 03:00PM',--}}
{{--                                                '3' => 'Scheduled at - 04:00PM to 06:00PM',--}}
{{--                                            ],--}}
{{--                                            null,--}}
{{--                                            ['class' => 'form-control dd form-select one'],--}}
{{--                                        ) !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="text-center reveal">
                                {{ Form::submit('Submit', ['class' => 'btn btn-buzz-connect']) }}
                            </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- center form contact- page END -->

    <!-- section address start -->
    <section class="section-address responsive-container">
        <div class="container">
            <div class="row justify-content-end reveal">
                <div class="col-md-5">
                    <div class="box-address">
                        <h5>Mumbai</h5>

                        <p class="mb-0">Conwood Paragon,
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

    {{-- @include('frontend.components.completefaqs') --}}

    {!! $table !!}

@endsection

@section('js')
    <script src={{ asset('assets/frontend/js/rangeslider.js') }}></script>
    <script src={{ asset('assets/frontend/js/faqs.js') }}></script>
    <script src={{ asset('assets/frontend/js/multi-select.js') }}></script>
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::renderJs('en', true, 'recaptchaCallback') !!}
    {{-- <script src="{{ asset('assets/frontend/js/toastr.min.js') }}"></script> --}}
@endsection
@section('script')
    <script>

        $(".radioselect").click(function () {
            $(".radioselect").removeClass("radioselect-yellow");
            $(this).addClass("radioselect-yellow");
        });
    </script>

@endsection
