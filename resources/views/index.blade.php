<!DOCTYPE html>
<html lang="vi">
@php
    $logo = \App\Models\Web_config::find(1);
@endphp

<head>
    <title>{{ $logo->name }}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="author" content="{{ $logo->name }}">
    <meta name="description" content="{{ $logo->description }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ $logo->name }}">
    <meta property="og:description" content="{{ $logo->description }}">
    <meta property="og:image" content="{{ asset('storage/' . $logo->logo) }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="{{ $logo->name }}">
    <meta name="twitter:description" content="{{ $logo->description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $logo->logo) }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $logo->logo) }}">
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

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/' . $logo->logo) }}">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/user/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/user/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/user/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/user/vendor/stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/slick-theme.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/user/css/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');

        function togglePassword(inputId) {
            var input = document.getElementById(inputId);
            if (input) {
                var icon = document.querySelector("[onclick=\"togglePassword('" + inputId + "')\"]");
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    input.type = "password";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            } else {
                console.log("Không tìm thấy phần tử có id " + inputId);
            }
        }
    </script>


</head>

<body>

    @include('elements.layouts.header')
    <main>

        @yield('content')
    </main>
    @include('elements.layouts.footer')


    <script src="{{ asset('/assets/user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/assets/user/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('/assets/user/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('/assets/user/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <!-- Template Functions -->
    <script src="{{ asset('/assets/user/vendor/stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/assets/user/js/functions.js') }}"></script>
    <script>
        $(document).ready(function() {
            var currentUrl = window.location.href;
            $('#header1 li a').each(function() {
                if (currentUrl.includes($(this).attr('href'))) {
                    $(this).addClass('active');
                    // Kích hoạt cả mục cha
                    $(this).parents('.nav-item').addClass('active');
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
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

    <script src="{{ asset('/assets/user/js/slick.min.js') }}"></script>


  
    <script>
        $(document).ready(function() {
            $('.aa').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,

            });
            $('.basis-content').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
            $('.aa1').slick({
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        dots: true,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        dots: true,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]

            });
        });
    </script>

</body>

<!-- Mirrored from eduport.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:18:37 GMT -->

</html>
