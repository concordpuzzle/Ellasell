@extends('layouts.base', ['title' => 'Prompt - Portfolio Item'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="hero-4 pb-5 pt-7 py-sm-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="hero-title">Awesome Mobile App</h1>
                </div>
            </div>
            <!-- meta start -->
            <div class="row border-top border-bottom py-4 align-items-center mt-5">
                <div class="col">
                    <span class="fs-14">Client</span>
                    <h4 class="mt-1 fw-medium">Scarlet Johnson</h4>
                </div>
                <div class="col">
                    <span class="fs-14">Category</span>
                    <h4 class="mt-1 fw-medium">Mobile App</h4>
                </div>
                <div class="col">
                    <span class="fs-14">Crafted Date</span>
                    <h4 class="mt-1 fw-medium">Oct 12, 2019</h4>
                </div>
                <div class="col-auto">
                    <ul class="list-inline mb-0 me-3">
                        <li class="list-inline-item text-muted align-middle me-2 text-uppercase fs-13 fw-medium">
                            Share:
                        </li>
                        <li class="list-inline-item me-2 align-middle">
                            <a href="#">
                                <i class="icon-xs icon-dual-primary" data-feather="facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-2 align-middle">
                            <a href="#">
                                <i class="icon-xs icon-dual-info" data-feather="twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item align-middle">
                            <a href="#">
                                <i class="icon-xs icon-dual-danger" data-feather="instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a class="btn btn-outline-primary" href="#">Project Link</a>
                </div>
            </div>
            <!-- meta end -->
        </div>
    </section>

    <!-- portfolio content start -->
    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <figure class="figure">
                        <!-- image -->
                        <img src="https://source.unsplash.com/GXNo-OJynTQ/1920x720" alt=""
                             class="figure-img img-fluid rounded"/>

                        <!-- image caption -->
                        <figcaption class="figure-caption text-center">
                            The image caption referencing the above image
                        </figcaption>
                    </figure>
                </div>
            </div>

            <!-- description start -->
            <div class="row mt-5" data-aos="fade-up" data-aos-duration="300">
                <div class="col-lg-6">
                    <div class="pe-4">
                        <h3>About Client</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at
                            inventore excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio
                            eaque sapiente pariatur iure ad necessitatibus in quod obcaecati natus consequatur. Sed
                            dicta
                            maiores, eos culpa.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-4">
                        <h3>Project Description</h3>
                        <p>
                            Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis eum nemo ipsum nobis,
                            rem illum cupiditate at quaerat amet qui recusandae hic, atque laboriosam perspiciatis? Esse
                            quidem minima, voluptas necessitatibus, officia culpa quo nulla, cupiditate iste vel unde
                            magni.
                        </p>
                    </div>
                </div>
            </div>
            <!-- description end -->

            <!-- portfolio item images start -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div data-toggle="image-gallery" data-delegate="a" data-type="image" data-enable-gallery="true">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="https://source.unsplash.com/sScmok4Iq1o" data-title="Office Desks">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="https://source.unsplash.com/sScmok4Iq1o/1920x1260" alt=""
                                                 class="img-fluid rounded-sm">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="https://source.unsplash.com/6ba_vdgx_go" data-title="Office Desks">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="https://source.unsplash.com/6ba_vdgx_go/1920x1260" alt=""
                                                 class="img-fluid rounded-sm">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio item images end -->

            <!-- work description start -->
            <div class="row mt-5" data-aos="fade-up" data-aos-duration="300">
                <div class="col-lg-12">
                    <h3>What We Did?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at
                        inventore excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio
                        eaque sapiente pariatur iure ad necessitatibus in quod obcaecati natus consequatur. Sed dicta
                        maiores, eos culpa.
                    </p>

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center mb-2 mb-xl-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/design/Color-profile')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="my-0">UI/UX Design</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center mb-2 mb-xl-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/design/Component')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="my-0">Brand Identity</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center mb-2 mb-xl-0">
                                <span
                                    class="bg-soft-primary avatar avatar-sm rounded icon icon-with-bg icon-sm text-primary me-4 flex-shrink-0">
                                    @svg('/duotone-icons/design/Image')
                                </span>
                                <div class="flex-grow-1">
                                    <h5 class="my-0">Web Devblopment</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mt-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at
                        inventore excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio
                        eaque sapiente pariatur iure ad necessitatibus in quod obcaecati natus consequatur. Sed dicta
                        maiores, eos culpa.
                    </p>

                    <h5 class="mt-5">Technologies Used</h5>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i>Sketch & Illustrator</p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i>Raact JS</p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i>Django - A Web Framework in
                        Python
                    </p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i>PostgreSQL - Relational
                        Database
                        System</p>

                </div>
            </div>
            <!-- work description end -->
        </div>
    </section>
    <!-- portfolio content end -->

    <!-- testimonials start -->
    <section class="section pt-5 pb-7 position-relative features-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Feedback From Client</h3>
                </div>
            </div>
            <div class="row testimonials-2 mt-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="slider">
                        <div class="swiper testimonial-swiper-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried
                                                many project management apps for my daily tasks, but this one is far
                                                better
                                                than others. Simply loved it!
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">John Stark</h6>
                                                    <p class="my-0 text-muted fs-13">Engineering Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0 border rounded">
                                        <div class="card-body testimonial-body shadow">
                                            <p class="quotation-mark text-muted">“</p>
                                            <h4 class="fw-normal mb-3 mt-0">
                                                It is one of the very convenient to use project manager ever! I have
                                                tried
                                                many project management apps for my daily tasks, but this one is far
                                                better
                                                than others. Simply loved it!
                                            </h4>
                                            <hr/>
                                            <div class="d-flex pt-2">
                                                <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                     alt="" height="36"/>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">John Stark</h6>
                                                    <p class="my-0 text-muted fs-13">Engineering Director</p>
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


    <!-- navigation start -->
    <section class="position-relative pb-5">
        <div class="container">
            <div class="row border-top border-bottom py-4 align-items-center">
                <div class="col-md-4 col-sm-6 text-md-start text-center">
                    <a class="btn btn-white me-3" href="javascript:void(0)" data-bs-toggle="popover"
                       data-bs-placement="top"
                       data-bs-trigger="hover" data-bs-html="true" data-bs-content="<div class='d-flex align-items-center'>
                                                <img src='/images/blog/post1.jpg' width='60' class='me-3 rounded-sm' alt='thumb'>
                                                <div class='flex-grow-1'>
                                                    <h6 class='fs-14 fw-semibold mt-0 mb-1'>Introducing new blazzing fast user interface</h6>
                                                    <span class='d-block fs-13 text-muted'>by Emily Blunt</span>
                                                </div>
                                            </div>" title="">
                        <i class="icon-xs icon-left-arrow me-2"></i>
                        <span class="d-none d-sm-inline">Awesome Saas App</span>
                    </a>
                </div>
                <div class="col-md-4 text-md-center">
                    <a class="btn btn-white my-md-0 my-3" href="#">
                        View All
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-md-end">
                    <a class="btn btn-white" href="javascript:void(0)" data-bs-toggle="popover" data-bs-placement="top"
                       data-bs-trigger="hover" data-bs-html="true" data-bs-content="<div class='d-flex align-items-center'>
                                            <img src='/images/blog/post2.jpg' width='60' class='me-3 rounded-sm' alt='thumb'>
                                            <div class='flex-grow-1'>
                                                <h6 class='fs-14 fw-semibold mt-0 mb-1'>Awesome Desktop App</h6>
                                                <span class='d-block fs-13 text-muted'>Desktop App</span>
                                            </div>
                                    </div>" title="">
                        <span class="d-none d-sm-inline">Desktop App</span>
                        <i class="icon-xs icon-right-arrow ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- navigation end -->


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

