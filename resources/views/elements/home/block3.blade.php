<section>
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-1">Most Popular Courses</h2>
                <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
            </div>
        </div>

        <!-- Tabs START -->
        <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab"
            role="tablist">
            <!-- Tab item -->
            @foreach ($classes as $classIndex => $class)
                @foreach ($class->subjects as $subjectIndex => $subject)
                    <li class="nav-item me-2 me-sm-5">
                        <button
                            class="nav-link mb-2 mb-md-0 {{ $classIndex === 0 && $subjectIndex === 0 ? ' active' : '' }}"
                            id="course-pills-tab-{{ $subject->id }}" data-bs-toggle="pill"
                            data-bs-target="#course-pills-tabs-{{ $subject->id }}" type="button" role="tab"
                            aria-controls="course-pills-tabs-{{ $subject->id }}"
                            aria-selected="{{ $classIndex === 0 && $subjectIndex === 0 ? 'true' : 'false' }}">{{ $subject->name }}</button>
                    </li>
                @endforeach
            @endforeach

        </ul>


        <!-- Tabs END -->

        <!-- Tabs content START -->
        <!-- Tabs content START -->
        <div class="tab-content" id="course-pills-tabContent">
            <!-- Content START -->
            @foreach ($classes as $classIndex => $class)
                @foreach ($class->subjects as $subjectIndex => $subject)
                    <div class="tab-pane fade{{ $classIndex === 0 && $subjectIndex === 0 ? ' show active' : '' }}"
                        id="course-pills-tabs-{{ $subject->id }}" role="tabpanel"
                        aria-labelledby="course-pills-tab-{{ $subject->id }}">
                        <div class="row g-4">
                            @foreach ($subject->courses as $courseIndex => $course)
                                <!-- Card item START -->
								<div class="col-sm-6 col-lg-4 col-xl-3">
									<div class="card shadow h-100">
										<!-- Image -->
										<img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
										<div class="card-body pb-0">
											<!-- Badge and favorite -->
											<div class="d-flex justify-content-between mb-2">
												<a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
												<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
											</div>
											<!-- Title -->
											<h5 class="card-title fw-normal"><a href="#">{{ $course->name }}</a></h5>
											<p class="mb-2 text-truncate-2">Rooms oh fully taken by worse do Points afraid but may end Rooms Points afraid but may end Rooms</p>
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
												<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
											</ul>
										</div>
										<!-- Card footer -->
										<div class="card-footer pt-0 pb-3">
											<hr>
											<div class="d-flex justify-content-between ">
												<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9h 56m</span>
												<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 lectures</span>
											</div>
										</div>
									</div>
								</div>
                                <!-- Card item END -->
                            @endforeach
                        </div> <!-- Row END -->
                    </div>
                @endforeach
            @endforeach
            <!-- Content END -->
        </div>
        <!-- Tabs content END -->

        <!-- Tabs content END -->
    </div>
</section>
