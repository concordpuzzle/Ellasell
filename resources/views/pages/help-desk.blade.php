@extends('layouts.base', ['title' => 'Prompt - Get all Help'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="hero-4 pb-5 pt-7 py-sm-7 bg-gradient2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="hero-title">How can we help?</h1>
                    <p class="fs-17 text-muted">
                        Explore our knowledge badge to learn more about all the functionality Prompt is offering. If you
                        don't find what you are looking, feel free to contact our support team.
                    </p>

                    <div class="mt-5">
                        <div class="form-control-with-hint">
                            <input type="text" class="form-control" id="query" name="query"
                                   placeholder="Ask a question..."/>
                            <span class="form-control-feedback"><i class="icon-xs" data-feather="search"></i></span>
                        </div>
                    </div>

                    <div class="row align-items-center mt-1 g-0">
                        <div class="col-auto">
                            <div class="fw-medium text-uppercase text-muted mb-0 fs-13">
                                Recent searches:
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="text-muted ps-2">
                                How to prepare upload documents, Linking Payment Account
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- common start -->
    <section class="section py-5 py-lg-8 mb-5 mb-sm-0 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-5 mb-lg-0">
                                <span class="icon icon-md text-primary">
                                    @svg('/duotone-icons/code/Terminal')
                                </span>
                                <h4 class="mt-4 fw-semibold mb-0">Getting started</h4>
                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="my-3">
                                        <a href="" class="text-muted">General information</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">Signup help</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">Preparing the documents</a>
                                    </li>
                                </ul>
                                <a href="#" class="text-primary fw-medium">View More <i class="icon-xs ms-1"
                                                                                        data-feather="chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-5 mb-lg-0">
                                <span class="icon icon-md text-primary">
                                    @svg('/duotone-icons/communication/Address-card')
                                </span>
                                <h4 class="mt-4 fw-semibold mb-0">Managing my account</h4>
                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="my-3">
                                        <a href="" class="text-muted">Account information</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">Identity verification</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">Linking a paymeny method</a>
                                    </li>
                                </ul>
                                <a href="#" class="text-primary fw-medium">View More <i class="icon-xs ms-1"
                                                                                        data-feather="chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-5 mb-lg-0">
                                <span class="icon icon-md text-primary">
                                    @svg('/duotone-icons/code/Git#4')
                                </span>
                                <h4 class="mt-4 fw-semibold mb-0">API & Integrations</h4>
                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="my-3">
                                        <a href="" class="text-muted">Rest API Integrations</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">API SDKs</a>
                                    </li>
                                    <li class="my-3">
                                        <a href="" class="text-muted">Embed scripts</a>
                                    </li>
                                </ul>
                                <a href="#" class="text-primary fw-medium">View More <i class="icon-xs ms-1"
                                                                                        data-feather="chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-7 fw-semibold mb-0">Frequently Asked Questions</h4>
                    <p class="text-muted mx-auto">
                        Here are some of the basic types of questions for our customers
                    </p>
                    <div class="row mt-3">
                        <div class="col-lg-10">
                            <div id="faqContent">
                                <div class="accordion custom-accordionwitharrow mt-3 mb-lg-0 mb-4"
                                     id="accordionExample">
                                    <div class="card shadow-none mb-1 border rounded-sm">
                                        <a href="" class="text-dark" data-bs-toggle="collapse"
                                           data-bs-target="#collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="my-1 fw-medium">Can I use this template for my client?
                                                    <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-bs-parent="#accordionExample">
                                            <div class="card-body text-muted pt-1">
                                                Yup, the marketplace license allows you to use this theme in any end
                                                products. For more information on licenses, please refere license terms
                                                on marketplace.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-1 border rounded-sm">
                                        <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="my-1 fw-medium">Can this theme work with WordPress?
                                                    <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-bs-parent="#accordionExample">
                                            <div class="card-body text-muted pt-1">
                                                No. This is a HTML template. It won't directly with WordPress, though
                                                you can convert this into WordPress compatible theme.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow-none mb-0 border rounded-sm">
                                        <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="my-1 fw-medium">How do I get help with the theme?
                                                    <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-bs-parent="#accordionExample">
                                            <div class="card-body text-muted pt-1">
                                                Use our dedicated support email (support@coderthemes.com) to send your
                                                issues or feedback. We are here to help anytime.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow-none mb-0 border rounded-sm">
                                        <a href="" class="text-dark collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapseFour" aria-expanded="false"
                                           aria-controls="collapseFour">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="my-1 fw-medium">Will you regularly give updates of Prompt ?
                                                    <i class="icon-xs accordion-arrow" data-feather="chevron-down"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                             data-bs-parent="#accordionExample">
                                            <div class="card-body text-muted pt-1">
                                                Yes, We will update the Prompt regularly. All the future updates would
                                                be available without any cost.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded border sticky-el" data-margin-top="50">
                        <div class="card-body px-5 py-4">
                            <h4 class="fw-medium"><i class="icon icon-sm text-muted me-3" data-feather="life-buoy"></i>Support
                                center</h4>
                            <h5 class="text-muted fw-normal mb-4 pb-3"><span
                                    class="fw-medium">Can't find the answer?</span> We are here to help you all the
                                time.</h5>
                            <h5 class="fw-normal"><a href="{{ route('second', [ 'pages' , 'contact']) }}"
                                                     class="text-muted"><i class="icon-xs me-2"
                                                                           data-feather="message-square"></i>Talk to
                                    Support Team</a></h5>
                            <h5 class="fw-normal mt-3"><a href="#" class="text-muted"><i class="icon-xs me-2"
                                                                                         data-feather="mail"></i>help@coderthemes.com</a>
                            </h5>
                            <h5 class="fw-normal mt-3"><a href="#" class="text-muted"><i class="icon-xs me-2"
                                                                                         data-feather="twitter"></i>@coderthemes</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- common end -->


    <!-- cta + footer start -->
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
    <!-- cta + footer end -->

@endsection


