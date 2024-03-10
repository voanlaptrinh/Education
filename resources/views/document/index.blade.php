@extends('index')
@section('content')
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-dark p-4 text-center rounded-3">
                        <h1 class="text-white m-0">Tài liệu</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $clss }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                    Page Banner END -->

    <!-- =======================
                    Inner part START -->
    <section class="pt-4">
        <div class="container">
            <!-- Search option START -->
            <div class="row mb-4 align-items-center">
                <!-- Search bar -->
                <div class="col-sm-12 col-xl-12">
                    <form class="border rounded p-2" action="{{ route('document.index', $class) }}" method="GET">
                        <div class="input-group input-borderless">
                            <input class="form-control me-1" type="search" name="query" placeholder="Tìm kiếm "
                                value="{{ $searchQuery ?? '' }}">
                            <button type="submit" class="btn btn-primary mb-0 rounded"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            @if (count($documents) > 0)
                <div class="row g-4 justify-content-center">
                    @foreach ($documents as $item)
                        <div class="col-lg-10 col-xl-6">
                            <div class="card shadow p-2">
                                <div class="row g-0">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <a href=""><img src="{{ asset('storage/' . $item->image_path) }}"
                                                class="rounded-3" alt="..."></a>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                <div>
                                                    <h5 class="card-title mb-0"><a href="#">{{ $item->name }}</a>
                                                    </h5>
                                                </div>
                                                <span class="h6 fw-light" style="text-transform: uppercase;">
                                                    @if ($item->access_level == 'paid')
                                                        {{ rtrim(rtrim(number_format($item->price, 2), '0'), '.') }} VNĐ
                                                    @else
                                                        {{ $item->access_level }}
                                                    @endif
                                                    <i class="fas fa-star text-warning ms-1"></i>
                                                </span>
                                            </div>
                                            <p class="text-truncate-2 mb-3">{{ $item->description }}</p>
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <h6 class="text-orange mb-0">{{ $item->classes->name }}</h6>
                                                <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                    @if ($item->access_level == 'paid')
                                                    <form action="{{ route('vnpayDocument') }}" method="post">
                                                        @csrf
                                                        <input hidden type="number" name="document_id" value="{{ $item->id }}">
                                                        <input hidden type="number" name="total" value="{{ $item->price }}">
                                                        <div class="card-footer text-center d-grid pb-0">
                                                            <button name="redirect_document" type="submit" class="btn btn-success mb-0">Thanh toán tải về</button>
                                                        </div>
                                                    </form>
                                                    @else
                                                        <a class="btn btn-success"
                                                            href="{{ route('document.detail', [$item->id]) }}">Xem chi
                                                            tiết</a>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                    <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            @if ($documents->currentPage() > 1)
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $documents->url($documents->currentPage() - 1) }}" tabindex=""><i
                                            class="fas fa-angle-double-left"></i></a></li>
                            @endif
                            @for ($i = 1; $i <= $documents->lastPage(); $i++)
                                <li class=" page-item mb-0 {{ $documents->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $documents->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($documents->currentPage() < $documents->lastPage())
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fas fa-angle-double-right"></i></a></li>
                            @endif

                        </ul>

                    </ul>
                </nav>
                <!-- Pagination END -->
            @else
                Không có tài liệu nào....
            @endif


        </div>
    </section>
@endsection
