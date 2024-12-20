@extends('layouts.base', ['title' => 'Prompt | Mobile Application Landing Page'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto navbar-light','ctaButtonClass' => 'btn-orange btn-sm' ])

    <!-- header and hero start -->
    <section class="position-relative hero-1 pt-7 pt-sm-6 pb-5">
        <div class="container hero-container">
            <div class="row text-center text-md-start">
                <div class="col-lg-6 pt-2 pt-sm-3">
                    <h1 class="hero-title">
                        The best way to <span class="highlight highlight-warning d-inline-block">Showcase</span> your
                        Mobile App
                    </h1>

                    <p class="mt-3 fs-17 text-muted">
                        To increase sales by skyrocketing communication with All messages in one simple dashboard it now
                        takes seconds.
                    </p>

                    <div class="pt-3 pt-sm-5 d-flex align-items-center action-buttons">
                        <a href='#section-download' class="btn btn-primary" data-bs-toggle="smooth-scroll">Download</a>

                        <div class="ms-3">
                            <a class="text-primary d-flex align-items-center" href="#">
                                <span type="button"
                                      class="btn btn-soft-primary btn-rounded-circle btn-icon me-2 shadow-none">
                                    <i class="icon-xxs icon-dual-primary align-self-center" data-feather="play"></i>
                                </span>
                                <span class="fw-semibold">Watch Video</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2 text-end">
                    <div class="position-relative">
                        <div class="hero-img mt-4 mt-sm-0">
                            <img src="/images/hero/app1.png" alt="" class="img-fluid" data-bs-aos="zoom-in-up"/>
                        </div>

                        <!-- Swiper -->
                        <div class="slider">
                            <div class="swiper default-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content shadow bg-white rounded-sm p-3 quote">
                                            <div class="d-flex text-align-start">
                                                <img src="/images/avatars/img-6.jpg" alt=""
                                                     class="img-fluid avatar-sm rounded-circle align-self-center me-3">
                                                <div class="flex-grow-1 fs-14 text-muted">
                                                    This app is blessing for all
                                                    professionals!
                                                    <p class="mb-0">
                                                        <span class="ms-0">
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide End -->

                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content shadow bg-white rounded-sm p-3 quote">
                                            <div class="d-flex">
                                                <img src="/images/avatars/img-8.jpg" alt=""
                                                     class="img-fluid avatar-sm rounded-circle align-self-center me-3">
                                                <div class="flex-grow-1 fs-14 text-muted">Very convenient to use project
                                                    manager!
                                                    <p class="mb-0">
                                                        <span class="ms-0">
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            <i data-feather="star"
                                                               class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide End -->
                                </div>
                                <!-- swiper-wrapper End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </section>
    <!-- header and hero end -->

    <!-- features start -->
    <section class="position-relative overflow-hidden features-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-semibold">App works best with Prompt</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to showcase your app to
                        thousands of people.
                    </p>
                </div>
            </div>
            <div class="row align-items-center mt-0 mt-sm-5">
                <div class="col-lg-5">
                    <div class="img-content position-relative">
                        <div class="img-up">
                            <img src="/images/features/app2.png" alt="app-img" class="img-fluid d-block"
                                 data-aos="zoom-in-right"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row mt-5 mt-lg-0 ps-4 ps-sm-5">
                        <div class="col-md-6">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                @svg('/duotone-icons/communication/Mail-opened')
                            </span>

                            <h4 class="mt-3 mb-2 fw-semibold">First feature</h4>
                            <p class="mb-4 pb-3 text-muted">
                                We use a customized application tobe specifically designed a testing gnose to keep away
                                for people.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span
                                class="bg-soft-success avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-success">
                                @svg('/duotone-icons/general/Shield-check')
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Second feature</h4>
                            <p class="mb-4 pb-3 text-muted">
                                In order to design a mobile app that is going to be module downloaded and accessed
                                frequently by users.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span
                                class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange">
                                @svg('/duotone-icons/general/Thunder-move')
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Third feature</h4>
                            <p class="mb-4 pb-3 text-muted">
                                A Private Limited is the most popular type of partnership Malta. The limited liabilityis
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span class="bg-soft-info avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-info">
                                @svg('/duotone-icons/general/Notification#2')
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Fourth feature</h4>
                            <p class="mb-4 pb-3 text-muted">
                                Few derived into talking being in merit long you'd his the of to had the to duties, it
                                them one…
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- features2 start -->
    <section class="section py-5 features-2 position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">More Features</span>
                    <h1 class="display-5 fw-semibold">Features that showcase your app</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to showcase your app to
                        thousands of people.
                    </p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="100">
                        <div class="shape1"></div>
                        <div class="shape2"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Quick Access to Tasks</h3>
                            <p class="fs-14">
                                Save time and edit like a pro! Yes! you will be able to edit your application on the
                                easy way.
                            </p>

                            <div class="px-2 mt-3">
                                <img src="/images/features/app3.png" alt="" class="img-fluid mt-2"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="300">
                        <div class="shape3"></div>
                        <div class="shape4"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Create Task Easily</h3>
                            <p class="fs-14">
                                Speedy App provides instant information on thousands of hire and buy products.

                            </p>

                            <div class="px-2 mt-3">
                                <img src="/images/features/app4.png" alt="" class="img-fluid mt-2"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="500">
                        <div class="shape5"></div>
                        <div class="shape6"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Quick Access to Team</h3>
                            <p class="fs-14">
                                Save time and edit like a pro! Yes! you will be able to edit your application on the
                                easy way.
                            </p>

                            <div class="px-2 mt-3">
                                <img src="/images/features/app4.png" alt="" class="img-fluid mt-2"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features2 end -->

    <!-- testimonials start -->
    <section class="section pt-5 pb-6 py-sm-8 mb-5 mb-sm-0 bg-light position-relative" data-aos="fade-up"
             data-aos-duration="500">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container testimonials-1">
            <div class="row align-items-center">
                <div class="col">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Testimonials</span>
                    <h1 class="display-5 fw-semibold">What people say</h1>
                </div>
                <div class="col-auto text-sm-right pt-2 pt-sm-0">
                    <div class="navigations">
                        <button class="btn btn-link text-normal p-0 swiper-custom-prev">
                            <svg class="bi bi-arrow-left" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button class="btn btn-link text-normal p-0 swiper-custom-next">
                            <svg class="bi bi-arrow-right" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-sm-5">
                <div class="col">
                    <div class="slider">
                        <div class="swiper testimonial-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mb-0">
                                        <div class="card-body p-md-5">
                                            <p class="fw-normal mb-4 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg" alt=""
                                                     height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0">
                                        <div class="card-body p-md-5">
                                            <p class="fw-normal mb-4 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried many project management apps for my daily tasks, but this one is
                                                far better than others. Simply loved it!
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg" alt=""
                                                     height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">John Stark</h6>
                                                    <p class="my-0 text-muted fs-13">Engineering Director</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0">
                                        <div class="card-body p-md-5">
                                            <p class="fw-normal mb-4 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg" alt=""
                                                     height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Cersei Lannister</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                       class="icon icon-xxs icon-fill-warning text-warning"></i>
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

    <!-- cta start -->
    <section class="section pb-0 py-4 pt-sm-6 position-relative" id="section-download" data-aos="fade-up">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-5 fw-medium">Start offering your users a better experience</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to showcase your app to
                        thousands of people.
                    </p>

                    <div class="text-center mt-5">
                        <a href="" class="d-block d-sm-inline-flex">
                            <img src="/images/buttons/google.png" alt="google play" height="52"/>
                        </a>
                        <a href="" class="d-block d-sm-inline-flex mt-2 mt-sm-0 ms-0 ms-sm-2">
                            <img src="/images/buttons/store.png" alt="apple store" height="52"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- footer start -->
    <section class="section pt-lg-5 pt-3 pb-3 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <ul class="list-inline list-with-separator">
                        <li class="list-inline-item me-0"><a href="#">About</a></li>
                        <li class="list-inline-item me-0"><a href="#">Privacy</a></li>
                        <li class="list-inline-item me-0"><a href="#">Terms</a></li>
                        <li class="list-inline-item me-0"><a href="#">Developers</a></li>
                        <li class="list-inline-item me-0"><a href="#">Support</a></li>
                        <li class="list-inline-item me-0">
                            <a href="#">Careers
                                <span class="align-middle badge badge-soft-info rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span>
                            </a>
                        </li>
                    </ul>
                    <p class="mt-2 fs-14">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                    </p>

                    <img src="/images/logo.png" height="30" class="mt-2 mb-4" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

@endsection
