@extends('frontend.layouts.master')
@section('title')
    News
@endsection

@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-news">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="content-news">It is a long established fact that<br> a reader will be Distracted</h1>
                </div>
                <div class="col-md-4 img-news">
                    <img src="{{ asset('assets/frontend/images/news/cross.svg') }}" style="width:5%; " alt="cross">
                </div>
            </div>
        </div>
    </section>


    <div class="float-end">

        <a href="{{route('frontend.news')}}">
            <img
                src={{ asset('assets/frontend/images/Blogs/arrow_back.png') }} alt="arrow"
                class="arrow-img" title="Back" style="padding: 20px;">
        </a>

    </div>


    <section class="center-content-news-second ">
        <div class="container mt-5">
            <h1 class="text-black">Recent Posts</h1>

            <div class="row mb-5">
                <div class="col-md-12" align="center">

                    <img src={{ asset("storage/images/news/$news->cover_photo") }}  alt="post1" class="image-width">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-12">
                    <h3>{{ $news->title }}</h3>
                    <p style="white-space: pre-line;">{{ $news->description }}</p>


                </div>
            </div>


        </div>
    </section>
    <br>
    @include('frontend.components.faqs')
@endsection
