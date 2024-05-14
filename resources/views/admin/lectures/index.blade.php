@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Bài giảng của chương trình học <span style="color: red">
                        ({{ $chapter->title }})</span></h1>
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
                                <th scope="col" class="border-0">Gói</th>
                                <th scope="col" class="border-0 rounded-end">Hành động</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @if (count($lectures) > 0)
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

                                            <a data-glightbox="" data-gallery="office-tour" href="{{ $lecture->video }}"
                                                class="btn btn-round btn-primary-shadow mb-0 overflow-visible me-7">
                                                <i class="fas fa-play"></i>
                                                <h6
                                                    class="mb-0 ms-3 fw-normal position-absolute start-100 top-50 translate-middle-y">
                                                    Xem video</h6>
                                            </a>

                                        </td>
                                        <td class="">Chương trình: ( {{ $chapter->title }} )</td>
                                        <td>
                                            {{ $lecture->updated_at->format('d/m/Y') }}
                                        </td>

                                        <td>
                                            @if ($lecture->is_free == 1)
                                                <button class="btn btn-warning ">Mất phí</button>
                                            @else
                                                <button class="btn btn-success ">Miễn phí</button>
                                            @endif
                                        </td>

                                        <td class="d-flex h-100">
                                            <a href="{{ route('lectures.edit', ['lecture' => $lecture]) }}"
                                                class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <form action="{{ route('lectures.destroy', ['lecture' => $lecture->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                                <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                    onclick="return confirm('Bạn có chắc là đồng ý xóa?')" type="submit"><i
                                                        class="bi bi-trash  "></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>Không có bài giảng chương trình học nào</td>
                                </tr>
                            @endif


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
                                            href="{{ $lectures->url($lectures->currentPage() - 1) }}" tabindex=""><i
                                                class="fas fa-angle-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $lectures->lastPage(); $i++)
                                    <li class=" page-item mb-0 {{ $lectures->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $lectures->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($lectures->currentPage() < $lectures->lastPage())
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="{{ $lectures->url($lectures->currentPage() + 1) }}"><i
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
    <div class="video-player">
        <div id="player-vimeo" data-plyr-provider="vimeo" data-plyr-embed-id="777631140" poster="assets/images/bg/06.jpg">
        </div>
    </div>
@endsection
