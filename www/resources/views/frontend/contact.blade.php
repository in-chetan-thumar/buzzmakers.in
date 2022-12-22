@extends('frontend.layouts.master')
@section('title')
    Contact
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/frontend/css/rangeslider.css') }}>
@endsection


@section('main')
    <!-- section contact- header -->
    <section>
        <div class="contact-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h1><img src={{ asset('assets/frontend/images/Contact/smiley.webp') }} style="width:45px ;"
                                class="smiley" alt=""> Get in
                            touch to discuss
                            your<br>
                            project, request a quote or even<br> just to pick our brains.</h1><br>
                        <div class="text-center btn-contact">
                            <a href="#" class="btn btn-buzz-connect-blue">Let's Connect</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pattern-contact-page">
                            <img src={{ asset('assets/frontend/images/Blogs/cross.svg') }} style="width:10% ;"
                                class="pat-1" alt="cross">
                            <img src={{ asset('assets/frontend/images/orange-ribbon.webp') }} style="width:30% ;"
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
                                <h3>What Will Happen Next?</h3>
                                <p>You are a step closer to building great software</p>
                            </div>
                            <div class="mt-5 row">
                                <div class="col-1">
                                    <div class="h-75 side-pattern-border">
                                        <span class="dot-sign-one"><img src="images/Contact/dot.webp" style="width:18px ;"
                                                alt=""></span>
                                        <span class="dot-sign-two"><img src="images/Contact/dot.webp" style="width:18px ;"
                                                alt=""></span>
                                        <span class="dot-sign-three"><img src="images/Contact/dot.webp" style="width:18px ;"
                                                alt=""></span>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="mb-5">
                                        <h5>1.Free Technical Consultation</h5>
                                        <p>Detailed tech plan includes things like what tech stack to use, tech timeline
                                            for
                                            your project.</p>
                                    </div>
                                    <div class="mb-5">
                                        <h5>2.Connect With The Tech Team</h5>
                                        <p>Over a series of calls, our tech team discusses how different technologies
                                            and frameworks will bring
                                            your vision to life.
                                        </p>
                                    </div>
                                    <div>
                                        <h5>3.Onboarding The Team</h5>
                                        <p>As soon as you sign-off on the team, they'll be ready to integrate into your
                                            team just like in-house employees.</p>
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
                            <div class="mb-4 reveal">
                                <h4>1.Tell us about your company</h4>
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
                                <h4>2.What are you looking to work on?</h4>
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
                                    <div class="col-md-12">
                                        {{-- <label>What's Your Budget</label> --}}
                                        {{ Form::label('What\'s Your Budget') }}
                                        <section class="range-slider" id="facet-price-range-slider">
                                            <input name="range1" value="3000" min="3000" max="50000"
                                                step="1" type="range">
                                            {{-- {!! Form::selectRange('range-1', 3000, 50000 )!!} --}}
                                            <input name="range2" value="50000" min="0" max="50000"
                                                step="1" type="range">
                                        </section>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 reveal">
                                <h4>3.What Services ar you interested in?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::select('services', ['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3'], '', [
                                            'class' => 'form-control dd',
                                        ]) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('services')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
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
                                    <div class="col-md-12">
                                        {!! Form::text('reference', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'From where did you get to know about Buzzmakers?',
                                        ]) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('reference')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        {{ Form::label('inputGroupFile01', 'Attach Document (if Any)') }}
                                        {!! Form::file('documents', ['class' => 'form-control d-none', 'id' => 'inputGroupFile01']) !!}
                                        <span class="text-danger" style="font-size:15px">
                                            @error('documents')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2 reveal">
                                <h4>4.Schedule a call with our tech expert. Get a detailed tech consultation for
                                    free!</h4>
                                <div class="my-4">
                                    <div id="radio-example">
                                        <label class="radioselect" for="radone">
                                            <span>Mon</span><br>
                                            <b>Mar 1</b>
                                            <input type="radio" name="radio" id="radone">
                                        </label>

                                        <label class="radioselect" for="radtwo">
                                            <span>Tue</span><br>
                                            <b>Mar 2</b>
                                            <input type="radio" name="radio" id="radtwo">
                                        </label>

                                        <input type="radio" id="age1" name="age" value="30">
                                        <label for="age1">0 - 30</label><br>
                                        <input type="radio" id="age2" name="age" value="60">
                                        <label for="age2">31 - 60</label><br>
                                        <input type="radio" id="age3" name="age" value="100">
                                        <label for="age3">61 - 100</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>Time Zone</label>
                                    <div class="col-md-4">
                                        {!! Form::select('select_timezone', ['1' => 'EST', '2' => 'IST', '3' => 'Option3'], '2', [
                                            'class' => 'form-control dd',
                                        ]) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select(
                                            'select_time',
                                            [
                                                '1' => 'Scheduled at - 06:00PM to 07:00PM',
                                                '2' => 'Scheduled at - 06:00PM to 07:00PM',
                                                '3' => 'Scheduled at - 06:00PM to 07:00PM',
                                            ],
                                            '',
                                            ['class' => 'form-control dd'],
                                        ) !!}
                                    </div>
                                </div>
                            </div>

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
                        <p class="mb-0">Buzz Markers, Ascent Business Centre,<br>
                            Office No.34, 3rd Floor, Sej Plaza Marve Road,<br>
                            Off S.V.Road, Malad (W),Mumbai - 400064<br>
                            +919890393090
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
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

    @include('frontend.components.completefaqs')
@endsection

@section('js')
    <script src="{{ asset('assets/frontend/js/rangeslider.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/js/toastr.min.js') }}"></script> --}}
@endsection
@section('script')
    $(document).ready(function () {
    //change colour when radio is selected
    $('#radio-example input:radio').change(function () {
    // Only remove the class in the specific `box` that contains the radio
    $('div.highlight').removeClass('highlight');
    // $(this).closest('.row').addClass('highlight');
    $(this).closest('.radioselect').addClass('highlight');
    });
    });
@endsection
