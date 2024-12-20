@extends('layouts.base', ['title' => 'Prompt - Your Dashboard'])

@section('content')

    @include('layouts.partials.dashboard-navbar', ['fixedWidth' => true, 'sticky' => false,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto' ])

    <!-- page-content start -->
    <section class="position-relative overflow-hidden bg-gradient2 py-3 px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="mb-0">Hi Greeva</h3>
                        <p class="mt-1 fw-medium">Welcome to Prompt!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- profile widget star -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex">
                                        <img src="/images/avatars/img-8.jpg"
                                             class="img-fluid avatar-sm rounded-sm me-3" alt="..."/>
                                        <div class="flex-grow-1">
                                            <h4 class="mb-1 mt-0 fs-16">Ms. Greeva Navadiya</h4>
                                            <p class="text-muted pb-0 fs-14">Web & Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button"
                                           id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end"
                                             aria-labelledby="dropdownMenuLink-1">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                 data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                 data-feather="refresh-cw"></i>Refresh</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#"><i class="icon-xxs icon me-2"
                                                                                             data-feather="trash-2"></i>Deactivate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-inline py-3 border-bottom">
                                <li class="list-inline-item mb-sm-0 mb-2 me-sm-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xs icon me-1"
                                                                            data-feather="mail"></i>greeva@coderthemes.com</a>
                                </li>
                                <li class="list-inline-item mb-sm-0 mb-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xxs icon me-2"
                                                                            data-feather="phone"></i>+00 123-456-789</a>
                                </li>
                            </ul>

                            <div class="row align-items-center pt-1">
                                <div class="col-md-6">
                                    <p class="float-end mb-0">85%</p>
                                    <h6 class="fw-medium my-0">Project Completion</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                             aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-sm-0 mt-4">
                                    <p class="float-end mb-0">7.5</p>
                                    <h6 class="fw-medium my-0">Overall Rating</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 75%;"
                                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile widget end -->

                <!-- stats start -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-success me-3">
                                    <i class="icon-dual-success" data-feather="check-circle"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="mt-0 mb-0">21</h3>
                                    <p class="text-muted mb-0">Tasks Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div
                                    class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-info me-3 flex-shrink-0">
                                    <i class="icon-dual-info" data-feather="edit-3"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="mt-0 mb-0">21</h3>
                                    <p class="text-muted mb-0">Tasks Inprogress</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stats end -->

                <!-- revenue start -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1 mt-0 fs-16">Revenue</h4>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button"
                                           id="dropdownMenuLink-2" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end"
                                             aria-labelledby="dropdownMenuLink-2">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                 data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                 data-feather="refresh-cw"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="">$2,100.00</h1>
                            <p class="text-muted">Last Week</p>

                            <hr class="mb-1"/>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-success" data-feather="trending-up"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">15%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-danger" data-feather="trending-down"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">10%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- revenue end -->
            </div>

            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Recent Projects</h4>
                        </div>
                        <div class="col-auto text-end">
                            <a href="#" class="fw-semibold text-primary fs-13">View All <i
                                    class="ms-1 icon-xxs" data-feather="arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="row my-2">
                        <!-- project start -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- action start -->
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="text-muted fs-13 fw-medium mb-0">Aug 09, 2020</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <div class="dropdown">
                                                <a class="btn-link text-muted dropdown-toggle arrow-none" href="#"
                                                   role="button" id="dropdownMenuLink-3" data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                     aria-labelledby="dropdownMenuLink-3">
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="eye"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="edit-3"></i>Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="icon-xxs icon me-2"
                                                            data-feather="trash-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- action end -->

                                    <div class="mt-3">
                                        <h4 class="mt-0 mb-1">
                                            <a href="">Shreyu - Design Updates</a>
                                        </h4>
                                        <label class="mb-1 badge badge-soft-primary">Designing</label>

                                        <p class="text-muted fs-14 mt-3">Update shreyu with modern and latest
                                            trends...</p>
                                    </div>

                                    <!-- progress -->
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mt-0">Progress</h6>
                                            </div>
                                            <div class="col text-end">
                                                <small class="fw-semibold">75%</small>
                                            </div>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- progress end -->

                                    <!-- assignment start -->
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="avatar-group">
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-8.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-5.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- assignment end -->
                                </div>
                            </div>
                        </div>
                        <!-- project end -->

                        <!-- project start -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- action start -->
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="text-muted fs-13 fw-medium mb-0">Aug 10, 2020</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <div class="dropdown">
                                                <a class="btn-link text-muted dropdown-toggle arrow-none" href="#"
                                                   role="button" id="dropdownMenuLink-4" data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                     aria-labelledby="dropdownMenuLink-4">
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="eye"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="edit-3"></i>Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="icon-xxs icon me-2"
                                                            data-feather="trash-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- action end -->

                                    <div class="mt-3">
                                        <h4 class="mt-0 mb-1"><a href="">Prompt v2.0</a></h4>
                                        <label class="badge badge-soft-orange mb-1">Planning</label>

                                        <p class="text-muted fs-14 mt-3">Plan new features and functionality for
                                            prompt...</p>
                                    </div>

                                    <!-- progress -->
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mt-0">Progress</h6>
                                            </div>
                                            <div class="col text-end">
                                                <small class="fw-semibold">50%</small>
                                            </div>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- progress end -->

                                    <!-- assignment start -->
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="avatar-group">
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-8.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-5.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- assignment end -->
                                </div>
                            </div>
                        </div>
                        <!-- project end -->

                        <!-- project start -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- action start -->
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="text-muted fs-13 fw-medium mb-0">Aug 11, 2020</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <div class="dropdown">
                                                <a class="btn-link text-muted dropdown-toggle arrow-none" href="#"
                                                   role="button" id="dropdownMenuLink-5" data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                     aria-labelledby="dropdownMenuLink-5">
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="eye"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                                                         data-feather="edit-3"></i>Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="icon-xxs icon me-2"
                                                            data-feather="trash-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- action end -->

                                    <div class="mt-3">
                                        <h4 class="mt-0 mb-1"><a href="">Hyper React v4.0</a></h4>
                                        <label class="badge badge-soft-info mb-1">Development</label>

                                        <p class="text-muted fs-14 mt-3">Update shreyu with modern and latest
                                            trends...</p>
                                    </div>

                                    <!-- progress -->
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mt-0">Progress</h6>
                                            </div>
                                            <div class="col text-end">
                                                <small class="fw-semibold">60%</small>
                                            </div>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- progress end -->

                                    <!-- assignment start -->
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="avatar-group">
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-8.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                                <a href="" class="avatar-group-item mb-0">
                                                    <img src="/images/avatars/img-5.jpg" alt="image"
                                                         class="img-fluid avatar-xs rounded rounded-circle avatar-border"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- assignment end -->
                                </div>
                            </div>
                        </div>
                        <!-- project end -->
                    </div>
                </div>
            </div>
            <!-- recent projects end -->

            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Tasks</h4>
                        </div>
                        <div class="col-auto text-end">
                            <a href="#" class="fw-semibold text-primary fs-13">View All <i
                                    class="ms-1 icon-xxs" data-feather="arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- task start -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-sm-between">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="task1">
                                                <label class="form-check-label" for="task1">
                                                    Draft the new contract document for sales team
                                                </label>
                                            </div> <!-- end checkbox -->
                                        </div> <!-- end col -->
                                        <div class="col-lg-3">
                                            <span class="badge badge-soft-info rounded-pill">Today 10pm</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul class="list-inline text-sm-end mb-0" id="tooltip-container2">
                                                <li class="list-inline-item pe-3" id="tooltip-container2">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container2"
                                                          data-bs-placement="bottom" title="10 Subtasks are completed">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/text/Bullet-list')
                                                        </span>3/7
                                                    </span>
                                                </li>
                                                <li class="list-inline-item pe-3" id="tooltip-container4">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container4"
                                                          data-bs-container="#tooltip-container2"
                                                          data-bs-placement="bottom" title="5 Comments">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/communication/Mail-opened')
                                                        </span>21
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="badge badge-soft-danger p-1">High</span>
                                                </li>
                                            </ul>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- task end -->


                    <!-- task start -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-sm-between">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="task2">
                                                <label class="form-check-label" for="task2">
                                                    iOS App home page design
                                                </label>
                                            </div> <!-- end checkbox -->
                                        </div> <!-- end col -->
                                        <div class="col-lg-3">
                                            <span class="badge badge-soft-info rounded-pill">Today 5pm</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul class="list-inline text-sm-end mb-0" id="tooltip-container2">
                                                <li class="list-inline-item pe-3" id="tooltip-container3">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container3"
                                                          data-bs-placement="bottom" title="10 Subtasks are completed">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/text/Bullet-list')
                                                        </span>10/11
                                                    </span>
                                                </li>
                                                <li class="list-inline-item pe-3" id="tooltip-container5">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container5"
                                                          data-bs-container="#tooltip-container2"
                                                          data-bs-placement="bottom" title="5 Comments">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/communication/Mail-opened')
                                                        </span>05
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="badge badge-soft-orange p-1">Medium</span>
                                                </li>
                                            </ul>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- task end -->

                    <!-- task start -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-sm-between">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="task3">
                                                <label class="form-check-label" for="task3">
                                                    Enable analytics tracking
                                                </label>
                                            </div> <!-- end checkbox -->
                                        </div> <!-- end col -->
                                        <div class="col-lg-3">
                                            <span class="badge badge-soft-secondary rounded-pill">Tomorrow 5pm</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul class="list-inline text-sm-end mb-0">
                                                <li class="list-inline-item pe-3" id="tooltip-container6">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container6"
                                                          data-bs-placement="bottom" title="5 Subtasks are completed">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/text/Bullet-list')
                                                        </span>5/11
                                                    </span>
                                                </li>
                                                <li class="list-inline-item pe-3" id="tooltip-container6">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container5"
                                                          data-bs-placement="bottom" title="7 Comments">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/communication/Mail-opened')
                                                        </span>07
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="badge badge-soft-orange p-1">Medium</span>
                                                </li>
                                            </ul>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- task end -->

                    <!-- task start -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-sm-between">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="task4">
                                                <label class="form-check-label" for="task4">
                                                    Kanban board design
                                                </label>
                                            </div> <!-- end checkbox -->
                                        </div> <!-- end col -->
                                        <div class="col-lg-3">
                                            <span class="badge badge-soft-secondary rounded-pill">Sep 11, 3pm</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul class="list-inline text-sm-end mb-0">
                                                <li class="list-inline-item pe-3" id="tooltip-container7">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container7"
                                                          data-bs-placement="bottom" title="0 Subtasks are completed">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/text/Bullet-list')
                                                        </span>0/5
                                                    </span>
                                                </li>
                                                <li class="list-inline-item pe-3" id="tooltip-container8">
                                                    <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                          data-bs-container="#tooltip-container8"
                                                          data-bs-placement="bottom" title="3 Comments">
                                                        <span class="icon icon-xxs text-normal">
                                                            @svg('/duotone-icons/communication/Mail-opened')
                                                        </span>03
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="badge badge-soft-success p-1">Low</span>
                                                </li>
                                            </ul>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- task end -->

                    <div class="row mb-3 mt-4">
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"
                                          aria-hidden="true"></span>
                                    Load More
                                </button>
                            </div>
                        </div> <!-- end col-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-content end -->

    <!-- footer start -->
    <section class="section py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="list-inline list-with-separator mb-0">
                        <li class="list-inline-item me-0"><a href="#">About</a></li>
                        <li class="list-inline-item me-0"><a href="#">Privacy</a></li>
                        <li class="list-inline-item me-0"><a href="#">Terms</a></li>
                        <li class="list-inline-item me-0"><a href="#">Developers</a></li>
                        <li class="list-inline-item me-0"><a href="#">Support</a></li>
                        <li class="list-inline-item me-0"><a href="#">Careers <span
                                    class="align-middle badge badge-soft-info rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto text-md-end mt-2 mt-md-0">
                    <p class="fs-14 mb-0">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

@endsection

