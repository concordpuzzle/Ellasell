@extends('layouts.base', ['title' => 'Prompt | Startup Landing Page'])

@section('content')

    <div class="header-7">

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-secondary btn-sm' ])

        <section class="hero-4 pt-7 pb-3 py-sm-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="hero-title">
                            Smart Solution that convert Lead to <span
                                class="highlight highlight-warning d-inline-block">Customer</span>
                        </h1>
                        <p class="mt-4 fs-17">
                            An AI based solution which automatically follow ups with your leads and convert into
                            customers
                        </p>

                        <div class="pt-3 pt-sm-5">
                            <button class="btn btn-primary">Get Started</button>
                            <button class="btn btn-outline-primary ms-2">Know More</button>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="img-container text-end pt-5 pt-sm-0">
                            <img src="/images/hero/startup1.svg" alt="" class="img-fluid" data-aos="fade-left"
                                 data-aos-duration="1000"/>
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

    <!-- clients - reviews start -->
    <section class="py-5">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="fw-medium pb-3 mt-0">Join 10,000+ companies who trust Prompt.</h4>
                    <ul class="list-inline my-3">
                        <li class="list-inline-item me-4 me-lg-5">
                            <img src="/images/brands/amazon.svg" alt="" class="mb-2 mb-xl-0" height="36"/>
                        </li>
                        <li class="list-inline-item me-4 me-lg-5">
                            <img src="/images/brands/google.svg" alt="" class="mb-2 mb-xl-0" height="36"/>
                        </li>
                        <li class="list-inline-item me-4 me-lg-5">
                            <img src="/images/brands/paypal.svg" alt="" class="mb-2 mb-xl-0" height="36"/>
                        </li>
                        <li class="list-inline-item me-4 me-lg-5">
                            <img src="/images/brands/spotify.svg" alt="" class="mb-2 mb-xl-0" height="36"/>
                        </li>
                        <li class="list-inline-item">
                            <img src="/images/brands/shopify.svg" alt="" class="mb-2 mb-xl-0" height="36"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- clients - reviews end -->

    <!-- features start -->
    <section class="pt-lg-6 pt-4 pb-lg-6 pb-5 position-relative">
        <div class="container">
            <div class="row align-items-center mb-6 pb-lg-5">
                <div class="col-lg-5">
                    <div class="mb-4 mb-lg-0">
                        <span class="badge rounded-pill badge-soft-danger px-2 py-1">Feature</span>
                        <h1 class="display-4 fw-medium mb-3">Automate everything</h1>
                        <p class="text-muted mx-auto mb-4 pb-3">
                            You don't need to manully follow up with your visitors. The Prompt takes care of it and
                            follow up automatically with them to understand their needs
                        </p>
                        <a href="#" class="btn btn-outline-primary">
                            Learn more <i class="icon-xxs ms-1" data-feather="arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img src="/images/features/desktop1.gif" alt="" class="img-fluid" data-aos="fade-left"
                         data-aos-duration="1000"/>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bg-white p-2 rounded border shadow mb-lg-0 mb-3" data-aos="fade-right"
                         data-aos-duration="1500">
                        <img src="/images/hero/desktop.jpg" alt="" class="img-fluid"/>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-4 mt-lg-0">
                        <h1 class="display-4 fw-medium mb-3">Auto-tune your marketing campaigns</h1>
                        <p class="text-muted mx-auto mb-4 pb-3">
                            The prompts keeps an eye on your all marketting effort and auto tune the marketing campaigns
                            settings to make them perform better
                        </p>
                        <a href="#" class="btn btn-outline-primary">
                            Learn more <i class="icon-xxs ms-1" data-feather="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- integrations start -->
    <section class="my-5 py-6 bg-gradient2 position-relative">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Integrations</span>
                    <h1 class="display-5 fw-medium">Sync your data anywhere</h1>
                    <p class="text-muted mx-auto">
                        Sync your campaigns or other marketing data <span class="text-primary fw-bold">anywhere</span>.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0" src="/images/brands/slack.png"
                                     alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Slack</h5>
                                    <p class="mb-0">
                                        Slack is a platform for team communication: everything in one place, instantly
                                        searchable, available wherever you go
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0" src="/images/brands/fb.png"
                                     alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Facebook Lead Ads</h5>
                                    <p class="mb-0">
                                        Facebook lead ads make signing up for business information easy for people and
                                        more valuable for businesses
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0"
                                     src="/images/brands/salesforce.jpg" alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Salesforce</h5>
                                    <p class="mb-0">
                                        Salesforce is a leading enterprise customer relationship manager (CRM)
                                        application
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0" src="/images/brands/at.png"
                                     alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Airtable</h5>
                                    <p class="mb-0">
                                        Organize anything with Airtable, a modern database created for everyone
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0" src="/images/brands/gsheet.png"
                                     alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Google Sheets</h5>
                                    <p class="mb-0">
                                        Create, edit, and share spreadsheets with Google Sheets, and get automated
                                        insights from data
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <img class="me-4 align-self-center flex-shrink-0" src="/images/brands/ac.jpeg"
                                     alt="" height="60"/>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">ActiveCampaign</h5>
                                    <p class="mb-0">
                                        ActiveCampaign combines all aspects of email marketing into a single and
                                        easy-to-use platform
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- integration end -->

    <!-- pricing start -->
    <section class="my-5 py-5 position-relative">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Pricing</span>
                    <h1 class="display-5 fw-medium">Pricing Plans</h1>
                    <p class="text-muted mx-auto">
                        Pricing that <span class="text-primary fw-bold">works</span> for everyone.
                    </p>
                </div>
            </div>

            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive-lg w-lg-75 mx-lg-auto">
                        <table class="table">
                            <thead class="text-center">
                            <tr class="border-top">
                                <th scope="col" class="w-50"></th>
                                <th scope="col">
                                    <span class="text-dark">Starter</span>
                                    <small class="d-block text-body fw-normal">$40/mo</small>
                                </th>
                                <th scope="col" class="border-start border-end">
                                    <span class="text-dark">Professional</span>
                                    <span class="badge bg-orange rounded-pill ms-1">Popular</span>
                                    <small class="d-block text-body fw-normal">$60/mo</small>
                                </th>
                                <th scope="col" class="">
                                    <span class="text-dark">Enterprise</span>
                                    <small class="d-block text-body fw-normal">$300/mo</small>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-top">
                                <td>Landing pages</td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center border-start border-end">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Drag-and-drop editor</td>
                                <td></td>
                                <td class="text-center border-start border-end">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Email marketing</td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center border-start border-end">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Ad retargeting</td>
                                <td class="text-center">
                                    <span class="badge bg-info rounded-pill">Add-on Available</span>
                                </td>
                                <td class="text-center border-start border-end"></td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Messenger integration</td>
                                <td class="text-center"></td>
                                <td class="text-center border-start border-end"></td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Live chat</td>
                                <td class="text-center"></td>
                                <td class="text-center border-start border-end">
                                    <span class="badge bg-info rounded-pill">Add-on Available</span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>Conversational bots</td>
                                <td class="text-center"></td>
                                <td class="text-center border-start border-end">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            <tr class="border-top">
                                <td>SEO recommendations & optimizations</td>
                                <td class="text-center"></td>
                                <td class="text-center border-start border-end">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="icon icon-xs text-success">
                                        @svg('/duotone-icons/navigation/Check')
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- priding end -->

    <!-- cta + footer start -->
    <section class="py-3 bg-gradient3 position-relative">
        <div class="container">
            <div class="row align-items-center mt-3 mb-4 pb-1">
                <div class="col-lg-6">
                    <h2 class="text-dark fw-medium mt-0 mb-1">Ready to get started?</h2>
                    <p class="text-muted mb-0">Create your free 14-day trial account now</p>
                </div>

                <div class="col-lg-6">
                    <div class="text-lg-end mb-4 mb-xl-0">
                        <a href="#" class="btn btn-primary rounded-pill">Try it free for 14 days</a>
                        <a href="#" class="btn btn-link rounded-pill">Chat with us</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0"/>
        <div class="container pt-4">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto" href="#">
                        <img src="/images/logo.png" height="30" class="d-inline-block align-top" alt=""/>
                    </a>
                    <h5 class="fw-normal text-muted w-75">Make your saas application stand out with high-quality landing
                        page</h5>
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
                        <h6 class="mb-4 mt-5 mt-sm-2 fs-14 fw-semibold text-uppercase">Legal
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
    <!-- cta + footer end -->

@endsection


