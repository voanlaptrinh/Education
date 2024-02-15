<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            @if (!empty( $webConfig->logo))
                
            <a class="navbar-brand" href="/">
                <img class="light-mode-item navbar-brand-item" src=" {{ asset('storage/' . $webConfig->logo) }}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="  {{ asset('storage/' . $webConfig->logo) }}" alt="logo">
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
                    <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0"
                            href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Development</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Web Development</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">CSS</a> </li>
                                            <li> <a class="dropdown-item" href="#">JavaScript</a> </li>
                                            <li> <a class="dropdown-item" href="#">Angular</a> </li>
                                            <li> <a class="dropdown-item" href="#">PHP</a> </li>
                                            <li> <a class="dropdown-item" href="#">HTML</a> </li>
                                            <li> <a class="dropdown-item" href="#">React</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                                    <li> <a class="dropdown-item" href="#">Mobile Development</a> </li>
                                    <li> <a class="dropdown-item" href="#">Programing Language</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Engineering</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Development Tools</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="#">Design</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Marketing</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Get started</h6>
                                            <hr> <!-- Divider -->
                                            <ul class="list-unstyled">
                                                <li> <a class="dropdown-item" href="#">Market Research</a> </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                <li> <a class="dropdown-item" href="#">Consumer Behavior</a> </li>
                                                <li> <a class="dropdown-item" href="#">Digital Marketing</a> </li>
                                                <li> <a class="dropdown-item" href="#">Marketing Ethics</a> </li>
                                                <li> <a class="dropdown-item" href="#">Social Media Marketing</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Public Relations</a> </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                <li> <a class="dropdown-item" href="#">Decision Science</a> </li>
                                                <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                                <li> <a class="dropdown-item" href="#">Business Marketing</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Degree</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/user/images/client/uni-logo-01.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American Century
                                                        University, New Mexico</a>
                                                    <p class="mb-0 small">Bachelor of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/user/images/client/uni-logo-02.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Indiana College
                                                        of - Bloomington</a>
                                                    <p class="mb-0 small">Masters of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/user/images/client/uni-logo-03.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">College of South
                                                        Florida</a>
                                                    <p class="mb-0 small">Medical science college</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="assets/user/images/client/uni-logo-01.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Andeerson
                                                        Campus</a>
                                                    <p class="mb-0 small">Bachelor of computer science</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex position-relative">
                                                <img src="assets/user/images/client/uni-logo-04.svg" class="icon-md"
                                                    alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">University of
                                                        South California</a>
                                                    <p class="mb-0 small">Masters of business development</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4">
                                            <h6 class="mb-0">Certificate</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Google SEO
                                                        certificate</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Business
                                                        Development Executive(BDE)</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Facebook social
                                                        media marketing</a>
                                                    <p class="mb-0 small">Expert advice</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Creative graphics
                                                        design</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Advertisement -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                style="background:url(assets/user/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                <!-- SVG decoration -->
                                                <figure
                                                    class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                    <svg width="92.6px" height="135.2px">
                                                        <path class="fill-white"
                                                            d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                        </path>
                                                        <path class="fill-white"
                                                            d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                        </path>
                                                        <path class="fill-white"
                                                            d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                        </path>
                                                        <path class="fill-warning"
                                                            d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                        </path>
                                                        <polygon class="fill-warning opacity-6"
                                                            points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                                                        <polygon class="fill-warning opacity-6"
                                                            points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                                                    </svg>
                                                </figure>
                                                <!-- Body -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <h5 class="card-title text-white mb-2">Access 25K Online courses
                                                        from 120 institutions, Start today!</h5>
                                                    <p class="text-white text-opacity-75">Here is the description of
                                                        premium features which will allow users to get benefits and save
                                                        a lot of money</p>
                                                    <!-- Button -->
                                                    <a href="#" class="btn btn-sm btn-dark mb-0">Purchase
                                                        Premium</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li> <a class="dropdown-item" href="#">Music</a></li>
                            <li> <a class="dropdown-item" href="#">Lifestyle</a></li>
                            <li> <a class="dropdown-item" href="#">IT & software</a></li>
                            <li> <a class="dropdown-item" href="#">Personal development</a></li>
                            <li> <a class="dropdown-item" href="#">Health & fitness</a></li>
                            <li> <a class="dropdown-item" href="#">Teaching</a></li>
                            <li> <a class="dropdown-item" href="#">Social science</a></li>
                            <li> <a class="dropdown-item" href="#">Math & logic</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0"
                                    href="#">View all categories</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Nav category menu END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="demoMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lớp học</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">

                            @foreach ($classes as $item)
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">{{ $item->name }}</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        @foreach ($item->subjects as $subject)
                                            
                                        <li> <a class="dropdown-item" href="{{ route('home.course', $subject) }}">{{ $subject->name }}</a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </li>
                            @endforeach
                     

                        </ul>
                    </li>

                    <!-- Nav item 2 Pages -->
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('reviews.index')}}">Đánh giá</a>
                        
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('subscriptions.index')}}">Bảng giá</a>
                        
                    </li>

                    <!-- Nav item 3 Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="instructor-dashboard.html"><i
                                                class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-manage-course.html"><i
                                                class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-create-course.html"><i
                                                class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Course</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="course-added.html"><i
                                                class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-quiz.html"><i
                                                class="bi bi-question-diamond fa-fw me-1"></i>Quiz</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-earning.html"><i
                                                class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-studentlist.html"><i
                                                class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-order.html"><i
                                                class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-review.html"><i
                                                class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-payout.html"><i
                                                class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="student-dashboard.html"><i
                                                class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="student-subscription.html"><i
                                                class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a> </li>
                                    <li> <a class="dropdown-item" href="student-course-list.html"><i
                                                class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="student-course-resume.html"><i
                                                class="far fa-fw fa-file-alt me-1"></i>Course Resume</a> </li>
                                    <li> <a class="dropdown-item" href="student-quiz.html"><i
                                                class="bi bi-question-diamond fa-fw me-1"></i>Quiz </a> </li>
                                    <li> <a class="dropdown-item" href="student-payment-info.html"><i
                                                class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment Info</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="student-bookmark.html"><i
                                                class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="admin-dashboard.html"><i
                                        class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="instructor-edit-profile.html"><i
                                        class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
                            <li> <a class="dropdown-item" href="instructor-setting.html"><i
                                        class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
                            <li> <a class="dropdown-item" href="instructor-delete-account.html"><i
                                        class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Dropdown Level -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 4 Megamenu-->
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('contact.index')}}">Liên hệ</a>
                        
                    </li>

                    <!-- Nav item 5 link-->
                 
                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                aria-label="Search">
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
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle"
                            src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.jpg') }}"
                            alt="avatar">
                    </a>

                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">

                                    <img class="avatar-img rounded-circle shadow"
                                        src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.jpg') }}"
                                        alt="avatar">


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
                        <li><a class="dropdown-item" href="{{ route('profile', Auth::user()->id) }}"><i
                                    class="bi bi-person fa-fw me-2"></i>Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('user.examHistory')}}"><i class="bi bi-gear fa-fw me-2"></i>Lịch sử làm bài</a></li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
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
                                    </svg> Light
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
                                    </svg> Dark
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                        <use href="#"></use>
                                    </svg> Auto
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
