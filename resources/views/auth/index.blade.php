
@extends('index')
@section('content')
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div
                    class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="fw-bold">Chào mừng đến với cộng đồng lớn nhất của chúng tôi</h2>
                            <p class="mb-0 h6 fw-light">Hãy học điều gì đó mới ngay hôm nay!</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="{{asset('/assets/user/images/element/02.svg')}}" class="mt-5" alt="">
                        <!-- Info -->
                       
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                           @yield('contentlogin')
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
@endsection
