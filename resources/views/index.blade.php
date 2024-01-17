<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="shortcut icon" href="/assets/user/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/user/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/user/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/assets/user/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="/assets/user/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="/assets/user/vendor/stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/user/css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');
    </script>

</head>

<body>
    @include('elements.layouts.header')
    <main>
        @yield('content')
    </main>
    @include('elements.layouts.footer')


    <script src="/assets/user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/user/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="/assets/user/vendor/glightbox/js/glightbox.js"></script>
    <script src="/assets/user/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

    <!-- Template Functions -->
    <script src="/assets/user/vendor/stepper/js/bs-stepper.min.js"></script>
    <script src="/assets/user/js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.aa').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
               
            });
        });
    </script>
    <script>
        // JavaScript code for countdown timer and auto-submit
        const countdownElement = document.getElementById('countdown');
        const timerElement = document.getElementById('timer');
        const formElement = document.getElementById('quizForm');
        const submitButton = document.getElementById('submitBtn');
    
        let timeLimit = {{ $course->time_limit }}; // Set the time limit in seconds
        let timeRemaining = timeLimit;
    
        function updateTimerDisplay() {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            countdownElement.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }
    
        function submitForm() {
            formElement.submit();
        }
    
        function startTimer() {
            updateTimerDisplay();
            const timerInterval = setInterval(() => {
                timeRemaining--;
    
                if (timeRemaining <= 0) {
                    clearInterval(timerInterval);
                    timerElement.innerText = 'Time Expired!';
                    submitForm(); // Auto-submit when time expires
                } else {
                    updateTimerDisplay();
                }
            }, 1000);
        }
    
        startTimer(); // Start the timer when the page loads
    </script>
</body>

<!-- Mirrored from eduport.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:18:37 GMT -->

</html>
