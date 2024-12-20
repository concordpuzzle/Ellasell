@extends('layouts.base', ['title' => 'Prompt - Account Settings'])

@section('content')

    @include('layouts.partials.dashboard-navbar', ['fixedWidth' => true, 'sticky' => false,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto' ])

    <!-- page-content start -->
    <section class="position-relative p-3 bg-gradient2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="my-0">Account Settings</h3>
                        <p class="mt-1 fw-medium">Change your account settings</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- menu start -->
                                    <ul class="nav navtab-bg nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="#account" data-bs-toggle="tab" aria-expanded="false"
                                               class="nav-link active">
                                                <span>Account</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-2">
                                            <a href="#password" data-bs-toggle="tab" aria-expanded="true"
                                               class="nav-link">
                                                <span>Password</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#notifications-form" data-bs-toggle="tab" aria-expanded="false"
                                               class="nav-link">
                                                <span>Notifications</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- menu end -->
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content p-0">
                                        <!-- account form start -->
                                        <div class="tab-pane fade show active px-3" id="account">
                                            <h4 class="mt-0">Account Information</h4>

                                            <form action="#" class="account-form">

                                                <!-- avatar start -->
                                                <h6 class="mt-4">Your Avatar</h6>
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img src="/images/avatars/img-8.jpg"
                                                             class="img-fluid avatar-md rounded-circle shadow"
                                                             alt="..."/>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="btn btn-outline-primary btn-sm">Upload</a>
                                                        <a href="#"
                                                           class="btn btn-outline-danger btn-sm ms-2">Remove</a>
                                                    </div>
                                                </div>
                                                <!-- avatar end -->

                                                <hr class="my-4"/>

                                                <!-- basic info start -->
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="name"
                                                                   class="form-label">Name<small>*</small></label>
                                                            <input type="text" class="form-control" id="name"
                                                                   placeholder="Your Name" name="name"
                                                                   value="Greeva Navadiya"/>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email<small>*</small></label>
                                                            <input type="email" class="form-control" id="email"
                                                                   placeholder="Email" name="email"
                                                                   value="greeva@coderthemes.com"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="display_name" class="form-label">Display
                                                                name</label>
                                                            <input type="text" class="form-control" id="display_name"
                                                                   aria-describedby="display_name"
                                                                   placeholder="Display Name" name="display_name"
                                                                   value="Greeva N"/>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Phone<small>*</small></label>
                                                            <input type="text" class="form-control" id="phone"
                                                                   name="phone" placeholder="Phone number"
                                                                   value="+1 254 024 5400"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- basic info end -->

                                                <hr class="my-2"/>

                                                <!-- privacy settings start -->
                                                <div class="row my-3">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Profile Visibility</label>

                                                            <div class="mt-1">
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="visibilityPublic" name="visibility"
                                                                           checked>
                                                                    <label class="form-check-label"
                                                                           for="visibilityPublic">Public</label>
                                                                </div>

                                                                <div class="form-check form-check-inline ms-3">
                                                                    <input type="radio" class="form-check-input"
                                                                           name="visibility" id="visibilityPrivate">
                                                                    <label class="form-check-label"
                                                                           for="visibilityPrivate">Private</label>
                                                                </div>
                                                            </div>

                                                            <small class="form-text text-muted mt-2">
                                                                Making your profile public means anyone can see your
                                                                information
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-2">
                                                        <div class="mb-3 mb-0">
                                                            <label class="form-label">Contact Info
                                                                Visibility</label>

                                                            <div class="mt-1">
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" class="form-check-input"
                                                                           id="visibilityPublic1" name="visibility1"
                                                                           checked>
                                                                    <label class="form-check-label"
                                                                           for="visibilityPublic1">Public</label>
                                                                </div>

                                                                <div class="form-check form-check-inline ms-3">
                                                                    <input type="radio" class="form-check-input"
                                                                           name="visibility1" id="visibilityPrivate1">
                                                                    <label class="form-check-label"
                                                                           for="visibilityPrivate1">Private</label>
                                                                </div>
                                                            </div>

                                                            <small class="form-text text-muted mt-2">
                                                                Making your contact info public means anyone can see
                                                                your email and phone number
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- privacy settings end -->

                                                <hr class="mb-2"/>

                                                <!-- account removal start -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row align-items-center my-2">
                                                            <div class="col">
                                                                <label class="form-label mb-0">
                                                                    Remove account
                                                                </label>
                                                                <small class="form-text text-muted">
                                                                    By removing your account you will lose all your data
                                                                </small>
                                                            </div>
                                                            <div class="col-lg-auto text-end">
                                                                <button type="button"
                                                                        class="btn btn-outline-danger btn-sm">Remove
                                                                    Account
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- account removal end -->

                                                <hr class="my-4"/>

                                                <!-- save start -->
                                                <div class="row mt-2">
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary">Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                        </div>
                                        <!-- account form end -->

                                        <!-- password start -->
                                        <div class="tab-pane fade px-3" id="password" style="min-height: 600px;">
                                            <h4 class="mt-0">Password</h4>

                                            <!-- form start -->
                                            <form action="#" class="password-form mt-4">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Current
                                                        Password<small>*</small></label>
                                                    <input type="password" class="form-control" id="current_password"
                                                           aria-describedby="current_password" name="current_password"/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">New
                                                        Password<small>*</small></label>
                                                    <input type="password" class="form-control" id="new_password"
                                                           aria-describedby="current_password" name="new_password"/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Confirm
                                                        Password<small>*</small></label>
                                                    <input type="password" class="form-control" id="confirm_password"
                                                           aria-describedby="current_password" name="confirm_password"/>
                                                </div>

                                                <hr class="my-4"/>

                                                <!-- save start -->
                                                <div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary">Update Password
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                            <!-- form end -->
                                        </div>
                                        <!-- password end -->

                                        <!-- notifications start -->
                                        <div class="tab-pane fade px-3" id="notifications-form"
                                             style="min-height: 600px;">
                                            <h4 class="mt-0">Notifications</h4>

                                            <!-- form start -->
                                            <form action="#" class="password-form mt-4">
                                                <div class="mb-3">
                                                    <label for="name">Send me an email, when</label>
                                                    <ul class="list-unstyled">
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="mention" checked>
                                                                <label class="form-check-label" for="mention">Someone
                                                                    mentions me</label>
                                                            </div>
                                                        </li>
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="replies">
                                                                <label class="form-check-label" for="replies">Someone
                                                                    replies to me</label>
                                                            </div>
                                                        </li>
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="share-content" checked>
                                                                <label class="form-check-label" for="share-content">Someone
                                                                    shares the content</label>
                                                            </div>
                                                        </li>
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="new-content">
                                                                <label class="form-check-label" for="new-content">There
                                                                    is a new published content</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <hr class="my-4"/>
                                                <div class="mb-3">
                                                    <label for="name">Other Subscriptions</label>
                                                    <ul class="list-unstyled">
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="newsletter" checked>
                                                                <label class="form-check-label" for="newsletter">Weekly
                                                                    newsletter</label>
                                                            </div>
                                                        </li>
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="weekly-jobs">
                                                                <label class="form-check-label" for="weekly-jobs">Weekly
                                                                    jobs</label>
                                                            </div>
                                                        </li>
                                                        <li class="mt-2">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="events" checked>
                                                                <label class="form-check-label" for="events">Events new
                                                                    me</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr class="my-4"/>

                                                <!-- save start -->
                                                <div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Preferences
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                            <!-- form end -->
                                        </div>
                                        <!-- notifications end -->
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <li class="list-inline-item me-0">
                            <a href="#">Careers
                                <span class="align-middle badge badge-soft-info rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto text-md-end mt-2 mt-md-0">
                    <p class="fs-14 mb-0">
                        <script>document.write(new Date().getFullYear())</script>
                        © Prompt. All rights reserved. Crafted by
                        <a href="https://coderthemes.com/">Coderthemes</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

@endsection
