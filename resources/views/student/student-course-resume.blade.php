@extends('index')
@section('content')
    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                        <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <div class="avatar avatar-xxl position-relative mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/09.jpg" alt="">
                                    <span class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="my-1 fs-4">Lori Stevens</h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">255</span>
                                            <span class="text-body fw-light">points</span>
                                        </li>
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">7</span>
                                            <span class="text-body fw-light">Completed courses</span>
                                        </li>
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">52</span>
                                            <span class="text-body fw-light">Completed lessons</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless collapse-list">
                                    <a class="list-group-item" href="student-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                    <a class="list-group-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
                                    <a class="list-group-item" href="student-course-list.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    <a class="list-group-item active" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
                                    <a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                    <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
                                    <a class="list-group-item" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
                                    <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                    <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                    <!-- Collapse menu -->
                                    <a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
                                        <i class="bi bi-lock fa-fw me-2"></i>Dropdown level
                                    </a>
                                    <!-- Submenu -->
                                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">

                    <!-- Course item START -->
                    <div class="card border">
                        <div class="card-header border-bottom">
                            <!-- Card START -->
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="assets/images/courses/4by3/01.jpg" class="rounded-2" alt="Card image">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h3 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h3>

                                            <!-- Info -->
                                            <ul class="list-inline mb-2">
                                                <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</li>
                                                <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</li>
                                                <li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i>Beginner</li>
                                            </ul>

                                            <!-- button -->
                                            <a class="btn btn-primary-soft btn-sm mb-0">Resume course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>

                        <div class="card-body">

                            <!-- Title -->
                            <h5>Course Curriculum</h5>

                            <!-- Accordion START -->
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                <!-- Item -->
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header font-base" id="heading-1">
                                        <a class="accordion-button fw-bold rounded collapsed d-block pe-4" href="#collapse-1" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                            <span class="mb-0">Introduction of Digital Marketing</span>
                                            <span class="small d-block mt-1">(3 Lectures)</span>
                                        </a>
                                    </h6>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body mt-3">
                                            <div class="vstack gap-3">

                                                <!-- Progress bar -->
                                                <div class="overflow-hidden">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-1 h6">1/2 Completed</p>
                                                        <h6 class="mb-1 text-end">80%</h6>
                                                    </div>
                                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-200px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">2m 10s</p>
                                                    </div>

                                                    <!-- Add note button -->
                                                    <a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-1" role="button" aria-expanded="false" aria-controls="addnote-1">
                                                        <i class="bi fa-fw bi-pencil-square me-2"></i>Note
                                                    </a>
                                                    <a class="btn btn-xs btn-dark mb-0">Play again</a>

                                                    <!-- Notes START -->
                                                    <div class="collapse" id="addnote-1">
                                                        <div class="card card-body p-0 mt-2">

                                                            <!-- Note item -->
                                                            <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                <!-- Content -->
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-dark me-2">5:20</span>
                                                                    <h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Describe SEO Engine</h6>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="d-flex">
                                                                    <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                    <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                </div>
                                                            </div>

                                                            <!-- Note item -->
                                                            <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                <!-- Content -->
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-dark me-2">10:20</span>
                                                                    <h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Know about all marketing</h6>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="d-flex">
                                                                    <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                    <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Notes END -->

                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 10s</p>
                                                    </div>

                                                        <!-- Add note button -->
                                                        <a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-2" role="button" aria-expanded="false" aria-controls="addnote-2">
                                                            <i class="bi fa-fw bi-pencil-square me-2"></i>Note
                                                        </a>
                                                        <a class="btn btn-xs btn-dark mb-0">Play again</a>

                                                        <!-- Notes START -->
                                                        <div class="collapse" id="addnote-2">
                                                            <div class="card card-body p-0 mt-2">

                                                                <!-- Note item -->
                                                                <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                    <!-- Content -->
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="badge bg-dark me-2">5:20</span>
                                                                        <h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Describe SEO Engine</h6>
                                                                    </div>
                                                                    <!-- Button -->
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                        <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                    </div>
                                                                </div>

                                                                <!-- Note item -->
                                                                <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                    <!-- Content -->
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="badge bg-dark me-2">10:20</span>
                                                                        <h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Know about all marketing</h6>
                                                                    </div>
                                                                    <!-- Button -->
                                                                    <div class="d-flex">
                                                                        <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                        <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Notes END -->

                                                        <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                            <i class="fas fa-play me-0"></i>
                                                        </a>
                                                        <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
                                                    </div>
                                                    <p class="mb-0 text-truncate">18m 10s</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header font-base" id="heading-2">
                                        <a class="accordion-button fw-bold collapsed rounded d-block pe-4" href="#collapse-2" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            <span class="mb-0">Customer Life cycle</span>
                                            <span class="small d-block mt-1">(3 Lectures)</span>
                                        </a>
                                    </h6>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                        <!-- Accordion body START -->
                                        <div class="accordion-body mt-3">
                                            <div class="vstack gap-3">
                                                <!-- Progress bar -->
                                                <div class="overflow-hidden">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-1 h6">0/3 Completed</p>
                                                        <h6 class="mb-1 text-end">0%</h6>
                                                    </div>
                                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-sm-400px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">2m 10s</p>
                                                    </div>
                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 10s</p>
                                                    </div>
                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <a class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
                                                            <i class="bi bi-lock-fill"></i>
                                                        </a>
                                                        <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
                                                    </div>
                                                    <p class="mb-0 text-truncate">18m 10s</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion body END -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion END -->
                        </div>
                    </div>
                    <!-- Course item END -->

                    <!-- Course item START -->
                    <div class="card border mt-4">
                        <div class="card-header border-bottom">
                            <!-- Card START -->
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="assets/images/courses/4by3/08.jpg" class="rounded-2" alt="Card image">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h3 class="card-title"><a href="#">Sketch from A to Z: for app designer</a></h3>

                                            <!-- Info -->
                                            <ul class="list-inline mb-2">
                                                <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i>8h 56m</li>
                                                <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i>65 lectures</li>
                                                <li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i>All level</li>
                                            </ul>
                                            <!-- Button -->
                                            <a class="btn btn-primary-soft btn-sm mb-0">Resume course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>

                        <div class="card-body">

                            <!-- Title -->
                            <h5>Course Curriculum</h5>

                            <!-- Accordion START -->
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample4">
                                <!-- Item -->
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header font-base" id="heading-1-1">
                                        <a class="accordion-button fw-bold rounded collapsed d-block pe-4" href="#collapse-1-1" data-bs-toggle="collapse" data-bs-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                            <span class="mb-0">Introduction of Sketch</span>
                                            <span class="small d-block mt-1">(3 Lectures)</span>
                                        </a>
                                    </h6>
                                    <div id="collapse-1-1" class="accordion-collapse collapse" aria-labelledby="heading-1-1" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body mt-3">
                                            <div class="vstack gap-3">

                                                <!-- Progress bar -->
                                                <div class="overflow-hidden">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-1 h6">1/3 Completed</p>
                                                        <h6 class="mb-1 text-end">35%</h6>
                                                    </div>
                                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Introduction</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">2m 10s</p>
                                                    </div>

                                                    <!-- Add note button -->
                                                    <a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-3" role="button" aria-expanded="false" aria-controls="addnote-3">
                                                        <i class="bi fa-fw bi-pencil-square me-2"></i>Note
                                                    </a>
                                                    <a class="btn btn-xs btn-dark mb-0">Play again</a>

                                                    <!-- Notes START -->
                                                    <div class="collapse" id="addnote-3">
                                                        <div class="card card-body p-0 mt-2">

                                                            <!-- Note item -->
                                                            <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                <!-- Content -->
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-dark me-2">5:20</span>
                                                                    <h6 class="d-inline-block text-truncate w-100px w-sm-400px mb-0 fw-light">Describe SEO Engine</h6>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="d-flex">
                                                                    <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                    <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                </div>
                                                            </div>

                                                            <!-- Note item -->
                                                            <div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
                                                                <!-- Content -->
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-dark me-2">10:20</span>
                                                                    <h6 class="d-inline-block text-truncate w-100px w-sm-400px mb-0 fw-light">Know about all marketing</h6>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="d-flex">
                                                                    <a class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
                                                                    <a class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Notes END -->

                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 10s</p>
                                                    </div>
                                                        <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                            <i class="fas fa-play me-0"></i>
                                                        </a>
                                                        <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
                                                    </div>
                                                    <p class="mb-0 text-truncate">18m 10s</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header font-base" id="heading-1-4">
                                        <a class="accordion-button fw-bold collapsed rounded d-block pe-4" href="#collapse-1-4" data-bs-toggle="collapse" data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                            <span class="mb-0">YouTube Marketing</span>
                                            <span class="small d-block mt-1">(5 Lectures)</span>
                                        </a>
                                    </h6>
                                    <div id="collapse-1-4" class="accordion-collapse collapse" aria-labelledby="heading-1-4" data-bs-parent="#accordionExample4">
                                        <!-- Accordion body START -->
                                        <div class="accordion-body mt-3">
                                            <div class="vstack gap-3">
                                                <!-- Progress bar -->
                                                <div class="overflow-hidden">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-1 h6">0/5 Completed</p>
                                                        <h6 class="mb-1 text-end">0%</h6>
                                                    </div>
                                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Video Flow</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">25m 5s</p>
                                                    </div>
                                                <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Webmaster Tool</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">15m 20s</p>
                                                    </div>
                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Featured Contents on Channel</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">32m 20s</p>
                                                    </div>
                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
                                                                <i class="bi bi-lock-fill"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Managing Comments</span>
                                                        </div>
                                                        <p class="mb-0 text-truncate">20m 20s</p>
                                                    </div>
                                                    <hr class="mb-0">
                                                </div>

                                                <!-- Course lecture -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <a class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
                                                            <i class="bi bi-lock-fill"></i>
                                                        </a>
                                                        <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Channel Analytics</span>
                                                    </div>
                                                    <p class="mb-0 text-truncate">18m 20s</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion body END -->
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion END -->
                        </div>
                    </div>
                    <!-- Course item END -->
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
@endsection
