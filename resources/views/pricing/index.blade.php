@extends('index')
@section('content')

    <section class="py-5 price-wrap">
      <div class="container">
        <div class="row g-4 position-relative mb-4">
          <!-- SVG decoration -->
          <figure class="position-absolute top-0 start-0 d-none d-sm-block">
            <svg width="22px" height="22px" viewBox="0 0 22 22">
              <polygon class="fill-purple" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
            </svg>
          </figure>

          <!-- Title and Search -->
          <div class="col-lg-10 mx-auto text-center position-relative">
            <!-- SVG decoration -->
            <figure class="position-absolute top-50 end-0 translate-middle-y d-none d-md-block">
              <svg width="27px" height="27px">
                <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
              </svg>
            </figure>
            <!-- Title -->
            <h1>Affordable Pricing Packages</h1>
            <p class="mb-4 pb-1">Perceived end knowledge certainly day sweetness why cordially</p>

            <!-- Switch START -->
            <form class="d-flex align-items-center justify-content-center">
              <!-- Label -->
              <span class="h6 mb-0 fw-bold">Monthly</span>
              <!-- Switch -->
              <div class="form-check form-switch form-check-lg mx-3 mb-0">
                <input class="form-check-input mt-0 price-toggle" type="checkbox" id="flexSwitchCheckDefault">
              </div>
              <!-- Label -->
              <div class="position-relative">
                <span class="h6 mb-0 fw-bold">Yearly</span>
                <span class="badge bg-danger bg-opacity-10 text-danger ms-1 position-absolute top-0 start-100 translate-middle mt-n2 ms-2 ms-md-5">10% discount</span>
              </div>
            </form>
            <!-- Switch END -->
          </div>
            </div>
            <!-- Pricing START -->
            <div class="row g-4">

                <!-- Pricing item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card border rounded-3 p-2 p-sm-4 h-100">
                        <!-- Card Header -->
                        <div class="card-header p-0">
                            <!-- Price and Info -->
                            <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                                <!-- Info -->
                                <div>
                                    <h5 class="mb-0">Basic</h5>
                                    <div class="badge text-bg-dark mb-0 rounded-pill">Most popular</div>
                                </div>
                                <!-- Price -->
                                <div>
                                    <h4 class="text-success mb-0 plan-price" data-monthly-price="$20" data-annual-price="$570">$20</h4>
                                    <p class="small mb-0">/ per user</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">All plans included</p>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 05 users monthly</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Free 5 host &amp; domain</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom infrastructure</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to all our room</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>24/7 dedicated Support</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Unlimited updates</li>
                                <li class="h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            </ul>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer text-center d-grid pb-0">
                            <button type="button" class="btn btn-light mb-0">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->

                <!-- Pricing item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card border rounded-3 p-2 p-sm-4 h-100">
                        <!-- Card Header -->
                        <div class="card-header p-0">
                            <!-- Price and Info -->
                            <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                                <!-- Info -->
                                <div>
                                    <h5 class="mb-0">Professional</h5>
                                    <div class="badge bg-grad mb-0 rounded-pill">Recommended</div>
                                </div>
                                <!-- Price -->
                                <div>
                                    <h4 class="text-success mb-0 plan-price" data-monthly-price="$59" data-annual-price="$840">$59</h4>
                                    <p class="small mb-0">/ per user</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">All plans included</p>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 05 users monthly</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Free 5 host &amp; domain</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom infrastructure</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to all our room</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>24/7 dedicated Support</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Unlimited updates</li>
                                <li class="h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            </ul>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer text-center d-grid pb-0">
                            <button type="button" class="btn btn-dark mb-0">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->

                <!-- Pricing item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card border rounded-3 p-2 p-sm-4 h-100">
                        <!-- Card Header -->
                        <div class="card-header p-0">
                            <!-- Price and Info -->
                            <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                                <!-- Info -->
                                <div>
                                    <h5 class="mb-0">Premium</h5>
                                    <div class="badge text-bg-dark mb-0 rounded-pill">Best value</div>
                                </div>
                                <!-- Price -->
                                <div>
                                    <h4 class="text-success mb-0 plan-price" data-monthly-price="$99" data-annual-price="$999">$99</h4>
                                    <p class="small mb-0">/ per user</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">All plans included</p>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 05 users monthly</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Free 5 host &amp; domain</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom infrastructure</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to all our room</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>24/7 dedicated Support</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Unlimited updates</li>
                                <li class="h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Landing pages &amp; Web widgets</li>
                            </ul>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer text-center d-grid pb-0">
                            <button type="button" class="btn btn-light mb-0">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
            </div>	<!-- Row END -->
            <!-- Pricing END -->
      </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Client START -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center my-4">
                <div class="col-12">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round">
                        <div class="tiny-slider-inner" data-arrow="false" data-autoplay="true"  data-edge="2" data-dots="false" data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2">
                            <!-- Slide item START -->
                            <div class="item"><img src="assets/images/client/coca-cola.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/android.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/envato.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/microsoft.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/netflix.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/google.svg" class="grayscale" alt=""> </div>
                            <div class="item"><img src="assets/images/client/linkedin.svg" class="grayscale" alt=""> </div>
                            <!-- Slide item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Client END -->

    <!-- =======================
    Feature END -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-8 text-center mx-auto mb-4">
                    <h2>Full Features List</h2>
                    <p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
                </div>
            </div>

            <!-- Table START -->
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto">
                    <!-- Title -->
                    <div class="bg-light p-3 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-start">
                                <h5 class="mb-2 mb-md-0">Template Feature</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-4 text-center py-2">
                                        <h6 class="mb-0">Basic</h6>
                                    </div>
                                    <div class="col-4 text-center py-2">
                                        <h6 class="mb-0">Professional</h6>
                                    </div>
                                    <div class="col-4 text-center py-2">
                                        <h6 class="mb-0">Premium</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Up to 05 users monthly</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Free 5 host & domain</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Custom infrastructure</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Access to all our room</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
            <!-- Table END -->

            <!-- Table START -->
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto">
                    <!-- Title -->
                    <div class="row">
                        <div class="col-12 bg-light p-3 rounded-3">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center text-md-start">
                                    <h5 class="mb-2 mb-md-0">Support team member growth</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Basic</h6>
                                        </div>
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Professional</h6>
                                        </div>
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Premium</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Team Goals</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Free 5 host & domain</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Custom infrastructure</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-2 mb-md-0">Access to all our room</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
            <!-- Table END -->

            <!-- Table START -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Title -->
                    <div class="row">
                        <div class="col-12 bg-light p-3 rounded-3">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center text-md-start">
                                    <h5 class="mb-2 mb-md-0">Connectivity</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Basic</h6>
                                        </div>
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Professional</h6>
                                        </div>
                                        <div class="col-4 text-center py-2">
                                            <h6 class="mb-0">Premium</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">API Access</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center"></div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center"></div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                    <hr class="m-0"> <!-- Divider -->

                    <!-- Table item -->
                    <div class="row align-items-center p-3">
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="mb-3 mb-md-0">Premium Add-ons</h6>
                        </div>
                        <!-- Content -->
                        <div class="col-md-6 pt-2 pt-md-0">
                            <div class="row">
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">

                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                                <!-- Check -->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="icon-md bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
            <!-- Table END -->

        </div>
    </section>
    <!-- =======================
    Feature END -->

    <!-- =======================
    FAQ START -->
    <section class="pt-0">
        <div class="container mt-4">
            <!-- Title -->
            <div class="row mb-5">
                <div class="col-md-8 text-center mx-auto">
                    <h2>Frequently asked questions</h2>
                    <p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
                </div>
            </div>

            <div class="row g-4 g-md-5">
                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>Do you provide customer support?</h5>
                    <p>Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected the resolving agreement perceived at an. Comfort reached gay perhaps chamber his six detract besides add.</p>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>Is there a money-back guarantee?</h5>
                    <p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible.</p>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>What is your privacy policy?</h5>
                    <p>Two before narrow not relied how except moment myself Dejection assurance mrs led certainly So gate at no only none open Betrayed at properly it of graceful on Dinner abroad am depart ye turned hearts as me wished Therefore allowance too perfectly gentleman supposing man his now Families goodness all eat out bed steepest servants Explained the incommode sir improving northward immediate eat Man denoting received you sex possible you Shew park own loud son door less yet </p>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>What's the difference between monthly and annual plans?</h5>
                    <p>Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. Course regard to up he hardly. View four has said do men saw find dear shy. Talent men wicket add garden. </p>
                    </div>

                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>How can I buy your software?</h5>
                    <p>Lose john poor same it case do year we Full how way even the sigh Extremely nor furniture fat questions now provision incommode preserved Our side fail to find like now Discovered traveling for insensible partiality unpleasing impossible she Sudden up my excuse to suffer ladies though or Bachelor possible Marianne directly confined relation as on he </p>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6">
                    <h5>What happens after the trial ends?</h5>
                    <p>Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. Comfort reached gay perhaps chamber his six detract besides add.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
