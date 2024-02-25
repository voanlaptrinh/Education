@extends('index')
@section('content')
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif



    <section class="py-5 price-wrap">
        <div class="container">
            <div class="row g-4 position-relative mb-4">
                <!-- SVG decoration -->
                <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                    <svg width="22px" height="22px" viewBox="0 0 22 22">
                        <polygon class="fill-purple"
                            points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                        </polygon>
                    </svg>
                </figure>

                <!-- Title and Search -->
                <div class="col-lg-10 mx-auto text-center position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-50 end-0 translate-middle-y d-none d-md-block">
                        <svg width="27px" height="27px">
                            <path class="fill-orange"
                                d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                            </path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h1>Bảng giá các gói học tập</h1>
                    <p class="mb-4 pb-1">Nhận thức cuối cùng chắc chắn ngày ngọt ngào tại {{ $webConfig->name }}</p>


                    <!-- Switch END -->
                </div>
            </div>
            @if (session('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Thông báo!</strong>  {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
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
                                    <h5 class="mb-0">Gói Miễn Phí</h5>
                                    <div class="badge text-bg-dark mb-0 rounded-pill">Phổ biến</div>
                                </div>
                                <!-- Price -->
                                <div>
                                    <h4 class="text-success mb-0 plan-price" data-monthly-price="$20"
                                        data-annual-price="$570">Free</h4>
                                    <p class="small mb-0">/ Mỗi tài khoản</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">Phúc lợi của
                                gói</p>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mt-2 mb-0">
                                <li class="mb-3 h6 fw-light">
                                    <i class="bi bi-patch-check-fill text-success me-2"></i>Được luyện các đề Free
                                </li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>
                                    Xem được giải thích đáp án chi tiết</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>
                                    Không bị giới hạn số lượng đề/câu hỏi được luyện mỗi ngày</li>

                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Được ưu tiên giải đáp thắc mắc, nếu có</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Hỗ trợ
                                    24/7</li>
                                <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Cập nhật
                                    không giới hạn</li>

                            </ul>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer text-center d-grid pb-0">
                            <button type="button" class="btn btn-light mb-0" data-container="body" data-bs-toggle="popover"
                                data-bs-placement="top"
                                data-bs-content="Với tài khoản Free sẽ được được làm tối thiểu 3 câu hỏi và video bài giảng">Miễn
                                phí</button>
                        </div>
                    </div>
                </div>

                <!-- Pricing item END -->
                @foreach ($subscriptions as $subscription)
                    <!-- Pricing item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card border rounded-3 p-2 p-sm-4 h-100">
                            <!-- Card Header -->
                            <div class="card-header p-0">
                                <!-- Price and Info -->
                                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                                    <!-- Info -->
                                    <div>
                                        <h5 class="mb-0">{{ $subscription->name }}</h5>
                                        <div class="badge bg-grad mb-0 rounded-pill">Khuyến khích</div>
                                    </div>
                                    <!-- Price -->
                                    <div>
                                        <h4 class="text-success mb-0 plan-price">{{ number_format($subscription->price, 0, ',', ',') }}
                                            VNĐ</h4>
                                        <p class="small mb-0">/ Thời hạn <span
                                                class="text-success">({{ ( $subscription->duration_months )}} Tháng) </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="position-relative my-3 text-center">
                                <hr>
                                <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">Phúc lợi
                                    của gói</p>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mt-2 mb-0">
                                    <li class="mb-3 h6 fw-light"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Được luyện tất cả các đề
                                        PRO trong gói</li>
                                    <li class="mb-3 h6 fw-light"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Được xem giải thích chi
                                        tiết</li>
                                    <li class="mb-3 h6 fw-light"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Không bị giới hạn số lượng
                                        đề/câu hỏi được luyện mỗi ngày </li>
                                    <li class="mb-3 h6 fw-light"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Được ưu tiên giải đáp thắc
                                        mắc, nếu có</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Hỗ
                                        trợ
                                        24/7</li>
                                    <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Cập
                                        nhật
                                        không giới hạn</li>
                                </ul>
                            </div>
                            <!-- Card Footer -->
                            @if (!empty(Auth::user()))
                            <form action="{{ route('vnpayment') }}" method="post">
                                @csrf
                                <input hidden type="number" name="subscription_id" value="{{ $subscription->id }}">
                                <input hidden type="number" name="total" value="{{ $subscription->price }}">
                                <div class="card-footer text-center d-grid pb-0">
                                    <button name="redirect" type="submit" class="btn btn-success mb-0">Mua gói</button>
                                </div>
                            </form>
                            @else
                                <div class="card-footer text-center d-grid pb-0">
                                    <button type="button" class="btn btn-success mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">Mua gói</button>
                                </div>
                            @endif


                        </div>
                    </div>
                    <!-- Pricing item END -->
                @endforeach
            </div> <!-- Row END -->
            <!-- Pricing END -->
        </div>
    </section>
    <div class="modal fade" id="viewReview" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header ">
                    <h5 class="modal-title text-dark" id="viewReviewLabel">Vui lòng đăng nhập để mua gói</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="d-md-flex">
                        <!-- Avatar -->
                    
                        <!-- Text -->
                        <div>
                            <img src="/assets/user/images/element/02.svg" alt="">
                            
                            <p class="mb-2">Để có thể mua gói học tập bạn cần đăng nhập tài khoản của mình! </p>
                        </div>	
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-success w-100">Đăng nhập</a>
                </div>
                <!-- Modal footer -->
              
            </div>
        </div>
    </div>
@endsection
