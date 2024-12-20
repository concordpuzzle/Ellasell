@extends('layouts.base', ['title' => 'Prompt - Portfolio Grid Example'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="hero-4 pb-5 pt-7 py-sm-7 bg-gradient2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="hero-title">Portfolio Grid</h1>
                    <p class="fs-17 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden py-5 py-md-6 py-lg-7">
        <div class="container">

            <!-- Filter -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center filter-menu" data-toggle='item-filter' data-menu-item=".filter-menu-item"
                         data-target-container="#filterable-content">
                        <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="web">Web Design</a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="graphic">Graphic Design</a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="illustrator">Illustrator</a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="photography">Photography</a>
                    </div>
                </div>
            </div>
            <!-- end row-->

            <div data-toggle="image-gallery" data-delegate="a" data-type="image" data-enable-gallery="true"
                 class="mt-5">
                <div class="row grid-portfolio" id="filterable-content">
                    <div class="col-sm-6 col-xl-4 filter-item all web illustrator">
                        <div class="card card-portfolio-item shadow border filter-item all web graphic">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/1.jpg" class="image-popup"
                                       data-title="Smart Desk v2.0">
                                        <img src="/images/photos/1.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Smart Desk v2.0</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-sm-6 col-xl-4 filter-item all graphic">
                        <div class="card card-portfolio-item shadow border">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/7.jpg" class="image-popup" data-title="Task Manager">
                                        <img src="/images/photos/7.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Task Manager</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4 filter-item all web photography">
                        <div class="card card-portfolio-item shadow border">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/3.jpg" class="image-popup"
                                       data-title="Portfolio Manager">
                                        <img src="/images/photos/3.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Portfolio Manager</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4 filter-item all illustrator">
                        <div class="card card-portfolio-item shadow border">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/4.jpg" class="image-popup"
                                       data-title="Smart Office v2.0">
                                        <img src="/images/photos/4.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Smart Office v2.0</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-sm-6 col-xl-4 filter-item all web photography">
                        <div class="card card-portfolio-item shadow border">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/5.jpg" class="image-popup"
                                       data-title="Online Conference">
                                        <img src="/images/photos/5.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Online Conference</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4 filter-item all graphic">
                        <div class="card card-portfolio-item shadow border">
                            <div class="p-2">
                                <div class="card-zoom">
                                    <a href="/images/photos/6.jpg" class="image-popup"
                                       data-title="Virtual Receptionist">
                                        <img src="/images/photos/6.jpg" class="card-img-top" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="mt-2">
                                    <h5 class="mt-0">Virtual Receptionist</h5>
                                    <p class="text-muted mb-1">Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 pb-md-0">
                <a class="btn btn-primary" href="#"><i data-feather="refresh-ccw" class="icon-xxs me-2"></i>Load
                    More</a>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
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

