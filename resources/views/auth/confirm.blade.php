@extends('layouts.base', ['title' => 'Prompt - Confirm Password'])

@section('content')
    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="mx-auto mb-3">
                        <a href="{{ route('any', 'index') }}" class="d-flex justify-content-center align-items-center">
                            <img src="/images/logo.png" alt="" height="30"/>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4 text-center">
                                <h4 class="mt-3">Please check your inbox</h4>

                                <div class="py-3">
                                    <span class="icon icon-xl text-info">
                                        @svg("duotone-icons/communication/Mail-opened")
                                    </span>
                                </div>

                                <p class="text-muted mb-4">We sent a confirmation link to you at <span
                                        class="text-dark fw-medium">youremail@domain.com</span></p>

                                <p class="text-muted mb-0 fs-13">Simply click on the link available in the email to
                                    confirm your account.</p>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Back to <a href="{{ route('second', [ 'auth' , 'login']) }}"
                                                             class="text-primary fw-semibold ms-1">Log In</a></p>
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
