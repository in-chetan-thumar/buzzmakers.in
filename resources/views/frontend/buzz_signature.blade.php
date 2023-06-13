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

<table cellpadding="10">
    <tr>
        <td><img src="http://buzzmakers.in/assets/images/signature/logoold.png" class="logo" style="height: 90px">

        </td>

        <td>@foreach($details as $detail)




                <table cellpadding="0">
                    <tr>
                        <td><h1 style="margin-bottom: 0; padding-bottom: 0; font-family: far;">{{$detail['name']}}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="margin-top: 0px; margin-bottom: 10px; color: #5504b0; font-family: fab;">{{$detail['Designation']}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="5">
                                <tr>
                                    <td cellpadding="5"><a href="tel:{{$detail['Number']}}"
                                                           style=" color: #5504b0; text-decoration: none;">
                                            <img src="http://buzzmakers.in/assets/images/signature/phone-call1.png"
                                                 width="16" alt="">&nbsp;&nbsp;&nbsp;<b>{{$detail['Number']}}</b></a>
                                    </td>
                                    <td><a href="https://buzzmakers.in/"
                                           style=" color: #5504b0; text-decoration: none;">
                                            <img src="http://buzzmakers.in/assets/images/signature/globe1.png"
                                                 width="16" alt="">&nbsp;&nbsp;&nbsp;<b>www.buzzmakers.in</b></a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="3">
                                <tbody><tr>
                                    <td><a href="https://www.instagram.com/buzzmakersindia/"><img src="http://buzzmakers.in/assets/images/signature/social icons-01.png" width="40" alt=""></a>
                                    </td>
                                    <td><a href="https://www.youtube.com/@buzzmakers528  "><img src="http://buzzmakers.in/assets/images/signature/social icons-04.png" width="40" alt=""></a>
                                    </td>
                                    <td><a href="https://wa.me/+918976365578 "><img src="http://buzzmakers.in/assets/images/signature/social icons-05.png" width="40" alt=""></a>
                                    </td>
                                    <td><a href=" https://twitter.com/buzzmakersindia"><img src="http://buzzmakers.in/assets/images/signature/social icons-02.png" width="40" alt=""></a>
                                    </td>
                                    <td><a href="https://www.facebook.com/BuzzMakersIndia"><img src="http://buzzmakers.in/assets/images/signature/social icons-06.png" width="40" alt=""></a>
                                    </td>
                                    <td><a href=" https://www.linkedin.com/company/buzzmakersindia?originalSubdomain=in"><img src="http://buzzmakers.in/assets/images/signature/social icons-03.png" width="40" alt=""></a>
                                    </td>
                                </tr>

                        </td>
                    </tr>
                </table>




            @endforeach</td>
    </tr>
</table>

</body>


</html>
