@extends('layouts.base', ['title' => 'Prompt | Marketing Landing Page'])

@section('content')

    <div class="header-3">
        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-primary btn-sm' ])

        <section class="position-relative overflow-hidden hero-10 pb-2 pt-7 pt-sm-3 pb-sm-7">
            <div class="container">
                <div class="row align-items-center text-center text-sm-start">
                    <div class="col-lg-6 order-2 order-sm-1">
                        <div class="img-container" data-aos="fade-right">
                            <img src="/images/hero/marketing.png" alt="" class="img-fluid"/>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 order-sm-2" data-aos="fade-left">
                        <h1 class="mt-0 mb-4 pb-2 hero-title">
                            Boost your <span class="highlight highlight-success d-inline-block">sales</span> with ease
                        </h1>

                        <p class="fs-17 text-muted">Explore a fully automated RIO driven digital marketing platform.</p>

                        <div class="pt-4 pb-3">
                            <div class="row g-2 text-start">
                                <div class="col-sm-auto">
                                    <label class="visually-hidden" for="email">email</label>
                                    <div class="form-control-with-hint">
                                        <input type="email" class="form-control" id="email"
                                               placeholder="Enter Your Email">
                                        <span class="form-control-feedback uil uil-mail fs-18"></span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-primary mt-1 mt-sm-0">Start Free Trial</button>
                                </div>
                            </div>
                            <p class="text-muted fs-13 text-start mt-1">* No Credit Card Required</p>
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
        </section>
    </div>

    <!-- feature start -->
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-semibold">Marketing Solutions that works for everyone</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your marketing
                        better.
                    </p>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="300">
                    <span class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                        @svg('/duotone-icons/communication/Sending mail')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Automated Campaigns</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Praesent ipsum libero, sollicitudin elementum et, condimentum non augue.
                    </p>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
                    <span class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange">
                        @svg('/duotone-icons/shopping/Chart-line#1')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Business Analytics</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Mauris dapibus blandit hendrerit. Proin auctor est at bibendum odio faucibus sodales.
                    </p>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="900">
                    <span class="bg-soft-info avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-info">
                        @svg('/duotone-icons/code/Settings#4')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Easy Setup</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Fusce mattis nibh vel tortor scelerisque, a pretium dolor posuere.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->

    <!-- main feature start -->
    <section class="py-5 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row features-8">
                <div class="col-lg-12">
                    <div class="position-relative">
                        <div class="feature-content">
                            <div class="card p-4 border rounded shadow mb-0">
                                <div class="feature-text">
                                    <span
                                        class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary mb-2">
                                        @svg('/duotone-icons/general/Thunder-move')
                                    </span>
                                    <h4 class="text-dark">Smart Campaign Monitoring</h4>

                                    <p class="">
                                        Et harum quidem rerum facilis est et expedita distinctio at libero tempore cum
                                        soluta nobis est eligendi optio cumque.
                                    </p>

                                    <a href="#" class="h6 text-primary my-0">Learn more <i class="ms-2 icon-xxs"
                                                                                           data-feather="arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-sm-0 feature-img">
                            <div class="overlay"></div>
                            <img src="/images/features/marketing.jpg" alt=""
                                 class="img-fluid d-block ms-auto rounded shadow"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main feature end -->

    <!-- feature 2 start -->
    <section class="my-lg-5 py-5 marketing-3 position-relative">
        <div class="container">
            <div class="row align-items-center" data-aos="fade-up">
                <div class="col-lg-7">
                    <div class="row justify-content-center">
                        <div class="col">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary mb-4">
                                @svg('/duotone-icons/general/Settings-1')
                            </span>
                            <h1 class="display-5 fw-semibold">Advanced Features</h1>
                            <p class="text-muted my-4">
                                Aenean sagittis tellus lacus, nec aliquet mi gravida at. Aenean velit purus, consectetur
                                ut lobortis ac, dignissim id mi.
                            </p>

                            <a href="#" class="h6 text-primary my-0">Learn more <i class="ms-2 icon-xxs"
                                                                                   data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-1">
                    <div class="card border rounded shadow mt-4 mt-lg-0">
                        <div class="p-5">
                            <h6 class="fw-medium fs-15 mb-4">
                                <i class="icon-xs icon-dual-success me-2" data-feather="check-circle"></i>Unlimited
                                Campaigns
                            </h6>
                            <h6 class="fw-medium fs-15 mb-4">
                                <i class="icon-xs icon-dual-success me-2" data-feather="check-circle"></i>Detailed
                                Reporting
                            </h6>
                            <h6 class="fw-medium fs-15 mb-4">
                                <i class="icon-xs icon-dual-success me-2" data-feather="check-circle"></i>Auto Schedule
                                Tuning
                            </h6>
                            <h6 class="fw-medium fs-15 mb-4">
                                <i class="icon-xs icon-dual-success me-2" data-feather="check-circle"></i>Smart
                                Analytics
                            </h6>
                            <h6 class="fw-medium fs-15 mb-4">
                                <i class="icon-xs icon-dual-success me-2" data-feather="check-circle"></i>Notifications
                            </h6>
                            <h6 class="fw-medium fs-15 mb-0">
                                <i class="icon-xs icon-dual-success me-2" data-feather="arrow-right"></i>And More
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature 2 end -->

    <!-- feature 3 start -->
    <section class="section py-4 py-sm-8 bg-gradient3 position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="display-4 fw-semibold mb-4">Monitor what is being performed anytime</h1>
                    <p class="mb-5">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                        voluptates repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a
                        sapiente delectus ut aut reiciendis voluptatibus maiores alias...
                    </p>
                    <a href="#" class="btn btn-primary">
                        Start Free Trial <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img src="/images/features/marketing4.jpg" alt=""
                         class="img-fluid d-block mx-auto mt-4 mt-lg-0"/>
                </div>
            </div>
        </div>
    </section>
    <!-- feature 3 end -->

    <!-- testimonials start -->
    <section class="section pt-lg-8 pb-lg-7 py-6 position-relative features-4" data-aos="fade-up">
        <div class="container">
            <div class="row testimonials-2">
                <div class="col-lg-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="badge rounded-pill badge-soft-primary px-2 py-1">Feedback</span>
                            <h1 class="display-5 fw-semibold">Trusted by 2500+ customers</h1>
                            <p class="text-muted mx-auto">Some valuables words from our customers.</p>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4 mb-lg-0">
                        <div class="col-auto text-sm-end pt-2 pt-sm-0">
                            <div class="navigations">
                                <button class="btn btn-link text-normal p-0 swiper-custom-prev">
                                    <svg class="bi bi-arrow-left" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                              clip-rule="evenodd"></path>
                                        <path fill-rule="evenodd"
                                              d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <button class="btn btn-link text-normal p-0 swiper-custom-next">
                                    <svg class="bi bi-arrow-right" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z"
                                              clip-rule="evenodd"></path>
                                        <path fill-rule="evenodd"
                                              d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="slider">
                        <div class="swiper testimonial-swiper-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted mb-0">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2 align-items-center">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                                </div>
                                                <img class="" src="/images/brands/amazon.svg" alt="" height="32"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted mb-0">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried many project management apps for my daily tasks, but this one is
                                                far better than others. Simply loved it!
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2 align-items-center">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">John Stark</h6>
                                                    <p class="my-0 text-muted fs-13">Engineering Director</p>
                                                </div>
                                                <img class="" src="/images/brands/google.svg" alt="" height="32"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted mb-0">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2 align-items-center">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                                </div>
                                                <img class="" src="/images/brands/amazon.svg" alt="" height="32"/>
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
    </section>
    <!-- testomonials end -->

    <!-- cta + footer start -->
    <section class="mt-5 py-3 marketing-6 bg-gradient3 position-relative">
        <div class="container">
            <div class="row align-items-center mt-3 mb-4 pb-1">
                <div class="col-lg-6">
                    <h2 class="text-dark fw-medium mt-0 mb-1">Ready to get started?</h2>
                    <p class="text-muted pb-0 mb-0">Create your free 14-day account now</p>
                </div>

                <div class="col-lg-6">
                    <div class="text-lg-end">
                        <a href="#" class="btn btn-primary rounded-pill">Try it free for 14 days</a>
                        <a href="#" class="btn btn-link rounded-pill">Chat with us</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4"/>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto" href="#">
                        <img src="/images/logo.png" height="30" class="d-inline-block align-top" alt=""/>
                    </a>
                    <p class="text-muted w-75">Make your marketing application stand out with high-quality landing
                        page</p>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">Platform</h6>
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
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">Knowledge Base</h6>
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
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">Company</h6>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">About Us</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Career</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">Legal</h6>
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
            <div class="row">
                <div class="col text-center">
                    <p class="pb-0 mb-0 text-muted">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- cta + footer end -->

@endsection

