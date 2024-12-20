@extends('layouts.base', ['title' => 'Prompt | Portfolio Landing Page'])

@section('content')

    <div class="header-6">
        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

        <section class="hero-3 pt-7 position-relative hero-with-shapes">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="shape3"></div>

            <div class="container hero-container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <h4 class="mt-4 pt-2"><span>Hola!</span> I am Greeva N.</h4>

                        <h1 class="hero-title">I'm a freelance UX/UI Designer.</h1>
                        <p class="mt-3 fs-16 text-secondary">
                            A top-notch web designer helping business to craft their meaningful and interactive product
                            experiences
                        </p>

                        <div class="pt-3 pt-sm-5">
                            <a href="#contact-me-form" class="btn btn-danger" data-toggle="smooth-scroll">Hire Me</a>
                            <a href="#" class="btn btn-outline-danger ms-2">Download CV</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="img-container text-center text-lg-end" data-aos="fade-up" data-aos-duration="500">
                            <img src="/images/hero/portfolio1.png" class="img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- services start -->
    <section class="position-relative py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-start">
                    <h1 class="display-5 fw-semibold">What I Do</h1>
                    <p class="text-muted mx-auto">
                        Connecting brands and companies with their customers through <span
                            class="text-danger fw-medium">good design</span>.
                    </p>
                </div>
            </div>
            <div class="row pt-5 align-items-center features-9">
                <div class="col-lg-4">
                    <div class="card shadow feature-item rounded-0" data-aos="fade-up" data-aos-duration="600">
                        <div class="card-body text-start">
                            <div class="bg-soft-danger avatar avatar-sm icon icon-with-bg icon-xs text-danger">
                                @svg('/duotone-icons/design/Color-profile')
                            </div>
                            <h4 class="mt-4 text-dark">UI/UX Design</h4>
                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow feature-item rounded-0" data-aos="fade-up" data-aos-duration="900">
                        <div class="card-body text-start">
                            <div class="bg-soft-danger avatar avatar-sm icon icon-with-bg icon-xs text-danger">
                                @svg('/duotone-icons/design/Substract')
                            </div>
                            <h4 class="mt-4 text-dark">Product Design</h4>
                            <p class="text-muted mb-0">All the Lorem Ipsum generators on the Internet tend to repeat
                                predefined chunks as necessary making.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow feature-item rounded-0" data-aos="fade-up" data-aos-duration="1200">
                        <div class="card-body text-start">
                            <div class="bg-soft-danger avatar avatar-sm icon icon-with-bg icon-xs text-danger">
                                @svg('/duotone-icons/design/Image')
                            </div>
                            <h4 class="mt-4 text-dark">Frontend Development</h4>
                            <p class="text-muted mb-0">The standard chunk of Lorem Ipsum used since the 1500s is
                                reproduced below for those interested</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- portfolio items start -->
    <section class="py-lg-5 pb-5 pt-2 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-start">
                    <h1 class="display-5 fw-medium">Latest Projects</h1>
                </div>

                <div class="col-auto">
                    <ul class="nav nav-pills pe-0 me-0 aling-items-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill active" id="pills-design-tab" data-bs-toggle="pill"
                               href="#pills-design" role="tab" aria-selected="true">UI/UX Design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="pills-branding-tab" data-bs-toggle="pill"
                               href="#pills-design" role="tab" aria-selected="false">Branding</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="pills-marketing-tab" data-bs-toggle="pill"
                               href="#pills-design" role="tab" aria-selected="false">Marketing</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="pills-web-tab" data-bs-toggle="pill"
                               href="#pills-design" role="tab" aria-selected="false">Web Development</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-design" role="tabpanel"
                             aria-labelledby="pills-design-tab">
                            <div class="row features-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="col-lg-6">
                                    <div class="bg-light ps-5 pt-5 mb-4 mb-sm-5 rounded feature-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <h3 class="text-dark mt-0">Project</h3>
                                            </div>
                                            <div class="col text-end pe-5">
                                                Branding, Interaction, Web Design
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <img src="/images/features/agency1.jpg" alt=""
                                                     class="img-fluid shadow rounded"/>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-danger btn-sm btn-view shadow-lg">
                                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="bg-light ps-5 pt-5 mb-4 mb-sm-5 rounded feature-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <h3 class="text-dark mt-0">Project 2</h3>
                                            </div>
                                            <div class="col text-end pe-5">
                                                Branding, Web Design & Development
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <img src="/images/features/agency2.jpg" alt=""
                                                     class="img-fluid shadow rounded"/>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-danger btn-sm btn-view shadow-lg">
                                                View Project <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row features-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="col-lg-6">
                                    <div class="bg-light ps-5 pt-5 mb-4 mb-sm-5 rounded feature-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <h3 class="text-dark mt-0">Project 3</h3>
                                            </div>
                                            <div class="col text-end pe-5">
                                                Branding, Interaction, Web Design
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <img src="/images/features/agency2.jpg" alt=""
                                                     class="img-fluid shadow rounded"/>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-danger btn-sm btn-view shadow-lg">
                                                View Project
                                                <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="bg-light ps-5 pt-5 mb-4 mb-sm-5 rounded feature-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <h3 class="text-dark mt-0">Project 4</h3>
                                            </div>
                                            <div class="col text-end pe-5">
                                                Branding, Web Design & Development
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <img src="/images/features/agency1.jpg" alt=""
                                                     class="img-fluid shadow rounded"/>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-danger btn-sm btn-view shadow-lg">
                                                View Project
                                                <i class="icon-xs ms-2" data-feather="arrow-right"></i>
                                            </a>
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
    <!-- portfolio items end -->

    <!-- testimonials start -->
    <section class="section mt-5 py-4 py-sm-8 bg-gradient4 position-relative overflow-hidden" data-aos="fade-up"
             data-aos-duration="600">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container testimonials-3">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-5 fw-medium">Kind words from excellent clients</h1>
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
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card mb-0 shadow border">
                                    <div class="card-body p-md-5">
                                        <p class="mb-4 mt-0">
                                            A very professional, proactive, helpful, trustworthy, valuable...these
                                            are some of the words that come to mind when I think about Greeva N.
                                        </p>
                                        <div class="d-flex text-align-start">
                                            <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                 alt="" height="36"/>
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">Cersei Lannister</h6>
                                                <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                            </div>
                                            <img class="" src="/images/brands/google.svg" alt="" height="32"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-0 border">
                                    <div class="card-body p-md-5">
                                        <p class="mb-4 mt-0">
                                            A highly professional and gets the job done with great quality. She
                                            worked on designing our project management intarface and the output was
                                            simply awesome. Just perfect!
                                        </p>
                                        <div class="d-flex text-align-start">
                                            <img class="me-2 rounded-circle" src="/images/avatars/img-5.jpg"
                                                 alt="" height="36"/>
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">John Stark</h6>
                                                <p class="my-0 text-muted fs-13">Engineering Director</p>
                                            </div>
                                            <img class="" src="/images/brands/amazon.svg" alt="" height="32"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-0 shadow border">
                                    <div class="card-body p-md-5">
                                        <p class="mb-4 mt-0">
                                            A very professional, proactive, helpful, trustworthy, valuable...these
                                            are some of the words that come to mind when I think about Greeva N.
                                        </p>
                                        <div class="d-flex text-align-start">
                                            <img class="me-2 rounded-circle" src="/images/avatars/img-8.jpg"
                                                 alt="" height="36"/>
                                            <div class="flex-grow-1">
                                                <h6 class="m-0">Cersei Lannister</h6>
                                                <p class="my-0 text-muted fs-13">Senior Project Manager</p>
                                            </div>
                                            <img class="" src="/images/brands/google.svg" alt="" height="32"/>
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


    <!-- cta start -->
    <section class="section pt-lg-8 pb-lg-4 pt-4 pb-3 position-relative" id="contact-me-form">
        <div class="container testimonials-3">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="600">
                    <h1 class="display-5 fw-medium">Just say hi.</h1>
                    <p>
                        I am open to discuss your next project, improve user experience of an existing one or help with
                        your UX/UI design challenges.
                    </p>

                    <div class="mt-5 text-muted">Email me at</div>
                    <div>
                        <h4 class="mt-0 fw-medium">
                            <a href="mailto:support@coderthemes.com" class="">hello@coderthemes.com</a>
                        </h4>
                    </div>

                    <div class="mt-5 text-muted">Social</div>
                    <ul class="list-inline mt-1">
                        <li class="list-inline-item me-3">
                            <a href="#" class=""><i class="icon-sm icon-dual" data-feather="dribbble"></i></a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="#" class=""><i class="icon-sm icon-dual" data-feather="facebook"></i></a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="#" class=""><i class="icon-sm icon-dual" data-feather="twitter"></i></a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="#" class=""><i class="icon-sm icon-dual" data-feather="linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class=""><i class="icon-sm icon-dual" data-feather="instagram"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="900">
                    <form name="ajax-form" id="ajax-form"
                          action="https://formsubmit.io/send/9f03c2e4-7d62-4365-8862-117ed9936724" method="post"
                          class="form-main mt-5 mt-lg-0">

                        <div class="row">
                            <div class="mb-3 col-12">
                                <input class="form-control" id="name2" name="name" placeholder="Your name" type="text"
                                       value="">
                                <div class="error visually-hidden" id="err-name">Please enter name</div>
                            </div>
                            <!-- /Form-name -->

                            <div class="mb-3 col-12">
                                <input class="form-control" id="email2" name="email" type="text"
                                       placeholder="Your email where we can reach" value="">
                                <div class="error visually-hidden" id="err-emailvld">E-mail is not a valid format
                                </div>
                            </div>
                            <!-- /Form-email -->

                            <div class="mb-3 col-12">
                                <input class="form-control" id="subject1" name="subject" placeholder="Subject"
                                       type="text" value="">
                            </div>
                            <!-- /Form-Subject -->
                        </div>
                        <!-- /row -->

                        <div class="row">
                            <div class="mb-3 col-12">
                                <textarea class="form-control" id="message2" name="message" rows="5"
                                          placeholder="Write your message here. Keep it simple, concise and intriguing!"></textarea>
                                <div class="error visually-hidden" id="err-message">Please enter message</div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

                        <div class="row">
                            <div class="col text-end">
                                <button type="submit" class="btn btn-danger" id="send">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- footer start -->
    <section class="section pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row align-items-center border-top border-light pt-4">
                <div class="col text-center">
                    <ul class="list-inline list-with-separator">
                        <li class="list-inline-item me-0"><a href="#">About</a></li>
                        <li class="list-inline-item me-0"><a href="#">Services</a></li>
                        <li class="list-inline-item me-0"><a href="#">Contact</a></li>
                    </ul>
                    <p class="mt-2">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
@endsection


