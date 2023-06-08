@extends('frontend.layouts.master')
@section('title')
    Blog
@endsection

@section('main')
    <!-- section header-image -->
    <section class="header-hero-section-blog">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="content-blog">It is a long established fact<br> that a reader will be</h1>
                </div>
                <div class="col-md-6 img-blog">
                    <img src={{ asset('assets/frontend/images/Blogs/reader.svg') }} style="width:70% ;" alt="reader">
                </div>
            </div>
        </div>
    </section>

    <div class="float-end">

        <a href="{{ route('frontend.blog') }}">
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
                    <img src={{ asset("storage/images/blogs/$blog->cover_photo") }}  alt="post1" class="image-width">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-12">
                    <h3>{{ $blog->title }}</h3>
                    <p style="white-space: pre-line;">{{ $blog->description }}</p>


                </div>
            </div>


        </div>
    </section>
    <br>
    @include('frontend.components.faqs')
@endsection
