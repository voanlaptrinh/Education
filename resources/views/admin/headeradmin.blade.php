<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">
    @php
        $logo = \App\Models\Web_config::find(1);
    @endphp
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="navbar-brand-item" src="{{ asset('storage/' . $logo->logo) }} " alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="admin-dashboard.html" class="nav-link"><i
                            class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Pages</li>

                <!-- menu item 2 -->
                {{-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button" aria-expanded="true" aria-controls="collapsepage">
                        <i class="bi bi-basket fa-fw me-2"></i>Courses
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column show" id="collapsepage" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="admin-course-list.html">All Courses</a></li>
                        <li class="nav-item"> <a class="nav-link active" href="admin-course-category.html">Course Category</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-course-detail.html">Course Detail</a></li>
                    </ul>
                </li> --}}

                <!-- Menu item 3 -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('indexNews') }}"><i
                            class="fas fa-newspaper fa-fw me-2"></i>Tin tức</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('student.index') }}"><i
                            class="fas fa-user-graduate fa-fw me-2"></i>Học sinh</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('classes.index') }}"><i
                            class="fas fa-pen-fancy fa-fw me-2"></i></i>Lớp học</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('subjects.index') }}"><i
                            class="fas fa-book fa-fw me-2"></i>Môn học</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('contact.admin') }}"><i
                            class="fas fa-file-signature fa-fw me-2"></i>Liên hệ</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('lesson.index') }}"><i
                            class="fas fa-graduation-cap fa-fw me-2"></i>Bài học</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('curriculum.index') }}"><i
                            class="fas fa-graduation-cap fa-fw me-2"></i>Chương trình giảng dạy</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('webConfig.index') }}"><i
                            class="fas fa-cogs fa-fw me-2"></i>Cài đặt web</a></li>

                <!-- Menu item 4 -->
                {{-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button" aria-expanded="false" aria-controls="collapseinstructors">
                        <i class="fas fa-user-tie fa-fw me-2"></i>Instructors
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="admin-instructor-list.html">Instructors</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-instructor-detail.html">Instructor Detail</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-instructor-request.html">Instructor requests
                                <span class="badge text-bg-success rounded-circle ms-2">2</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- <!-- Menu item 5 -->
                <li class="nav-item"> <a class="nav-link" href="admin-review.html"><i class="far fa-comment-dots fa-fw me-2"></i>Reviews</a></li>

                <!-- Menu item 6 -->
                <li class="nav-item"> <a class="nav-link" href="admin-earning.html"><i class="far fa-chart-bar fa-fw me-2"></i>Earnings</a></li>

                <!-- Menu item 7 -->
                <li class="nav-item"> <a class="nav-link" href="admin-setting.html"><i class="fas fa-user-cog fa-fw me-2"></i>Admin Settings</a></li>

                <!-- Menu item 8 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
                        <i class="bi bi-lock fa-fw me-2"></i>Authentication
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="sign-up.html">Sign Up</a></li>
                        <li class="nav-item"> <a class="nav-link" href="sign-in.html">Sign In</a></li>
                        <li class="nav-item"> <a class="nav-link" href="forgot-password.html">Forgot Password</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-error-404.html">Error 404</a></li>
                    </ul>
                </li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Documentation</li>

                <!-- Menu item 9 -->
                <li class="nav-item"> <a class="nav-link" href="docs/index.html"><i class="far fa-clipboard fa-fw me-2"></i>Documentation</a></li>

                <!-- Menu item 10 -->
                <li class="nav-item"> <a class="nav-link" href="docs/changelog.html"><i class="fas fa-sitemap fa-fw me-2"></i>Changelog</a></li> --}}
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 mt-auto pt-3">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="index.html" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Home">
                        <i class="bi bi-globe"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Sign out">
                        <i class="bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- Sidebar footer END -->
        </div>
    </div>
</nav>
