@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Bài giảng của chương trình học <span style="color: red"> ({{ $chapter->title }})</span></h1>
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
                                  
                                    <td>
                                        <div class="">
                                            <div class="">
                                                <div class="">
                                                    <!-- Video START -->
                                                    <div class="card shadow p-2 mb-4 z-index-9 ">
                                                        <div class="overflow-hidden rounded-3 ">
                                                            <img src="{{ asset('storage/' . $lecture->image) }}"
                                                                class="card-img  h-60px" alt="course image">
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
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0 w-100">Sửa</a>
                                        
                                        <form action="{{ route('lectures.destroy', ['lecture' => $lecture->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Bạn có chắc là đồng ý xóa?')">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
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
                                @if ($lectures->currentPage() > 1)
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="{{ $lectures->url($lectures->currentPage() - 1) }}"
                                            tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $lectures->lastPage(); $i++)
                                    <li
                                        class=" page-item mb-0 {{ $lectures->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ $lectures->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($lectures->currentPage() < $lectures->lastPage())
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                    class="fas fa-angle-right"></i></a></li> 

                                @endif
                           
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>

    </div>
@endsection
