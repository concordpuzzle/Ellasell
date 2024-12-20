@extends('layouts.base', ['title' => 'Prompt | Saas Application Landing Page'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-primary btn-sm' ])

    <section class="position-relative hero-11 py-1 pt-7 pb-sm-6">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h1 class="hero-title">The best way to <span class="highlight highlight-success d-inline-block">showcase</span>
                        your saas</h1>

                    <p class="fs-17 text-muted pt-0">
                        Make your saas application stand out with high-quality landing page designed and developed by
                        professional
                    </p>

                    <div class="mt-4 mt-sm-5 pt-0 d-flex align-items-center justify-content-center">
                        <div class="row g-2 text-start">
                            <div class="col-sm-5">
                                <label class="visually-hidden" for="name">Name</label>
                                <input type="text" class="form-control mb-2 me-sm-2 shadow-sm" name="name" id="name"
                                       placeholder="Your Name">
                            </div>
                            <div class="col-sm-5">
                                <label class="visually-hidden" for="email">Email</label>
                                <input type="email" class="form-control mb-2 me-sm-2 shadow-sm" name="email" id="email"
                                       placeholder="Your Email">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary mb-2 text-nowrap">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-center">
                        <div class="me-4"><i data-feather="check-circle"
                                             class="icon icon-dual-success icon-xs me-1"></i>Free 14-day Demo
                        </div>
                        <div class="me-4"><i data-feather="check-circle"
                                             class="icon icon-dual-success icon-xs me-1"></i>No credit card needed
                        </div>
                        <div><i data-feather="check-circle" class="icon icon-dual-success icon-xs me-1"></i>No Setup
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>

        <div class="feature-container position-relative overflow-hidden mt-5 mb-4">
            <div class="container">
                <div class="row align-items-center justify-content-center zindex-1 slider-container">
                    <div class="col-10 text-center zindex-1">
                        <div class="card rounded-lg shadow" data-aos="fade-up" data-aos-duration="2000">
                            <div class="card-body slider-container-body">
                                <!-- Swiper -->
                                <div class="swiper default-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="/images/hero/saas1.jpg" alt=""
                                                     class="img-fluid rounded-lg"/>
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->

                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="/images/hero/saas2.jpg" alt=""
                                                     class="img-fluid rounded-lg"/>
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->

                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="/images/hero/saas3.jpg" alt=""
                                                     class="img-fluid rounded-lg"/>
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->
                                    </div>
                                    <!-- swiper-wrapper End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- features start -->
    <section class="position-relative overflow-hidden py-4 pb-lg-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-medium">Better Management. Better Performance</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your workforce
                        better
                    </p>
                </div>
            </div>

            <div class="row pt-5 align-items-center features-3">
                <div class="col-lg-6">
                    <div class="img-content position-relative">
                        <div class="img-up mb-lg-0 mb-6">
                            <img src="/images/hero/saas1.jpg" alt="app img" class="img-fluid d-block rounded"
                                 data-aos="fade-right" data-aos-duration="200"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="accordion" id="features-list" data-aos="fade-up" data-aos-duration="300">
                        <div class="d-flex border-bottom pb-4">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                @svg('/duotone-icons/communication/Group')
                            </span>

                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse" data-bs-target="#feature1ex"
                                   role="button" aria-expanded="false" aria-controls="feature1ex">Improve Employee
                                    Experience
                                </a>

                                <div class="collapse show" id="feature1ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Before we dive into why companies must invest in employee experience (EX), it’s
                                        important to understand what this concept entails.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-bottom py-4 text-align-start">
                            <span
                                class="bg-soft-success avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-success me-3 flex-shrink-0">
                                @svg('/duotone-icons/communication/Add-user')
                            </span>
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse" data-bs-target="#feature2ex"
                                   role="button" aria-expanded="false" aria-controls="feature2ex">Hiring &amp;
                                    Onboarding
                                </a>

                                <div class="collapse" id="feature2ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Post your job, interview candidates and make offers, all on Prompt. Start hiring
                                        today.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex pt-4 text-align-start">
                            <span
                                class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange me-3 flex-shrink-0">
                                @svg('/duotone-icons/shopping/Chart-bar#3')
                            </span>
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse" data-bs-target="#feature3ex"
                                   role="button" aria-expanded="false" aria-controls="feature3ex">People Data &amp;
                                    Analytics
                                </a>

                                <div class="collapse" id="feature3ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Finding committed employees is one of public and private organizations’ top
                                        priorities.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden py-7 features-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="200">
                        <span
                            class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3">
                            @svg('/duotone-icons/shopping/MC')
                        </span>
                        <h1 class="text-dark pt-3">Smart Payroll. Paying your people couldn't be easier</h1>
                        <p class="text-muted my-4">You can modify your pages with drag-dropping , can import demos with
                            just ” One Click” and can modify theme setting easy-to-use options panel.</p>
                        <a href="#" class="h6 text-primary pt-3">Learn more <i class="ms-1 icon-xxs"
                                                                               data-feather="arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="img-content2 position-relative">
                        <div class="img-up">
                            <img src="/images/hero/saas2.jpg" alt="app img" class="img-fluid d-block rounded"
                                 data-aos="fade-left" data-aos-duration="300"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="position-relative pb-6 pt-lg-6 pt-4 features-3">
        <div class="container" data-aos="fade-up" data-aos-duration="200">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h3 class="fw-medium mb-5">Any many more powerful features</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Hire
                        and Retain Top Talent</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Team
                        Management</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Stay
                        Compliant</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Improve
                        Productivity</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Improve
                        Experience</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Self-service
                        Time Tracking</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Performance
                        Management</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Expert
                        HR</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>New
                        Hire Checklist</h6>
                    <h6 class="fw-medium fs-16 mb-4"><i class="icon-sm icon-dual-success me-2" data-feather="check"></i>Tax
                        Calculator</h6>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-auto">
                    <a href="#" class="btn btn-primary mb-2">
                        Sign Up Now
                        <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- clients start -->
    <section class="section pt-8 pb-6 bg-gradient3 position-relative">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="200">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Clients</span>
                    <h1 class="display-5 fw-medium">The smart people management you need</h1>
                    <p class="text-muted mx-auto">
                        21,000+ organizations trust <span class="text-primary fw-bold">Prompt</span> to drive perfomance
                        & engagement
                    </p>

                    <ul class="list-inline mt-5">
                        <li class="list-inline-item mx-4 mx-xl-5 mb-3">
                            <img src="/images/brands/amazon.svg" alt="" height="32"/>
                        </li>
                        <li class="list-inline-item mx-4 mx-xl-5 mb-3">
                            <img src="/images/brands/google.svg" alt="" height="32"/>
                        </li>
                        <li class="list-inline-item mx-4 mx-xl-5 mb-3">
                            <img src="/images/brands/paypal.svg" alt="" height="32"/>
                        </li>
                        <li class="list-inline-item mx-4 mx-xl-5 mb-3">
                            <img src="/images/brands/spotify.svg" alt="" height="32"/>
                        </li>
                        <li class="list-inline-item mx-4 mx-xl-5 mb-3">
                            <img src="/images/brands/shopify.svg" alt="" height="32"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- client ends -->

    <!-- testimonials start -->
    <section class="section pt-5 pb-7 py-sm-9 position-relative features-4">
        <div class="container">
            <div class="row testimonials-2" data-aos="fade-up" data-aos-duration="200">
                <div class="col-lg-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="badge rounded-pill badge-soft-primary px-2 py-1">Feedback</span>
                            <h1 class="display-5 fw-medium">What people say</h1>
                            <p class="text-muted mx-auto">Few valuables words from our customers</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-auto text-sm-right pt-2 pt-sm-0">
                            <div class="navigations mb-4 mb-lg-0">
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
                                            <p class="quotation-mark text-muted">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried many project management apps for my daily tasks, but this one is
                                                far better than others. Simply loved it!
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">John Stark</h6>
                                                    <p class="my-0 text-muted fs-13">Engineering Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
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
        </div>
    </section>
    <!-- testimonials end -->

    <!-- pricing start -->
    <section class="section py-6 py-sm-8 bg-gradient3 position-relative">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Plans</span>
                    <h1 class="display-5 fw-medium">Pricing Plans</h1>
                    <p class="text-muted mx-auto">
                        Pricing that <span class="text-primary fw-bold">works</span> for everyone
                    </p>
                </div>
            </div>

            <div class="row align-items-center mt-0 mt-sm-5">
                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="500">
                        <div class="card-body text-center">
                            <h4 class="my-0 text-primary">Starter</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">49</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 600 minutes usage time</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal only</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add up to 10 attendees</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Technical support via email</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    &nbsp;
                                </li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary d-block">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="700">
                        <div class="card-body text-center">
                            <h4 class="my-0 text-primary">Professional</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">99</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 6000 minutes usage time</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal or a commercial</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add up to 100 attendees</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 5 teams</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Technical support via email</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body text-center">
                            <h4 class="my-0 text-primary">Enterprise</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">599</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Unlimited usage time</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal or a commercial</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add Unlimited attendees</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>24x7 Technical support via phone</span>
                                </li>
                                <li class="py-2 d-flex flex-row align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Technical support via email</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary d-block">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider bottom d-none d-sm-block"></div>
    </section>
    <!-- pricing end -->

    <!-- faq start -->
    <section class="section py-6 pt-sm-6 position-relative">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">FAQs</span>
                    <h1 class="display-5 fw-medium">Frequently Asked Questions</h1>
                    <p class="text-muted mx-auto">Here are some of the basic types of questions for our customers</p>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-10 col-lg-8">
                    <div id="faqContent">
                        <div class="accordion custom-accordionwitharrow" id="accordionExample">
                            <div class="card mb-1 border rounded-sm">
                                <a href="" class="text-dark" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="my-1 fw-medium">Can I use this template for my client?
                                            <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                        </h5>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Yup, the marketplace license allows you to use this theme in any end products.
                                        For more information on licenses, please refere license terms on marketplace.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border rounded-sm">
                                <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="my-1 fw-medium">Can this theme work with WordPress?
                                            <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                        </h5>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        No. This is a HTML template. It won't directly with WordPress, though you can
                                        convert this into WordPress compatible theme.
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-0 border rounded-sm">
                                <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="my-1 fw-medium">How do I get help with the theme?
                                            <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                        </h5>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Use our dedicated support email (support@coderthemes.com) to send your issues or
                                        feedback. We are here to help anytime.
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-0 border rounded-sm">
                                <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="my-1 fw-medium">Will you regularly give updates of Prompt ?
                                            <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                        </h5>
                                    </div>
                                </a>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Yes, We will update the Prompt regularly. All the future updates would be
                                        available without any cost.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-auto">
                    <div class="rounded d-inline-block py-2 px-3 alert bg-light">
                        <div class="d-flex align-items-center">
                            <div class="text-dark">
                                Still have unanswered questions? <a href="">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq end -->

    <!-- footer start -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <p class="text-muted w-75">
                        Make your web application stand out with high-quality landing page
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="ps-xl-5">
                                <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">
                                    Platform</h6>
                                <ul class="list-unstyled">
                                    <li class="my-3"><a href="#" class="text-muted">Demo</a></li>
                                    <li class="my-3"><a href="#" class="text-muted">Pricing</a></li>
                                    <li class="my-3"><a href="#" class="text-muted">Integrations</a></li>
                                    <li class="my-3"><a href="#" class="text-muted">Status</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ps-xl-5">
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
                        <div class="col-lg-3 col-sm-6">
                            <div class="ps-xl-5">
                                <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">
                                    Company</h6>
                                <ul class="list-unstyled">
                                    <li class="my-3"><a href="#" class="text-muted">About Us</a></li>
                                    <li class="my-3"><a href="#" class="text-muted">Career</a></li>
                                    <li class="my-3"><a href="#" class="text-muted">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ps-xl-5">
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
                </div>
            </div>
            <hr/>
            <div class="row text-md-start text-center">
                <div class="col-md-6">
                    <p class="pb-0 mb-0 text-muted">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted
                        by <a href="https://coderthemes.com/">Coderthemes</a>
                    </p>
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

