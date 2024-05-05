<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">
    @php
        $logo = \App\Models\Web_config::find(1);
    @endphp
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="navbar-brand-item" src="{{ $logo->logo ? asset('storage/' . $logo->logo) : asset('/assets/user/images/logo-light.svg') }}
            " alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link"><i
                            class="bi bi-house fa-fw me-2"></i>Trang chủ</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Trang</li>



                <!-- Menu item 3 -->
                {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('indexNews') }}"><i
                            class="fas fa-newspaper fa-fw me-2"></i>Tin tức</a></li> --}}
                <li class="nav-item"> <a
                        class="nav-link {{ Request::route()->getName() == 'student.index' ? 'active' : '' }}
                    "
                        href="{{ route('student.index') }}"><i class="fas fa-user-graduate fa-fw me-2"></i>Quản lý Học
                        sinh</a></li>
                <li class="nav-item"> <a
                        class="nav-link
                    {{ Request::route()->getName() == 'classes.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'classes.update' ? 'active' : '' }}
                    "
                        href="{{ route('classes.index') }}"><i class="fas fa-pen-fancy fa-fw me-2"></i></i>Lớp học</a>
                </li>
                <li class="nav-item"> <a
                        class="nav-link
                    {{ Request::route()->getName() == 'subjects.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'courses.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'courses.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'courses.edit' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'courses.show' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'questions.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'questions.edit' ? 'active' : '' }}
                    "
                        href="{{ route('subjects.index') }}"><i class="fas fa-book fa-fw me-2"></i>Môn học & (Bài kiểm
                        tra)</a></li>

                <li class="nav-item"> <a
                        class="nav-link
                    {{ Request::route()->getName() == 'lesson.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'lesson.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'lessons.edit' ? 'active' : '' }}
                    "
                        href="{{ route('lesson.index') }}"><i class="fas fa-graduation-cap fa-fw me-2"></i>Bài học</a>
                </li>
                <li class="nav-item"> <a
                        class="nav-link
                    {{ Request::route()->getName() == 'curriculum.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'curriculum.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'curriculum.edit' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'lectures.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'lectures.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'lectures.edit' ? 'active' : '' }}
                    "
                        href="{{ route('curriculum.index') }}"><i class="fas fa-graduation-cap fa-fw me-2"></i>Video
                        bài giảng</a></li>

                <li class="nav-item"> <a
                        class="nav-link
                                {{ Request::route()->getName() == 'document.admin' ? 'active' : '' }}
                                {{ Request::route()->getName() == 'document.create' ? 'active' : '' }}
                                {{ Request::route()->getName() == 'document.edit' ? 'active' : '' }}
                                "
                        href="{{ route('document.admin') }}"><i class="fas fa-folder-open fa-fw me-2"></i></i>Tài
                        liệu</a></li>
                <li class="nav-item"> <a
                        class="nav-link
                    {{ Request::route()->getName() == 'subscriptions.indexAdmin' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'subscriptions.create' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'subscriptions.edit' ? 'active' : '' }}
                    "
                        href="{{ route('subscriptions.indexAdmin') }}"><i class="fas fa-cubes fa-fw me-2"></i>Gói khóa
                        học</a></li>


                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#collapseauthentication"
                        role="button" aria-expanded="false" aria-controls="collapseauthentication">
                        <i class="bi bi-lock fa-fw me-2"></i>Cài đặt
                    </a>
                    <!-- Submenu -->
                    <ul class="nav flex-column collapse" id="collapseauthentication" data-bs-parent="#navbar-sidebar"
                        style="">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('banners.index') }}"><i
                                    class="fas fa-cogs fa-fw me-2"></i>Banner</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('webConfig.index') }}"><i
                                    class="fas fa-cogs fa-fw me-2"></i>Cài đặt web</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('contact.admin') }}"><i
                                    class="fas fa-file-signature fa-fw me-2"></i>Liên hệ</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('reviews.admin') }}"><i
                                    class="far fa-comment-dots fa-fw me-2"></i>Đánh giá</a></li>
                    </ul>
                </li>


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
                    <a class="h5 mb-0 text-body" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="{{ route('home.index') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Home">
                        <i class="bi bi-globe"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="{{ route('logout') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Sign out">
                        <i class="bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- Sidebar footer END -->
        </div>
    </div>
</nav>
<style>

</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var currentUrl = window.location.href;
        $('#navbar-sidebar a').each(function() {
            var url = $(this).attr('href');
            // Kiểm tra xem URL khớp với URL hiện tại và phần tử cha không chứa phần tử con có class 'active'
            if (url === currentUrl && !$(this).parent().hasClass('active')) {
                $(this).addClass('active');
            }
        });


        $('#collapseauthentication .nav-link').each(function() {
            var url = $(this).attr('href');
            // Kiểm tra xem URL khớp với URL hiện tại và không có phần tử cha nào có lớp 'active'
            if (url === currentUrl && !$(this).parents().hasClass('active')) {
                $(this).addClass('active');
                // Kích hoạt (expand) phần tử cha
                $(this).closest('.collapse').addClass('show');
                $(this).closest('.nav-item').addClass('active');
            }

        });

    });
</script>
