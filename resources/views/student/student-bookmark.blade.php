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
                                    <a class="list-group-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
                                    <a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                    <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
                                    <a class="list-group-item active" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
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

                    <div class="card bg-transparent border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <h3 class="mb-0">WishList</h3>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body p-3 p-md-4">
                            <div class="row g-4">
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Graphic Design Masterclass</a></h5>
                                            <p class="mb-2 text-truncate-2">Rooms oh fully taken by worse do Points afraid but may end Rooms
                                                Points afraid but may end Rooms</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9h 56m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/07.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Deep Learning with React-Native </a></h5>
                                            <p class="mb-2 text-truncate-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>18h 56m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>99 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/11.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Build Responsive Websites with HTML</a></h5>
                                            <p class="mb-2 text-truncate-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>15h 30m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>68 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/10.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-info bg-opacity-10 text-info">Intermediate</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Bootstrap 5 From Scratch</a></h5>
                                            <p class="text-truncate-2 mb-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>25h 56m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>38 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Learn Invision</a></h5>
                                            <p class="mb-2">Arrived off she elderly beloved him Course regard to up he hardly.</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between mt-2">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="assets/images/courses/4by3/01.jpg" class="card-img-top" alt="course image">
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">Digital Marketing Masterclass</a></h5>
                                            <p class="text-truncate-2 mb-2">Delivered dejection necessary objection do Mr prevailed.</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</span>
                                                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                            </div>
                        </div>
                        <!-- Card body EMD -->
                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
@endsection
