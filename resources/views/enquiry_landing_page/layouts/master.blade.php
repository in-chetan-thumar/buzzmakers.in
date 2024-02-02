<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1181672166559639');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1181672166559639&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
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
  @include('enquiry_landing_page.layouts.header-css')
    
  <!-- AMP Analytics --><script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>

<body class="landing_page_template">

  <!-- Google Tag Manager -->
  <amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-TNLW8FB6&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>

  @include('enquiry_landing_page.layouts.navbar')
  <!-- collpase menu for mobile end -->

  @yield('main')

  <!-- footer section starts -->
  @include('enquiry_landing_page.layouts.footer')
  <!-- footer section ends -->
  @include('enquiry_landing_page.layouts.footer-js')
  @yield('js')
  @yield('script')
</body>

</html>
