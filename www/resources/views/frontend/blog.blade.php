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

    <!-- center content -->
    <section class="center-content-blog responsive-container">
        <div class="container mt-5">
            <h1 class="text-black">Articles</h1>
            <div class="row g-3">
                @foreach ($blogContent->where('is_article', 'Y')->take(3) as $blog)
                    <div class="col-md-4">
                        <img src={{ asset("storage/images/blogs/$blog->cover_photo") }} class="w-100" alt="post1">
                        <p>{{ $blog->title }}</p>
                        <a href="#"><img src={{ asset('assets/frontend/images/Blogs/arrow.webp') }} alt="arrow"
                                class="arrow-img"></a>
                    </div>
                @endforeach
                {{-- <div class="col-md-4">
            <img src={{asset('assets/frontend/images/Blogs/post2.webp')}} class="w-100" alt="post2">
            <p>It Is A Long Established Fact That A Reader Will Be Distracted.</p>
            <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
          </div>
          <div class="col-md-4">
            <img src={{asset('assets/frontend/images/Blogs/post3.webp')}} class="w-100" alt="post3">
            <p>It Is A Long Established Fact That A Reader Will Be Distracted.</p>
            <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
          </div> --}}
            </div>
        </div>

        <!-- featured blogs -->
        <div class="container mt-5 reveal">
            <h1 class="text-black">Featured Blogs</h1>
            <div class="row g-3">
                @foreach ($blogContent->where('is_featured', 'Y')->take(2) as $blog)
                    <div class="col-md-6">
                        <img src={{ asset("storage/images/blogs/$blog->cover_photo") }} class="w-100" alt="blog1">
                        <p>{{ $blog->title }}</p>
                        <a href="#"><img src={{ asset('assets/frontend/images/Blogs/arrow.webp') }} alt="arrow"
                                class="arrow-img"></a>
                    </div>
                @endforeach
                {{-- <div class="col-md-6">
          <img src={{asset('assets/frontend/images/Blogs/blog2.webp')}} class="w-100" alt="blog2">
          <p>It Is A Long Established Fact That A Reader Will Be Distracted.</p>
          <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
        </div> --}}
            </div>
        </div>
        <!-- converstaion -->
        <div class="container mt-5 reveal">
            <h1 class="text-black">Conversations</h1>
            <div class="row g-3">
                @foreach ($blogContent->where('is_conversation', 'Y')->take(2) as $blog)
                    <div class="col-md-6">
                        <img src={{ asset("storage/images/blogs/$blog->cover_photo") }} class="w-100" alt="video">
                        <p>{{ $blog->title }}</p>
                    </div>
                @endforeach
                {{-- <div class="col-md-6">
              <img src={{asset('assets/frontend/images/Blogs/video1.webp')}} class="w-100" alt="video1">
              <p>It Is A Long Established Fact That A Reader Will Be Distracted.</p>
            </div> --}}
            </div>
        </div>

    </section>

    @include('frontend.components.faqs')
@endsection
