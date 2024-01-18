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
                                    <div class="col-lg-7">
                                        <h3 class="text-white">Chào mừng bạn đến với {{ $subject->name }}!</h3>
                                        <p class="text-white mb-3 mb-lg-0">{{ $subject->description }}</p>
                                    </div>
                                    <!-- Content and input -->
                                    <div class="col-lg-5 text-lg-end">
                                        <a href="#" class="btn btn-outline-warning mb-0">Start Teaching Today</a>
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
        <div class="page-content-wrapper border">

            <!-- Title -->
            <div class="row mb-3">
                <div class="col-12">
                    <h1 class="h3 mb-0">Reviews</h1>
                </div>
            </div>

            <!-- All review table START -->
            <div class="card card-body bg-transparent pb-0 border mb-4">

                <!-- Table START -->
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">#</th>
                                <th scope="col" class="border-0">Student Name</th>
                                <th scope="col" class="border-0">Course Name</th>
                                <th scope="col" class="border-0">Rating</th>
                                <th scope="col" class="border-0">Hide/Show</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
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
                                            <div class="avatar avatar-xs mb-2 mb-md-0">
                                                <img src="{{ $course->image ? asset('storage/' . $course->image) : 'placeholder.jpg' }}"
                                                    class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="{{ route('questions.show', $course) }}"
                                                        class="stretched-link">{{ $course->name }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <h6 class="table-responsive-title mb-0"><a href="#">{{ $subject->name }}</a>
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


                                        <a href="{{ route('questions.show', $course) }}"
                                            class="btn btn-sm btn-info-soft mb-0">Làm bài</a>
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
                        <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                        <!-- Pagination -->
                        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                            <ul
                                class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Card footer END -->
            </div>
            <!-- All review table END -->


        </div>
    </div>
@endsection
