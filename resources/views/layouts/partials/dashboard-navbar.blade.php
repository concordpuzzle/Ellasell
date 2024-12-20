<header>
    <nav class="navbar navbar-expand-lg topnav-menu {{$classList}} {{$sticky === true ? 'sticky' : ''}}">
        <div class="container {{$fixedWidth !== true ? '-fluid' : ''}}">
            <a class="navbar-brand me-lg-3 me-auto" href="{{ route('any', 'index') }}">
                <img src="/images/logo.png" height="30" class="d-inline-block align-top" alt=""/>
            </a>

            <a href="#" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content4"
               aria-controls="topnav-menu-content4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>

            <div class="collapse navbar-collapse" id="topnav-menu-content4">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="{{ route('second', [ 'account' , 'dashboard']) }}">
                            <div class="d-flex align-items-center">
                                <span class="icon-xs me-1 flex-shrink-0">
                                    @svg('/duotone-icons/layout/Layout-4-blocks')
                                </span>
                                <div class="flex-grow-1">Home</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon-xs me-1 flex-shrink-0">
                                    @svg('/duotone-icons/files/Group-folders')
                                </span>
                                <div class="flex-grow-1">Projects</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon-xs me-1 flex-shrink-0">
                                    @svg('/duotone-icons/text/Article')
                                </span>
                                <div class="flex-grow-1">Tasks</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon-xs me-1 flex-shrink-0">
                                    @svg('/duotone-icons/media/Equalizer')
                                </span>
                                <div class="flex-grow-1">Reports</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('second', [ 'account' , 'settings']) }}">
                            <div class="d-flex align-items-center">
                                <span class="icon-xs me-1 flex-shrink-0">
                                    @svg('/duotone-icons/shopping/Settings')
                                </span>
                                <div class="flex-grow-1">Settings</div>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center">
                    <!-- notification start -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="notifications" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-xs">
                                @svg('/duotone-icons/general/Notification#2')
                            </span>
                        </a>
                        <div class="dropdown-menu p-2" aria-labelledby="notifications">
                            <!-- notification item start -->
                            <a class="dropdown-item p-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-soft-primary avatar avatar-xs rounded icon icon-with-bg icon-xxs text-primary me-3 flex-shrink-0">
                                        @svg('/duotone-icons/communication/Add-user')
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium my-0 fs-13">New User Registered</h6>
                                        <span class="text-muted"><small>2 min ago</small></span>
                                    </div>
                                </div>
                            </a>
                            <!-- notification item end -->

                            <!-- notification item start -->
                            <a class="dropdown-item p-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-soft-orange avatar avatar-xs rounded icon icon-with-bg icon-xxs text-orange me-3 flex-shrink-0">
                                        @svg('/duotone-icons/communication/Chat-check')
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium my-0 fs-13">A new comment on your post</h6>
                                        <span class="text-muted"><small>3 min ago</small></span>
                                    </div>
                                </div>
                            </a>
                            <!-- notification item end -->

                            <!-- notification item start -->
                            <a class="dropdown-item p-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-soft-success avatar avatar-xs rounded icon icon-with-bg icon-xxs text-success me-3 flex-shrink-0">
                                        @svg('/duotone-icons/communication/Mail-attachment')
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium my-0 fs-13">A new message from</h6>
                                        <span class="text-muted"><small>10 min ago</small></span>
                                    </div>
                                </div>
                            </a>
                            <!-- notification item end -->

                            <!-- notification item start -->
                            <a class="dropdown-item p-2" href="#">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-soft-danger avatar avatar-xs rounded icon icon-with-bg icon-xxs text-danger me-3 flex-shrink-0">
                                        @svg('/duotone-icons/general/Like')
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium my-0 fs-13">A new like on your comment</h6>
                                        <span class="text-muted"><small>14 min ago</small></span>
                                    </div>
                                </div>
                            </a>
                            <!-- notification item end -->

                            <!-- view all start -->
                            <a href="#" class="mt-2 text-center bg-light fs-13 btn btn-light btn-sm d-block">View
                                All</a>
                            <!-- view all end -->
                        </div>
                    </li>
                    <!-- notification end -->

                    <!-- profile dropdown start -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle py-0" href="#" id="user" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/avatars/img-8.jpg"
                                         class="avatar avatar-xs rounded-circle me-2" alt=""/>
                                </div>
                                <div class="flex-grow-1 ms-1 lh-base">
                                    <span class="fw-semibold fs-13 d-block line-height-normal">Greeva N</span>
                                    <span class="text-muted fs-13">Admin</span>
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu p-2" aria-labelledby="user">
                            <!-- item start -->
                            <a class="dropdown-item p-2" href="#">
                                <i class="icon icon-xxs me-1 icon-dual" data-feather="user"></i>
                                Profile
                            </a>
                            <!-- item end -->

                            <!-- item start -->
                            <a class="dropdown-item p-2" href="#">
                                <i class="icon icon-xxs me-1 icon-dual" data-feather="settings"></i>
                                Settings
                            </a>
                            <!-- item end -->

                            <!-- item start -->
                            <a class="dropdown-item p-2" href="#">
                                <i class="icon icon-xxs me-1 icon-dual" data-feather="aperture"></i>
                                Support
                            </a>
                            <!-- item end -->

                            <div class="dropdown-divider"></div>

                            <!-- item start -->
                            <a class="dropdown-item p-2" href="#">
                                <i class="icon icon-xxs me-1 icon-dual" data-feather="unlock"></i>
                                Sign Out
                            </a>
                            <!-- item end -->
                        </div>
                    </li>
                    <!-- profile dropdown end -->
                </ul>
            </div>
        </div>
    </nav>
</header>
