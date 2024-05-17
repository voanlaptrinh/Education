<section class="bg-light">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-xl-7 order-2 order-xl-1 d-flex justify-content-center">



                <!-- Review -->
                <div class="col-md-10 mt-n6 mb-0 mb-md-5 pt-5">
                    <img class="avatar-img rounded" src="{{asset('assets/user/images/reviews.jpg')}}" alt="avatar">
                </div>

            </div>
            <div class="col-xl-5 order-1 text-center text-xl-start">
                <!-- Title -->
                <h2 class="fs-1"> Một số phản hồi có giá trị từ người dùng của chúng tôi
                </h2>
                <p>Chúng tôi rất vui khi nhận được những lượt đánh giá và phản hồi của các bạn về
                    {{ $webConfig->name }}. Rất mong được đồng hành cũng các bạn trên con đường học tập!</p>
                <a href="{{ route('reviews.index') }}" class="btn btn-primary mb-0">Xem đánh giá</a>
            </div>
        </div> <!-- Row END -->
    </div>
</section>
