@extends('index')
@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">Trang tìm kiếm</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kết quả tiềm kiếm của ( <span style="color: red">{{ $keyword }}</span> )</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">
                    <!-- Course Grid START -->
                    <div class="row g-4">
                        @if (count($lessons) > 0)
                            @foreach ($lessons as $lesson)
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <a href="{{ route('lessons.show', ['lesson' => $lesson]) }}"><img
                                                src="{{ $lesson->image ? asset('storage/' . $lesson->image) : 'placeholder.jpg' }}"
                                                class="card-img-top" alt="course image"></a>
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a class="badge bg-purple bg-opacity-10 text-purple">Hoạt
                                                    động</a>
                                                <a class="h6 fw-light mb-0"></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title"><a
                                                    href="{{ route('lessons.show', ['lesson' => $lesson]) }}">{{ $lesson->title }}</a>
                                            </h5>

                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-eye text-danger me-2"></i>{{ $lesson->views }}</span>
                                                @if ($lesson->chapters)
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="fas fa-table text-orange me-2"></i>{{ $lesson->chapters->count() }}</span>
                                                @else
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="fas fa-table text-orange me-2"></i>Không có bài giảng
                                                        nào</span>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endforeach
                        @else
                           <h6 class="text-center">Không có kết quả nào!</h6>
                        @endif



                    </div>
                    <!-- Course Grid END -->
                    @if (count($lessons) > 0)
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                @if ($lessons->currentPage() > 1)
                                    <li class="page-item mb-0">
                                        <a class="page-link"
                                            href="{{ url('/search?page=' . ($lessons->currentPage() - 1) . '&search=' . request('search')) }}"
                                            tabindex="">
                                            <i class="fas fa-angle-double-left"></i>
                                        </a>
                                    </li>
                                @endif
                                @for ($i = 1; $i <= $lessons->lastPage(); $i++)
                                    <li class="page-item mb-0 {{ $lessons->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ url('/search?page=' . $i . '&search=' . request('search')) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($lessons->currentPage() < $lessons->lastPage())
                                    <li class="page-item mb-0">
                                        <a class="page-link"
                                            href="{{ url('/search?page=' . ($lessons->currentPage() + 1) . '&search=' . request('search')) }}">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    @endif
                    


                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                Page content END -->
@endsection
