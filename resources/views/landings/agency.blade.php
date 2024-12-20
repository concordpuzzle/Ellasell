@extends('layouts.base', ['title' => 'Prompt | A Landing Page for an Agency'])

@section('content')

    <div class="header-4">

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

        <div class="position-relative hero-5 pb-4 pt-7 pb-sm-0 hero-with-shapes">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="shape3"></div>

            <div class="container position-relative zindex-1">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="rounded d-inline-block mb-4 px-3 py-2 alert bg-soft-warning" data-aos="fade-right"
                             data-aos-duration="1000">
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-orange px-2 py-1">New!</div>
                                    <div class="mx-3">Check our latest article on design</div>
                                </div>
                            </a>
                        </div>

                        <h1 class="hero-title fw-medium">
                        Grow your small business with <span class="highlight highlight-warning d-inline-block">AI</span>
                        </h1>

                        <p class="mt-4 fs-18 mb-3 mb-sm-6 w-75">
                            We're a top-notch web design and development team helping business to craft the meaningful
                            and interactive product experiences.
                        </p>

                        <a href="#" class="btn btn-warning">
                            <i class="icon-xxs me-2" data-feather="arrow-down"></i> Try Now, For Free
                        </a>
                        <a href="#" class="btn btn-outline-secondary ms-2">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="align-items-end links-social d-sm-block d-none">
                <ul class="list-inline text-muted text-uppercase fw-medium">
                    <li class="list-inline-item py-2">
                        <a href="">Twitter</a>
                    </li>
                    <li class="list-inline-item py-2">
                        <a href="">Facebook</a>
                    </li>
                    <li class="list-inline-item py-2">
                        <a href="">Instagram</a>
                    </li>
                </ul>
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

    <!-- services start -->
    <section class="position-relative py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-semibold">What We Do</h1>
                    <p class="text-muted mx-auto">We are helping businesses to develop their web applications</p>
                </div>
            </div>

            <div class="row pt-5 features-5">
                <div class="col-md-4">
                    <div class="card border-0 shadow-none feature-item" data-aos="fade-up" data-aos-duration="500">
                        <div class="card-body">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3">
                                    @svg('/duotone-icons/design/Color-profile')
                            </span>

                            <h4 class="mt-3 mb-2 fw-semibold">All Sales Channels, One Lens</h4>
                            <p class="text-muted mb-0">
                                Following the best process that a great design teams use to create products that provide
                                meaningful and relevant experiences to users
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-none feature-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="card-body">
                            <span
                                class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange me-3">
                                 @svg('/duotone-icons/design/Image')
                            </span>

                            <h4 class="mt-3 mb-2 fw-semibold">Set Goals And Achieve Them With AI</h4>
                            <p class="text-muted mb-0">
                                Development of the websites for businesses of all sizes and shapes and covering a small
                                to enterprise organizations
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-none feature-item" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body">
                            <span
                                class="bg-soft-success avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-success me-3">
                                 @svg('/duotone-icons/design/Component')
                            </span>

                            <h4 class="mt-3 mb-2 fw-semibold">Discover Data Trends You Never Knew</h4>
                            <p class="text-muted mb-0">
                                Making a new identities for your brand with an effective collaboration and considered
                                design. We treat your brand like our own
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- portfolio start -->
    <section class="section py-lg-5 py-4 mb-5 mb-sm-0 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-success px-2 py-1">Latest</span>
                    <h1 class="display-5 fw-semibold">Featured Work</h1>
                    <p class="text-muted">Explore some of our latest website projects</p>
                </div>
            </div>

            <div class="row features-6" data-aos="fade-up" data-aos-duration="600">
                <div class="col-lg-6">
                    <div class="bg-gray-50 ps-5 pt-5 mt-4 mt-sm-5 rounded feature-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="text-dark my-0">Project</h3>
                            </div>
                            <div class="col text-end pe-5">
                                Branding, Interaction, Web Design
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <img src="/images/features/agency1.jpg" alt="" class="img-fluid shadow rounded"/>
                            </div>
                        </div>
                        <div class="overlay">
                            <a href="#" class="btn btn-secondary btn-sm btn-view shadow-lg">
                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-gray-50 ps-5 pt-5 mt-4 mt-sm-5 rounded feature-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="text-dark my-0">Project 2</h3>
                            </div>
                            <div class="col text-end pe-5">
                                Branding, Web Design & Development
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <img src="/images/features/agency2.jpg" alt="" class="img-fluid shadow rounded"/>
                            </div>
                        </div>
                        <div class="overlay">
                            <a href="#" class="btn btn-secondary btn-sm btn-view shadow-lg">
                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row features-6" data-aos="fade-up" data-aos-duration="800">
                <div class="col-lg-6">
                    <div class="bg-gray-50 ps-5 pt-5 mt-4 mt-sm-5 rounded feature-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="text-dark my-0">Project 3</h3>
                            </div>
                            <div class="col text-end pe-5">
                                Branding, Interaction, Web Design
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <img src="/images/features/agency2.jpg" alt="" class="img-fluid shadow rounded"/>
                            </div>
                        </div>
                        <div class="overlay">
                            <a href="#" class="btn btn-secondary btn-sm btn-view shadow-lg">
                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-gray-50 ps-5 pt-5 mt-4 mt-sm-5 rounded feature-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="text-dark my-0">Project 4</h3>
                            </div>
                            <div class="col text-end pe-5">
                                Branding, Web Design & Development
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <img src="/images/features/agency1.jpg" alt="" class="img-fluid shadow rounded"/>
                            </div>
                        </div>
                        <div class="overlay">
                            <a href="#" class="btn btn-secondary btn-sm btn-view shadow-lg">
                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6 justify-content-center">
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary mb-2">
                        Explore All Work<i class="icon-xxs ms-2" data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- clients start -->
    <section class="section py-4 py-sm-8 bg-soft-orange position-relative">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="badge rounded-pill badge-soft-orange px-2 py-1 mb-2">Our Customers</span>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-semibold mb-1">We are working with fortune top 500 companies</h1>
                        </div>
                        <div class="col-lg-6 ps-6">
                            <p class="mt-2 text-secondary">With our powerful set of elements, you can make beautiful and
                                customized WordPress websites. Incredible amount of design combinations are possible by
                                Drag & Drop, allowing you to be creative without having any design experience.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img src="/images/brands/amazon.svg" alt="" class="mb-2 mb-xl-0" height="32"/>
                        </div>
                        <div class="col">
                            <img src="/images/brands/google.svg" alt="" class="mb-2 mb-xl-0" height="32"/>
                        </div>
                        <div class="col">
                            <img src="/images/brands/paypal.svg" alt="" class="mb-2 mb-xl-0" height="32"/>
                        </div>
                        <div class="col">
                            <img src="/images/brands/spotify.svg" alt="" class="mb-2 mb-xl-0" height="32"/>
                        </div>
                        <div class="col">
                            <img src="/images/brands/shopify.svg" alt="" class="mb-2 mb-xl-0" height="32"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider bottom d-none d-sm-block"></div>
    </section>
    <!-- clients end -->

    <!-- blog start -->
    <section class="section pt-lg-8 pt-6 pb-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-success px-2 py-1">Blog</span>
                    <h1 class="display-5 fw-semibold">Interesting Articles</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="500">
                        <div class="card-img-top-overlay">
                            <div class="overlay"></div>
                            <span class="card-badge top-right bg-secondary text-white">Design</span>

                            <div class="position-relative">
                                <img src="/images/hero/coworking1.jpg" alt="" class="card-img-top"/>

                                <div class="shape text-white bottom">
                                    @svg('/shapes/bottom')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="mb-0"><span class="fs-13 align-middle">11 March, 2020</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <h4 class="">
                                    <a href="#" class="card-title-link">Top 10 design inspirations to follow</a>
                                </h4>
                                <p class="text-muted mb-2">
                                    Single page websites are taking over the world, and that's why I would like you to
                                    present the best ...
                                    <a href="">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="700">
                        <div class="card-img-top-overlay">
                            <div class="overlay"></div>
                            <span class="card-badge top-right bg-info text-white">Development</span>

                            <div class="position-relative">
                                <img src="/images/hero/coworking2.jpg" alt="" class="card-img-top"/>

                                <div class="shape text-white bottom">
                                    @svg('/shapes/bottom')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="mb-0"><span class="fs-13 align-middle">12 March, 2020</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <h4 class="">
                                    <a href="#" class="card-title-link">Top 10 design inspirations to follow</a>
                                </h4>
                                <p class="text-muted mb-2">
                                    We have shortlisted the best WordPress themes for alcohol production, distribution,
                                    and selling to...
                                    <a href="">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-img-top-overlay">
                            <div class="overlay"></div>
                            <span class="card-badge top-right bg-secondary text-white">Design</span>

                            <div class="position-relative">
                                <img src="/images/hero/coworking1.jpg" alt="" class="card-img-top"/>

                                <div class="shape text-white bottom">
                                    @svg('/shapes/bottom')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="mb-0"><span class="fs-13 align-middle">13 March, 2020</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <h4 class="">
                                    <a href="#" class="card-title-link">Top 10 design inspirations to follow</a>
                                </h4>
                                <p class="text-muted mb-2">
                                    The following Italian restaurant WordPress themes come with the powerful
                                    drag-n-drop...
                                    <a href="">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- openings start  -->
    <section class="section py-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="display-5 fw-semibold">We're Hiring</h1>
                        <p class="mt-0 mb-4">We're a team of lifelong learners. We're equal parts left and right
                            brained.</p>
                        <a href="#" class="btn btn-secondary mb-2">Learn about our culture</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <a href="javascript:void(0)" class="text-dark d-block">
                        <div class="card border rounded mb-3" data-aos="fade-up" data-aos-duration="500">
                            <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h5 class="my-0 fw-semibold">Front-End Developer</h5>
                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        <p class="text-muted mb-0">Los Angeles / Remote</p>
                                    </div>
                                    <div class="col-md-1 text-md-end mt-3 mt-md-0">
                                        <i class="icon-xs" data-feather="chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-dark d-block">
                        <div class="card border rounded mb-3" data-aos="fade-up" data-aos-duration="700">
                            <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h5 class="my-0 fw-semibold">Community Manager</h5>
                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        <p class="text-muted mb-0">New York / Full-Time</p>
                                    </div>
                                    <div class="col-md-1 text-md-end mt-3 mt-md-0">
                                        <i class="icon-xs" data-feather="chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="text-dark d-block">
                        <div class="card border rounded mb-3" data-aos="fade-up" data-aos-duration="900">
                            <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h5 class="my-0 fw-semibold">UX/UI Designer</h5>
                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        <p class="text-muted mb-0">New York / Full-Time</p>
                                    </div>
                                    <div class="col-md-1 text-md-end mt-3 mt-md-0">
                                        <i class="icon-xs" data-feather="chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- openings end -->

    <!-- footer start -->
    <div class="pt-5 pb-3 position-relative bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="me-5">
                        <a class="navbar-brand me-lg-4 me-auto" href="#">
                            <img src="/images/logo.png" height="30" class="d-inline-block align-top" alt=""/>
                        </a>
                        <p class="mt-4">300 Park Avenue, 12th Floor New York, NY 10022</p>
                        <p class="mb-5">1499 Burwell Heights Road Port Arthur Meadow Nashville, TX 77642</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-auto">
                            <div class="ps-md-5">
                                <h5 class="text-dark mb-4 fw-semibold">About</h5>
                                <ul class="list-unstyled">
                                    <li class="my-2"><a href="#" class="text-muted">Home</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">Portfolio</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">Resources</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="ps-md-5">
                                <h5 class="text-dark mb-4 fw-semibold">Company</h5>
                                <ul class="list-unstyled">
                                    <li class="my-2"><a href="#" class="text-muted">About</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">Career</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">Clients</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="ps-md-5">
                                <h5 class="text-dark mb-4 fw-semibold">Get in touch</h5>
                                <ul class="list-unstyled">
                                    <li class="my-1"><a href="#" class="text-muted">hello@prompt.com</a></li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="list-inline-item me-3">
                                        <a href="#" class="text-muted"><i class="icon-xs"
                                                                          data-feather="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a href="#" class="text-muted"><i class="icon-xs"
                                                                          data-feather="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-3">
                                        <a href="#" class="text-muted"><i class="icon-xs"
                                                                          data-feather="linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-muted"><i class="icon-xs" data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="ps-md-5">
                                <h5 class="text-dark mb-4 fw-semibold">Languages</h5>
                                <ul class="list-unstyled">
                                    <li class="my-2"><a href="#" class="text-muted">Francais</a></li>
                                    <li class="my-2"><a href="#" class="text-muted">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-muted">
                        <p class="pb-0 mb-0 fs-14 text-center text-muted">
                            <script>document.write(new Date().getFullYear())</script>
                            © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

@endsection
