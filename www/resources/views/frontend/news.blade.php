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
                    <img src={{ asset('assets/frontend/images/news/cross.svg') }} style="width:5%;" alt="cross">
                </div>
            </div>
        </div>
    </section>

    <!-- center content -->
    <section class="center-content-news">
        <div class="container mt-5">
            <h1 class="text-black">Latest News</h1>
            <div class="row g-3">
                @foreach ($newsContent->take(3) as $latestnews)
                    <div class="col-md-4">
                        <a href="#">
                            <img src={{ asset("storage/images/news/$latestnews->cover_photo") }} class="w-100"
                                alt="news1">
                            <p>{{ $latestnews->title }}</p>
                            <img src={{ asset('assets/frontend/images/Blogs/arrow.webp') }} alt="arrow"
                                class="arrow-img">
                        </a>
                    </div>
                @endforeach


                {{-- <div class="col-md-4">
          <a href="#">
            <img src={{asset('assets/frontend/images/news/news2.webp')}} class="w-100" alt="news2">
            <p>It Is A Long Established Fact That A Reader Will Be Good.</p>
            <img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#">
            <img src={{asset('assets/frontend/images/news/news3.webp')}} class="w-100" alt="news3">
            <p>It Is A Long Established Fact That A Reader.</p>
            <img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img">
          </a>
        </div> --}}
            </div>
        </div>
    </section>

    <!-- center content -->
    <section class="center-content-news-second reveal">
        <div class="container mt-5">
            <h1 class="text-black">Recent Posts</h1>

            @foreach ($newsContent->skip(3) as $news)
                <div class="row mb-5">
                    <div class="col-md-4">
                        <img src={{ asset("storage/images/news/$news->cover_photo") }} class="w-100" alt="post1">
                    </div>
                    <div class="col-md-8">
                        <h3>{{ $news->title }}</h3>
                        <p>{{ $news->description }}........</p>
                        <a href="#"><img src={{ asset('assets/frontend/images/Blogs/arrow.webp') }} alt="arrow"
                                class="arrow-img"></a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="row mb-5">
        <div class="col-md-4">
          <img src={{asset('assets/frontend/images/news/post1.webp')}} class="w-100" alt="post1">
        </div>
        <div class="col-md-8">
          <h3>It Is A Long Established Fact That A Reader Will Be Distracted.</h3>
          <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the
            indutry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. it has srvived not only
            five centuries , but also the leap into electronic typesetting, remaining use Lorem ipsum as their default
            model text, and a search for "lorem ipsum"
            will uncover many web sites.
          </p>
          <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-md-4">
          <img src={{asset('assets/frontend/images/news/post2.webp')}} class="w-100" alt="post2">
        </div>
        <div class="col-md-8">
          <h3>It Is A Long Established Fact That A Reader Will Be Distracted.</h3>
          <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the
            indutry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. it has srvived not only
            five centuries , but also the leap into electronic typesetting, remaining use Lorem ipsum as their default
            model text, and a search for "lorem ipsum"
            will uncover many web sites.
          </p>
          <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-md-4">
          <img src={{asset('assets/frontend/images/news/post3.webp')}} class="w-100" alt="post3">
        </div>
        <div class="col-md-8">
          <h3>It Is A Long Established Fact That A Reader Will Be Distracted.</h3>
          <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the
            indutry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. it has srvived not only
            five centuries , but also the leap into electronic typesetting, remaining use Lorem ipsum as their default
            model text, and a search for "lorem ipsum"
            will uncover many web sites.
          </p>
          <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}}alt="arrow" class="arrow-img"></a>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-md-4">
          <img src={{asset('assets/frontend/images/news/post4.webp')}} class="w-100" alt="post4">
        </div>
        <div class="col-md-8">
          <h3>It Is A Long Established Fact That A Reader Will Be Distracted.</h3>
          <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the
            indutry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. it has srvived not only
            five centuries , but also the leap into electronic typesetting, remaining use Lorem ipsum as their default
            model text, and a search for "lorem ipsum"
            will uncover many web sites.
          </p>
          <a href="#"><img src={{asset('assets/frontend/images/Blogs/arrow.webp')}} alt="arrow" class="arrow-img"></a>
        </div>
      </div> --}}

        </div>
    </section>

    @include('frontend.components.faqs')
@endsection
