@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Đội ngũ</h1>
                <a href="{{ route('teams.create') }}" class="btn btn-sm btn-primary mb-0">Thêm mới</a>
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
                        <form class="rounded position-relative" action="{{ route('teams.admin') }}" method="GET">
                            <input name="search" class="form-control bg-body" type="search"
                                placeholder="Nhập tên hoặc email muốn tìm" aria-label="Search"
                                value="{{ request('search') }}">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6"></i>
                            </button>
                        </form>
                    </div>




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
                                <th scope="col" class="border-0 rounded-start">Tên</th>
                                <th scope="col" class="border-0 ">Email </th>

                                <th scope="col" class="border-0">Số điện thoại</th>
                                <th scope="col" class="border-0">Địa chỉ</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @if (count($teams) > 0)
                                @foreach ($teams as $team)
                                    <!-- Table row -->
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <!-- Image -->

                                                <!-- Title -->
                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a class="stretched-link">{{ $team->name }}</a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->phone }}</td>
                                        <td>{{ $team->address }}</td>

                                        <td class="d-flex " colspan="3">
                                            <a href="{{ route('teams.edit', ['id' => $team->id]) }}"
                                                class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 "> <i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('teams.destroy', ['id' => $team->id]) }}" method="post"
                                                onsubmit="return confirm('Bạn có chắc chắn là muốn xóa?')">
                                                @csrf
                                                @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                                <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                    type="submit"><i class="bi bi-trash"></i></button>
                                            </form>
                                            <a href="{{ route('teams.detail', $team->id) }}"
                                                class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 "><i class="bi bi-eye-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="5">Không có dữ liệu nào!</td>
                                </tr>
                            @endif




                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->


            <!-- Card footer START -->
            <div class="card-footer bg-transparent pt-0">
                <!-- Pagination START -->
                <div class="container">
                    <div class="d-flex justify-content-center">
                        {{ $teams->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
@endsection
