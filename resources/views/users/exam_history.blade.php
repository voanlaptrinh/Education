@extends('indexUser')
@section('contentUsers')
    <div class="col-xl-12">
        <div class="card bg-transparent border rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="mb-0">Lịch sử làm bài</h3>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">

                <!-- Search and select START -->
               
                <!-- Search and select END -->

                <!-- Course list table START -->
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Đề bài</th>
                                <th scope="col" class="border-0">Số điểm đạt được</th>
                                <th scope="col" class="border-0">Ngày làm</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            {{-- @dd($examHistory) --}}
                            @foreach ($examHistory as $item)
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image -->
                                            <div class="w-100px">
                                                <img src="{{ $item->course->image ? asset('storage/' . $item->course->image) : 'placeholder.jpg' }}"
                                                    class="rounded" alt="">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="table-responsive-title"><a
                                                        >{{ $item->course->name }}</a></h6>
                                                <!-- Info -->

                                            </div>
                                        </div>
                                    </td>
                                   
                                    <td>
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0 text-center">{{ $item->score }}%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos aos-init aos-animate"
                                                    role="progressbar" data-aos="slide-right" data-aos-delay="200"
                                                    data-aos-duration="1000" data-aos-easing="ease-in-out"
                                                    style="width: {{ $item->score }}%" aria-valuenow="{{ $item->score }}"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>{{$item->created_at->format('d/m/Y')}}</td>

                                    <!-- Table data -->
                                    <td>
                                        <form action="{{ route('examHistory.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger me-1 mb-1 mb-md-0">
                                                <i class="bi bi-trash me-1"></i>Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Course list table END -->

                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            @if ($examHistory->currentPage() > 1)
                                            <li class="page-item mb-0"><a class="page-link"
                                                    href="{{ $examHistory->url($examHistory->currentPage() - 1) }}"
                                                    tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                        @endif
                                        @for ($i = 1; $i <= $examHistory->lastPage(); $i++)
                                            <li
                                                class=" page-item mb-0 {{ $examHistory->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $examHistory->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        @if ($examHistory->currentPage() < $examHistory->lastPage())
                                            <li class="page-item mb-0"><a class="page-link"><i
                                                        class="fas fa-angle-right"></i></a></li>
                                        @endif
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
    </div>
@endsection
