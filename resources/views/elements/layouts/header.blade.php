<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl pb-2">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            @if (!empty($webConfig->logo))
                <div class="d-flex justify-content-center pt-3 pb-2">
                    <a class="d-flex justify-content-center" href="/" class="avatar avatar-xxxl">
                        <img class="avatar-img "  style="width: 50%;" src=" {{ asset('storage/' . $webConfig->logo) }}"
                            alt="logo">
                    </a>
                    <div class="pt-2 d-none d-sm-block">
                        <h4 class="d-flex justify-content-center">
                           <a href="/"> <div class="d-flex">
                            <span class="pe-1" style="color: rgb(226, 121, 0);">HD</span>
                            <span style="color:rgba(19, 19, 99, 0.997)">Education</span>
                        </div></a>
                        </h4>
                    </div>

                </div>
            @else
                <a class="navbar-brand" href="/">
                    <img class="light-mode-item navbar-brand-item" src="{{asset('/assets/user/images/logo.svg')}} " alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="{{asset('/assets/user/images/logo-light.svg')}}"
                        alt="logo">
                </a>
            @endif

            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav category menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->

                </ul>
                <!-- Nav category menu END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto" id="header1">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Lớp học</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">

                            @foreach ($classes as $item)
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle">{{ $item->name }}</a>
                                    @if (count($item->subjects) > 0)
                                        <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                            @foreach ($item->subjects as $subject)
                                                <li> <a class="dropdown-item"
                                                        href="{{ route('home.course', $subject) }}">{{ $subject->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif

                                </li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle s" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Tài liệu</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">

                            @foreach ($classes as $item)
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item "
                                        href="{{ route('document.index', $item) }}">{{ $item->name }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('introduction.user')}}">Giới thiệu</a>

                    </li>
                    <!-- Nav item 2 Pages -->
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('reviews.index') }}">Đánh giá</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('subscriptions.index') }}">Bảng giá</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('teams.index') }}">Đội ngũ</a>

                    </li>

                    <!-- Nav item 3 Account -->


                    <!-- Nav item 4 Megamenu-->
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('contact.index') }}">Liên hệ</a>

                    </li>

                    <!-- Nav item 5 link-->

                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative" action="{{ route('search') }}" method="GET">
                            <input class="form-control pe-5 bg-transparent" type="search" value="{{ old('search') }}"
                                name="search" placeholder="Tìm kiếm" aria-label="Search" autocomplete="off">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <style>
                    /* Tùy chỉnh CSS nếu cần thiết */
                    .custom-btn {
                        margin-right: 10px;
                        /* Khoảng cách giữa các nút */
                    }
                </style>
                @if (empty(Auth::user()))
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center justify-center">

                        <div class="btn-group">
                            <a href="{{ route('login') }}" class="btn btn-primary custom-btn">Đăng nhập</a>
                            <a href="{{ route('register') }}" class="btn btn-success">Đăng ký</a>
                        </div>
                    </div>
                @endif

                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile START -->
            @if (!empty(Auth::user()))
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle"
                            src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}"
                            alt="avatar">
                    </a>

                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3 position-relative mt-n3">

                                    <img class="avatar-img rounded-circle shadow"
                                        src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}"
                                        alt="avatar">
                                    @if (Auth::user()->is_pro == 1)
                                        <span
                                            class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-4 ms-n3 px-md-3">Pro</span>
                                    @else
                                        <span
                                            class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-4 ms-n3 px-md-3">Free</span>
                                    @endif
                                </div>
                                <div>
                                    <a class="h6" href="#">{{ Auth::user()->name }}</a>
                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Links -->
                        @if (Auth::user()->user_type == 0)
                            <li><a class="dropdown-item" href="{{ route('admin.index') }}"><i
                                        class="fas fa-user-shield fa-fw me-2"></i>Đến trang quản trị</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('profile', Auth::user()->id) }}"><i
                                    class="bi bi-person fa-fw me-2"></i>Chỉnh sửa hồ sơ</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.examHistory') }}"><i
                                    class="bi bi-gear fa-fw me-2"></i>Lịch sử làm bài</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.subscriptionHistory') }}"><i
                                    class="fas fa-box-open me-2"></i>Các gói bạn đã mua</a></li>

                        <li><a class="dropdown-item" href="{{ route('contact.index') }}"><i
                                    class="bi bi-info-circle fa-fw me-2"></i>Trợ giúp</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"><i
                                    class="bi bi-power fa-fw me-2"></i>Đăng xuất</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode options START -->
                        <li>
                            <div
                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                        <use href="#"></use>
                                    </svg> Sáng
                                </button>
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                        <use href="#"></use>
                                    </svg> Tối
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                        <use href="#"></use>
                                    </svg> Tự động
                                </button>
                            </div>
                        </li>
                        <!-- Dark mode options END-->
                    </ul>



                </div>
                <!-- Profile START -->
        </div>
        @endif
    </nav>
    <!-- Nav END -->
</header>
