<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" >
  {!! SEO::generate() !!}
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  {{-- <title>Buzz Makers | @yield('title')</title> --}}
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