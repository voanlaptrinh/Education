@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Mô tả {{ $subscription->name }}<span
                        class="badge bg-orange bg-opacity-10 text-orange"></span></h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDetailModal">
                            Thêm mới mô tả {{ $subscription->name }}
                        </button>
            </div>
           
        </div>

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
                                <th scope="col" class="border-0 ">Mô tả gói</th>
                                <th scope="col" class="border-0 ">Tên gói</th>
                                <th scope="col" class="border-0 ">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($detailSubscriptions as $detailSubscription)
                                <tr>
                                    <td>{{ $detailSubscription->description }}</td>
                                    <td>{{ $detailSubscription->subscription->name }}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-primary btn-round me-1 mb-1 mb-md-0 edit-detail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-detail-id="{{ $detailSubscription->id }}" data-description="{{ $detailSubscription->description }}"class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                            class="bi bi-pencil-square"></i>
                                        </button>

                                        <form action="{{ route('detailSub.destroy', ['detailSubscription' => $detailSubscription]) }}"
                                            method="post" onsubmit="return confirm('Bạn có chắc chắn xóa?')">
                                            @csrf
                                            @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                            <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                type="submit"><i class="bi bi-trash"></i></button>
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
        </div>
        <!-- Card END -->
    </div>


    <div class="modal fade" id="addDetailModal" tabindex="-1" aria-labelledby="addDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDetailModalLabel">Thêm mới mô tả</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('detailSub.store', ['subscription' => $subscription->id]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="editDetailModal" tabindex="-1" aria-labelledby="editDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDetailModalLabel">Sửa Mô tả</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editDetailForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Mô tả</label>
                            <input type="text" class="form-control" id="edit_description" name="description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Function to populate the edit form with detail subscription data
            $('.edit-detail').click(function() {
                var detailId = $(this).data('detail-id');
                var description = $(this).data('description');
                $('#editDetailForm').attr('action', '/admin/detailSub/update/' + detailId);
                $('#edit_description').val(description);
            });
        });
    </script>
@endsection

