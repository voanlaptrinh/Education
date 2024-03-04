@extends('indexUser')
@section('contentUsers')
    <div class="col-xl-12">
        <div class="card bg-transparent border rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom">

                <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                    <!-- Title -->
                    <div>
                        <h3 class="m-0 pt-3">Các gói bạn đã mua</h3>
                        <span class="me-3 small"> </span>
                    </div>
                    <!-- Review star -->
                    <ul class="list-inline mb-0">
                        @if (!empty(Auth::user()->subscription_expiration_date))
                            <span class="me-3 small">{{ Auth::user()->subscription_expiration_date }} </span>
                        @else
                            <span class="me-3 small">Bạn chưa mua gói </span>
                        @endif
                    </ul>
                </div>
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
                                <th scope="col" class="border-0 rounded-start">Tên tài khoản</th>
                                <th scope="col" class="border-0">Tên gói</th>
                                <th scope="col" class="border-0">Thời gian gói</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            @if(count($subscriptionHistory) > 0)
                            @foreach ($subscriptionHistory as $item)
                                <tr>
                                    <!-- Table data -->
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->subscription->name }}</td>
                                    <td>{{ $item->subscription->duration_months / 30 }} Tháng</td>
                                    <td>{{ number_format($item->subscription->price, 0, ',', ',') }} VNĐ</td>
                                    <!-- Table data -->
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Bạn chưa mua gói nào...</td>
                            </tr>
                        @endif
                        

                            {{-- @dd($examHistory) --}}


                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Course list table END -->

                <!-- Pagination START -->

                <!-- Pagination END -->
            </div>
            <!-- Card body START -->
        </div>
    </div>
@endsection
