@extends('index')
@section('content')
<section class="bg-light py-0 py-sm-5">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-8">
				<!-- Badge -->
				<h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">{{ $lesson->subject->name }}</h6>
				<!-- Title -->
				<h1>{{ $lesson->title }}</h1>
				<p>{{ $lesson->description }}</p>
				<!-- Content -->
				<ul class="list-inline mb-0">
					{{-- <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li> --}}
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal text-success me-2"></i>{{ $lesson->subject->class->name }}</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-exclamation-fill text-danger me-2"></i> {{ $lesson->created_at->format('d/m/Y') }}</li>
					<li class="list-inline-item h6 mb-0"><i class="fas fa-globe text-info me-2"></i>Tiếng việt</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="pb-0 py-lg-5">
	<div class="container">
		<div class="row">
			<!-- Main content START -->
			<div class="col-lg-8">
				<div class="card shadow rounded-2 p-0">
					<!-- Tabs START -->
					<div class="card-header border-bottom px-4 py-3">
						<ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Overview</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false" tabindex="-1">Curriculum</button>
							</li>
							<!-- Tab item -->
						
						</ul>
					</div>
					<!-- Tabs END -->

					<!-- Tab contents START -->
					<div class="card-body p-4">
						<div class="tab-content pt-2" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
								<!-- Course detail START -->
								{{ $lesson->content }}
								<!-- Course detail END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
								<!-- Course accordion START -->
								<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                    @foreach ($lesson->chapters as $key=> $chapter)
                                    <div class="accordion-item mb-3">
										<h6 class="accordion-header font-base" id="heading-{{ $key }}">
											<button class="accordion-button fw-bold rounded d-sm-flex d-inline-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="true" aria-controls="collapse-{{ $key }}">
												{{ $chapter->title }}
												<span class="small ms-0 ms-sm-2">(3 Lectures)</span> 
											</button>
										</h6>
										<div id="collapse-{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="heading-{{ $key }}" data-bs-parent="#accordionExample2">
											<div class="accordion-body mt-3">
												<!-- Course lecture -->
                                                @foreach ($chapter->lectures as $item)
                                                    {{-- @dd($item) --}}
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                           
                                                            <a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px">{{ $item->title }}</span>
                                                        </div>
                                                        <p class="mb-0">2m 10s</p>
                                                    </div>
    
                                                    <hr> <!-- Divider -->
                                                @endforeach
												

											</div>
										</div>
									</div>

                                    @endforeach
									<!-- Item -->
									
									

								</div>
								<!-- Course accordion END -->
							</div>
							<!-- Content END -->

							

						</div>
					</div>
					<!-- Tab contents END -->
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4 pt-5 pt-lg-0">
				<div class="row mb-5 mb-lg-0">
					<div class="col-md-6 col-lg-12">
						<!-- Video START -->
						<div class="card shadow p-2 mb-4 z-index-9">
							<div class="overflow-hidden rounded-3">
								<img src="{{ $lesson->image ? asset('storage/' . $lesson->image) : 'placeholder.jpg' }}" class="card-img" alt="course image">
								<!-- Overlay -->
								
							</div>
		
							<!-- Card body -->
							<div class="card-body px-3">
								<!-- Info -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Price and time -->
									<div>
										<div class="d-flex align-items-center">
											<h3 class="fw-bold mb-0 me-2">$150</h3>
											<span class="text-decoration-line-through mb-0 me-2">$350</span>
											<span class="badge text-bg-orange mb-0">60% off</span>
										</div>
										<p class="mb-0 text-danger"><i class="fas fa-stopwatch me-2"></i>5 days left at this price</p>
									</div>

									<!-- Share button with dropdown -->
									<div class="dropdown">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-light rounded small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fas fa-fw fa-share-alt"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
											<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
											<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
										</ul>
									</div>
								</div>

								<!-- Buttons -->
								<div class="mt-3 d-sm-flex justify-content-sm-between">
									<a href="#" class="btn btn-outline-primary mb-0">Free trial</a>
									<a href="#" class="btn btn-success mb-0">Buy course</a>
								</div>
							</div>
						</div>
						<!-- Video END -->

						<!-- Course info START -->
						<div class="card card-body shadow p-4 mb-4">
							<!-- Title -->
							<h4 class="mb-3">Khóa học này bao gồm</h4>
							<ul class="list-group list-group-borderless">
								
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>Kĩ năng</span>
									<span>{{ $lesson->subject->class->name }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Ngôn ngữ</span>
									<span>Tiếng việt</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>Ngày đăng</span>
									<span>{{ $lesson->created_at->format('d/m/Y') }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>Giấy chứng nhân</span>
									<span>Có</span>
								</li>
							</ul>
						</div>
						<!-- Course info END -->
					</div>

					
				</div><!-- Row End -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
@endsection