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
                    <strong>Thông báo!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Pricing START -->
            <div class="row g-4">



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
                                        <h5 class="mb-0" style="text-transform: uppercase;">{{ $subscription->name }}</h5>
                                        <div class="badge bg-grad mb-0 rounded-pill">Khuyến khích</div>
                                    </div>
                                    <!-- Price -->
                                    <div>
                                        <h4 class="text-success mb-0 plan-price">
                                            {{ number_format($subscription->price, 0, ',', ',') }}
                                            VNĐ</h4>
                                        <p class="small mb-0">/ Thời hạn <span
                                                class="text-success">({{ $subscription->duration_months / 30 }} Tháng)
                                            </span>
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
                            <style>
                                /* width */
                                ::-webkit-scrollbar {
                                  width: 10px;
                                }
                                
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                }
                                </style>
                            <!-- Card Body -->
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mt-2 mb-0 overflow-auto" style="height: 240px;">

                                    @foreach ($subscription->detailSubscriptions as $item)
                                        <li class="mb-3 h6 fw-light">
                                            {{ $item->description }}
                                        </li>
                                    @endforeach

                                  



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
                                    <button type="button" class="btn btn-success mb-0" data-bs-toggle="modal"
                                        data-bs-target="#viewReview">Mua gói</button>
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
    
  
@endsection
