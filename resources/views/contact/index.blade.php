@extends('index')
@section('content')
    <section class="pt-5 pb-0"
        style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6 text-center mx-auto">
                    <!-- Title -->
                    <h6 class="text-primary">Liên hệ</h6>
                    <h1 class="mb-4">Chúng tôi ở đây để giúp đỡ!</h1>
                </div>
            </div>

            <!-- Contact info box -->
            <div class="row g-4 g-md-5 mt-0 mt-lg-3">
                <!-- Box item -->
                <div class="col-lg-12 mt-lg-0">
                    <div class="card card-body bg-primary shadow py-5 text-center h-100">
                        <!-- Title -->
                        <h5 class="text-white mb-3">Hỗ trợ khách hàng</h5>
                        <ul class="list-inline mb-0">
                            <!-- Address -->
                            <li class="list-item mb-3">
                                <a href="#" class="text-white"> <i
                                        class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>{{ $webConfig->address }} </a>
                            </li>
                            <!-- Phone number -->
                            <li class="list-item mb-3">
                                <a href="#" class="text-white"> <i
                                        class="fas fa-fw fa-phone-alt me-2"></i>{{ $webConfig->phone }} </a>
                            </li>
                            <!-- Email id -->
                            <li class="list-item mb-0">
                                <a href="#" class="text-white"> <i
                                        class="far fa-fw fa-envelope me-2"></i>{{ $webConfig->email }} </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->

            </div>
        </div>
    </section>
    <!-- =======================
            Page Banner END -->

    <!-- =======================
            Image and contact form START -->
    <section>
        <div class="container">
            <div class="row g-4 g-lg-0 align-items-center">

                <div class="col-md-6 align-items-center text-center">
                    <!-- Image -->
                    <img src="assets/user/images/element/contact.svg" class="h-400px" alt="">

                    <!-- Social media button -->
                    <div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
                        <h5 class="mb-0">Theo dõi tại:</h5>
                        <ul class="list-inline mb-0 ms-sm-2">
                            @if ($webConfig->facebook_id)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-facebook"
                                        href="https://www.facebook.com/{{ $webConfig->facebook_id }}"><i
                                            class="fab fa-fw fa-facebook-square"></i></a> </li>
                            @endif
                            @if ($webConfig->instagram)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-instagram" href="#"><i
                                            class="fab fa-fw fa-instagram"></i></a> </li>
                            @endif
                            @if ($webConfig->twitter)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="#"><i
                                            class="fab fa-fw fa-twitter"></i></a> </li>
                            @endif
                            @if ($webConfig->linkedin)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-linkedin" href="#"><i
                                            class="fab fa-fw fa-linkedin-in"></i></a> </li>
                            @endif
                            @if ($webConfig->dribbble)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-dribbble" href="#"><i
                                            class="fas fa-fw fa-basketball-ball"></i></a> </li>
                            @endif
                            @if ($webConfig->pinterest)
                                <li class="list-inline-item"> <a class="fs-5 me-1 text-pinterest" href="#"><i
                                            class="fab fa-fw fa-pinterest"></i></a> </li>
                            @endif

                        </ul>
                    </div>
                </div>

                <!-- Contact form START -->
                <div class="col-md-6">
                    <!-- Title -->
                    <h2 class="mt-4 mt-md-0">Hãy nói chuyện</h2>
                    <p>hãy liên hệ trực tiếp với chúng tôi hoặc điền vào biểu mẫu và chúng tôi sẽ liên hệ lại với bạn ngay
                        lập tức</p>

                    <form action="{{ route('contact.create') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-4 bg-light-input">
                            <label for="yourName" class="form-label">Tên của bạn *</label>
                            <input type="text" name="yourName" class="form-control form-control-lg"
                                value="{{ old('yourName') }}" id="yourName">
                            @error('yourName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="mb-4 bg-light-input">
                            <label for="emailInput" class="form-label">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control form-control-lg" id="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 bg-light-input">
                            <label for="emailInput" class="form-label">PĐiện thoại *</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="form-control form-control-lg" id="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Message -->
                        <div class="mb-4 bg-light-input">
                            <label for="textareaBox" class="form-label">Nội dung *</label>
                            <textarea class="form-control" name="content" id="content" rows="4">{{ old('content') }}</textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Button -->
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary mb-0" type="submit">Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                @if (!empty($webConfig->gg_map))
                    
                <div class="col-12">
                    <iframe class="w-100 h-400px grayscale rounded"
                        src="{{$webConfig->gg_map}}">
                        height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
