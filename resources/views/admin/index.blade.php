<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-course-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:26:16 GMT -->
@php
$logo = \App\Models\Web_config::find(1);
@endphp
<head>
    <title>{{$logo->name}}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="author" content="{{ $logo->name }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $logo->logo) }}">
    <meta name="description" content="{{ $logo->name }}">
    <meta property="og:title" content="{{ $logo->name }}">
    <meta property="og:description" content="{{ $logo->description }}">
    <meta property="og:image" content="{{ asset('storage/' . $logo->logo) }}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta name="twitter:title" content="{{ $logo->name }}">
    <meta name="twitter:description" content="{{ $logo->description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $logo->logo) }}">
<style>
    .btn{
        margin-bottom: 0 !important;
    }
</style>
    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/vendor/choices/css/choices.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/vendor/overlay-scrollbar/css/overlayscrollbars.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/vendor/quill/css/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/glightbox/glightbox.css')}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/user/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/admin/bootstrap-select.min.css')}}">
</head>

<body>
    
    <main>
        @include('admin.headeradmin')
        <div class="page-content">
            <!-- Top bar START -->
            <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
                <div class="container-fluid p-0">
                    <div class="d-flex align-items-center w-100">

                        <!-- Logo START -->
                        <div class="d-flex align-items-center d-xl-none">
                            <a class="navbar-brand" href="index.html">
                                <img class="light-mode-item navbar-brand-item h-30px"
                                    src="/assets/user/images/logo-mobile.svg" alt="">
                                <img class="dark-mode-item navbar-brand-item h-30px"
                                    src="/assets/user/images/logo-mobile-light.svg" alt="">
                            </a>
                        </div>
                        <!-- Logo END -->

                        <!-- Toggler for sidebar START -->
                        <div class="navbar-expand-xl sidebar-offcanvas-menu">
                            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
                                aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                                <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu">
                                </i>
                            </button>
                        </div>
                        <!-- Toggler for sidebar END -->

                        <!-- Top bar left -->
                        <div class="navbar-expand-lg ms-auto ms-xl-0">

                            <!-- Toggler for menubar START -->
                            {{-- <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-animation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button> --}}
                            <!-- Toggler for menubar END -->

                            <!-- Topbar menu START -->
                            {{-- <div class="collapse navbar-collapse w-100" id="navbarTopContent">
                                <!-- Top search START -->
                                <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                                    <div class="nav-item w-100">
                                        <form class="position-relative">
                                            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0"
                                                type="search" placeholder="Search" aria-label="Search">
                                            <button
                                                class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                                                type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Top search END -->
                            </div> --}}
                            <!-- Topbar menu END -->
                        </div>
                        <!-- Top bar left END -->

                        <!-- Top bar right START -->
                        <div class="ms-xl-auto">
                            <ul class="navbar-nav flex-row align-items-center">

                              

                                <!-- Profile dropdown START -->
                                <li class="nav-item ms-2 ms-md-3 dropdown">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown"
                                        role="button" data-bs-auto-close="outside" data-bs-display="static"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="avatar-img rounded-circle" src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}"
                                            alt="avatar">
                                    </a>

                                    <!-- Profile dropdown START -->
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                        aria-labelledby="profileDropdown">
                                        <!-- Profile info -->
                                        <li class="px-3">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-3 mb-3">
                                                    <img class="avatar-img rounded-circle shadow"
                                                        src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}" alt="avatar">
                                                </div>
                                                <div>
                                                    <a class="h6 mt-2 mt-sm-0" href="#">{{ Auth::user()->name }}</a>
                                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!-- Links -->
                                       
                                        <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"><i
                                                    class="bi bi-power fa-fw me-2"></i>Đăng xuất</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <!-- Dark mode options START -->
                                        <li>
                                            <div
                                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                                <!-- <span>Mode:</span> -->
                                                <button type="button" class="btn btn-sm mb-0 active"
                                                    data-bs-theme-value="light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Sáng
                                                </button>
                                                <button type="button" class="btn btn-sm mb-0"
                                                    data-bs-theme-value="dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-moon-stars fa-fw mode-switch"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z">
                                                        </path>
                                                        <path
                                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Tối
                                                </button>
                                                <button type="button" class="btn btn-sm mb-0"
                                                    data-bs-theme-value="auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-circle-half fa-fw mode-switch"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Tự động
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
            @yield('contentadmin')
        </div>
    </main>

    <script>
        
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            // Thêm tùy chọn font_names
            font_names: 'Arial/Arial, Helvetica, sans-serif;' + 'Comic Sans MS/Comic Sans MS, cursive;' +
                'Courier New/Courier New, Courier, monospace;' + 'Georgia/Georgia, serif;' +
                'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
                'Tahoma/Tahoma, Geneva, sans-serif;' +
                'Times New Roman/Times New Roman, Times, serif;' +
                'Verdana/Verdana, Geneva, sans-serif',
            fontSize_sizes: '12/12px;14/14px;16/16px;18/18px;24/24px;36/36px'
        };
        setTimeout(function(){
            var successAlerts = document.getElementsByClassName('alert-success');
            for (var i = 0; i < successAlerts.length; i++) {
                successAlerts[i].style.display = 'none';
            }
        }, 2000);
        
    </script>
 
    <!-- Bootstrap JS -->
    <script src="{{asset('/assets/user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{asset('/assets/user/vendor/choices/js/choices.min.js')}}"></script>
    <script src="{{asset('/assets/user/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('/assets/user/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
				
    <script src="{{asset('/assets/user/vendor/glightbox/js/glightbox.js')}}"></script>
				
    <script src="{{asset('/assets/user/vendor/overlay-scrollbar/js/overlayscrollbars.min.js')}}"></script>


    <!-- Template Functions -->
    <script src="{{asset('/assets/user/vendor/stepper/js/bs-stepper.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <script src="{{asset('/vendor/admin/popper.min.js')}}"></script>
    <script src="{{asset('/vendor/admin/bootstrap.min.js')}}"></script>
    <script src="{{asset('/vendor/admin/bootstrap-select.min.js')}}"></script>


    <script>
    $(document).ready(function() {
      $('.selectpicker').selectpicker();
      $('.classes_1').selectpicker();
      $('.lesson_name').selectpicker();
      $('.classes_name').selectpicker();
    });
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công',
                    text: '{{ session('success') }}',
                });
            @endif
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Thất bại',
                    text: '{{ session('error') }}',
                });
            @endif
            @if (session('warning'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Cảnh báo',
                    text: '{{ session('warning') }}',
                });
            @endif
        });
    </script>
    <!-- Template Functions -->
    <script src="/assets/user/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-course-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:26:16 GMT -->

</html>
