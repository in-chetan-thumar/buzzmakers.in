<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <style>
                @font-face {
                    font-family: fab;

                    src: url({{asset('assets/frontend/fonts/VisbyCF-Medium.otf')}}  );
                }
                @font-face {
                    font-family: far;
                    src: url({{asset('assets/frontend/fonts/VisbyCF-Regular.otf')}});
                }
            </style>
</head>

<body>
<div
    style="width:600px; background-image: url({{ asset('assets/images/signature/back.png') }}); background-size: 100%; padding: 20px; display: grid; grid-template-columns:min-content auto; align-items: center;">
    <!-- <img src="back.png" width="100%" alt=""> -->

    <img src="{{ asset('assets/images/signature/logo.png') }}" alt="">
    <!-- <div style="position: absolute; left:20%; top: 12%;"> -->
    @foreach($details as $detail)

        <div>
            <h1 style="margin-bottom: 0; padding-bottom: 0; font-family: far;">{{$detail['name']}}</h1>
            <h3 style="margin-top: 0px; margin-bottom: 10px; color: #5504b0; font-family: fab;">{{$detail['Designation']}}</h3>
            <div style="display: grid; grid-template-columns:min-content auto; align-items: center; gap: 30px;">
                <a href="tel:{{$detail['Number']}}" style=" color: #5504b0; text-decoration: none;"><label
                        style="display: flex; gap: 10px; font-family: fab; align-items: center;">
                        <img src="{{ asset('assets/images/signature/phone-call1.png') }}"
                             width="16" alt="">{{$detail['Number']}}</label></a>
                <a href="https://buzzmakers.in/" style=" color: #5504b0; text-decoration: none;"><label
                        style="display: flex; gap: 10px; font-family: fab; align-items: center;">
                        <img src="{{ asset('assets/images/signature/globe1.png') }}"
                             width="16" alt="">www.buzzmakers.in</label></a>
            </div>
            <div
                style="display: grid; grid-template-columns: min-content min-content min-content min-content min-content min-content; align-items: center; gap:40px; margin-top: 30px;">
                <a href="https://www.instagram.com/buzzmakersindia/"><img src="{{ asset('assets/images/signature/instagram1.png') }}" width="16" alt=""></a>
                <a href="https://www.youtube.com/@buzzmakers528 "><img src="{{ asset('assets/images/signature/youtube1.png') }}" width="16" alt=""></a>
                <a href="{{$detail['Whatsapp']}}"><img src="{{ asset('assets/images/signature/whatsapp1.png') }}" width="16" alt=""></a>
                <a href=" https://twitter.com/buzzmakersindia"><img src="{{ asset('assets/images/signature/twitter1.png') }}" width="16" alt=""></a>
                <a href="https://www.facebook.com/BuzzMakersIndia"><img src="{{ asset('assets/images/signature/facebook1.png') }}" width="16" alt=""></a>
                <a href=" https://www.linkedin.com/company/buzzmakersindia?originalSubdomain=in"><img src="{{ asset('assets/images/signature/linkedin1.png') }}" width="16" alt=""></a>
            </div>
        </div>

</div>

@endforeach
</body>
</html>
