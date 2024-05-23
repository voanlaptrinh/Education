@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0"> <span style="color:red"></span>
                </h1>
                <a href="{{ route('basis.create') }}" class="btn btn-sm btn-primary mb-0">Thêm mới cơ sở</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">




                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Tên cơ sở</th>
                                <th scope="col" class="border-0 ">Địa chỉ</th>
                                <th scope="col" class="border-0">Số điện thoại</th>
                                <th scope="col" class="border-0">Email</th>
                                <th scope="col" class="border-0">Thời gian mở cửa</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($basis as $basi)
                                <tr>
                                    <td>{{ $basi->name }}</td>
                                    <td>{{ $basi->address }}</td>
                                    <td>{{ $basi->phone }}</td>
                                    <td>{{ $basi->email }}</td>
                                    <td>{{ $basi->open_time }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('basis.edit', ['basi' => $basi]) }}"
                                            class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <a data-bs-toggle="modal" data-target=".basisModal_detail"
                                        data-class-id="{{ $basi->id }}"
                                         href="{{ route('basis.show', ['id' => $basi->id]) }}"
                                            class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0 detailsBtnbasis"><i
                                                class="bi bi-eye"></i></a>
                                                <form action="{{ route('basis.destroy', ['basis' => $basi]) }}"
                                                    method="post" onsubmit="return confirm('Bạn có chắc chắn xóa?')">
                                                    @csrf
                                                    @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                                    <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                        type="submit"><i class="bi bi-trash  "></i></button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach


                            <!-- Table row -->





                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                    {{-- <div class="card-footer bg-transparent px-0">
                    <!-- Pagination START -->
                    <div class="d-sm-flex justify-content-sm-between align-basis-sm-center">
                        <!-- Content -->
                        <p class="mb-0 text-center text-sm-start"></p>
                        <!-- Pagination -->
                        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                            <ul
                                class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                @if ($courses->currentPage() > 1)
                                    <li class="page-basi mb-0"><a class="page-link"
                                            href="{{ $courses->url($courses->currentPage() - 1) }}" tabindex=""><i
                                                class="fas fa-angle-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $courses->lastPage(); $i++)
                                    <li class=" page-basi mb-0 {{ $courses->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $courses->url($i) }}">{{ $i }}</a>
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
                </div> --}}
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

        </div>
        <!-- Card END -->
    </div>
    <div class="modal fade exampleModal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
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
                            <div class="d-md-flex">
                              
                                <div>
                                    <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                        <h5 class="me-3 mb-0" id="nameS"></h5>
                                        <!-- Review star -->
                                       
                                    </div>
                                    <!-- Info -->
                                    <p class="small mb-2" id="emails"></p>
                                    <p class="small mb-2" id="phone"></p>
                                    <p class="mb-2"> Thời gian mở: <span  id="open_time"></span></p>
                                    <p class="mb-2" >Địa chỉ: <span id="addressS"></span></p>
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
        $('.detailsBtnbasis').click(function() {
            var studentS = $(this).data('class-id');
            $.ajax({
                url: '/admin/basis/' + studentS + '/basis',
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    if (data && data.name) {
                       
                        $('#nameS').text(data.name);
                        $('#emails').text(data.email);
                        $('#phone').text(data.phone);
                        $('#addressS').text(data.address);
                        $('#open_time').text(data.open_time);
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
