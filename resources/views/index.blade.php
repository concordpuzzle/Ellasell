@extends('layouts.base', ['title' => 'Prompt | Premium Landing Pages'])

@section('content')
    <div class="bg-gradient3">

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-primary btn-sm' ])


        <!-- hero start -->
        <section class="position-relative hero-13 overflow-hidden pt-7 pt-lg-6 pb-5">
            <div class="container">
                <div class="row align-items-center text-center text-sm-start">
                    <div class="col-lg-6">
                        <div class="mb-lg-0">
                            <h2 class="hero-title" style="font-size:40px!important;">
                            Use AI with your sales data to
                                <span style="text-decoration:underline;" class="d-inline-block" data-toggle="typed"
                                      data-strings='["get a big picture view.^500", "grow volume.^500", "develop products.^500", "break into markets.^500"]'></span>
                            </h2>

                            <p class="fs-18 text-muted pt-3">
                            Connect your store effortlessly, and let AI handle the insights and strategies for smarter, faster sales growth.
                            </p>

                            <div class="pt-3 pt-sm-5 mb-4 mb-lg-0">
                                <a href="#demos" class="btn btn-warning" data-toggle="smooth-scroll">
                                    Connect Your Store
                                    <span class="ms-2 icon icon-xxs" data-feather="arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 hero-right">
                        <div class="img-container">
                            <div class="swiper default-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/hero/saas1.jpg" alt=""
                                             class="img-fluid rounded-lg"/>
                                    </div>
                                    <!-- swiper-slide End -->

                                    <div class="swiper-slide">
                                        <img src="/images/hero/saas2.jpg" alt=""
                                             class="img-fluid rounded-lg"/>
                                    </div>
                                    <!-- swiper-slide End -->

                                    <div class="swiper-slide">
                                        <img src="/images/hero/saas3.jpg" alt=""
                                             class="img-fluid rounded-lg"/>
                                    </div>
                                    <!-- swiper-slide End -->
                                </div>
                                <!-- swiper-wrapper End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->
    </div>

    <!-- demos start -->
    <section class="mt-5 position-relative overflow-hidden features-1 py-5" id="demos">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Demos</span>
                    <h1 class="display-4 fw-semibold">Landing Pages</h1>
                    <p class="text-muted mx-auto">Modern landing pages available for every need</p>
                </div>
            </div>

            <!-- showcase start -->
            <div class="row mt-2" data-aos="fade-up" data-duration="600">
                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'app']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-app.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Mobile App</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'saas']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-saas.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Saas Modern</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'saas2']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-saas2.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Saas Classic</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'startup']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-startup.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Startup</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'software']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-software.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Software</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'agency']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-agency.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Agency</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'coworking']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-coworking.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Co-Working</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'crypto']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-crypto.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Crypto</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'marketing']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-marketing.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Marketing</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'landings' , 'portfolio']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/landing/home-portfolio.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Portfolio</h4>
                    </a>
                </div>
            </div>
            <!-- showcase end-->
        </div>
    </section>
    <!-- demos end -->

    <!-- secondary pages start -->
    <section class="position-relative overflow-hidden features-1 py-5" id="secondary-pages">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Inner Pages</span>
                    <h1 class="display-4 fw-semibold">Inner Pages</h1>
                </div>
            </div>

            <!-- showcase start -->
            <div class="row mt-2" data-aos="fade-up" data-duration="600">
                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'company']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/company.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Company</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'contact']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/contact.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Contact</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'career']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/career.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Career</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'blog']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/blog.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Blog</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/blog-post.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Blog-Post</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'account' , 'dashboard']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/dashboard.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Dashboard</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'account' , 'settings']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/settings.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Settings</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'portfolio-grid']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/portfolio-grid.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Portfolio Grid</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'portfolio-masonry']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/portfolio-masonry.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Portfolio Masonry</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'portfolio-item']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/portfolio-item.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Portfolio-item</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'pricing']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/pricing.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Pricing</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'pages' , 'help-desk']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/help.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center mt-3">Help</h4>
                    </a>
                </div>
            </div>
            <!-- showcase end-->
        </div>
    </section>
    <!-- secondary pages end -->

    <!-- Auth pages start -->
    <section class="position-relative overflow-hidden features-1 py-5" id="auth-pages">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Account Pages</span>
                    <h1 class="display-4 fw-semibold">Inner Pages</h1>
                </div>
            </div>

            <!-- showcase start -->
            <div class="row mt-2" data-aos="fade-up" data-duration="600">
                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'auth' , 'login']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/auth-login.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center">login</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'auth' , 'signup']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/auth-signup.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center">signup</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'auth' , 'forgot-password']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/auth-password.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center">Forget Password</h4>
                    </a>
                </div>

                <div class="col-lg-6">
                    <a href="{{ route('second', [ 'auth' , 'confirm']) }}" target="_blank" class="mt-4">
                        <div class="shadow p-2 rounded-sm border">
                            <img src="/images/demo/pages/auth-confirm.jpg" class="img-fluid" alt="demo-img"/>
                        </div>
                        <h4 class="text-center">Confirm Account</h4>
                    </a>
                </div>
            </div>
            <!-- showcase end-->
        </div>
    </section>
    <!-- Auth pages end -->

    <!-- features start -->
    <section class="my-lg-5 py-5 py-sm-7 bg-gradient2 position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-4 fw-semibold">Why Choose Prompt</h1>
                    <p class="text-secondary mx-auto">A modern design, fresh look and feel</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4" data-aos="fade-up" data-duration="600">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    @svg('/duotone-icons/devices/iPhone-X')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Fully Responsive</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="600">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    @svg('/duotone-icons/layout/Layout-top-panel-6')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Cross-browser compatible</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="600">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bootstrap"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M12 1H4a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zM4 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4H4z"/>
                                        <path fill-rule="evenodd"
                                              d="M8.537 12H5.062V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396zM6.375 4.658v2.467h1.558c1.16 0 1.764-.428 1.764-1.23 0-.78-.569-1.237-1.541-1.237H6.375zm1.898 6.229H6.375V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z"/>
                                      </svg>
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Based on latest Bootstrap v5.3.2</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="900">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    <span class="fw-bolder">S</span>
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Sass Powered</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="900">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                     @svg('/duotone-icons/design/Adjust')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Easy to customize</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="900">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    @svg('/duotone-icons/general/Smile')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Developer Friendly</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="1200">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                     @svg('/duotone-icons/code/Code')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Clean & Easy to Understand Code</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="1200">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                     @svg('/duotone-icons/home/Picture')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Premium SVG Icons</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-duration="1200">
                    <div class="card shadow-sm">
                        <div class="card-body p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                    @svg('/duotone-icons/navigation/Double-check')
                                </span>

                                <div class="flex-grow-1">
                                    <h5 class="m-0">Free Updates</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- features end -->
    <section class="section py-4 pt-sm-6 pb-sm-0 position-relative" id="section-download" data-aos="fade-up">
        <div class="container">
     <!-- Accordions Start -->
     <div class="row">
                        <div class="col">
                            <div class="card" id="accordions">
                                <div class="card-body">
                                    <h5 class="card-title mb-0">Accordions</h5>
                                    <p class="sub-header">
                                        Toggle the visibility of content across your project with a few classes and our
                                        JavaScript plugins.
                                    </p>

                                    <div class="accordion custom-accordionwitharrow mt-3" id="accordionExample">
                                        <div class="card mb-1 shadow-none border">
                                            <a href="" class="text-dark" data-bs-toggle="collapse"
                                               data-bs-target="#collapseOne" aria-expanded="true"
                                               aria-controls="collapseOne">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="my-1">What is Lorem Ipsum?
                                                        <i class="icon-xs accordion-arrow"
                                                           data-feather="chevron-down"></i>
                                                    </h5>
                                                </div>
                                            </a>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                 data-bs-parent="#accordionExample">
                                                <div class="card-body text-muted pt-1">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                    nesciunt you probably haven't heard of them accusamus labore
                                                    sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1 shadow-none border">
                                            <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                               data-bs-target="#collapseTwo" aria-expanded="false"
                                               aria-controls="collapseTwo">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="my-1">Why do we use it?
                                                        <i class="icon-xs accordion-arrow"
                                                           data-feather="chevron-down"></i>
                                                    </h5>
                                                </div>
                                            </a>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                 data-bs-parent="#accordionExample">
                                                <div class="card-body text-muted pt-1">
                                                    Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                    aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                                    denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0 shadow-none border">
                                            <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                               data-bs-target="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="my-1">Where does it come from?
                                                        <i class="icon-xs accordion-arrow"
                                                           data-feather="chevron-down"></i>
                                                    </h5>
                                                </div>
                                            </a>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                 data-bs-parent="#accordionExample">
                                                <div class="card-body text-muted pt-1">
                                                    Anim pariatur cliche reprehenderit,
                                                    enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                    aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                                    denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-block mt-4">
                                        <h6>Example</h6>
                                        <button class="btn btn-sm btn-copy-clipboard"
                                                data-clipboard-target="#accordion-ex-1">Copy
                                        </button>

                                        <pre class="prettyprint lang-html escape" id="accordion-ex-1">
                                            <div class="accordion custom-accordionwitharrow mt-3" id="accordionExample"> <div
                                                    class="card mb-1 shadow-none border"> <a href="" class="text-dark"
                                                                                             data-bs-toggle="collapse"
                                                                                             data-bs-target="#collapseOne"
                                                                                             aria-expanded="true"
                                                                                             aria-controls="collapseOne"> <div
                                                            class="card-header" id="headingOne"> <h5 class="my-1">What is Lorem Ipsum? <i
                                                                    class="icon-xs accordion-arrow"
                                                                    data-feather="chevron-down"></i> </h5> </div> </a> <div
                                                        id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample"> <div
                                                            class="card-body text-muted pt-1"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div> </div> </div> <div
                                                    class="card mb-1 shadow-none border"> <a href=""
                                                                                             class="text-dark collapsed"
                                                                                             data-bs-toggle="collapse"
                                                                                             data-bs-target="#collapseTwo"
                                                                                             aria-expanded="false"
                                                                                             aria-controls="collapseTwo"> <div
                                                            class="card-header" id="headingTwo"> <h5 class="my-1">Why do we use it? <i
                                                                    class="icon-xs accordion-arrow"
                                                                    data-feather="chevron-down"></i> </h5> </div> </a> <div
                                                        id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordionExample"> <div
                                                            class="card-body text-muted pt-1">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div> </div> </div> <div
                                                    class="card mb-0 shadow-none border"> <a href=""
                                                                                             class="text-dark collapsed"
                                                                                             data-bs-toggle="collapse"
                                                                                             data-bs-target="#collapseThree"
                                                                                             aria-expanded="false"
                                                                                             aria-controls="collapseThree"> <div
                                                            class="card-header" id="headingThree"> <h5 class="my-1">Where does it come from? <i
                                                                    class="icon-xs accordion-arrow"
                                                                    data-feather="chevron-down"></i> </h5> </div> </a> <div
                                                        id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample"> <div
                                                            class="card-body text-muted pt-1">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div> </div> </div> </div>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordions End -->
                    </div>

</section>
    <!-- cta start -->
    <section class="section py-4 pt-sm-6 pb-sm-0 position-relative" id="section-download" data-aos="fade-up">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-4 fw-medium">Start creating delightful user experience</h1>
                    <p class="text-muted mx-auto">
                        Start working with
                        <span class="text-dark fw-bold">Prompt</span> to create awesome landing pages & websites
                    </p>

                    <div class="text-center mt-5">
                        <a href="" class="btn btn-warning">
                            Connect Your Shop                                     <span class="ms-2 icon icon-xxs" data-feather="arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- footer start -->
    <section class="section pt-lg-6 pt-3 pb-3 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <ul class="list-inline list-with-separator">
                        <li class="list-inline-item me-0"><a href="#">About</a></li>
                        <li class="list-inline-item me-0"><a href="#">Support</a></li>
                        <li class="list-inline-item me-0">Version
                            <a href="#"><span
                                    class="align-middle badge badge-soft-info rounded-pill px-2 py-1">v1.0</span></a>
                        </li>
                    </ul>
                    <p class="mt-2 fs-14">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a></p>

                    <img src="/images/logo.png" height="30" class="mt-2 mb-4" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
@endsection
