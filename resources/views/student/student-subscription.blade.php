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
                                    <a class="list-group-item active" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
                                    <a class="list-group-item" href="student-course-list.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    <a class="list-group-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
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
                    <div class="card card-body bg-transparent border rounded-3">
                        <!-- Update plan START -->
                        <div class="row g-4">
                            <!-- Update plan item -->
                            <div class="col-6 col-lg-3">
                                <span>Active Plan</span>
                                <h4>Basic</h4>
                            </div>
                            <!-- Update plan item -->
                            <div class="col-6 col-lg-3">
                                <span>Monthly limit</span>
                                <h4>Unlimited</h4>
                            </div>
                            <!-- Update plan item -->
                            <div class="col-6 col-lg-3">
                                <span>Cost</span>
                                <h4>$99/Month</h4>
                            </div>

                            <!-- Update plan item -->
                            <div class="col-6 col-lg-3">
                                <span>Renewal Date</span>
                                <h4>Feb 17, 2023</h4>
                            </div>
                        </div>
                        <!-- Update plan END -->

                        <!-- Progress bar -->
                        <div class="overflow-hidden my-4">
                            <h6 class="mb-0">85%</h6>
                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                            <div>
                            <!-- Switch Content -->
                                <div class="d-sm-flex">
                                    <div class="form-check form-switch form-check-md">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                                        <label class="form-check-label" for="checkPrivacy1">Auto Renewal</label>
                                    </div>
                                </div>
                                <p class="mb-0 small">Your plan will automatically renew on: 02/17/2023. Payment Amount: USD250</p>
                            </div>
                            <!-- Buttons -->
                            <div class="mt-2 mt-sm-0">
                                <button type="button" class="btn btn-sm btn-danger-soft me-2 mb-0">Cancel plan</button>
                                <a href="#" class="btn btn-sm btn-success mb-0">Upgrade plan</a>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr>

                        <!-- Plan Benefits -->
                        <div class="row">
                            <h6 class="mb-3">The plan includes</h6>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 05 users monthly</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Free 5 host &amp; domain</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom infrastructure</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to all our room</li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>24/7 dedicated Support</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Unlimited updates</li>
                                    <li class="h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Landing pages &amp; Web widgets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
@endsection
