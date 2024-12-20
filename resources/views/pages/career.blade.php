@extends('layouts.base', ['title' => 'Prompt - Career'])

@section('content')

    <div class="bg-gradient2 position-relative">

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

        <div class="hero-4 pb-5 pt-7 py-sm-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="hero-title mt-0">
                            Let's work <span class="highlight highlight-warning d-inline-block">together</span>. Join
                            Prompt!
                        </h1>
                        <p class="fs-16 text-muted pt-3 w-75">
                            We're always open for new creative, analytical and technical minds to join our team. Search
                            for the suitable job.
                        </p>
                        <div class="pt-4 pb-md-5 mb-md-4">
                            <a href="#job-openings" class="btn btn-secondary mb-2" data-toggle="smooth-scroll">
                                View All Openings
                                <i class="icon-xxs ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="img-container text-end ps-lg-5" data-aos="zoom-in">
                            <div class="row align-items-center mt-md-0 mt-4">
                                <div class="col-6">
                                    <div class="card shadow-lg">
                                        <div class="card-body p-1">
                                            <img src="/images/photos/12.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow-lg">
                                                <div class="card-body p-1">
                                                    <img src="/images/photos/14.jpg" class="img-fluid" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow-lg">
                                                <div class="card-body p-1 mb-0">
                                                    <img src="/images/photos/15.jpg" class="img-fluid" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>

    <!-- benefits start -->
    <section class="py-5 mt-5 career-service position-relative">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Benefits</span>
                    <h1 class="display-5 fw-semibold">We take care of our team</h1>
                    <p class="text-muted mx-auto">Few benefits from working together</p>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="300">
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-md text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/map/Compass')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Relocation Support</h5>
                            <p class="text-muted mb-0">We'll help to move and get settled and handle the visa process
                                for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/devices/Server')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Technology</h5>
                            <p class="text-muted mb-0">A special training to get start with our technical stack by
                                professionals</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="600">
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/shopping/Euro')
                        </span>

                        <div class="flex-grow-1">
                            <h5 class="mt-0">Growth budget</h5>
                            <p class="text-muted mb-0">A specific budget for your professionals growth which you spend
                                on throughout the year</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/communication/Group')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Team activities & retreats</h5>
                            <p class="text-muted mb-0">Many team building activities and retreat every quarter, so you
                                don't get bored</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="900">
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/map/Marker#1')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Work from anywhere</h5>
                            <p class="text-muted mb-0">Work from anywhere you like. We offer remote working to all the
                                employees</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-top pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/food/Beer')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Work/life balance</h5>
                            <p class="text-muted mb-0">Flexible work hours gives you complete balance with your personal
                                and professional life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits end -->


    <!-- Culture start -->
    <section class="py-7 mt-5 position-relative bg-gradient2">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Our Beliefs</span>
                    <h1 class="display-5 fw-semibold">Our Culture</h1>
                    <p class="text-muted mx-auto">
                        At Prompt, We believe in a fully balanced personal and professional life, importance of focus,
                        fun, self-motivation and full transparency.
                    </p>
                </div>
            </div>

            <div data-bs-toggle="image-gallery" data-delegate="a" data-type="image" data-enable-gallery="true"
                 class="mt-5">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <a href="/images/photos/3.jpg"
                           data-title="Office Desks">
                            <div class="card shadow rounded-sm">
                                <div class="card-body p-1">
                                    <img src="/images/photos/3.jpg" alt=""
                                         class="img-fluid rounded-sm">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/images/photos/4.jpg" data-title="Meeting Room view">
                            <div class="card shadow rounded-sm">
                                <div class="card-body p-1">
                                    <img src="/images/photos/4.jpg" alt=""
                                         class="img-fluid rounded-sm"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/images/photos/10.jpg" data-title="Outside view">
                            <div class="card shadow rounded-sm">
                                <div class="card-body p-1">
                                    <img src="/images/photos/10.jpg" alt=""
                                         class="img-fluid rounded-sm"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/images/photos/5.jpg"
                           data-title="A common seating area">
                            <div class="card shadow rounded-sm">
                                <div class="card-body p-1">
                                    <img src="/images/photos/5.jpg" alt=""
                                         class="img-fluid rounded-sm"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Culture end -->

    <!-- Job start -->
    <section class="py-5 mt-2 position-relative" id="job-openings">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-5 fw-semibold">Job Openings</h1>
                    <p class="text-muted mx-auto">
                        Interested? Come show us what you're made of!
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="mb-2">Engineering</h3>
                    <ul class="list-unstyled mb-5 pb-4">
                        <li class="py-4 border-bottom">
                            <div class="float-end ms-4"><a href="#" class="text-muted">Remote</a></div>
                            <a href="#" class="h5 fw-medium my-0">Techical Support Engineer</a>
                        </li>
                        <li class="py-4 border-bottom">
                            <div class="float-end ms-4"><a href="#" class="text-muted">Remote</a></div>
                            <a href="#" class="h5 fw-medium my-0">Senior Software Engineer (Frontend)</a>
                        </li>
                        <li class="py-4 border-bottom">
                            <div class="float-end ms-4"><a href="#" class="text-muted">Remote</a></div>
                            <a href="#" class="h5 fw-medium my-0">Senior Software Engineer (Backend)</a>
                        </li>
                        <li class="py-4 border-bottom">
                            <div class="float-end ms-4"><a href="#" class="text-muted">Remote</a></div>
                            <a href="#" class="h5 fw-medium my-0">Engineering Manager</a>
                        </li>
                    </ul>

                    <h3 class="text-dark mb-2">Marketing</h3>
                    <ul class="list-unstyled h5 fw-medium my-0">
                        <li class="py-4 border-bottom">
                            <div class="float-end ms-4"><a href="#" class="text-muted">Remote</a></div>
                            <a href="#" class="h5 fw-medium my-0">Junior copywriter/editor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Job end -->

    <!-- cta starts -->
    <section class="section py-6 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-none border mb-lg-0 rounded-sm">
                        <div class="card-body">
                            <h3 class="mt-0 fw-semibold">Get in touch</h3>
                            <p>
                                Don't find suitable opening? We'd still love to learn more about you. Contact us and
                                we'll reach out to have interesting conversation!
                            </p>
                            <a href="{{ route('second', [ 'pages' , 'contact']) }}"
                               class="btn btn-outline-primary mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-none border mb-0 rounded-sm">
                        <div class="card-body">
                            <h3 class="mt-0 fw-semibold">Meet the team</h3>
                            <p>
                                Learn more about us and who all work at Prompt. You will get chance to work with
                                everyone in the team.
                            </p>
                            <a href="{{ route('second', [ 'pages' , 'company']) }}"
                               class="btn btn-outline-primary mt-4">Meet our team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- footer start -->
    <section class="mt-lg-5 pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <p class="text-muted w-75">
                        Make your web application stand out with high-quality landing page
                    </p>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase"> Platform</h6>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">Demo</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Pricing</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Integrations</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Status</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">
                            Knowledge Base</h6>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">Blog</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Help Center</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Sales Tools catalog</a></li>
                            <li class="my-3"><a href="#" class="text-muted">API</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">
                            Company</h6>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">About Us</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Career</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">
                            Legal
                        </h6>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">Usage Policy</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Privacy Policy</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Terms of Service</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Trust</a></li>
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
    <!-- footer end -->

@endsection

@section('script')
@endsection

