<section class="pb-5 pt-0 pt-lg-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-1">Tất cả bài học</h2>
                <p class="mb-0">Tham khảo hầu hết 🔥 khóa học trên thị trường</p>
            </div>
        </div>

        <div class="row">
            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                <div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true" data-edge="2"
                    data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">
                    <!-- Card item START -->
                    @foreach ($bai_hoc as $item)
                        <div>
                            <div class="card action-trigger-hover border bg-transparent">
                                <!-- Image -->
                                <img src="{{ $item->image ? asset('storage/' . $item->image) : 'placeholder.jpg' }}" class="card-img-top"
                                    alt="course image">
                                <!-- Ribbon -->
                                <div class="ribbon mt-3"><span>Free</span></div>
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="hstack gap-2">
                                            <a href="#"
                                                class="badge bg-primary bg-opacity-10 text-primary">{{$item->subject->class->name}}</a>
                                            <a href="#" class="badge text-bg-dark">{{$item->subject->name}}</a>
                                        </span>
                                        <a href="#" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="#">{{$item->title}}</a></h5>
                                    <!-- Rating -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="hstack gap-2">
                                            <p class="text-warning m-0">4.5<i class="fas fa-star text-warning ms-1"></i>
                                            </p>
                                            <span class="small">(6500)</span>
                                        </div>
                                        <div class="hstack gap-2">
                                            <p class="h6 fw-light mb-0 m-0">6500</p>
                                            <span class="small">(Student)</span>
                                        </div>
                                    </div>
                                    <!-- Time -->
                                    <div class="hstack gap-3">
                                        <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6h
                                            56m</span>
                                        <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82
                                            lectures</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 bg-transparent">
                                    <hr>
                                    <!-- Avatar and Price -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Avatar -->
                                        <div class="d-flex align-items-center">
                                        </div>
                                        <!-- Price -->
                                        <div>
                                            <h4 class="text-success mb-0 item-show">Free</h4>
                                            <a href="#" class="btn btn-sm btn-success-soft item-show-hover"><i
                                                    class="fas fa-shopping-cart me-2"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Card item END -->

                </div>
            </div>
            <!-- Slider END -->
        </div>
    </div>
</section>
