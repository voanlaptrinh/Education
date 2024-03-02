@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Các gói cho khóa học<span class="badge bg-orange bg-opacity-10 text-orange"></span></h1>
                <a href="{{ route('subscriptions.create') }}" class="btn btn-sm btn-primary mb-0">Thêm gói</a>
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
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thông báo!</strong>  {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Tên gói</th>
                                <th scope="col" class="border-0 ">Giá </th>
                                <th scope="col" class="border-0">Thời hạn</th>
                                <th scope="col" class="border-0">Trạng thái</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            @foreach ($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $subscription->name }}</td>
                                    <td>{{ number_format($subscription->price, 0, ',', ',') }} VNĐ</td>
                                    <td>{{ $subscription->duration_months / 30 }} tháng</td>
                                    <td> <button class="btn btn-success">Hoạt động</button></td>
                                    <td class="d-flex">
                                        <a href="{{ route('subscriptions.edit', ['subscription' => $subscription->id]) }}" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('subscriptions.destroy', ['subscription' => $subscription->id]) }}" method="post"
                                            onsubmit="return confirm('Bạn có chắc chắn xóa?')">
                                            @csrf
                                            @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                            <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                type="submit"><i class="bi bi-trash  "></i></button>
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


            <!-- Card footer START -->

            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
@endsection
