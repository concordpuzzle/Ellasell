@extends('layouts.base', ['title' => 'Prompt - Blog'])

@section('content')

    <!-- header start -->
    <div class="header-7" style="background: url('/images/blog/hero.jpg') no-repeat;">
        <div class="overlay"></div>

        @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => false,'topbarColor' => 'navbar-dark', 'classList' => 'ms-auto','ctaButtonClass' => 'btn-white text-white btn-sm' ])

        <section class="hero-4 pb-5 pt-8 pt-lg-6 pb-lg-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center position-relative">
                        <h1 class="hero-title text-white">Blog</h1>
                        <p class="mt-4 fs-17 text-white">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                            aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- header end -->

    <!-- listing start -->
    <section class="py-6 position-relative">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-5">
                        <h5 class="me-2 fw-medium">Tags:</h5>
                        <div>
                            <a class="btn btn-sm btn-white mb-1" href="#">Business</a>
                            <a class="btn btn-sm btn-white mb-1" href="#">Community</a>
                            <a class="btn btn-sm btn-white mb-1" href="#">Announcement</a>
                            <a class="btn btn-sm btn-white mb-1" href="#">Tutorials</a>
                            <a class="btn btn-sm btn-white mb-1" href="#">Resources</a>
                            <a class="btn btn-sm btn-white mb-1" href="#">Interview</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row" data-aos="fade-up" data-aos-duration="300">
                        <div class="col-lg-8">
                            <!-- blog post start -->
                            <div class="card shadow-none">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img class="img-fluid rounded-sm" src="/images/blog/post1.jpg"
                                             alt="post image">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body d-flex flex-column h-100 py-0 ps-2 pe-3">
                                            <a class="" href="#">
                                                <span class="badge badge-soft-orange mb-1">Announcement</span>
                                            </a>

                                            <h3 class="mt-1 fw-semibold">
                                                <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                                    Announcing the free upgrade for the subscribed plans
                                                </a>
                                            </h3>

                                            <p class="text-muted">
                                                We are glad to announce that, we are going to upgrade all the subscribed
                                                accounts with the premium features this week...
                                                <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                            </p>

                                            <div class="mt-auto">
                                                <div class="d-flex">
                                                    <img class="me-2 rounded-sm" src="/images/avatars/img-4.jpg"
                                                         alt="" height="36">
                                                    <div class="flex-grow-1">
                                                        <h6 class="m-0 fs-13"><a href="">Emily Blunt</a></h6>
                                                        <p class="text-muted mb-0 fs-13">11 Mar, 2020 · 3 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog post end -->
                        </div>
                        <div class="col-lg-4">
                            <div class="border rounded px-4 py-3">
                                <div class="mb-4">
                                    <h4 class="mt-0">
                                        Get the latest on product development from Prompt
                                    </h4>
                                    <p class="text-muted">We send a weekly newsletter containing latest updates in
                                        product development</p>
                                </div>

                                <!-- Subscribe form start -->
                                <form novalidate="novalidate">
                                    <label class="visually-hidden form-label" for="email">Subscribe</label>
                                    <div class="mb-2">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Enter Your Email" aria-label="Enter Your Email" required="">
                                    </div>
                                    <a href="javascript:void(0);" type="submit" class="btn btn-primary d-block mb-1">Subscribe</a>
                                    <p><small>*No spam ever.</small></p>
                                </form>
                                <!-- Subscribe form end -->
                            </div>
                        </div>
                        <!-- blog post end -->
                    </div>

                    <!-- blog post start -->
                    <div class="row mt-6" data-aos="fade-up">
                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto1.jpg" alt="crypto"
                                     class="img-fluid d-block shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-orange mb-1">Announcement</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        Introducing new blazzing fast user interface
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    Introducing the blazzing fast user interface. The new UI is fast, secure and most
                                    user friendly...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto2.jpg" alt="app img"
                                     class="img-fluid shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-success mb-1">Tutorial</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        What you should know before considering the prompt
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    We are giving a pretty extensive guideline and context before you make your decision
                                    to consider prompt...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto1.jpg" alt="crypto"
                                     class="img-fluid d-block shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-info mb-1">Community</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        Your Way to a Successful Sales Campaigns
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    Explore a latest guideline for creating a successful online sales campaign using
                                    google adwords or facebook ads...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->

                    <!-- blog post start -->
                    <div class="row mt-6" data-aos="fade-up">
                        <div class="col-lg-8 h-100">
                            <div class="card shadow-none">
                                <div class="row h-100">
                                    <div class="col-md-5">
                                        <img class="img-fluid rounded-sm" src="/images/blog/post1.jpg"
                                             alt="post image">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body d-flex flex-column h-100 p-0 px-2">
                                            <a class="" href="#">
                                                <span class="badge badge-soft-info mb-1">Community</span>
                                            </a>

                                            <h3 class="mt-1 fw-semibold">
                                                <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                                    Will Web Design Ever Rule the World?
                                                </a>
                                            </h3>

                                            <p class="text-muted">
                                                The web is changed in the current era a lot. Many new trends are being
                                                used in the market at the moment...
                                                <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                            </p>

                                            <div class="mt-auto">
                                                <div class="d-flex">
                                                    <img class="me-2 rounded-sm" src="/images/avatars/img-2.jpg"
                                                         alt="" height="36">
                                                    <div class="flex-grow-1">
                                                        <h6 class="m-0 fs-13"><a href="">Greeva N</a></h6>
                                                        <p class="text-muted mb-0 fs-13">9 Mar, 2020 · 5 min read
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card card-listing-item">
                                <div class="card-img-top-overlay">
                                    <div class="overlay"></div>
                                    <span class="card-badge top-right bg-danger text-white">Resource</span>
                                    <img src="/images/blog/post3.jpg" alt="" class="card-img-top"/>

                                    <div class="card-overlay-bottom">
                                        <h2 class="fw-semibold">
                                            <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-white">Top 10 ideas to improve the team
                                                productivity</a>
                                        </h2>

                                        <div class="avatar-group mt-auto">
                                            <a href="" class="avatar-group-item shadow-lg">
                                                <img src="/images/avatars/img-7.jpg" alt="image"
                                                     class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                            </a>
                                            <a href="" class="avatar-group-item shadow-lg">
                                                <img src="/images/avatars/img-2.jpg" alt="image"
                                                     class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                            </a>
                                            <a href="" class="avatar-group-item shadow-lg">
                                                <img src="/images/avatars/img-4.jpg" alt="image"
                                                     class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->

                    <!-- blog post start -->
                    <div class="row mt-6" data-aos="fade-up">
                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto1.jpg" alt="crypto"
                                     class="img-fluid shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-orange mb-1">Announcement</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        Introducing new blazzing fast user interface
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    Introducing the blazzing fast user interface. The new UI is fast, secure and most
                                    user friendly...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto2.jpg" alt="app img"
                                     class="img-fluid shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-success mb-1">Tutorial</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        What you should know before considering the prompt
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    We are giving a pretty extensive guideline and context before you make your decision
                                    to consider prompt...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div>
                                <img src="/images/blog/crypto1.jpg" alt="crypto"
                                     class="img-fluid shadow rounded"/>

                                <div class="mt-3">
                                    <a href="#">
                                        <span class="badge badge-soft-info mb-1">Community</span>
                                    </a>
                                </div>

                                <h4 class="fw-semibold mt-1">
                                    <a class="" href="{{ route('second', [ 'pages' , 'blog-post']) }}">
                                        Your Way to a Successful Sales Campaigns
                                    </a>
                                </h4>

                                <p class="text-muted">
                                    Explore a latest guideline for creating a successful online sales campaign using
                                    google adwords or facebook ads...
                                    <a href="{{ route('second', [ 'pages' , 'blog-post']) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->


                    <!-- pagination start -->
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-white" href="javascript:void(0)"><i
                                        class="icon icon-xxs icon-left-arrow me-2"></i>Previous</a>
                                <a class="btn btn-sm btn-white ms-2" href="javascript:void(0)">Next<i
                                        class="icon-xxs icon-right-arrow ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </section>
    <!-- listing end -->

    <!-- footer starts -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-2 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <p class="text-muted mb-4 w-50">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit sed consequuntur ratione voluptatem sequi nesciunt.</p>
                </div>

                <div class="col-sm-auto">
                    <div class="px-md-5">
                        <h5 class="mb-4 mt-5 mt-lg-0">Resources</h5>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">Blog</a></li>
                            <li class="my-3"><a href="#" class="text-muted">FAQ</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Team of service</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="ps-md-5">
                        <h5 class="mb-4 mt-5 mt-lg-0">Company</h5>
                        <ul class="list-unstyled">
                            <li class="my-3"><a href="#" class="text-muted">About</a></li>
                            <li class="my-3"><a href="#" class="text-muted">Contact Us</a></li>
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
    <!-- footer ends -->

@endsection

