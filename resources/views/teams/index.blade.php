@extends('index')
@section('content')
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-dark p-4 text-center rounded-3">
                        <h1 class="text-white m-0">Đội ngũ</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="/" class="docs-creator">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đội ngũ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4">
        <div class="container">
            <!-- Search option START -->
            <div class="row mb-4 align-items-center">
                <!-- Search bar -->
                <div class="col-sm-12 col-xl-12">
                    <form class="border rounded p-2" action="{{ route('teams.index') }}" method="GET">
                        <div class="input-group input-borderless">
                            <input name="search" class="form-control bg-body" type="search"
                            placeholder="Nhập tên hoặc email muốn tìm" aria-label="Search"
                            value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary mb-0 rounded"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>



              
            </div>
            <!-- Search option END -->

            <!-- Instructor list START -->
            <div class="row g-4 justify-content-center">
                @if (count($teams) > 0)
                    @foreach ($teams as $team)
                        <!-- Card item START -->
                        <div class="col-lg-10 col-xl-6">
                            <div class="card shadow p-2">
                                <div class="row g-0">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $team->image) }}" class="rounded-3" alt="...">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                <div>
                                                    <h5 class="card-title mb-0"><a href="{{ route('teams.subdetail', $team->id) }}"
                                                
                                                            class="docs-creator">{{ $team->name }}</a></h5>

                                                </div>

                                            </div>
                                            <!-- Content -->
                                            <p class="text-truncate-2 mb-3" style="height: 45px">{{ $team->description }}
                                            </p>
                                            <!-- Info -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <!-- Title -->
                                                <h6 class="text-orange mb-0">{{ $team->email }}</h6>

                                                <!-- Social button -->
                                                <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                    @if (!empty($team->facebook))
                                                        <li class="list-inline-item">
                                                            <a class="mb-0 me-1 text-facebook docs-creator"
                                                                href="{{ $team->facebook }}"><i
                                                                    class="fab fa-fw fa-facebook-f"></i></a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($team->instagram))
                                                        <li class="list-inline-item">
                                                            <a class="mb-0 me-1 text-instagram-gradient docs-creator"
                                                                href="{{ $team->instagram }}"><i
                                                                    class="fab fa-fw fa-instagram"></i></a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($team->twitter))
                                                        <li class="list-inline-item">
                                                            <a class="mb-0 me-1 text-twitter docs-creator"
                                                                href="{{ $team->twitter }}"><i
                                                                    class="fab fa-fw fa-twitter"></i></a>
                                                        </li>
                                                    @endif
                                                    @if (!empty($team->linkedin))
                                                        <li class="list-inline-item">
                                                            <a class="mb-0 text-linkedin docs-creator"
                                                                href="{{ $team->linkedin }}"><i
                                                                    class="fab fa-fw fa-linkedin-in"></i></a>
                                                        </li>
                                                    @endif

                                                </ul>
                                            </div>
                                        </div>
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
            <!-- Instructor list END -->

            <!-- Pagination START -->

            <!-- Pagination END -->
            @if (count($teams) > 0)
                <div class="card-footer bg-transparent pt-0 mt-4">
                    <!-- Pagination START -->
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            {{ $teams->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Pagination END -->
            @endif

        </div>
    </section>
@endsection
