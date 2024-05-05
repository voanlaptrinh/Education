@extends('admin.index')
@section('contentadmin')
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Tài khoản học sinh</h1>
                {{-- <a href="{{ route('newsAdmin.index') }}" class="btn btn-sm btn-primary mb-0">Create a Course</a> --}}
            </div>
        </div>
        <!-- Course boxes START -->
        <div class="row g-4 mb-4">
            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                    <h6>Tổng học sinh</h6>
                    <h2 class="mb-0 fs-1 text-primary">{{ $totalStudent }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Tài khoản hoạt động</h6>
                    <h2 class="mb-0 fs-1 text-success">{{ $totalStudent_1 }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Tài khoản bị khóa</h6>
                    <h2 class="mb-0 fs-1 text-warning">{{ $totalStudent_2 }}</h2>
                </div>
            </div>
        </div>
        <!-- Course boxes END -->
        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">


                </div>

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
                                <th scope="col" class="border-0 rounded-start">Ảnh đại diện</th>
                                <th scope="col" class="border-0 ">Tên </th>
                                <th scope="col" class="border-0">Điện thoại</th>
                                <th scope="col" class="border-0 rounded-end">Trạng thái</th>
                            </tr>
                        </thead>
                        <style>
                            nav .hidden {
                                display: none;
                            }
                        </style>
                        <!-- Table body START -->
                        <tbody>

                            @foreach ($student as $studentS)
                                <!-- Table row -->
                                <tr>
                                    <td>
                                        <div class="w-60px">
                                            <img src="{{ asset('storage/' . $studentS->image) }}" class="rounded"
                                                alt="">
                                        </div>
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->

                                            <!-- Title -->
                                            <h6 class="table-responsive-title mb-0 ms-2">
                                                <a data-bs-toggle="modal" data-target=".exampleModal_detail"
                                                    data-class-id="{{ $studentS->id }}"
                                                    href="{{ route('student.show', ['studentS' => $studentS]) }}"
                                                    class="stretched-link detailsBtn">{{ $studentS->name }}</a>
                                            </h6>
                                        </div>
                                    </td>





                                    <!-- Table data -->
                                    <td>{{ $studentS->phone }}</td>
                                    <td>
                                        <form action="{{ route('user.toggleStatus', ['id' => $studentS->id]) }}"
                                            method="post">
                                            @csrf
                                            @if ($studentS->status == 1)
                                                <button class="btn btn-success">Hoạt động</button>
                                            @else
                                                <button class="btn btn-warning">Tạm khóa</button>
                                            @endif
                                        </form>
                                    </td>


                                </tr>
                            @endforeach





                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

            <style>
                /* Trong resources/css/styles.css hoặc bất kỳ file CSS của bạn */

                nav.hidden {
                    display: none;
                }
            </style>
            <!-- Card footer START -->
            <div class="card-footer bg-transparent pt-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            {{ $student->links() }}
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
                                <div class="row">
                                    <div class="col-5">
                                        <img src="" alt="" id="imge_user">
                                    </div>
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="validationCustom01">Tên tài khoản</label>
                                                    <input type="text" class="form-control" id="names" name="name"
                                                        readonly disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="validationCustom02">Số điện thoại</label>
                                                    <input type="number" class="form-control" id="phone"
                                                        placeholder="Số điện thoại" name="phone" readonly disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="Email" name="email" readonly disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="birthday">Ngày sinh</label>
                                                    <input type="date" class="form-control" id="birthday"
                                                        placeholder="Ngày sinh" name="birthday" readonly disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">





                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="status">Trạng thái</label>
                                                        <button class="btn form-control btn-secondary"
                                                            id="statuss"></button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="is_pro">Tài khoản</label>
                                                    <button class="btn form-control btn-secondary"
                                                        id="is_pro"></button>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                                <label for="description">Địa chỉ</label>
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="Địa chỉ" name="addres" readonly disabled>
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
                    <!-- ============================================================== -->
                    <!-- end validation form -->
                    <!-- ============================================================== -->
                </div>

            </div>
        </div>
    </div>
    </div>



    <script>
        $('.detailsBtn').click(function() {
            var studentS = $(this).data('class-id');
            $.ajax({
                url: '/admin/student/show/' + studentS,
                type: 'GET',
                success: function(data) {
                    if (data && data.name) {
                        $('#classModalLabels').text(data.name);
                        $('#names').val(data.name);
                        $('#phone').val(data.phone);
                        $('#email').val(data.email);
                        $('#address').val(data.address);
                        $('#birthday').val(data.birthday);
                        $('#imge_user').attr('src', '/storage/' + data.image);
                        if (data.status === 0) {
                            $('#is_pro').text('Miễn phí');
                        } else {
                            $('#is_pro').text('Mất phí');
                        }

                        if (data.status === 1) {
                            $('#statuss').text('Hoạt động');
                        } else {
                            $('#statuss').text('Tạm khoá');
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
