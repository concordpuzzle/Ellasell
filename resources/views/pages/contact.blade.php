@extends('layouts.base', ['title' => 'Prompt - Contact Us'])

@section('content')

    <div class="header-7 bg-gradient2">
        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

        <section class="hero-4 pt-lg-6 pb-sm-9 pb-6 pt-9">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="hero-title mb-0">Contact Us</h1>
                        <p class="mb-4 fs-17 text-muted">Please fill out the following form and we will get back to you
                            shortly</p>
                    </div>
                </div>
            </div>
            <div class="shape bottom">
                <svg width="1440px" height="40px" viewBox="0 0 1440 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="shape-b" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="curve" fill="#fff">
                            <path
                                d="M0,30.013 C239.659,10.004 479.143,0 718.453,0 C957.763,0 1198.28,10.004 1440,30.013 L1440,40 L0,40 L0,30.013 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
    </div>

    <!-- Contact us start -->
    <section class="section pb-lg-7 py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="card shadow-none">
                        <div class="card-body p-xl-5 p-0">
                            <h2 class="mb-2 mt-0 fw-medium">Let's Talk Further</h2>
                            <p class="mb-5">Please fill out the following form and we will get back to you shortly</p>

                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName1" class="fw-medium form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                   placeholder="Your Name"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="fw-medium form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleInputName"
                                                   placeholder="Your Name"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="fw-medium form-label">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Your Email"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Message <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                                      placeholder="Type Your Massage..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            Send
                                            <span
                                                class="icon icon-xs text-white">
                                                @svg('/duotone-icons/communication/Send')
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div style="height: 520px">
                        <div id="marker-map5" class="h-100" data-toggle="map"
                             data-map='{"mapCenter": [40.749179, -73.989276], "zoom": 12, "useTextIcon": false, "interactive": true, "geojson": "//sample-listing-geojson.json" }'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 align-items-center">
                <div class="col-md-4">
                    <div class="d-flex px-md-1 px-lg-5 mb-md-0 mb-3">
                        <span
                            class="bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                            @svg('/duotone-icons/communication/Urgent-mail')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="m-0 fw-medium">Email</h5>
                            <a href="#" class="text-muted fw-normal h5 my-1">youremail@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex px-md-1 px-lg-5 mb-md-0 mb-3">
                        <span
                            class="bg-soft-orange avatar avatar-sm rounded icon icon-with-bg icon-xs text-orange me-3 flex-shrink-0">
                            @svg('/duotone-icons/communication/Active-call')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="m-0 fw-medium">Phone</h5>
                            <a href="#" class="text-muted fw-normal h5 my-1">+00 123 456 7890</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex px-md-1 px-lg-5 mb-md-0 mb-3">
                        <span
                            class="bg-soft-info avatar avatar-sm rounded icon icon-with-bg icon-xs text-info me-3 flex-shrink-0">
                            @svg('/duotone-icons/map/Marker#1')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="m-0 fw-medium">Address</h5>
                            <a href="#" class="text-muted fw-normal h5 my-1">565 Brrom Str, NY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us end -->

    <!-- footer starts -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-2 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <p class="text-muted mb-4 w-50">On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized.</p>
                </div>

                <div class="col-sm-auto">
                    <div class="px-md-5">
                        <h5 class="mb-4 mt-5 mt-md-0">Resources</h5>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">Blog</a></li>
                            <li class="my-3"><a href="#" class="text-muted">FAQ</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Team of service</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h5 class="mb-4 mt-5 mt-md-0">Company</h5>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">About</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row text-md-start text-center">
                <div class="col-md-6">
                    <p class="pb-0 mb-0 text-muted">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted
                        by <a href="https://coderthemes.com/">Coderthemes</a></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="align-items-end mt-md-0 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li class="d-inline-block me-4">
                                <a href=""><i data-feather="facebook" class="icon icon-xs"></i></a>
                            </li>
                            <li class="d-inline-block me-4">
                                <a href=""><i data-feather="twitter" class="icon icon-xs"></i></a>
                            </li>
                            <li class="d-inline-block">
                                <a href=""><i data-feather="linkedin" class="icon icon-xs"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer ends -->
@endsection

@section('script')
@endsection
