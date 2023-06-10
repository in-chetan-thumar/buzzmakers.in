@extends('admin.layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

    <body >
    @endsection

    @section('content')


        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class=" bg-soft" style="background-color: #5504B0">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">

                                            <h5 class="text-white">Welcome Back !</h5>
                                            <p class="text-white">Sign in to continue
                                                to {{config('constants.APP_NAME')}}.</p>


                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">

                                        <img src="{{asset('assets/frontend/images/logo.svg')}}"
                                             alt=""  height="105px" style="padding: 10px">

                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">

                                    <a href="index" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('assets/images/favicon/favicon.ico')}}" alt=""  height="50">
{{--                                                    <link rel="icon" type="image/png" sizes="32x32"  href="{{ URL::asset('assets/images/favicon/favicon-32x32.png')}}">--}}

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input name="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="" id="username" placeholder="Enter Email"
                                                   autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="float-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                   class="text-muted">Forgot password?</a>
                                            @endif
                                        </div>
                                        <label class="form-label">Password</label>
                                        <div
                                            class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                            <input type="password" name="password"
                                                   class="form-control  @error('password') is-invalid @enderror"
                                                   id="pr-password" value="" placeholder="Enter password"
                                                   aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button"
                                                    id="password-addon"><i class="mdi mdi-eye-outline"></i>
                                            </button>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>



                                        <div class="mt-3 d-grid">
                                            <button class="btn text-white  waves-effect waves-light"
                                                    type="submit" style="background-color: #5504B0">Log
                                                In
                                            </button>
                                        </div>


                                    </form>

                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> {{config('constants.APP_NAME')}}.

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
@endsection
