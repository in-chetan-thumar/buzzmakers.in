@extends('admin.layouts.master-without-nav')

@section('title')
    @lang('translation.Recover_Password')
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

    <body >
    @endsection

    @section('content')

{{--        <div>--}}
{{--            <div class="container-fluid p-0">--}}
{{--                <div class="row g-0">--}}

{{--                    <div class="col-xl-9">--}}
{{--                        <div class="auth-full-bg pt-lg-5 p-4">--}}
{{--                            <div class="w-100">--}}
{{--                                <div class="bg-overlay"></div>--}}
{{--                                <div class="d-flex h-100 flex-column">--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end col -->--}}

{{--                    <div class="col-xl-3">--}}
{{--                        <div class="auth-full-page-content p-md-5 p-4">--}}
{{--                            <div class="w-100">--}}

{{--                                <div class="d-flex flex-column h-100">--}}
{{--                                    @include('admin.auth.layout.top')--}}
{{--                                    <div class="my-auto">--}}

{{--                                        <div>--}}
{{--                                            <h5 class="text-primary"> Reset Password</h5>--}}
{{--                                            <p class="text-muted">Re-Password with {{config('constants.APP_NAME')}}.</p>--}}
{{--                                        </div>--}}

{{--                                        <div class="mt-4">--}}
{{--                                            @if (session('status'))--}}
{{--                                                <div class="alert alert-success text-center mb-4" role="alert">--}}
{{--                                                    {{ session('status') }}--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <form class="form-horizontal" method="POST"--}}
{{--                                                action="{{ route('password.email') }}">--}}
{{--                                                @csrf--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label for="useremail" class="form-label">Email</label>--}}
{{--                                                    <input type="email"--}}
{{--                                                        class="form-control @error('email') is-invalid @enderror"--}}
{{--                                                        id="useremail" name="email" placeholder="Enter email"--}}
{{--                                                        value="{{ old('email') }}" id="email">--}}
{{--                                                    @error('email')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $message }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}

{{--                                                <div class="text-end">--}}
{{--                                                    <button class="btn btn-primary w-md waves-effect waves-light"--}}
{{--                                                        type="submit">Reset</button>--}}
{{--                                                </div>--}}

{{--                                            </form>--}}
{{--                                            <div class="mt-5 text-center">--}}
{{--                                                <p>Remember It ? <a href="{{ url('login') }}"--}}
{{--                                                        class="font-weight-medium text-primary"> Sign In here</a> </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="mt-4 mt-md-5 text-center">--}}
{{--                                        <p class="mb-0">© <script>--}}
{{--                                                document.write(new Date().getFullYear())--}}
{{--                                            </script> {{config('constants.APP_NAME')}}. Crafted with <i class="mdi mdi-heart text-danger"></i> by--}}
{{--                                            {{config('constants.DEVELOPED_BY')}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end col -->--}}
{{--                </div>--}}
{{--                <!-- end row -->--}}
{{--            </div>--}}
{{--            <!-- end container-fluid -->--}}
{{--        </div>--}}
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class=" bg-soft" style="background-color: #5504B0">
                                <div class="row">
                                    <div class="col-7">

                                        <div class="text-primary p-4">

                                            <h5 class="text-white"> Reset Password</h5>
                                            <p class="text-white">Re-Password with {{config('constants.APP_NAME')}}.</p>


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
                                    <form class="form-horizontal" method="POST"
                                          action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="useremail" name="email" placeholder="Enter email"
                                                   value="{{ old('email') }}" id="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                            @enderror
                                        </div>

                                        <div class="text-end">
                                            <button class="btn text-white w-md waves-effect waves-light"
                                                    type="submit" style="background-color: #5504B0">Reset</button>
                                        </div>

                                    </form>
                                    <div class="mt-5 text-center">
                                        <p>Remember It ? <a href="{{ url('login') }}"
                                                            class="font-weight-medium text-primary"> Sign In here</a> </p>
                                    </div>
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
