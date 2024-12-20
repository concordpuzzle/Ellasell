@extends('layouts.base', ['title' => 'Prompt | Crypto Landing Page'])

@section('content')

    <div class="header-1">
        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-primary btn-sm' ])

        <section class="position-relative overflow-hidden hero-7 py-5">
            <div class="container">
                <div class="row align-items-center text-center text-sm-start">
                    <div class="col-lg-6">
                        <div class="">
                            <h1 class="mt-3 mb-4 pb-2 hero-title">
                                The <span class="highlight highlight-success d-inline-block">Fastest</span> & Secure way
                                to Buy, Sell and Trade
                                <span data-toggle="typed" data-strings='["Cryptocurrency^1000"]'></span>
                            </h1>
                            <p class="fs-16 text-muted">
                                A seamless, flexible and diverse platform to buy, sell and manage your cryptocurrency
                                portfolio
                            </p>

                            <div class="py-5">
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
                                        <button class="btn btn-primary mt-1 mt-sm-0">Get Started</button>
                                    </div>
                                </div>
                                <p class="text-muted mb-0 pt-2 fs-14">Already using Prompt? <a
                                        href="{{ route('second', [ 'auth' , 'login']) }}">Log In</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 hero-right">
                        <div class="img-container">
                            <img src="/images/hero/crypto.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Coins start -->
    <section class="pt-8 pb-5 position-relative overflow-hidden" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-semibold">Supported coins</h1>
                    <p class="text-muted mx-auto">
                        Fastest way to buy or sell <span class="text-dark fw-medium">popular</span> crypto coins.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/btc.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Bitcoin</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/eth.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Ethereum</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/usdt.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Tether</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/link.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Chainlink</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/bat.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Basic Attention Token</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/dash.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Dash</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/bnb.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Binance Coin</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center py-lg-2 my-4">
                        <img src="/images/icons/coins/xtz.svg" class="icon me-3" alt=""/>
                        <div class="flex-grow-1">
                            <h4 class="my-0 fw-medium">Tezos</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mt-4 mt-lg-2 text-center">
                    <a href="#" class="btn btn-primary">
                        View complete list <i class="ms-2 icon icon-xs" data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Coins end -->

    <!-- features start -->
    <section class="my-lg-5 py-5 py-sm-7 bg-gradient2 position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Why Choose Us</span>
                    <h1 class="display-5 fw-medium">The most trusted way to buy or sell crypto currency</h1>
                    <p class="text-muted mx-auto">
                        Here are the few reasons why you should choose us
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <span
                                    class="align-self-center bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/general/Shield-check')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Secure & Encrypted Transactions</h5>
                                    <p class="mb-0">
                                        Advanced payment and processing technologies, fine-tuned from more than 3 years
                                        development
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <span
                                    class="align-self-center bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/shopping/Credit-card')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Transparent Fees</h5>
                                    <p class="mb-0">
                                        Barbelless catfish pelican gulper candlefish thornfishGulf menhaden ribbonbearer
                                        riffle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <span
                                    class="align-self-center bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/general/Smile')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Easy to Use</h5>
                                    <p class="mb-0">
                                        Asiatic glassfish pilchard sandburrower, orangestriped triggerfish hamlet Molly
                                        Miller dogfish!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex text-align-start">
                                <span
                                    class="align-self-center bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/communication/Active-call')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="mt-0">Quality Support</h5>
                                    <p class="mb-0">
                                        Clownfish catfish antenna codlet alfonsino squirrelfish deepwater flathead sea
                                        lamprey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- Integration start -->
    <section class="position-relative py-xl-8 py-6 features-3" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mb-5 mb-lg-0">
                        <span
                            class="align-self-center bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-xs text-primary me-3">
                            @svg('/duotone-icons/code/Code')
                        </span>
                        <h1 class=" mb-1 my-4">Easy to Integrate - SDK</h1>
                        <p class="text-muted my-4">
                            Maecenas blandit aliquam sem, auctor accumsan mauris finibus pellentesque. In vestibulum ac
                            nunc ut rutrum. Donec mollis viverra magna vel tincidunt.
                        </p>
                        <p class="text-muted mt-3 mb-5">
                            Ut faucibus libero non tortor commodo, ac faucibus lectus fermentum. Sed sit amet ornare
                            turpis, ac lobortis urna.
                        </p>

                        <a href="#" class="btn btn-primary me-2">Explore the SDK</a>
                        <a href="#" class="btn btn-soft-primary">Documentation</a>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <img src="/images/other/code.jpg" alt="app img" class="img-fluid"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Integration end -->

    <!-- Stats start -->
    <section class="section pt-8 pb-6 bg-gradient3 position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Stats</span>
                    <h1 class="display-5 fw-medium">Prompt In Numbers</h1>
                    <p class="text-muted mx-auto"></p>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">
                        $<span data-toggle="counter" data-from="10" data-to="50" data-decimals="0" data-duration="5"
                               data-options='{}'></span>M+
                    </div>
                    <p class="mt-2 mb-0 fw-semibold">Value transacted</p>
                    <p>in overall sell/buy transactions</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">2.1M+</div>
                    <p class="mt-2 mb-0 fw-semibold">Transactions Processed</p>
                    <p>across 10+ countries</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">2M+</div>
                    <p class="mt-2 mb-0 fw-semibold">Satisfied Processed</p>
                    <p>across 100+ locations</p>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                    <div class="display-4 fw-normal">4.5</div>
                    <p class="mt-2 mb-0 fw-semibold">Star App Rating</p>
                    <p>on google play & apple store</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats end -->

    <!-- Blog start -->
    <section class="position-relative py-xl-8 py-6 features-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-medium">Useful Reading</h1>
                    <p class="text-muted mx-auto">Few articles to read to know more about cryptocurrency</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="mb-4" data-aos="fade-up" data-aos-duration="300">
                        <div class="crypto-blog-box position-relative">
                            <span class="ribbon bg-orange fw-medium">Announcement</span>
                            <img src="/images/blog/crypto1.jpg" alt="crypto"
                                 class="img-fluid d-block shadow rounded"/>
                        </div>
                        <p class="text-muted mt-3 mb-0 fs-14">May 19 2020 <b>·</b> 5 min read</p>
                        <h4 class="mt-1"><a href="#" class="text-dark">Introducing blazzing fast new user interface</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-4" data-aos="fade-up" data-aos-duration="600">
                        <div class="crypto-blog-box position-relative">
                            <span class="ribbon bg-danger fw-medium">Bitcoin</span>
                            <img src="/images/blog/crypto3.jpg" alt="app img"
                                 class="img-fluid d-block shadow rounded"/>
                        </div>
                        <p class="text-muted mt-3 mb-0 fs-14">May 18 2020 <b>·</b> 8 min read</p>
                        <h4 class="mt-1"><a href="#" class="text-dark">What you should know before buying bitcoin</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-4" data-aos="fade-up" data-aos-duration="900">
                        <div class="crypto-blog-box position-relative">
                            <span class="ribbon bg-primary fw-medium">Event</span>
                            <img src="/images/blog/crypto2.jpg" alt="app img"
                                 class="img-fluid d-block shadow rounded"/>
                        </div>
                        <p class="text-muted mt-3 mb-0 fs-14">May 13 2020 <b>·</b> 2 min read</p>
                        <h4 class="mt-1"><a href="#" class="text-dark">A biggest crypto event to attend this month</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->

    <!-- footer start -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand me-lg-4 mb-4 me-auto" href="#">
                        <img src="/images/logo.png" height="30" class="d-inline-block align-top" alt=""/>
                    </a>
                    <p class="text-muted w-75">
                        A seamless, flexible and diverse platform to buy, sell and manage your cryptocurrency portfolio
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

