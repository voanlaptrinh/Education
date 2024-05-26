@extends('admin.index')
@section('contentadmin')
    <!-- Modal -->
    <div class="modal fade" id="classModal2" tabindex="-1" role="dialog" aria-labelledby="classModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classModalLabel">Chi tiết liên hệ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Hiển thị chi tiết liên hệ -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên Liên Hệ:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên liên hệ"
                            readonly disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                            readonly disabled>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Điện thoại:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Điện thoại"
                            readonly disabled>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung:</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Nội dung" readonly disabled></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content-wrapper border">
        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Liên hệ</h1>
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#classModal"
                data-action="add" data-class-id="">
                Thêm Lớp Học
            </button> --}}

            </div>
        </div>

        <!-- Course boxes START -->
        <div class="row g-4 mb-4">
        <!-- Course item -->
        <div class="col-sm-12 col-lg-12">
            <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                <h6>Tổng liên hệ</h6>
                <h2 class="mb-0 fs-1 text-primary">{{$totalContact}}</h2>
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
                        <form class="rounded position-relative" action="{{ route('contact.admin') }}" method="get">
                            <input name="query" value="{{ $searchQuery }}" class="form-control bg-body" type="search"
                                placeholder="Search" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>

                    <!-- Select option -->

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
                                <th scope="col" class="border-0 rounded-start">Tên người liên hệ</th>
                                <th scope="col" class="border-0">Số điện thoại</th>
                                <th scope="col" class="border-0">Email </th>
                                <th scope="col" class="border-0">Ngày gửi</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @if (count($contacts) > 0)
                            @foreach ($contacts as $contact)
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->

                                        <!-- Title -->
                                        <h6 class="table-responsive-title mb-0 ms-2">
                                            <a href="#" class="stretched-link">{{ $contact->name }}</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{ $contact->phone }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{ $contact->email }}</h6>
                                        </div>
                                    </div>


                                </td>
                             
                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{ $contact->created_at->format(' H:i:s d/m/Y') }}</h6>
                                        </div>
                                    </div>


                                </td>
                                <td>
                                    <!-- Nút để mở modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#classModal2" data-action="add" data-class-id="{{$contact->id}}"
                                        id="detailsBtn">
                                        Chi tiết
                                    </button>

                                    <!-- Modal -->

                                </td>

                            </tr>
                        @endforeach
                            @else
                                <tr>
                                    <td>Không có liên hệ nào</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                          

                        </tbody>


                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                    <div class="card-footer bg-transparent px-0">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Content -->
                            <p class="mb-0 text-center text-sm-start"></p>
                            <!-- Pagination -->
                            <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                <ul
                                    class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                    @if ($contacts->currentPage() > 1)
                                        <li class="page-item mb-0"><a class="page-link"
                                                href="{{ url('/admin/contact?page=' . ($contacts->currentPage() - 1) . '&query=' . request('query')) }}"
                                                tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                    @endif
                                    @for ($i = 1; $i <= $contacts->lastPage(); $i++)
                                        <li
                                            class=" page-item mb-0 {{ $contacts->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ url('/admin/contact?page=' . $i . '&query=' . request('query')) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    @if ($contacts->currentPage() < $contacts->lastPage())
                                    <li class="page-item mb-0"><a class="page-link" href="{{ url('/admin/contact?page=' . ($contacts->currentPage() + 1) . '&query=' . request('query')) }}"><i
                                        class="fas fa-angle-right"></i></a></li> 

                                    @endif
                               
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                </div>
                <!-- Course table END -->
            </div>

            {{ $contacts->links() }}
            <style>
                /* Phân trang container */
                nav.pagination {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 10px;
                    background-color: #fff;
                    border: 1px solid #e2e8f0;
                    border-radius: 4px;
                }

                /* Style cho các liên kết trang */
                nav.pagination a {
                    color: #3182ce;
                    padding: 8px 12px;
                    text-decoration: none;
                    border: 1px solid #cbd5e0;
                    border-radius: 4px;
                    transition: background-color 0.3s, color 0.3s;
                }

                /* Style cho trang hiện tại */
                nav.pagination a.active {
                    background-color: #3182ce;
                    color: #fff;
                }

                /* Hover effect cho liên kết trang */
                nav.pagination a:hover {
                    background-color: #e2e8f0;
                    color: #2c5282;
                }

                /* Thông tin về số lượng kết quả */
                nav.pagination .results-info {
                    margin-left: 10px;
                    color: #718096;
                    font-size: 14px;
                }

                /* Phân trang container */
                nav.pagination {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 10px;
                    background-color: #fff;
                    border: 1px solid #e2e8f0;
                    border-radius: 4px;
                }

                /* Style cho các liên kết trang */
                nav.pagination a {
                    color: #3182ce;
                    padding: 8px 12px;
                    text-decoration: none;
                    border: 1px solid #cbd5e0;
                    border-radius: 4px;
                    transition: background-color 0.3s, color 0.3s;
                }

                /* Style cho trang hiện tại */
                nav.pagination a.active {
                    background-color: #3182ce;
                    color: #fff;
                }

                nav .relative span a {
                    display: none
                }

                .justify-between svg {
                    display: none
                }

                /* Hover effect cho liên kết trang */
                nav.pagination a:hover {
                    background-color: #e2e8f0;
                    color: #2c5282;
                }

                /* Thông tin về số lượng kết quả */
                nav.pagination .results-info {
                    margin-left: 10px;
                    color: #718096;
                    font-size: 14px;
                }
            </style>

        </div>
        <!-- Card END -->
    </div>
    <script>
        $(document).ready(function() {
            $('#detailsBtn').click(function() {
                var contactId = $(this).data('class-id');
                $.ajax({
                    url: '/admin/contact/getContactDetails/' + contactId,
                    type: 'GET',
                    success: function(data) {
                        
                        $('#classModalLabel').text('Chi tiết liên hệ');
                        $('#name').val(data.name); 
                        $('#email').val(data.email); 
                        $('#phone').val(data.phone); 
                        $('#content').val(data.content); 
                        // $('#status').val(data.status); // Cập nhật giá trị cho trạng thái

                        // Hiển thị modal
                        $('#classModal2').modal('show');
                    },
                    error: function() {
                        // Xử lý lỗi nếu có
                        alert('Đã xảy ra lỗi khi lấy dữ liệu chi tiết liên hệ.');
                    }
                });
            });
        });
    </script>
@endsection
