@extends('index')
@section('content')
    <section class="pb-0 pt-4 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Title and Info START -->
                    <div class="row">
                        <!-- Avatar and Share -->


                        <!-- Content -->
                        <div class="col-lg-12 order-1">
                            <!-- Pre title -->
                            <span>{{date('d-m-Y', strtotime($news->created_at))}}</span><span class="mx-2">|</span>
                            <div class="badge text-bg-success">{{$news->is_views}} Lượt xem</div>
                            <!-- Title -->
                            <h1 class="mt-2 mb-0 display-5">{{ $news->name }}</h1>
                            <!-- Info -->
                            <p class="mt-2">{{ $news->description }}</p>

                        </div>
                    </div>
                    <!-- Title and Info END -->


                    <!-- Content START -->
                    <div class="row">
                        <div class="row mb-4">
                            {!! $news->content !!}
                        </div>
                    </div>
                    <!-- Content END -->


                    <hr> <!-- Divider -->

                    <!-- Comment review and form START -->
                    <div class="row mt-4">


                        <!-- Form START -->
                        <div class="col-md-12">
                            <div id="comment_fb ">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0"
                                    nonce="sjReJwoO"></script>

                            </div>
                            <div class="col-md-8">
                                <hr>
                                <div class="fb-comments " data-href="{{ $fullUrl }}" data-width="" data-numposts="5">
                                </div>
                            </div>
                        </div>
                        <!-- Form END -->
                    </div>
                    <!-- Comment review and form END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
            Main Content END -->

    <!-- =======================
            Related blog START -->
    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-0">Những tin tức khác</h2>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-hover arrow-dark">
                <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false"
                    data-items="3" data-items-lg="2" data-items-sm="1">
                    @foreach ($otherNews as $otherNews)
                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('images/news/' . $otherNews->image) }}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">{{ $otherNews->name }}</a></h6>
                                        <span class="small">{{date('d-m-Y', strtotime($otherNews->created_at))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
@endsection
