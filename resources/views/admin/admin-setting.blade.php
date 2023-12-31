@extends('admin.indexadmin')
@section('contentadmin')
    <div class="page-content">
        <!-- Top bar START -->
        <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
            <div class="container-fluid p-0">
                <div class="d-flex align-items-center w-100">

                    <!-- Logo START -->
                    <div class="d-flex align-items-center d-xl-none">
                        <a class="navbar-brand" href="index.html">
                            <img class="light-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile.svg" alt="">
                            <img class="dark-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile-light.svg" alt="">
                        </a>
                    </div>
                    <!-- Logo END -->

                    <!-- Toggler for sidebar START -->
                    <div class="navbar-expand-xl sidebar-offcanvas-menu">
                        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                            <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
                        </button>
                    </div>
                    <!-- Toggler for sidebar END -->

                    <!-- Top bar left -->
                    <div class="navbar-expand-lg ms-auto ms-xl-0">

                        <!-- Toggler for menubar START -->
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-animation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <!-- Toggler for menubar END -->

                        <!-- Topbar menu START -->
                        <div class="collapse navbar-collapse w-100" id="navbarTopContent">
                            <!-- Top search START -->
                            <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                                <div class="nav-item w-100">
                                    <form class="position-relative">
                                        <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
                                        <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Top search END -->
                        </div>
                        <!-- Topbar menu END -->
                    </div>
                    <!-- Top bar left END -->

                    <!-- Top bar right START -->
                    <div class="ms-xl-auto">
                        <ul class="navbar-nav flex-row align-items-center">

                            <!-- Notification dropdown START -->
                            <li class="nav-item ms-2 ms-md-3 dropdown">
                                <!-- Notification button -->
                                <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="bi bi-bell fa-fw"></i>
                                </a>
                                <!-- Notification dote -->
                                <span class="notif-badge animation-blink"></span>

                                <!-- Notification dropdown menu START -->
                                <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                    <div class="card bg-transparent">
                                        <div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                            <a class="small" href="#">Clear all</a>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-unstyled list-group-flush">
                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
                                                            <u class="small">Say congrats</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Larry Lawson Added a new course</h6>
                                                            <p class="small text-body m-0">What's new! Find out about new features</p>
                                                            <u class="small">View detail</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">New request to apply for Instructor</h6>
                                                            <u class="small">View detail</u>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Notif item -->
                                                <li>
                                                    <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Update v2.3 completed successfully</h6>
                                                            <p class="small text-body m-0">What's new! Find out about new features</p>
                                                            <small class="text-body">5 min ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Button -->
                                        <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                            <a href="#" class="stretched-link">See all incoming activity</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification dropdown menu END -->
                            </li>
                            <!-- Notification dropdown END -->

                            <!-- Profile dropdown START -->
                            <li class="nav-item ms-2 ms-md-3 dropdown">
                                <!-- Avatar -->
                                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                </a>

                                <!-- Profile dropdown START -->
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3">
                                        <div class="d-flex align-items-center">
                                            <!-- Avatar -->
                                            <div class="avatar me-3 mb-3">
                                                <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
                                            </div>
                                            <div>
                                                <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                                <p class="small m-0">example@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                    <li> <hr class="dropdown-divider"></li>
                                    <!-- Links -->
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                                    <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                                    <li> <hr class="dropdown-divider"></li>

                                    <!-- Dark mode options START -->
                                    <li>
                                        <div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                            <!-- <span>Mode:</span> -->
                                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                                    <use href="#"></use>
                                                </svg> Light
                                            </button>
                                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                                    <use href="#"></use>
                                                </svg> Dark
                                            </button>
                                            <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                                    <use href="#"></use>
                                                </svg> Auto
                                            </button>
                                        </div>
                                    </li>
                                    <!-- Dark mode options END-->
                                </ul>
                                <!-- Profile dropdown END -->
                            </li>
                            <!-- Profile dropdown END -->
                        </ul>
                    </div>
                    <!-- Top bar right END -->
                </div>
            </div>
        </nav>
        <!-- Top bar END -->

        <!-- Page main content START -->
        <div class="page-content-wrapper border">

            <!-- Title -->
            <div class="row">
                <div class="col-12 mb-3">
                    <h1 class="h3 mb-2 mb-sm-0">Admin Settings</h1>
                </div>
            </div>

            <div class="row g-4">
                <!-- Left side START -->
                <div class="col-xl-3">
                    <!-- Tab START -->
                    <ul class="nav nav-pills nav-tabs-bg-dark flex-column">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"><i class="fas fa-globe fa-fw me-2"></i>Website Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i class="fas fa-cog fa-fw me-2"></i>General Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i class="fas fa-bell fa-fw me-2"></i>Notification Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><i class="fas fa-user-circle fa-fw me-2"></i>Account Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-5"><i class="fas fa-sliders-h fa-fw me-2"></i>Social Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-6"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Email Settings</a> </li>
                    </ul>
                    <!-- Tab END -->
                </div>
                <!-- Left side END -->

                <!-- Right side START -->
                <div class="col-xl-9">

                    <!-- Tab Content START -->
                    <div class="tab-content">

                        <!-- Personal Information content START -->
                        <div class="tab-pane show active" id="tab-1">
                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Website Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <form class="row g-4 align-items-center">

                                        <!-- Input item -->
                                        <div class="col-lg-4">
                                            <label class="form-label">Site Name</label>
                                            <input type="text" class="form-control" placeholder="Site Name">
                                            <div class="form-text">Enter Website Name. It Display in Website and Email.</div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-lg-4">
                                            <label class="form-label">Site Copyrights</label>
                                            <input type="text" class="form-control" placeholder="Site Copyrights">
                                            <div class="form-text">Using for Contact and Send Email</div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-lg-4">
                                            <label class="form-label">Site Email</label>
                                            <input type="email" class="form-control" placeholder="Site Email">
                                            <div class="form-text">For Copyrights Text</div>
                                        </div>

                                        <!-- Textarea item -->
                                        <div class="col-12">
                                            <label class="form-label">Site Description</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                            <div class="form-text">For write brief description of your organization, or a Website.</div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Contact Phone</label>
                                            <input type="text" class="form-control" placeholder="Contact Phone">
                                            <div class="form-text">Using for Contact and Support</div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Support Email</label>
                                            <input type="email" class="form-control" placeholder="Support Email">
                                            <div class="form-text">For Support Email</div>
                                        </div>

                                        <!-- Radio items -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Allow Registration</label>
                                            <div class="d-sm-flex">
                                                <!-- Radio -->
                                                <div class="form-check radio-bg-light me-4">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Enable
                                                    </label>
                                                </div>
                                            <!-- Radio -->
                                                <div class="form-check radio-bg-light me-4">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Disable
                                                    </label>
                                                </div>
                                            <!-- Radio -->
                                                <div class="form-check radio-bg-light">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        On Request
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Textarea item -->
                                        <div class="col-12">
                                            <label class="form-label">Contact Address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                            <div class="form-text">Enter support Address</div>
                                        </div>

                                        <!-- Save button -->
                                        <div class="d-sm-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Card body END -->

                            </div>
                        </div>
                        <!-- Personal Information content END -->

                        <!-- General Settings content START -->
                        <div class="tab-pane" id="tab-2">

                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">General Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <form class="row g-4">

                                        <!-- Input item -->
                                        <div class="col-12">
                                            <label class="form-label">Main Site URL</label>
                                            <input type="text" class="form-control" placeholder="Site URL">
                                            <div class="form-text">Set your main website url.</div>
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Select Currency</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Select Currency</option>
                                                <option>USD</option>
                                                <option>Indian Rupee</option>
                                                <option>Euro</option>
                                                <option>British Pound</option>
                                            </select>
                                            <div class="form-text">Select currency as per Country</div>
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Select Language</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Select Language</option>
                                                <option>English</option>
                                                <option>Hindi</option>
                                                <option>German</option>
                                                <option>Spanish</option>
                                            </select>
                                            <div class="form-text">Select language as per Country</div>
                                        </div>

                                        <!-- Switch item -->
                                        <div class="col-lg-3">
                                            <label class="form-label">Maintainance mode</label>
                                            <div class="form-check form-switch form-check-lg mb-0">
                                                <input class="form-check-input mt-0 price-toggle me-2" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Make Site Offline</label>
                                            </div>
                                        </div>

                                        <!-- Textarea item -->
                                        <div class="col-lg-9">
                                            <label class="form-label">Maintainance Text</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                            <div class="form-text">Admin login on maintenance mode:<a href="#" class="ms-2">http://example.xyz/admin/login</a></div>
                                        </div>

                                        <!-- Save button -->
                                        <div class="d-sm-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Card body END -->

                            </div>
                        </div>
                        <!-- General Settings content END -->

                        <!-- Notification setting content START -->
                        <div class="tab-pane" id="tab-3">
                            <!-- Notification START -->
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Notifications Settings</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- General nofification -->
                                    <h6 class="mb-2">Choose type of notifications you want to receive</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy12" checked="">
                                        <label class="form-check-label" for="checkPrivacy12">Withdrawal activity</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                                        <label class="form-check-label" for="checkPrivacy2">Weekly report</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
                                        <label class="form-check-label" for="checkPrivacy3">Password change</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                                        <label class="form-check-label" for="checkPrivacy4">Play sound on a message</label>
                                    </div>

                                    <!-- Instructor notification -->
                                    <h6 class="mb-2 mt-4">Instructor Related Notification</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy11" checked="">
                                        <label class="form-check-label" for="checkPrivacy5">Joining new instructors</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy5">
                                        <label class="form-check-label" for="checkPrivacy5">Notify when the instructorss added new courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
                                        <label class="form-check-label" for="checkPrivacy6">Notify when instructors update courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy7">
                                        <label class="form-check-label" for="checkPrivacy7">Course weekly report</label>
                                    </div>

                                    <!-- Student notification -->
                                    <h6 class="mb-2 mt-4">Student Related Notification</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy8" checked="">
                                        <label class="form-check-label" for="checkPrivacy8">Joining new student</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy9">
                                        <label class="form-check-label" for="checkPrivacy9">Notify when students purchase new courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy10">
                                        <label class="form-check-label" for="checkPrivacy10">Course weekly report</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification START -->
                        </div>
                        <!-- Notification setting content END -->

                        <!-- Account setting content START -->
                        <div class="tab-pane" id="tab-4">
                            <!-- Activity logs -->
                            <div class="bg-light rounded-3 p-4 mb-3">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">Activity Logs</h6>
                                        <p class="mb-1 mb-md-0">You can save your all activity logs including unusual activity detected.</p>
                                    </div>
                                    <!-- Switch -->
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked>
                                    </div>
                                </div>
                            </div>

                            <!-- Change password -->
                            <div class="bg-light rounded-3 p-4 mb-3">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">Change Password</h6>
                                        <p class="mb-1 mb-md-0">Set a unique password to protect your account.</p>
                                    </div>
                                    <!-- Button -->
                                    <div>
                                        <a href="#" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</a>
                                        <p class="mb-0 small h6">Last change 10 Aug 2020</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 Step Verification -->
                            <div class="bg-light rounded-3 p-4">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">2 Step Verification</h6>
                                        <p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
                                    </div>
                                    <!-- Switch -->
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy13" checked>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Logs START -->
                            <div class="card border mt-4">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Active Logs</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Browser</th>
                                                    <th scope="col" class="border-0">IP</th>
                                                    <th scope="col" class="border-0">Time</th>
                                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Chrome On Window</td>

                                                    <!-- Table data -->
                                                    <td>173.238.198.108</td>

                                                    <!-- Table data -->
                                                    <td>12 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Mozilla On Window</td>

                                                    <!-- Table data -->
                                                    <td>107.222.146.90</td>

                                                    <!-- Table data -->
                                                    <td>08 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Chrome On iMac</td>

                                                    <!-- Table data -->
                                                    <td>231.213.125.55</td>

                                                    <!-- Table data -->
                                                    <td>06 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Mozilla On Window</td>

                                                    <!-- Table data -->
                                                    <td>37.242.105.138</td>

                                                    <!-- Table data -->
                                                    <td>02 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>


                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                    </div>
                                    <!-- Table END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                            <!-- Active Logs END -->
                        </div>
                        <!-- Account setting content END -->

                        <!-- Social Settings content START -->
                        <div class="tab-pane" id="tab-5">
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                    <h5 class="card-header-title mb-0">Social Media Settings</h5>
                                    <a href="#" class="btn btn-sm btn-primary mb-0">Add new</a>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <form class="row g-4">
                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-google text-google-icon me-2"></i>Enter google client ID</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-google text-google-icon me-2"></i>Enter google API</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>Enter facebook client ID</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>Enter facebook API</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Note -->
                                        <p class="mb-0"><b>In your app set all redirect URL like:</b> <u class="text-primary">https://app.eduport.abc/google/callback</u></p>

                                        <!-- Button -->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Social Settings content END -->

                        <!-- Email Settings content START -->
                        <div class="tab-pane" id="tab-6">
                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title mb-0">Email Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <div class="row g-4">

                                        <!-- Radio group items -->
                                        <div class="col-xl-8">
                                            <label class="form-label">Choose Email Drive</label>
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail1">
                                                    <label class="form-check-label" for="flexRadioEmail1">Send Mail</label>
                                                </div>

                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail2" checked>
                                                    <label class="form-check-label" for="flexRadioEmail2">SMTP</label>
                                                </div>

                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail3">
                                                    <label class="form-check-label" for="flexRadioEmail3">Mail</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP HOST</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6 col-xl-3">
                                            <label class="form-label">SMTP Port</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6 col-xl-3">
                                            <label class="form-label">SMTP Secure</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP Username</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP Passwod</label>
                                            <input type="password" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email From Address</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email From Name</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Email Send To</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Email Send to</option>
                                                <option>All Admin</option>
                                                <option>Instructors</option>
                                                <option>Students</option>
                                                <option>Visitors</option>
                                            </select>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email External Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Email Template -->
                                    <div class="row g-4 mt-4">
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Edit Email Template</h5>
                                            <a href="#" class="btn btn-sm btn-primary mb-0">Add Template</a>
                                        </div>
                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Welcome Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Send Email to User</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Password Change</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Unusual Login Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Password Reset Email by Admin</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Approve Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Reject Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Missing Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Submitted Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Cancel by User</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Order Placed</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Order Successfully</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Email Settings content END -->

                    </div>
                    <!-- Tab Content END -->
                </div>
                <!-- Right side END -->
            </div> <!-- Row END -->
        </div>
        <!-- Page main content END -->
    </div>
@endsection
