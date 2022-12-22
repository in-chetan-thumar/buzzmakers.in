@extends('frontend.layouts.master')
@section('title')
    Career
@endsection
@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-career">
        <div class="container pt-5">
            <div class="row align-items-center text-center">
                <div class="col-md-2 img-news">
                    <img src={{ asset('assets/frontend/images/news/cross.svg') }} style="width:15%;" class="cross-ui"
                        alt="cross">
                </div>
                <div class="col-md-8">
                    <h1 class="content-news fw-bold">It is a long established fact that<br> a reader will be Distracted</h1>
                    <p>Our 95 designers, developers and strategists work from six creative hubs around the world. Our
                        indepedent
                        ownership and 40 year
                        heritage of trasforming.
                    </p>
                </div>
                <div class="col-md-2 img-news">
                    <img src={{ asset('assets/frontend/images/news/cross.svg') }} style="width:15%;" class="cross-ui"
                        alt="cross">
                </div>
            </div>
        </div>
    </section>

    <!-- center content -->
    <section class="center-content-career">
        <div class="container mb-5">
            <img src={{ asset('assets/frontend/images/working-employee.webp') }} class="w-100">
        </div>
    </section>

    <!-- center content -->
    <section class="center-content-career-second reveal">
        <div class="container">
            <div class="career-middle-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="inner-box">
                            <label>Lorem ipsum is simply dummy text of<br /> The Printing And Typesetting
                                Industry.</label><br />
                            <p>Nearly every organization will need to become a tech company in order to complete tommorrow.
                                Yes,even
                                yours. at simform, we are on
                                a mission to help companies develop competitiviness and agility using the software.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner-box">
                            <label>Lorem ipsum is simply<br /> dummy text of The Printing.</label><br />
                            <p>Nearly every organization will need to become a tech company in order to complete tommorrow.
                                Yes,even
                                yours. at simform, we are on
                                a mission to help companies develop competitiviness and agility using the software.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner-box">
                            <label>Lorem ipsum is simply<br /> dummy text of The Printing And Typesetting
                                Industry.</label><br />
                            <p>Nearly every organization will need to become a tech company in order to complete tommorrow.
                                Yes,even
                                yours. at simform, we are on
                                a mission to help companies develop competitiviness and agility using the software.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- current openings -->
    <section class="openings py-5">
        <div class="container">
            <h1>Current Openings</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div>
                                <h3>Content Writer</h3>
                                <label>3 to 4 years of Experience</label>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            This is the first item's accordion body. It is shown by default,
                            until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall
                            appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or
                            overriding our default variables. It's also worth noting that
                            just about any HTML can go within the .accordion-body, though
                            the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div>
                                <h3>Visual Designer</h3>
                                <label>3 to 4 years of Experience</label>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            This is the first item's accordion body. It is shown by default,
                            until the collapse plugin adds the appropriate classes that we
                            use to style each element. These classes control the overall
                            appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or
                            overriding our default variables. It's also worth noting that
                            just about any HTML can go within the .accordion-body, though
                            the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.faqs')
@endsection
