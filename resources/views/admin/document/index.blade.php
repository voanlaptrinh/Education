@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Tài liệu học
                </h1>

                <a href="{{ route('document.create') }}" class="btn btn-sm btn-primary mb-0">Thêm mới tài liệu</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative" action="{{ route('document.admin') }}" method="get">
                            <input name="query" value="{{ $searchQuery }}" class="form-control bg-body" type="search"
                                placeholder="Search" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>


                </div>


                <!-- Search and select END -->
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Tiêu đề</th>

                                <th scope="col" class="border-0">Lớp học</th>
                                <th scope="col" class="border-0">PDF</th>
                                <th scope="col" class="border-0">Ngày</th>
                                <th scope="col" class="border-0">Gói</th>
                                <th scope="col" class="border-0 rounded-end">Hành động</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>
                                    <!-- Table data -->


                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <a  data-bs-toggle="modal" data-target=".exampleModal_detail"
                                                    data-class-id="{{ $document->id }}"
                                                    href="{{ route('getDocumentDetails', [$document->id]) }}"
                                                    class=" detailsBtn">{{ $document->name }}</a>
                                                {{-- <h6 class="mb-0 fw-light">{{ $document->name }}</h6> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $document->classes->name }}</h6>
                                            </div>
                                        </div>
                                    </td>


                                    <td>
                                        <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">View
                                            PDF</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $document->created_at->format('d/m/Y') }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-uppercase">
                                        @if ($document->access_level == 'paid')
                                            {{ number_format($document->price, 0, ',', ',') }} VNĐ
                                        @else
                                            {{ $document->access_level }}
                                        @endif
                                    </td>

                                    <td class="d-flex">
                                        <a href="{{ route('document.edit', ['document' => $document]) }}"
                                            class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('document.destroy', ['document' => $document]) }}"
                                            method="post" onsubmit="return confirm('Bạn có chắc chắn xóa?')">
                                            @csrf
                                            @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                            <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                type="submit"><i class="bi bi-trash  "></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-transparent pt-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            @if ($documents->currentPage() > 1)
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $documents->url($documents->currentPage() - 1) }}" tabindex=""><i
                                            class="fas fa-angle-left"></i></a></li>
                            @endif
                            @for ($i = 1; $i <= $documents->lastPage(); $i++)
                                <li class=" page-item mb-0 {{ $documents->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $documents->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($documents->currentPage() < $documents->lastPage())
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $documents->url($documents->currentPage() + 1) }}"><i
                                            class="fas fa-angle-right"></i></a></li>
                            @endif

                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
    <div class="modal fade exampleModal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document" style="max-width: 1200px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classModalLabels"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- validation form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card" style="margin-bottom: 0px;">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                   
                                    <div class="col-xl-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="validationCustom01">Tiêu đề</label>
                                                    <input type="text" class="form-control" id="names" name="name"
                                                        readonly disabled>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="email">Description</label>
                                                    <textarea disabled readonly  class="form-control" name="descriptionS" id="descriptionS" cols="30" rows="10"></textarea>
                                                  
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="email">Access_level</label>
                                                   <input type="text" disabled readonly  class="form-control text-uppercase" name="accesslever" id="accesslever" >
                                                  
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="email">Price</label>
                                                   <input type="text" disabled readonly  class="form-control text-uppercase" name="price" id="price" >
                                                  
                                                </div>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>


                                <div class="modal-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                                        style="color: #000; font-weight: bold;">Đóng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
      
                </div>

            </div>
        </div>
    </div>

    <script>
        $('.detailsBtn').click(function() {
            var studentS = $(this).data('class-id');
            $.ajax({
                url: '/admin/document/getDocumentDetails/' + studentS,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    if (data && data.name) {
                        $('#classModalLabels').text(data.name);
                        $('#names').val(data.name);
                        $('#descriptionS').val(data.description);
                        $('#accesslever').val(data.access_level);
                      
                        if (data.price == null) {
                            $('#price').val('chưa có');
                        } else {
                            $('#price').val(data.price);
                        }


                        $('.exampleModal_detail').modal('show');
                    } else {
                        alert(
                            'Dữ liệu trả về không hợp lệ hoặc thiếu trường "name".'
                        );
                    }
                },
                error: function() {
                    alert('Đã xảy ra lỗi khi lấy dữ liệu chi tiết liên hệ.');
                }
            });
        });
    </script>
@endsection
