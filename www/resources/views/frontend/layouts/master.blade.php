<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" >
  {!! SEO::generate() !!}
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  {{-- <title>Buzz Makers | @yield('title')</title> --}}
<!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"  href="{{ URL::asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ URL::asset('assets/images/favicon/favicon-16x16.png')}} ">
    <link rel="manifest"  href="{{ URL::asset('assets/images/favicon//site.webmanifest')}}" >
    <meta name="base_url" content="{{ \Illuminate\Support\Facades\URL::to('/') }}"/>
  @yield('css')
  @include('frontend.layouts.header-css')
</head>

<body>
  @include('frontend.layouts.navbar')
  <!-- collpase menu for mobile end -->

  @yield('main')

  <!-- footer section starts -->
  @include('frontend.layouts.footer')
  <!-- footer section ends -->
  @include('frontend.layouts.footer-js')
  @yield('js')
  @yield('script')
</body>

</html>
