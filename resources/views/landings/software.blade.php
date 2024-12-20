@extends('layouts.base', ['title' => 'Prompt | Software Landing Page'])

@section('content')

    <div class="header-2">

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-primary btn-sm' ])

        <section class="position-relative overflow-hidden hero-7 pt-6 pb-4">
            <div class="container">
                <div class="row align-items-center text-center text-sm-start">
                    <div class="col-lg-6">
                        <div class="">
                            <h1 class="hero-title">AI-Powered <span
                                    class="highlight highlight-warning d-inline-block">Small Business</span> Growth & Strategy</h1>
                            <p class="fs-16 mt-3 text-muted">
                                Prompt makes it easier to build better website and application more quickly and with
                                less effort
                            </p>

                            <div class="py-5">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn btn-primary">
                                        <i data-feather="download" class="icon-xs me-2"></i>Download for Woocommerce
                                    </button>
                                    <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-reference="parent">
                                        <i class="icon"><span data-feather="chevron-down"></span></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"
                                         aria-labelledby="dropdownMenuReference">
                                        <a class="dropdown-item" href="#">Windows 7/8/10</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Mac OS</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Ubuntu 18.04</a>
                                        <a class="dropdown-item" href="#">Ubuntu 16.04</a>
                                    </div>
                                </div>
                                <div class="rounded d-inline-block mt-3 py-1 px-3 alert bg-soft-warning">
                                    <div class="d-flex align-items-center">
                                        <div class="text-dark">
                                            Looking for other platforms? <a href="" class="text-dark fw-medium">Click
                                                Here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 hero-right">
                        <div class="img-container" data-aos="fade-left" data-aos-duration="600">
                            <img src="/images/hero/desktop.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- clients - reviews -->
    <section class="pt-8 pt-sm-10 pb-lg-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="fw-medium pb-3 mt-0">Join 10,000+ other companies who are using Prompt</h4>
                    <ul class="list-inline mt-3 mb-4 mb-lg-0">
                        <li class="list-inline-item me-4 mb-2">
                            <img src="/images/brands/amazon.svg" alt="" class="" height="32"/>
                        </li>
                        <li class="list-inline-item me-4 mb-2">
                            <img src="/images/brands/google.svg" alt="" class="" height="32"/>
                        </li>
                        <li class="list-inline-item me-4 mb-2">
                            <img src="/images/brands/paypal.svg" alt="" class="" height="32"/>
                        </li>
                        <li class="list-inline-item me-4 mb-2">
                            <img src="/images/brands/spotify.svg" alt="" class="" height="32"/>
                        </li>
                        <li class="list-inline-item me-4 mb-2">
                            <img src="/images/brands/shopify.svg" alt="" class="" height="32"/>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <h4 class="fw-normal pb-3 mt-0">
                        Score 9.5 out of 10 on
                        <img
                            src="data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.35 0c-.21 0-.39.13-.47.32L9.75 6h5.94c.2 0 .39.08.53.22l3.56 3.56c.14.14.22.33.22.53v16.4c0 .22-.27.33-.43.18l-3.35-3.35A.79.79 0 0116 23V10H8.25l-8 21.32c-.12.33.12.68.47.68h34.93c.21 0 .39-.13.47-.32l.97-2.58L26 18l2.43-2.43c.05-.05.11-.07.18-.07H32V10h-6v13c0 .2-.08.39-.22.53l-3.35 3.35c-.16.16-.43.05-.43-.17v-16.4c0-.2.08-.39.22-.53l3.56-3.56a.75.75 0 01.53-.22h5.38c.2 0 .39.08.53.22l3.56 3.56c.14.14.22.33.22.53v4.88c0 .2-.08.39-.22.53l-3.53 3.53 6.2 6.2L47.74.67a.49.49 0 00-.46-.67H12.35z' fill='%23116BF2'/%3E%3C/svg%3E"
                            alt="" class="img-fluid d-inline-block"/>
                    </h4>

                    <ul class="list-inline">
                        <li class="list-inline-item bg-success rounded p-2 me-1"><i class="text-white"
                                                                                    data-feather="star"></i></li>
                        <li class="list-inline-item bg-success rounded p-2 me-1"><i class="text-white"
                                                                                    data-feather="star"></i></li>
                        <li class="list-inline-item bg-success rounded p-2 me-1"><i class="text-white"
                                                                                    data-feather="star"></i></li>
                        <li class="list-inline-item bg-success rounded p-2 me-1"><i class="text-white"
                                                                                    data-feather="star"></i></li>
                        <li class="list-inline-item bg-success rounded p-2"><i class="text-white"
                                                                               data-feather="star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- feature 1 -->
    <section class="position-relative overflow-hidden py-6 features-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mb-lg-0 mb-4" data-aos="fade-right" data-aos-duration="600">
                        <span class="badge rounded-pill badge-soft-danger px-2 py-1">Free Cloud Account!</span>
                        <h1 class="display-5 fw-medium mb-2">Smart auto deployment</h1>
                        <h5 class="fw-normal text-muted mx-auto mt-0 mb-4 pb-3">Prompts automatically deploys your
                            changes on the cloud</h5>

                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/files/Export')
                                </span>
                                <span class="icon-mono bg-soft-primary fill-primary avatar avatar-sm shadow rounded-lg">
                                    <i class="uim uim-document-layout-center"></i>
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">Auto saves the files, one-click
                                sync
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/code/Github')
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">Auto track every
                                changes/revision
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/communication/Group')
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">Modern way to collaborate with
                                team
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img src="/images/features/desktop1.gif" alt="" class="img-fluid" data-aos="fade-left"
                         data-aos-duration="700"/>
                </div>
            </div>

            <div class="row align-items-center pt-9">
                <div class="col-lg-6">
                    <div class="bg-white p-2 rounded border shadow" data-aos="fade-right" data-aos-duration="600">
                        <img src="/images/hero/desktop.jpg" alt="" class="img-fluid"/>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="700">
                        <span class="badge rounded-pill badge-soft-danger px-2 py-1">Auto Sync</span>
                        <h1 class="display-5 fw-medium mb-2">AutoSync deployment</h1>
                        <h5 class="fw-normal text-muted mx-auto mt-0 mb-4 pb-3">Prompts automatically sync your
                            scheduled sync configuration</h5>

                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/code/Settings#4')
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">Auto saves the files, one-click
                                sync
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/code/Git#4')
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">Auto track every
                                changes/revision
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="list-inline-item me-3 flex-shrink-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                    @svg('/duotone-icons/code/CMD')
                                </span>
                            </div>
                            <div class="fw-medium fs-16 align-self-center flex-grow-1">A powerful command line
                                interface
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature 2 -->
    <section class="py-4">
        <div class="container bg-soft-warning p-5 rounded-lg" data-aos="fade-up" data-aos-duration="700">
            <h4 class="display-5 fw-medium mb-2">Prompt works on Every Device</h4>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="list-inline mb-0 mt-4">
                        <li class="list-inline-item text-center me-3 me-sm-5">
                            <span class="icon icon-md text-body">
                                @svg('/duotone-icons/devices/Laptop')
                            </span>
                            <h6 class="mb-lg-0">Windows</h6>
                        </li>
                        <li class="list-inline-item text-center me-3 me-sm-5">
                            <span class="icon icon-md text-secondary">
                                @svg('/duotone-icons/devices/Laptop-macbook')
                            </span>
                            <h6 class="mb-lg-0">Mac</h6>
                        </li>
                        <li class="list-inline-item text-center me-3 me-sm-5">
                            <span class="icon icon-md text-secondary">
                                @svg('/duotone-icons/layout/Layout-top-panel-6')
                            </span>
                            <h6 class="mb-lg-0">Browser</h6>
                        </li>
                        <li class="list-inline-item text-center">
                            <span class="icon icon-md text-secondary">
                                @svg('/duotone-icons/devices/Android')
                            </span>
                            <h6 class="mb-lg-0">Mobile</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-center mt-5 mt-lg-0">
                        <a href="#" class="btn btn-primary rounded">
                            Get Propmt for Free <i class="icon-xs ms-1" data-feather="arrow-right"></i>
                        </a>

                        <p class="text=muted mt-2 fs-12">Looking for older versions? <a href="">Click Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pricing start -->
    <section class="section pb-4 pb-sm-6 pt-6 position-relative">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-5 fw-medium">Pricing</h1>
                    <p class="text-muted mx-auto">
                        Pricing that <span class="text-primary fw-bold">works</span> for everyone.</p>
                </div>
            </div>

            <div class="row align-items-center mt-0 mt-sm-5">
                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="1000">
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
                            <a href="#" class="btn btn-soft-primary d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="1200">
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
                            <a href="#" class="btn btn-primary d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="1400">
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
                            <a href="#" class="btn btn-soft-primary d-block">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing end -->

    <!-- testimonials start -->
    <section class="section pt-5 pb-6 py-sm-8 mb-5 mb-sm-0 bg-gradient3 position-relative testimonials-1">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Testimonials</span>
                    <h1 class="display-5 fw-medium">What People Say</h1>
                </div>
                <div class="col-auto text-sm-end pt-2 pt-sm-0">
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
                                            <p class="mb-4 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
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
                                            <p class="mb-4 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried many project management apps for my daily tasks, but this one is
                                                far better than others. Simply loved it!
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                     alt="" height="36"/>
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
                                            <p class="mb-4 mt-0">
                                                This app is a truly blessing for all professionals! A day to day project
                                                management was never easy for me. But with prompt, I can manage more
                                                than 100 projects easily.
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                     alt="" height="36"/>
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

    <!-- footer + cta start -->
    <section class="pt-4 pt-sm-6 pb-5 desktop-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="text-center">
                        <h1 class="text-dark">Be the first to know!</h1>
                        <p class="">We'll inform you about new updates, features, but no spam, we promise.</p>
                    </div>

                    <div class="my-4 my-sm-5 pt-0 d-flex align-items-center justify-content-center">
                        <div class="row g-2">
                            <div class="col-sm-8">
                                <label class="visually-hidden" for="email">Email</label>
                                <input type="email" class="form-control mb-2 me-sm-2 shadow-sm" name="email" id="email"
                                       placeholder="Your Email">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4"/>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mt-5">
                        <h5 class="fw-normal">2020 &copy; Copyright. All rights reserved. Crafted by <a
                                href="https://coderthemes.com/">Coderthemes</a></h5>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item mx-4 mb-3"><a href="#" class="text-dark">Changelog</a></li>
                            <li class="list-inline-item mx-4 mb-3"><a href="#" class="text-dark">FAQ</a></li>
                            <li class="list-inline-item mx-4 mb-3"><a href="#" class="text-dark">Press kit</a></li>
                            <li class="list-inline-item mx-4 mb-3"><a href="#" class="text-dark">Contact us</a></li>
                            <li class="list-inline-item mx-4 mb-3"><a href="#" class="text-dark">Careers
                                    <span
                                        class="align-middle badge badge-soft-info rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer + cta end -->

@endsection

@section('script')
@endsection
