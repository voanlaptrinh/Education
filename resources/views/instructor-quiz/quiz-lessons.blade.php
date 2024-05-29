@extends('index')
@section('content')
    <section class="pt-0 pt-lg-5">
        <div class="container position-relative">
            <!-- SVG decoration START -->
            <figure class="position-absolute top-50 start-50 translate-middle ms-2">
                <svg>
                    <path class="fill-white opacity-4"
                        d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
                    </path>
                    <path class="fill-white opacity-4"
                        d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
                    </path>
                    <path class="fill-white opacity-4"
                        d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
                    </path>
                    <path class="fill-white opacity-4"
                        d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
                    </path>
                </svg>
            </figure>
            <!-- SVG decoration END -->

            <div class="row">
                <div class="col-12">
                    <div class="bg-info p-4 p-sm-5 rounded-3">
                        <div class="row position-relative">
                            <!-- Svg decoration -->
                            <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                                <svg width="141px" height="141px">
                                    <path
                                        d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                    </path>
                                </svg>
                            </figure>
                            <!-- Action box -->
                            <div class="col-11 mx-auto position-relative">
                                <div class="row align-items-center">
                                    <!-- Title -->
                                    <div class="col-lg-8">
                                        <h3 class="text-white">Chào mừng bạn đến với {{ $subject->name }} ({{$subject->class->name}})!</h3>
                                        <p class="text-white mb-3 mb-lg-0">{{ $subject->description }}</p>
                                    </div>
                                    <!-- Content and input -->
                                    <div class="col-lg-4 text-lg-end">
                                       
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>

    <div class="container">
        <div class="col-lg-12 z-index-9 mt-5 mt-xl-0">

            <ul class="nav nav-pills nav-pill-soft my-4" id="course-pills-tab" role="tablist">
                <!-- Tab item -->
                <li class="nav-item me-2 me-lg-4" role="presentation">
                    <button class="nav-link mb-2 mb-xl-0 active" id="course-pills-tab-1" data-bs-toggle="pill"
                        data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1"
                        aria-selected="false" tabindex="-1">Bài học {{ $subject->name }}</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-lg-4" role="presentation">
                    <button class="nav-link mb-2 mb-xl-0 " id="course-pills-tab-2" data-bs-toggle="pill"
                        data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2"
                        aria-selected="true">Câu hỏi liên quan đến {{ $subject->name }}</button>
                </li>
                <!-- Tab item -->

            </ul>

            <!-- Tab contents START -->
            <div class="tab-content" id="pills-tabContent">
                <!-- Content -->
                <div class="tab-pane fade active show" id="course-pills-1" role="tabpanel"
                    aria-labelledby="course-pills-tab-1">
                    <div class="card card-body bg-transparent pb-0 border mb-4">
                        <div class="table-responsive border-0">
                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">STT</font>
                                            </font>
                                        </th>
                                        <th scope="col" class="border-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tên bài học</font>
                                            </font>
                                        </th>
                                        <th scope="col" class="border-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Số lượt xem</font>
                                            </font>
                                        </th>
                                        <th scope="col" class="border-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Trạng thái</font>
                                            </font>
                                        </th>
                                        <th scope="col" class="border-0 rounded-end">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Hoạt động</font>
                                            </font>
                                        </th>
                                    </tr>
                                </thead>

                                <!-- Table body START -->
                                <tbody>
                                    <!-- Table item -->
                                    @if (!empty($lessons))
                                        @foreach ($lessons as $key => $lesson)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="{{ $lesson->image ? asset('storage/' . $lesson->image) : 'placeholder.jpg' }}"
                                                                class="rounded" alt="ssss">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            {{ $lesson->title }}</font>
                                                                    </font>
                                                                </a></h6>
                                                            <!-- Info -->
                                                            @if (count($lesson->chapters)>0)
                                                                <div class="d-sm-flex">
                                                                    <p class="h6 fw-light mb-0 small me-3">
                                                                        <i class="fas fa-table text-orange me-2"></i>
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                {{ $lesson->chapters->count() }}
                                                                                Bài giảng</font>
                                                                        </font>
                                                                    </p>
                                                                    <ul class="list-unstyled mb-0">
                                                                        {{-- Thêm thông tin về chương trình giảng dạy nếu cần --}}
                                                                    </ul>
                                                                </div>
                                                            @else
                                                                <div class="d-sm-flex">
                                                                    <p class="h6 fw-light mb-0 small me-3">

                                                                    </p>
                                                                    <p class="h6 fw-light mb-0 small text-muted">
                                                                        <i class="fas fa-info-circle me-2"></i>
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Không có
                                                                                bài
                                                                                giảng nào</font>
                                                                        </font>
                                                                    </p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Enrolled item -->
                                                <td class="text-center text-sm-start">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ $lesson->views }} <i class="fas fa-eye"></i> </font>
                                                    </font>
                                                </td>
                                                <!-- Status item -->
                                                <td>
                                                    <div class="badge bg-success bg-opacity-10 text-success">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Hoạt động</font>
                                                        </font>
                                                    </div>
                                                </td>
                                                <!-- Price item -->
                                              
                                                <!-- Action item -->
                                                <td>

                                                    <a href="{{ route('lessons.show', ['lesson' => $lesson]) }}"
                                                        class="btn btn-sm btn-danger">Xem chi tiết bài học</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif





                                </tbody>
                                <!-- Table body END -->
                            </table>
                        </div>

                        <div class="card-footer bg-transparent px-0">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start"></p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul
                                        class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        @if ($lessons->currentPage() > 1)
                                            <li class="page-item mb-0"><a class="page-link"
                                                    href="{{ $lessons->url($lessons->currentPage() - 1) }}"
                                                    tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                        @endif
                                        @for ($i = 1; $i <= $lessons->lastPage(); $i++)
                                            <li
                                                class=" page-item mb-0 {{ $lessons->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $lessons->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        @if ($lessons->currentPage() < $lessons->lastPage())
                                            <li class="page-item mb-0"><a class="page-link" href="{{ $lessons->url($lessons->currentPage() + 1) }}"><i
                                                        class="fas fa-angle-right"></i></a></li>
                                        @endif

                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="card card-body bg-transparent pb-0 border mb-4">

                        <!-- Table START -->
                        <div class="table-responsive border-0">
                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">#</th>
                                        <th scope="col" class="border-0">Tiêu đề câu hỏi</th>
                                        <th scope="col" class="border-0">Môn học</th>
                                        <th scope="col" class="border-0">Số câu hỏi</th>
                                        <th scope="col" class="border-0">Ngày đăng</th>
                                        <th scope="col" class="border-0 rounded-end">Thao tác</th>
                                    </tr>
                                </thead>

                                <!-- Table body START -->
                                <tbody>
                                    @php
                                        $idx = 0;
                                    @endphp
                                    <!-- Table row -->
                                    @foreach ($courses as $course)
                                        <tr>
                                            <!-- Table data -->
                                            <td>{{ $idx++ }}</td>

                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                  
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a
                                                                href="{{ route('questions.show', $course) }}"
                                                                class="stretched-link">{{ $course->name }}</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <h6 class="table-responsive-title mb-0"><a
                                                        href="#">{{ $subject->name }}</a>
                                                </h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                {{ $course->questions->count() }} câu hỏi
                                            </td>

                                            <!-- Table data -->
                                            <td>

                                                {{ $course->created_at->format('d/m/Y') }}


                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                @if (!empty(Auth::user()))
                                                    @if ($course->questions->count() > 0)
                                                        @if ($course->is_free == 0)
                                                            <a href="{{ route('questions.show', $course) }}"
                                                                class="btn btn-sm btn-info-soft mb-0"> Làm bài 
                                                                <i class="fas fa-crown"
                                                                    style=" color: rgb(112, 112, 5);
                                                        font-size: 20px;"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('questions.show', $course) }}"
                                                                class="btn btn-sm btn-info-soft mb-0">Làm bài</a>
                                                        @endif
                                                    @else
                                                        <button type="button" class="btn btn-sm btn-info-soft mb-0">Chưa
                                                            có câu hỏi</button>
                                                    @endif
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-sm btn-info-soft mb-0">Đăng nhập làm bài</a>
                                                @endif


                                            </td>
                                        </tr>
                                    @endforeach




                                </tbody>
                                <!-- Table body END -->
                            </table>
                        </div>
                        <!-- Table END -->

                        <!-- Card footer START -->
                        <div class="card-footer bg-transparent px-0">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start"></p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul
                                        class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        @if ($courses->currentPage() > 1)
                                            <li class="page-item mb-0"><a class="page-link"
                                                    href="{{ $courses->url($courses->currentPage() - 1) }}"
                                                    tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                        @endif
                                        @for ($i = 1; $i <= $courses->lastPage(); $i++)
                                            <li
                                                class=" page-item mb-0 {{ $courses->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $courses->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        @if ($courses->currentPage() < $courses->lastPage())
                                            <li class="page-item mb-0"><a class="page-link" href="{{ $courses->url($courses->currentPage() + 1) }}"><i
                                                        class="fas fa-angle-right"></i></a></li>
                                        @endif

                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card footer END -->
                    </div>
                </div>


            </div>
            <!-- Tab contents END -->
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the active tab from session storage
            var activeTab = sessionStorage.getItem('activeTab');

            // If there is an active tab, select it
            if (activeTab) {
                var activeTabElement = document.querySelector(activeTab);
                if (activeTabElement) {
                    activeTabElement.click(); // Trigger a click event to activate the tab
                }
            }

            // Attach an event listener to each pagination link to store the active tab
            var paginationLinks = document.querySelectorAll('.pagination a');
            paginationLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    var activeTabId = document.querySelector('.nav-pills .active').getAttribute(
                        'id');
                    sessionStorage.setItem('activeTab', '#' + activeTabId);
                });
            });
        });
    </script>
@endsection
