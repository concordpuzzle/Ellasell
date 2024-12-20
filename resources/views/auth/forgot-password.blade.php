@extends('layouts.base', ['title' => 'Prompt - Forgot Password'])

@section('content')
    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-xl-5 p-3">
                                <div class="mx-auto mb-5">
                                    <a href="{{ route('any', 'index') }}" class="d-flex">
                                        <img src="/images/logo.png" class="align-self-center" alt="logo-img"
                                             height="30"/>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-3">Reset Password</h6>
                                <p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email
                                    with instructions to reset your password.</p>

                                <form action="#" class="authentication-form">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email
                                            <small>*</small></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Email" name="email"/>
                                    </div>

                                    <div class="mb-0 text-center pt-3 d-grid">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
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
