<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				@if (!empty($webConfig->logo))
				<a class="me-0" href="">
					<img class="light-mode-item h-40px" src="{{ asset('storage/' . $webConfig->logo) }}" alt="logo">
					<img class="dark-mode-item h-40px" src="{{ asset('storage/' . $webConfig->logo) }}" alt="logo">
				</a>
				@else
				<a class="me-0" href="">
					<img class="light-mode-item h-40px" src="/assets/user/images/logo.svg" alt="logo">
					<img class="dark-mode-item h-40px" src="/assets/user/images/logo-light.svg" alt="logo">
				</a>
				@endif
				<p class="my-3">{{$webConfig->description}}</p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					@if (!empty($webConfig->facebook_id))
						
					<li class="list-inline-item">
						 <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="https://www.facebook.com/{{$webConfig->facebook_id}}">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a> 
					</li>
					@endif
					@if (!empty($webConfig->instagram))
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-instagram" href="{{$webConfig->instagram}}">
							<i class="fab fa-fw fa-instagram"></i>
						</a> 
					</li>
					@endif
					@if (!empty($webConfig->twitter))
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-twitter" href="{{$webConfig->twitter}}">
							<i class="fab fa-fw fa-twitter"></i>
						</a> 
					</li>
					@endif
					@if (!empty($webConfig->linkedin))

					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="{{$webConfig->linkedin}}">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a>
					 </li>
					@endif

				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Company</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">News and Blogs</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Library</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Community</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Teaching</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Become a teacher</a></li>
							<li class="nav-item"><a class="nav-link" href="#">How to guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

			<!-- Widget 3 START -->
			<div class="col-lg-3">
				<h5 class="mb-2 mb-md-4">Liên hệ</h5>
				<!-- Time -->
				<p class="mb-2">
					Phone: <span class="h6 fw-light ms-2">{{$webConfig->phone}}</span>
				</p>

				<p class="mb-0">Email:<span class="h6 fw-light ms-2">{{$webConfig->email}}</span></p>

				
			</div>
			<!-- Widget 3 END -->
		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-body text-primary-hover"> Copyrights ©2023 Eduport. Build by <a href="https://www.webestica.com/" target="_blank" class="text-body">Webestica</a></div>
					<!-- copyright links-->
					<div class="justify-content-center mt-3 mt-lg-0">
						<ul class="nav list-inline justify-content-center mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>Language
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{ config('app.url') }}/assets/user/images/flags/uk.svg" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{ config('app.url') }}/assets/user/images/flags/gr.svg" alt="">German </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="{{ config('app.url') }}/assets/user/images/flags/sp.svg" alt="">French</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
