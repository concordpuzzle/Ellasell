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
                                <span class="d-inline-block" data-toggle="typed"
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


    <!-- feature start -->
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-semibold">Bring your store to the next level.</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your marketing
                        better.
                    </p>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="300">
                    <span class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                        @svg('/duotone-icons/communication/Sending mail')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Insight Reports</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Praesent ipsum libero, sollicitudin elementum et, condimentum non augue.
                    </p>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
                    <span class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange">
                        @svg('/duotone-icons/shopping/Chart-line#1')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Explore with AI</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Mauris dapibus blandit hendrerit. Proin auctor est at bibendum odio faucibus sodales.
                    </p>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="900">
                    <span class="bg-soft-info avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-info">
                        @svg('/duotone-icons/code/Settings#4')
                    </span>

                    <h4 class="mt-3 mb-2 fw-semibold">Strategize & Do</h4>
                    <p class="mb-4 pb-3 text-muted">
                        Fusce mattis nibh vel tortor scelerisque, a pretium dolor posuere.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->

    <!-- features start -->
    <section class="my-lg-5 py-5 py-sm-7 bg-gradient2 position-relative" data-aos="fade-up">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-4 fw-semibold">Why Choose Ellasell</h1>
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
                                    <h5 class="m-0">Private & Secure</h5>
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
                                    <h5 class="m-0">Built for Small Businesses</h5>
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
                                    <h5 class="m-0">Actionable Sales Plans</h5>
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
                                    <h5 class="m-0">Seamless Integration</h5>
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
                                    <h5 class="m-0">Sales Optimization Tools</h5>
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
                                    <h5 class="m-0">Insightful AI Checkups</h5>
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
                                    <h5 class="m-0">Easy-to-Use Platform</h5>
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
                        © Sybl, LLC. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
@endsection
