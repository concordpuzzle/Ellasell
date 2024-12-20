@extends('layouts.base', ['title' => 'Prompt - Pricing Page'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="hero-4 pb-5 pt-7 py-sm-7 bg-gradient2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="hero-title">Flexible plans that grow with you</h1>
                    <p class="fs-17 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- pricing 1 start -->
    <section class="section py-6 position-relative">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Plans</span>
                    <h1 class="display-5 fw-semibold">Pricing Plans</h1>
                    <p class="text-muted mx-auto">
                        Pricing that <span class="text-primary fw-bold">works</span> for everyone.</p>
                </div>
            </div>

            <div class="row align-items-center mt-0 mt-sm-5">
                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="300">
                        <div class="card-body text-center">
                            <h4 class="my-0 text-primary">Starter</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">49</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 600 minutes usage time</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal only</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add up to 10 attendees</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Technical support via email</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    &nbsp;
                                </li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary d-block">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border position-relative hoverable overflow-hidden" data-aos="fade-up"
                         data-aos-duration="700">
                        <div class="card-body text-center">
                            <span class="ribbon2 bg-primary text-white shadow">Popular</span>
                            <h4 class="my-0 text-primary">Professional</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">99</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 6000 minutes usage time</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal or a commercial client</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add up to 100 attendees</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Up to 5 teams</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Technical support via email</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card border hoverable" data-aos="fade-up" data-aos-duration="1100">
                        <div class="card-body text-center">
                            <h4 class="my-0 text-primary">Enterprise</h4>
                            <h1 class="mb-0">
                                <span class="fw-normal text-muted fs-13 align-top">$</span>
                                <span class="fw-bolder display-4">599</span>
                                <span class="fw-normal text-muted fs-13 align-middle"> / month</span>
                            </h1>

                            <ul class="list-unstyled border-top py-4 mt-4 text-start">
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Unlimited usage time</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Use for personal or a commercial client</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>Add Unlimited attendees</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <i class="align-middle icon-dual-success me-2 icon-xs" data-feather="check"></i>
                                    <span>24x7 Technical support via phone</span>
                                </li>
                                <li class="py-2 d-flex align-items-center">
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
    </section>
    <!-- pricing end -->

    <!-- benefits start -->
    <section class="pt-5 pb-7 career-service position-relative">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Benefits</span>
                    <h1 class="display-5 fw-semibold">All plans includes these benefits</h1>
                    <p class="text-muted mx-auto">Some benefits of the monthly/yearly subscription</p>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center pe-sm-5 pe-3 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/communication/Active-call')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Technical Support</h5>
                            <p class="text-muted mb-0">Our professional technical support team will help you out at
                                every step</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-md text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/map/Compass')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Technology</h5>
                            <p class="text-muted mb-0">A special training to get start with the platform by
                                professionals</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/media/Equalizer')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Growth Analysis</h5>
                            <p class="text-muted mb-0">A dedicated team to get insights around your growth every
                                month</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center pe-sm-5 mt-lg-5 mt-4">
                        <span
                            class="bg-soft-primary avatar avatar-md rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                            @svg('/duotone-icons/food/Beer')
                        </span>
                        <div class="flex-grow-1">
                            <h5 class="mt-0">Rewards</h5>
                            <p class="text-muted mb-0">A special reward for the most performing account every month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits end -->

    <!-- faq start -->
    <section class="section py-6 pt-sm-6 pb-sm-7 position-relative bg-light">
        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">FAQs</span>
                    <h1 class="display-5 fw-semibold">Frequently Asked Questions</h1>
                    <p class="text-muted mx-auto">
                        Here are some of the basic types of questions for our customers
                    </p>
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
        </div>
    </section>
    <!-- faq end -->

    <!-- cta starts -->
    <section class="section py-6 position-relative">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col text-center">
                    <h1 class="display-5 fw-semibold">Still have a question?</h1>
                    <p class="text-muted mx-auto">Explore your most suitable option below</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card shadow-none border mb-lg-0 rounded-sm" data-aos="fade-up" data-aos-duration="500">
                        <div class="card-body">
                            <h3 class="mt-0 fw-semibold">Get in touch</h3>
                            <p>Get in touch with our professional business development team and they'll answer your
                                question shortly</p>
                            <a href="{{ route('second', [ 'pages' , 'contact']) }}"
                               class="btn btn-outline-primary mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-none border mb-0 rounded-sm" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <h3 class="mt-0 fw-semibold">Explore Knowledge Base</h3>
                            <p>Learn more about all the features and functionality from our detailed knowledge base.</p>
                            <a href="{{ route('second', [ 'pages' , 'help-desk']) }}"
                               class="btn btn-outline-primary mt-4">Explore</a>
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


