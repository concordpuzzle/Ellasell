@extends('layouts.base', ['title' => 'Prompt - About Company'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="position-relative hero-9">

        <div class="hero-top">
            <div class="container">
                <div class="row py-7">
                    <div class="col">
                        <h1 class="hero-title fw-bold">
                            We are on a mission to
                            <span class="highlight highlight-info d-inline-block">revolutionize</span> the web
                        </h1>
                        <p class="mt-3 fs-17">
                            We are a full-stack web development studio, run by people who are very passionate about
                            making the web more beautiful
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative">
            <div class="hero-cta">
                <button class="btn btn-info btn-cta">Let's Have Talk</button>
            </div>
        </div>


        <div class="hero-bottom">
            <div class="jarallax hero-image" data-jarallax data-speed=".2"
                 style="background-image: url(/images/hero/coworking2.jpg);"></div>
        </div>
    </section>

    <section class="position-relative pt-8 pb-4">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4">
                    <span class="border border-top w-25 border-soft-primary d-block"></span>
                    <h1 class="display-5 fw-semibold mt-4">About Us</h1>
                </div>
                <div class="col-lg-4">
                    <p class="text-muted mb-4">Temporibus autem quibusdam et aut as officiis debitis aut rerum
                        necessitatibus saepe eveniet voluptates repudiandae sint et molestiae non recusandae itaque
                        earum rerum hic tenetur a sapiente delectus reiciendis.</p>
                </div>
                <div class="col-lg-4">
                    <p class="text-muted mb-4">Temporibus autem quibusdam et aut as officiis debitis aut rerum
                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae
                        itaque earum rerum hic tenetur a sapiente delectus reiciendis.</p>
                </div>
                <div class="col-lg-8 offset-lg-4">
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features start -->
    <section class="py-5 mb-xl-5 mb-lg-4 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-5">
                    <h1 class="display-5 fw-semibold">Build amazing things together</h1>
                    <p class="text-muted my-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium totam rem aperiam beatae vitae dicta sunt explicabo.</p>

                    <p class="text-muted my-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium totam rem aperiam beatae vitae dicta sunt explicabo.</p>

                    <a href="#" class="h6 text-primary">Learn more <i class="ms-2 icon-xxs"
                                                                      data-feather="arrow-right"></i></a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="img-content2 position-relative mt-4 mt-lg-0">
                        <div class="img-up mb-lg-0 mb-6">
                            <img src="/images/photos/3.jpg" alt="app img" class="img-fluid d-block shadow"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features end -->

    <!-- Counter start -->
    <section class="pt-8 pb-6 mb-4 mt-lg-4 bg-light position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-info px-2 py-1">Stats</span>
                    <h1 class="display-5 fw-medium">Prompt In Numbers</h1>
                    <p class="text-muted mx-auto"></p>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">
                        <span data-toggle="counter" data-from="10" data-to="100" data-decimals="0" data-duration="5"
                              data-options='{}'></span>+
                    </div>
                    <p class="mt-2 mb-0 fw-semibold">
                        Products Built
                    </p>
                    <p>helped clients across the globe</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">
                        $<span data-toggle="counter" data-from="5" data-to="21" data-decimals="0" data-duration="5"
                               data-options='{}'></span>M+
                    </div>
                    <p class="mt-2 mb-0 fw-semibold">
                        Revenue Generated
                    </p>
                    <p>across 10+ countries</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">
                        <span data-toggle="counter" data-from="10" data-to="100" data-decimals="0" data-duration="5"
                              data-options='{}'></span>+
                    </div>
                    <p class="mt-2 mb-0 fw-semibold">
                        Satisfied Clients
                    </p>
                    <p>across 100+ locations</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">
                        <span data-toggle="counter" data-from="1" data-to="10" data-decimals="0" data-duration="5"
                              data-options='{}'></span>+
                    </div>
                    <p class="mt-2 mb-0 fw-semibold">
                        Awards Won
                    </p>
                    <p>on Awwwards, CSS Design Awards</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter end -->

    <!-- Our team start -->
    <section class="pb-5 pt-6 mt-4 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-info px-2 py-1">Our Team</span>
                    <h1 class="display-5 fw-medium">Meet Our Team</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-dark fw-bold">Prompt</span> to manage your
                        workforce better.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-1.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Ana Russo</h5>
                            <p class="text-muted fw-medium mb-0">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-2.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Danette Payne</h5>
                            <p class="text-muted fw-medium mb-0">CTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-3.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Tammy Ward</h5>
                            <p class="text-muted fw-medium mb-0">VP, Product Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-4.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Paul Moore</h5>
                            <p class="text-muted fw-medium mb-0">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-5.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Harry Burris</h5>
                            <p class="text-muted fw-medium mb-0">PHP Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-6.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Patricia Ferraro</h5>
                            <p class="text-muted fw-medium mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-7.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Robert Smith</h5>
                            <p class="text-muted fw-medium mb-0">Graphic Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-8.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Lindsay Clark</h5>
                            <p class="text-muted fw-medium mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-2.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Lindsay Clark</h5>
                            <p class="text-muted fw-medium mb-0">Front-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-4.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Ernest Griffith</h5>
                            <p class="text-muted fw-medium mb-0">PHP Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-6.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Cecelia Poole</h5>
                            <p class="text-muted fw-medium mb-0">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-4 pb-md-3">
                        <img src="/images/avatars/img-3.jpg" alt="..."
                             class="img-fluid avatar-md d-block rounded me-3"/>
                        <div class="flex-grow-1">
                            <h5 class="mt-0 mb-1 fw-medium">Morris Hall</h5>
                            <p class="text-muted fw-medium mb-0">Graphic Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our team end -->

    <!-- Clients logo start -->
    <section class="py-5 mb-lg-6 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-info px-2 py-1">Investor</span>
                    <h1 class="display-5 fw-medium">We are backed by</h1>
                    <p class="text-muted mx-auto">
                        100+ clients trust <span class="text-dark fw-bold">Prompt</span> to drive
                        perfomance & engagement.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <img src="/images/brands/amazon.svg" alt="" height="45"/>
                </div>
                <div class="col offset-1">
                    <img src="/images/brands/google.svg" alt="" height="45"/>
                </div>
                <div class="col offset-1">
                    <img src="/images/brands/paypal.svg" alt="" height="45"/>
                </div>
                <div class="col offset-1">
                    <img src="/images/brands/shopify.svg" alt="" height="45"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients logo end -->

    <!-- footer start -->
    <section class="mt-lg-5 pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <p class="text-muted w-75">
                        Make your web application stand out with high-quality landing page
                    </p>
                </div>
                <div class="col-md-auto col-sm-6">
                    <div class="ps-md-5">
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
                <div class="col-md-auto col-sm-6">
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
                <div class="col-md-auto col-sm-6">
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
                <div class="col-md-auto col-6">
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

