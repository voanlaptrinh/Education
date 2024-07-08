@extends('index')
@section('content')
    <section class="bg-bg align-items-center d-flex"
        style="background:url(assets/user/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Title -->
                    <h1 class="text-white">Đánh giá</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">



                <!-- Contact form START -->
                <div class="col-md-6">

                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Tiêu đề</label>
                            <div class="mb-4 bg-light-input">
                                <input type="text" name="title" class="form-control form-control-lg" value=""
                                    id="yourName">
                            </div>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Số sao</label>
                            <select name="rating" id="rating" class="form-select">
                                <option value="5">★★★★★ (5)</option>
                                <option value="4">★★★★ (4)</option>
                                <option value="3">★★★ (3)</option>
                                <option value="2">★★ (2)</option>
                                <option value="1">★ (1)</option>

                            </select>
                            @error('rating')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 bg-light-input pt-3">
                            <label for="textareaBox" class="form-label custom-cursor-default-hover">Nội dung *</label>
                            <textarea class="form-control" id="content" name="content" rows="8"></textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                        <!-- Button -->
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary mb-0" type="submit">Gửi Đánh Giá</button>
                        </div>
                    </form>
                </div>
                <!-- Contact form END -->


                <div class="col-md-6">
                    <!-- Student review START -->
                    <div class=" bg-transparent rounded-3">
                        <div class="card ">
                            <!-- Header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <div class="row justify-content-between align-middle">
                                    <!-- Title -->
                                    <div class="col-sm-6">
                                        <h3 class="card-header-title mb-2 mb-sm-0">Đánh giá </h3>
                                    </div>


                                </div>
                            </div>
                            <!-- Header END -->

                            <!-- Reviews START -->
                            <div class="card-body mt-2 mt-sm-4 ">

                                <!-- Review item START -->
                                @if (count($countReviews) > 0)
                                    @foreach ($reviews as $review)
                                        <div class="d-sm-flex scrollspy-example bg-body-tertiary p-3 rounded-2" data-bs-spy="scroll" style="" a-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="" tabindex="0">
                                            <!-- Avatar image -->
                                            @if (!empty($review->user->image))
                                                <img class="avatar avatar-lg rounded-circle float-start me-3"
                                                    src="{{ asset('storage/' . $review->user->image) }}" alt="avatar">
                                            @else
                                                <img class="avatar avatar-lg rounded-circle float-start me-3"
                                                    src="{{ asset('/assets/user/images/default-avatar.png') }}"
                                                    alt="avatar">
                                            @endif
                                            <div>
                                                <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                                    <!-- Title -->
                                                    <div>
                                                        <div class="d-flex">
                                                            <h5 class="m-0">{{ $review->user->name }}</h5> 
                                                            <span class="me-3 small ps-4 pt-1">{{ $review->created_at->format('d/m/Y') }}</span>
                                                        </div>
                                                        <ul class="list-inline mb-0">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <li class="list-inline-item me-0">
                                                                    @if ($i <= $review->rating)
                                                                        <i class="fas fa-star text-warning"></i>
                                                                    @else
                                                                        <i class="far fa-star text-warning"></i>
                                                                    @endif
                                                                </li>
                                                            @endfor
                                                        </ul>


                                                    </div>
                                                    <!-- Review star -->

                                                </div>
                                                <!-- Content -->
                                                <h6><span class="text-body fw-light">Tiêu đề:</span> {{ $review->title }}
                                                </h6>
                                                <p>{{ $review->content }} </p>
                                                <!-- Button -->

                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                @else
                                    <span>Chưa có đánh giá nào...</span>
                                @endif
                                <!-- Divider -->

                            </div>
                        </div>
                        <!-- Reviews END -->
                        @if (count($countReviews) > 0)
                            <div class="card-footer bg-transparent px-0">
                                <!-- Pagination START -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <div class="container">
                                        <div class="d-flex justify-content-end">
                                            {{ $reviews->appends(request()->query())->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination END -->
                            </div>
                        @endif

                    </div>
                    <!-- Student review END -->
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">

            <div class="row">


                <!-- Main content START -->

                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
@endsection
