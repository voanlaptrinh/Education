@extends('index')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row position-relative">
                <!-- SVG decoration -->
                <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                    <svg width="22px" height="22px" viewBox="0 0 22 22">
                        <polygon class="fill-purple"
                            points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                        </polygon>
                    </svg>
                </figure>

                <!-- Title and breadcrumb -->
                <div class="col-lg-10 mx-auto text-center position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-50 end-0 translate-middle-y">
                        <svg width="27px" height="27px">
                            <path class="fill-orange"
                                d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                            </path>
                        </svg>
                    </figure>

                    <!-- Title -->
                    <h1>Blog Masonry</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Page Banner END -->

    <!-- =======================
        Page content START -->
    <section class="position-relative pt-0">
        <div class="container">
            <div class="row g-4 filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-transparent">
                        <div class="overflow-hidden rounded-3">
                            <img src="assets/images/event/02.jpg" class="card-img" alt="course image">
                            <!-- Overlay -->
                            <div class="bg-overlay bg-dark opacity-4"></div>
                            <div class="card-img-overlay d-flex align-items-start p-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-danger">Student life</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">Student Loan Survey: Many Owe $50K-plus</a></h5>
                            <p class="text-truncate-2">Affronting imprudence do he he everything. Offered chiefly farther of
                                my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son
                                law consider. Needed except up piqued an. </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Frances Guerrero</a></h6>
                                <span class="small">30M Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-light p-3">
                        <div class="card-body">
                            <!-- Badge -->
                            <a href="#" class="badge text-bg-success mb-2">Research</a>
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">How to make a college list</a></h5>
                            <p>Prospective students should start broadly and then narrow their list down to colleges that
                                best fit their needs, experts say. Yet remarkably appearance gets him his projection. </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Louis Crawford</a></h6>
                                <span class="small">12H Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card h-100 bg-transparent">
                        <!-- Card image -->
                        <div class="card-img-top rounded-3 overflow-hidden position-relative hover-overlay-top">
                            <div class="ratio ratio-16x9">
                                <iframe width="620" height="347" src="https://www.youtube.com/embed/9No-FiEInLA"
                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body px-3">
                            <!-- badge -->
                            <a href="#" class="badge text-bg-purple mb-2">Travel</a>
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">Never underestimate the influence of Eduport</a></h5>
                            <p class="text-truncate-2">Prospective students should start broadly and then narrow their list
                            </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Joan Wallace</a></h6>
                                <span class="small">5D Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-transparent">
                        <div class="overflow-hidden rounded-3">
                            <img src="assets/images/event/03.jpg" class="card-img-top" alt="course image">
                            <!-- Overlay -->
                            <div class="bg-overlay bg-dark opacity-4"></div>
                            <div class="card-img-overlay d-flex align-items-start p-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-warning">Lifestyle</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">Covid-19 and the college experienced</a></h5>
                            <p>Rooms oh fully taken by worse do. Points afraid but may end law. Points afraid but may end
                                law. </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Amanda Reed</a></h6>
                                <span class="small">July 21, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-dark p-3"
                        style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                        <div class="card-body">
                            <!-- Badge -->
                            <a href="#" class="badge text-bg-warning mb-2">Lifestyle</a>
                            <!-- Title -->
                            <h5 class="card-title text-primary-hover mb-1"><a href="#" class="text-white">Student
                                    Success</a></h5>
                            <span class="text-white">Louis Crawford</span>
                            <!-- Info -->
                            <ul class="list-inline mb-0 mt-3">
                                <li class="list-inline-item text-white me-3 mb-1 mb-sm-0">Aug 26, 2021</li>
                                <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#"
                                        class="text-white"><i class="bi bi-heart me-1"></i>10</a></li>
                                <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#"
                                        class="text-white"><i class="fas fa-comment me-1"></i>5</a></li>
                                <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#"
                                        class="text-white"><i class="fas fa-tag me-1"></i>Business</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-info p-3"
                        style="background:url(assets/images/pattern/03.png) no-repeat center center; background-size:cover;">
                        <div class="card-body">
                            <!-- Title -->
                            <h5 class="card-title text-primary-hover mb-1"><a href="#" class="text-white">Choose
                                    your direction</a></h5>
                            <p class="text-white mb-0">https://Eduport.webestica.com</p>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card h-100 bg-transparent">
                        <!-- Card image -->
                        <div class="card-img-top rounded overflow-hidden position-relative hover-overlay-top">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://player.vimeo.com/video/167434033?title=0&amp;byline=0&amp;portrait=0"
                                    width="620" height="347" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body px-3">
                            <!-- badge -->
                            <a href="#" class="badge text-bg-purple mb-2">Technology</a>
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">10 things you need to know about Eduport</a></h5>
                            <p class="text-truncate-2">Prospective students should start broadly and then narrow their list
                            </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Bryan Knight</a></h6>
                                <span class="small">20D Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-transparent">
                        <div class="overflow-hidden rounded-3">
                            <img src="assets/images/event/04.jpg" class="card-img" alt="course image">
                            <!-- Overlay -->
                            <div class="bg-overlay bg-dark opacity-4"></div>
                            <div class="card-img-overlay d-flex align-items-start p-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-primary">Sports</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">The Olympics are over, now what?</a></h5>
                            <p>Rooms oh fully taken by worse do. Points afraid but may end law. Points afraid but may end
                                law. </p>
                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Amanda Reed</a></h6>
                                <span class="small">Aug 31, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4 grid-item">
                    <div class="card bg-transparent">
                        <div class="overflow-hidden rounded-3">
                            <img src="assets/images/event/01.jpg" class="card-imgp" alt="course image">
                            <!-- Overlay -->
                            <div class="bg-overlay bg-dark opacity-4"></div>
                            <div class="card-img-overlay d-flex align-items-start p-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-info">Student story</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title"><a href="#">Campus Support for First-Year Students</a></h5>
                            <p class="text-truncate-2">Prospective students should start broadly and then narrow their list
                            </p>

                            <!-- Info -->
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0"><a href="#">Lori Stevens</a></h6>
                                <span class="small">3M Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

            </div> <!-- Row end -->

            <!-- Load more button START -->
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary-soft mb-0">Load more<i class="fas fa-sync ms-2"></i></a>
            </div>
            <!-- Load more button END -->
        </div>
    </section>
    <!-- =======================
        Page content END -->
@endsection
