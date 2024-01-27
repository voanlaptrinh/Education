@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Bài giảng<span
                        class="badge bg-orange bg-opacity-10 text-orange">245</span></h1>
                <a href="{{ route('lectures.create', ['chapter' => $chapter]) }}" class="btn btn-sm btn-primary mb-0">Thêm bài
                    giảng</a>
            </div>
        </div>

        <div class="card bg-transparent border">
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Tiêu đề</th>

                                <th scope="col" class="border-0">Video bài giảng</th>
                                <th scope="col" class="border-0">Chương trình học</th>
                                <th scope="col" class="border-0">Ngày</th>
                                <th scope="col" class="border-0 rounded-end">Hành động</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($lectures as $lecture)
                                <tr>
                                    <!-- Table data -->


                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $lecture->title }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td>{{ $chapter->lesson->title }}</td> --}}
                                    {{-- <td>
                                        <a href="{{ route('lectures.index', ['chapter' => $chapter]) }}"
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Xem bài giảng</a>
                                    </td> --}}
                                    {{-- <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="w-60px">
                                                <img src="{{ asset('storage/' . $lecture->image) }}" class="rounded"
                                                    alt="">
                                            </div>
                                            <!-- Title -->

                                        </div>
                                    </td> --}}
                                    <td>
                                        <div class="">
                                            <div class="">
                                                <div class="">
                                                    <!-- Video START -->
                                                    <div class="card shadow p-2 mb-4 z-index-9 " style="width: 50%">
                                                        <div class="overflow-hidden rounded-3 ">
                                                            <img src="{{ asset('storage/' . $lecture->image) }}"
                                                                class="card-img w-60px h-60px" alt="course image">
                                                            <!-- Overlay -->
                                                            <div class="bg-overlay bg-dark opacity-6"></div>
                                                            <div
                                                                class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                                <!-- Video button and link -->
                                                                <div class="m-auto">
                                                                    <a href="{{ asset('storage/' . $lecture->video) }}"
                                                                        style="    height: 30px;
                                                                        width: 30px;
                                                                        line-height: 30px;"
                                                                        class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                                        data-glightbox="" data-gallery="course-video">
                                                                        <i class="fas fa-play "></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>


                                            </div><!-- Row End -->
                                        </div>

                                    </td>
                                    <td class="">Chương trình: ( {{ $chapter->title }} )</td>
                                    <td>
                                        {{ $lecture->updated_at->format('d/m/Y') }}
                                    </td>


                                    <td>
                                        <a href="{{ route('lectures.edit', ['lecture' => $lecture]) }}"
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Sửa</a>
                                        
                                        <form action="{{ route('lectures.destroy', ['lecture' => $lecture->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là đồng ý xóa?')">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
