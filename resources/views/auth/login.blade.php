@extends('layouts.base', ['title' => 'Prompt - Create a new account'])

@section('content')
    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md-5 shadow">
                                    <div class="p-xl-5 p-3">
                                        <div class="mx-auto mb-5">
                                            <a href="{{ route('any', 'index') }}" class="d-flex">
                                                <img src="/images/logo.png" class="align-self-center" alt="logo-img"
                                                     height="30"/>
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-3">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">
                                            Enter your email address and password to access admin panel.
                                        </p>
                                        <!--form start-->
                                        <form method="POST" action="{{ route('login') }}" class="authentication-form">

                                            @csrf
                                            @if (sizeof($errors) > 0)
                                                @foreach ($errors->all() as $error)
                                                    <p class="text-danger mb-3">{{ $error }}</p>
                                                @endforeach
                                            @endif

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    <small>*</small></label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Email" name="email" value="demo@user.com"/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password
                                                    <small>*</small></label>
                                                <a href="{{ route('second', [ 'auth' , 'forgot-password']) }}"
                                                   class="float-end text-muted text-unline-dashed ms-1 fs-13">Forgot
                                                    your password?</a>
                                                <input type="password" class="form-control" id="password"
                                                       name="password" placeholder="Enter your password"
                                                       value="password"/>
                                            </div>

                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin"/>
                                                <label class="form-check-label text-muted" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Log In</button>
                                            </div>
                                        </form>
                                        <!--/.form end-->

                                        <div class="py-3 text-center"><span
                                                class="fs-13 fw-bold">OR</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <a href="" class="btn btn-white w-100">
                                                    <i data-feather="github" class='icon icon-xs me-2'></i>Github
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 d-none d-md-inline-block">
                                    <div class="position-relative mt-5 pt-5">
                                        <!--swiper start-->
                                        <div class="swiper auth-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">

                                                    <div class="row text-center">
                                                        <div class="col">
                                                            <img src="/images/hero/saas1.jpg" alt=""
                                                                 class="w-75"/>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center my-4 pb-5">
                                                        <div class="col">
                                                            <h5 class="fw-medium fs-16">Manage your saas
                                                                business with ease</h5>
                                                            <p class="text-muted">Make your saas application
                                                                stand out with high-quality landing page
                                                                designed and developed by professional.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- swiper-slide End -->
                                                <div class="swiper-slide">

                                                    <div class="row text-center">
                                                        <div class="col">
                                                            <img src="/images/hero/saas2.jpg" alt=""
                                                                 class="w-75"/>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center my-4 pb-5">
                                                        <div class="col">
                                                            <h5 class="fw-medium fs-16">The best way to showcase
                                                                your mobile app</h5>
                                                            <p class="text-muted">Sed ut perspiciatis unde omnis
                                                                iste natus error sit voluptatem accusantium.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- swiper-slide End -->
                                                <div class="swiper-slide">

                                                    <div class="row text-center">
                                                        <div class="col">
                                                            <img src="/images/hero/saas3.jpg" alt=""
                                                                 class="w-75"/>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center my-4 pb-5">
                                                        <div class="col">
                                                            <h5 class="fw-medium fs-16">Smart Solution that
                                                                convert Lead to Customer</h5>
                                                            <p class="text-muted">Sed ut perspiciatis unde omnis
                                                                iste natus error sit voluptatem accusantium.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- swiper-slide End -->
                                            </div>
                                            <!-- swiper-wrapper End -->
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <!--swiper end-->
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a
                                    href="{{ route('second', [ 'auth' , 'signup']) }}"
                                    class="text-primary fw-semibold ms-1">Sign
                                    Up</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
