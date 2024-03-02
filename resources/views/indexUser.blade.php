@extends('index')
@section('content')
    <main>

        <!-- =======================
        Page Banner START -->
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                @php
                                $examHistories = \App\Models\ExamHistory::where('user_id', auth()->user()->id)->get();
                                $countExamHistory = count($examHistories);
                               
                            @endphp
                            
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}" alt="">
                                       
                                       
                                       @if (Auth::user()->is_pro ==1)
                                           
                                       <span
                                       class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                      @else
                                      <span
                                      class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Free</span>
                                       @endif
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ Auth::user()->name }}</h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6"><i class="fas fa-book"></i> {{ $countExamHistory }}</span>
                                                <span class="text-body fw-light">Bài tập đã làm</span>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="{{ route('profile', Auth::user()->id) }}" class="btn btn-outline-primary mb-0">Thông tin tài khoản</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                       
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Page Banner END -->

        <!-- =======================
        Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar START -->
                    
                    
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                  @yield('contentUsers')
                    <!-- Main content END -->
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

    </main>
@endsection
