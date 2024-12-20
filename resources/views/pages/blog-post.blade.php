@extends('layouts.base', ['title' => 'Prompt - Blog Post'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-secondary btn-sm' ])

    <section class="hero-4 pb-5 pt-8 pt-lg-6 pb-sm-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Announcing-the-free-upgrade</li>
                        </ol>
                    </nav>

                    <div class="mt-4">
                        <a href="#">
                            <span class="badge badge-soft-orange mb-1">Announcement</span>
                        </a>
                    </div>
                    <h1 class="hero-title mt-0">Announcing the free upgrade for the subscribed plans</h1>
                </div>
            </div>

            <!-- author and sharing info start -->
            <div class="row mt-4 align-items-center">
                <div class="col-auto">
                    <div class="d-flex align-items-center">
                        <img class="me-2 avatar avatar-sm rounded-circle avatar-border"
                             src="/images/avatars/img-4.jpg" alt=""/>

                        <div>
                            <h5 class="m-0"><a href="">Emily Blunt</a></h5>
                            <p class="text-muted mb-0 fs-13">11 Mar, 2020 · 3 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-md-end">
                        <ul class="list-inline mb-0">
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
                </div>
            </div>
            <!-- author and sharing info end -->
        </div>
    </section>

    <!-- post content start -->
    <section class="position-relative pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at
                        inventore excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio eaque
                        sapiente pariatur iure ad necessitatibus in quod obcaecati natus consequatur. Sed dicta maiores,
                        eos culpa.
                    </p>
                    <p class="mb-4">
                        Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis eum nemo ipsum nobis, rem
                        illum cupiditate at quaerat amet qui recusandae hic, atque laboriosam perspiciatis? Esse quidem
                        minima, voluptas necessitatibus, officia culpa quo nulla, cupiditate iste vel unde magni.
                    </p>

                    <figure class="figure">
                        <!-- image -->
                        <img src="https://source.unsplash.com/GXNo-OJynTQ/1920x720" alt=""
                             class="figure-img img-fluid rounded"/>

                        <!-- image caption -->
                        <figcaption class="figure-caption text-center">
                            The image caption referencing the above image
                        </figcaption>
                    </figure>

                    <h3 class="mt-4">Itaque earum rerum hic tenetur sapiente delectu</h3>
                    <p class="mb-2">
                        Sed ut perspiciatis unde omnis iste natus the error sit voluptatem accusantium doloremque
                        laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt
                        explicabo Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta
                        nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus
                        omnis voluptas
                        assumenda est omnis dolor repellendus.
                    </p>

                    <blockquote class="blockquote p-4 my-4 bg-light">
                        <p class="">
                            Perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam
                            rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae
                            dicta sunt explicabo
                            tempore cum soluta.
                        </p>
                        <footer class="blockquote-footer mt-0">
                            <small class="fs-13">Christian Hall</small>
                        </footer>
                    </blockquote>

                    <p class="pb-2">
                        At vero eos et accusamus et iusto odio dignissimos ducimus that qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                        cupiditate provident similique
                        sunt in culpa qui officia deserunt mollitia animi id est laborum et fuga.
                    </p>
                    <p class="pb-2">
                        Itaque earum rerum hic tenetur sapiente delectu aut reiciendis voluptatibus maiores alias
                        consequ perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus
                        error sit voluptatem
                        accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore
                        veritatisquasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <p class="pb-2">
                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi
                        aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate lit
                        esse quam nihil
                        molestiae consequatur eligendi optio cumque nihil impedit quo minus id quod maxime placeat
                        facere possimus omnis voluptas assumenda est vel illum qui dolorem eum fugiat quo voluptas
                        aperiam, eaque ipsa quae ab
                        illo inventore.
                    </p>

                    <div data-toggle="image-gallery" data-delegate="a" data-type="image" data-enable-gallery="true"
                         class="mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="/images/photos/3.jpg" data-title="Office Desks">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="/images/photos/3.jpg" alt="" class="img-fluid rounded-sm">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="/images/photos/4.jpg" data-title="Meeting Room view">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="/images/photos/4.jpg" alt="" class="img-fluid rounded-sm"/>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="/images/photos/10.jpg" data-title="Outside view">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="/images/photos/10.jpg" alt="" class="img-fluid rounded-sm"/>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="/images/photos/5.jpg" data-title="A common seating area">
                                    <div class="card shadow rounded-sm">
                                        <div class="card-body p-1">
                                            <img src="/images/photos/5.jpg" alt="" class="img-fluid rounded-sm"/>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-2">Conclusion</h5>
                    <p>
                        Itaque earum rerum hic tenetur sapiente delectus aut reiciendis voluptatibus maiores alias
                        consequatur aut perferendis doloribus asperiores repellat qui dolorem ipsum quia dolor sit amet
                        consectetur velitsedquia
                        non numquam eius modi tempora incidunt.
                    </p>

                    <p class="mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i> Dream places</p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i> Walking/Hiking tours</p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i> Tennis lessons with expert
                        coaches</p>
                    <p class="mb-2"><i class="icon-xs icon me-2" data-feather="minus"></i> Sailing adventures</p>

                    <!-- tags start -->
                    <div class="mt-5">
                        <a class="btn btn-sm btn-soft-secondary mb-1" href="#">Startup</a>
                        <a class="btn btn-sm btn-soft-secondary mb-1" href="#">Website Design</a>
                        <a class="btn btn-sm btn-soft-secondary mb-1" href="#">Website Development</a>
                        <a class="btn btn-sm btn-soft-secondary mb-1" href="#">Bootstrap</a>
                    </div>
                    <!-- tags end -->

                    <!-- social sharing start -->
                    <ul class="list-inline mb-0 mt-4">
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
                    <!-- social sharing end -->
                </div>
            </div>
        </div>
    </section>
    <!-- post content end -->

    <!-- post navigation start -->
    <section class="position-relative pb-5">
        <div class="container">
            <div class="row border-top border-bottom py-4 align-items-center">
                <div class="col-lg-2 col-6">
                    <a class="btn btn-white" href="#" data-bs-toggle="popover" data-bs-placement="top"
                       data-bs-trigger="hover" data-bs-html="true" data-bs-content="<div class='d-flex align-items-center'>
                                                <img src='//images/blog/post1.jpg' width='60' class='me-3 rounded-sm' alt='thumb'>
                                                <div class='flex-grow-1'>
                                                    <h6 class='fs-14 fw-semibold mt-0 mb-1'>Introducing new blazzing fast user interface</h6>
                                                    <span class='d-block fs-13 text-muted'>by Emily Blunt</span>
                                                </div>
                                            </div>" title="">
                        <i class="icon-xs icon-left-arrow me-2"></i>
                        <span class="d-none d-sm-inline-flex">Prev Post</span>
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="d-flex justify-content-lg-center py-lg-0 py-4">
                        <div class="d-flex align-items-center">
                            <img class="me-3 avatar avatar-sm rounded-circle align-self-center"
                                 src="/images/avatars/img-4.jpg" alt=""/>

                            <div class="flex-grow-1">
                                <h5 class="m-0">
                                    <a href="">Emily Blunt</a>
                                </h5>
                                <p class="text-muted mb-0 fs-14">
                                    I write about the latest trend in web design and development.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 text-lg-end text-start col-6">
                    <a class="btn btn-white" href="#" data-bs-toggle="popover" data-bs-placement="top"
                       data-bs-trigger="hover" data-bs-html="true" data-bs-content="<div class='d-flex align-items-center'>
                                                <img src='//images/blog/post2.jpg' width='60' class='me-3 rounded-sm' alt='thumb'>
                                                <div class='flex-grow-1>
                                                    <h6 class='fs-14 fw-semibold mt-0 mb-1'>What you should know before...</h6>
                                                    <span class='d-block fs-13 text-muted'>by Emily Blunt</span>
                                                </div>
                                            </div>" title="">
                        <span class="d-none d-sm-inline-flex">Next Post</span>
                        <i class="icon-xs icon-right-arrow ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- post navigation end -->

    <!-- post comments start -->
    <section class="position-relative pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 class="mb-3">Comments<span
                                class="badge badge-soft-secondary fs-14 align-middle ms-2">3</span></h4>

                        <div class="d-flex align-items-top mt-4">
                            <img class="me-2 rounded-sm" src="/images/avatars/img-2.jpg" alt="" height="36">
                            <div class="flex-grow-1">
                                <h6 class="m-0">Sansa Stark </h6>
                                <p class="text-muted mb-0"><small>2 days ago</small></p>

                                <p class="my-1">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque.</p>

                                <div>
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm btn-link text-primary fw-medium p-0">
                                        <i class="icon-xxs icon me-1" data-feather="message-circle"></i>Reply
                                    </a>
                                </div>

                                <div class="d-flex align-items-top mt-4">
                                    <img class="me-2 rounded-sm" src="/images/avatars/img-6.jpg" alt=""
                                         height="36">
                                    <div class="flex-grow-1">
                                        <h6 class="m-0">Cersei Lannister </h6>
                                        <p class="text-muted mb-0"><small>1 day ago</small></p>

                                        <p class="my-1">Itaque earum rerum hic tenetur sapiente delectus aut reiciendis
                                            voluptatibus maiores alias consequatur aut perferendis</p>
                                        <div>
                                            <a href="javascript: void(0);"
                                               class="btn btn-sm btn-link text-primary fw-medium p-0">
                                                <i class="icon-xxs icon me-1" data-feather="message-circle"></i>Reply
                                            </a>
                                        </div>
                                    </div> <!-- end flex-body -->
                                </div> <!-- end flex-->
                            </div> <!-- end flex-body -->
                        </div>

                        <!--hr-->
                        <hr class="my-4"/>

                        <div class="d-flex align-items-top mt-4">
                            <img class="me-2 rounded-sm" src="/images/avatars/img-2.jpg" alt="" height="36">
                            <div class="flex-grow-1">
                                <h6 class="m-0">Sansa Stark </h6>
                                <p class="text-muted mb-0"><small>2 days ago</small></p>

                                <p class="my-1">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque.</p>

                                <div>
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm btn-link text-primary fw-medium p-0">
                                        <i class="icon-xxs icon me-1" data-feather="message-circle"></i>Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 mb-lg-0 mb-5">
                        <div class="card border">
                            <div class="card-body p-4">
                                <h4 class="mb-3 mt-0">Post a comment</h4>

                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                       placeholder="Name"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="exampleInputSubject1"
                                                       placeholder="Subject"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                          placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- post comments end -->

    <!-- footer starts -->
    <section class="pt-5 pb-4 bg-gradient3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand me-lg-4 mb-2 me-auto d-flex align-items-center pt-0" href="#">
                        <img src="/images/logo.png" height="30" alt=""/>
                    </a>
                    <h5 class="fw-normal text-muted mb-4 w-50">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.</h5>
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

