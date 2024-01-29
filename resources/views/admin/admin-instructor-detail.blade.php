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
                    <h1 class="h3 mb-2 mb-sm-0">Instructor detail</h1>
                </div>
            </div>

            <div class="row g-4">

                <!-- Personal information START -->
                <div class="col-xxl-7">
                    <div class="card bg-transparent border rounded-3 h-100">

                        <!-- Card header -->
                        <div class="card-header bg-light border-bottom">
                            <h5 class="card-header-title mb-0">Personal Information</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Profile picture -->
                            <div class="avatar avatar-xl mb-3">
                                <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">
                            </div>

                            <!-- Information START -->
                            <div class="row">

                                <!-- Information item -->
                                <div class="col-md-6">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item">
                                            <span>Title:</span>
                                            <span class="h6 mb-0">Mr.</span>
                                        </li>

                                        <li class="list-group-item">
                                            <span>Full Name:</span>
                                            <span class="h6 mb-0">Louis Ferguson</span>
                                        </li>

                                        <li class="list-group-item">
                                            <span>User Name:</span>
                                            <span class="h6 mb-0">Lousifer</span>
                                        </li>

                                        <li class="list-group-item">
                                            <span>Mobile Number:</span>
                                            <span class="h6 mb-0">+123 456 789 10</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Information item -->
                                <div class="col-md-6">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item">
                                            <span>Email ID:</span>
                                            <span class="h6 mb-0">example@gmail.com</span>
                                        </li>

                                        <li class="list-group-item">
                                            <span>Location:</span>
                                            <span class="h6 mb-0">California</span>
                                        </li>

                                        <li class="list-group-item">
                                            <span>Joining Date:</span>
                                            <span class="h6 mb-0">29 Aug 2019</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Information item -->
                                <div class="col-12">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item">
                                            <span>Education:</span>
                                            <span class="h6 mb-0">Bachelor in Computer Graphics,</span>
                                            <span class="h6 mb-0">Masters in Computer Graphics</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Information item -->
                                <div class="col-12">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex">
                                            <span>Description:</span>
                                            <p class="h6 mb-0">As it so contrasted oh estimating instrument. Size like body someone had. Are conduct viewing boy minutes warrant the expense Tolerably behavior may admit daughters offending her ask own. Praise effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last in</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Information END -->
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
                <!-- Personal information END -->

                <!-- Student status chart START -->
                <div class="col-xxl-5">
                    <div class="row g-4">

                        <!-- Active student START -->
                        <div class="col-md-6 col-xxl-12">
                            <div class="card bg-transparent border overflow-hidden">
                                <!-- Card header -->
                                <div class="card-header bg-light border-bottom">
                                    <h5 class="card-header-title mb-0">Active Students</h5>
                                </div>
                                <!-- Card body -->
                                <div class="card-body p-0">
                                    <div class="d-sm-flex justify-content-between p-4">
                                        <h4 class="text-blue mb-0">984</h4>
                                        <p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last Week</p>
                                    </div>
                                    <!-- Apex chart -->
                                    <div id="activeChartstudent"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Active student END -->

                        <!-- Enrolled START -->
                        <div class="col-md-6 col-xxl-12">
                            <div class="card bg-transparent border overflow-hidden">
                                <!-- Card header -->
                                <div class="card-header bg-light border-bottom">
                                    <h5 class="card-header-title mb-0">New Enrollment</h5>
                                </div>
                                <!-- Card body -->
                                <div class="card-body p-0">
                                    <div class="d-sm-flex justify-content-between p-4">
                                        <h4 class="text-blue mb-0">140</h4>
                                        <p class="mb-0"><span class="text-success me-1">0.35%<i class="bi bi-arrow-up"></i></span>vs last Week</p>
                                    </div>
                                    <!-- Apex chart -->
                                    <div id="activeChartstudent2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Enrolled END -->

                    </div>
                </div>
                <!-- Student status chart END -->

                <!-- Instructor course list START -->
                <div class="col-12">
                    <div class="card bg-transparent border h-100">

                        <!-- Card header -->
                        <div class="card-header bg-light border-bottom">
                            <h5 class="mb-0">Courses List</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <!-- Table START -->
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Course Name</th>
                                            <th scope="col" class="border-0">Enrolled</th>
                                            <th scope="col" class="border-0">Status</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody>
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td class="d-flex align-items-center position-relative">
                                                <div class="w-60px"><img src="assets/images/courses/4by3/08.jpg" class="rounded" alt=""></div>
                                                <h6 class="table-responsive-title mb-0 ms-2"><a href="#" class="stretched-link">Building Scalable APIs with GraphQL</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>412</td>

                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td class="d-flex align-items-center position-relative">
                                                <div class="w-60px"><img src="assets/images/courses/4by3/02.jpg" class="rounded" alt=""></div>
                                                <h6 class="table-responsive-title mb-0 ms-2"><a href="#" class="stretched-link">Graphic Design Masterclass</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>254</td>

                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td class="d-flex align-items-center position-relative">
                                                <div class="w-60px"><img src="assets/images/courses/4by3/04.jpg" class="rounded" alt=""></div>
                                                <h6 class="table-responsive-title mb-0 ms-2"><a href="#" class="stretched-link">Learn Invision</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>0</td>

                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-warning bg-opacity-15 text-warning">Pending</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td class="d-flex align-items-center position-relative">
                                                <div class="w-60px"><img src="assets/images/courses/4by3/07.jpg" class="rounded" alt=""></div>
                                                <h6 class="table-responsive-title mb-0 ms-2"><a href="#" class="stretched-link">Deep Learning with React-Native</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>98</td>

                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-success bg-opacity-15 text-success">Live</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td class="d-flex align-items-center position-relative">
                                                <div class="w-60px"><img src="assets/images/courses/4by3/10.jpg" class="rounded" alt=""></div>
                                                <h6 class="table-responsive-title mb-0 ms-2"><a href="#" class="stretched-link">Bootstrap 5 From Scratch</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>58</td>

                                            <!-- Table data -->
                                            <td>
                                                <span class="badge bg-danger bg-opacity-15 text-danger">Cancel</span>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Table END -->
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->
                        <div class="card-footer bg-transparent">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card footer END -->
                    </div>
                </div>
                <!-- Instructor course list END -->

                <!-- Student review START -->
                <div class="col-12">
                    <div class="card bg-transparent border">

                        <!-- Card header START -->
                        <div class="card-header border-bottom bg-light">
                            <h5 class="mb-0">All Reviews</h5>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <!-- Table START -->
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Student Name</th>
                                            <th scope="col" class="border-0">Course Name</th>
                                            <th scope="col" class="border-0">Rating</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody>
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-xs mb-2 mb-md-0">
                                                        <img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a href="#">Building Scalable APIs with GraphQL</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-xs mb-2 mb-md-0">
                                                        <img src="assets/images/avatar/01.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Carolyn Ortiz</a></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a href="#">Graphic Design Masterclass</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-xs mb-2 mb-md-0">
                                                        <img src="assets/images/avatar/03.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a href="#">Deep Learning with React-Native</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-xs mb-2 mb-md-0">
                                                        <img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a href="#">Bootstrap 5 From Scratch</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-xs mb-2 mb-md-0">
                                                        <img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mt-2"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a href="#">Learn Invision</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                </ul>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info-soft mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Table END -->
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->
                        <div class="card-footer bg-transparent">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card footer END -->
                    </div>
                </div>
                <!-- Student review END -->

            </div> <!-- Row END -->
        </div>
        <!-- Page main content END -->

    </div>
@endsection
