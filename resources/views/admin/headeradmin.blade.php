<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">
    @php
        $logo = \App\Models\Web_config::find(1);
    @endphp
    <!-- Navbar brand for xl START -->
    <div class="d-flex justify-content-center">
        @if (!empty($logo->logo))
        <a class="navbar-brand" href="/">
            <img class="" src="{{ asset('storage/' . $logo->logo) }} " alt="">
        </a>
        @else
        <a class="navbar-brand " href="/">
            <img class="navbar rounded-circle" width="100px" src="{{ asset('/assets/user/images/logoedu.jpg') }} " alt="">
        </a>
        @endif
     
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


                            <li class="nav-item"> <a
                                class="nav-link
                            {{ Request::route()->getName() == 'subscriptions.indexAdmin' ? 'active' : '' }}
                            {{ Request::route()->getName() == 'subscriptions.create' ? 'active' : '' }}
                            {{ Request::route()->getName() == 'subscriptions.edit' ? 'active' : '' }}
                            "
                                href="{{ route('subscriptions.indexAdmin') }}"><i class="fas fa-cubes fa-fw me-2"></i>Gói khóa
                                học</a></li>

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
             

                        <li class="nav-item"> <a class="nav-link  {{ Request::route()->getName() == 'contact.admin' ? 'active' : '' }}" href="{{ route('contact.admin') }}"><i
                            class="fas fa-file-signature fa-fw me-2"></i>Liên hệ</a></li>
                               
                        <li class="nav-item"> <a class="nav-link   {{ Request::route()->getName() == 'reviews.admin' ? 'active' : '' }}" href="{{ route('reviews.admin') }}"><i
                            class="far fa-comment-dots fa-fw me-2"></i>Đánh giá</a></li>
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
                   
                    </ul>
                </li>


            
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 mt-auto pt-3">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="h5 mb-0 text-body" href="{{route('webConfig.index')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="{{ route('home.index') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Home">
                        <i class="bi bi-house"></i>
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
