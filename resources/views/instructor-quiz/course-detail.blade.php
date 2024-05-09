@extends('index')
@section('content')
    <section class="bg-light py-0 py-sm-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8">
                    <!-- Badge -->
                    <h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">
                        {{ $lesson->subject->name }}</h6>
                    <!-- Title -->
                    <h1>{{ $lesson->title }}</h1>
                    <p>{{ $lesson->description }}</p>
                    <!-- Content -->
                    <ul class="list-inline mb-0">
                        {{-- <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li> --}}
                        <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                class="fas fa-signal text-success me-2"></i>{{ $lesson->subject->class->name }}</li>
                        <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                class="bi bi-patch-exclamation-fill text-danger me-2"></i>
                            {{ $lesson->created_at->format('d/m/Y') }}</li>
                        <li class="list-inline-item h6 mb-0"><i class="fas fa-globe text-info me-2"></i>Tiếng việt</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0 py-lg-5">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-8">
                    <div class="card shadow rounded-2 p-0">
                        <!-- Tabs START -->
                        <div class="card-header border-bottom px-4 py-3">
                            <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab"
                                        aria-controls="course-pills-1" aria-selected="true">Tổng quan</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#course-pills-2" type="button" role="tab"
                                        aria-controls="course-pills-2" aria-selected="false" tabindex="-1">Chương trình
                                        giảng dạy</button>
                                </li>
                                <!-- Tab item -->

                            </ul>
                        </div>
                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class="card-body p-4">
                            <div class="tab-content pt-2" id="course-pills-tabContent">
                                <!-- Content START -->
                                <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel"
                                    aria-labelledby="course-pills-tab-1">
                                    <!-- Course detail START -->
                                    {{ $lesson->content }}
                                    <!-- Course detail END -->

                                </div>
                                <!-- Content END -->
                                <!-- Modal -->
                                <!-- Modal -->



                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-2" role="tabpanel"
                                    aria-labelledby="course-pills-tab-2">
                                    <!-- Course accordion START -->
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        @php
                                            $firstChapter = true;
                                        @endphp

                                        @foreach ($lesson->chapters as $key => $chapter)
                                            <div class="accordion-item mb-3">
                                                <h6 class="accordion-header font-base" id="heading-{{ $key }}">
                                                    <button
                                                        class="accordion-button fw-bold rounded d-sm-flex d-inline-block collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $key }}"
                                                        aria-expanded="{{ $firstChapter ? 'true' : 'false' }}"
                                                        aria-controls="collapse-{{ $key }}">
                                                        {{ $chapter->title }}
                                                        <span class="small ms-0 ms-sm-2">({{ $chapter->lectures->count() }}
                                                            Video)</span>
                                                    </button>
                                                </h6>
                                                <div id="collapse-{{ $key }}"
                                                    class="accordion-collapse collapse {{ $firstChapter ? 'show' : '' }}"
                                                    aria-labelledby="heading-{{ $key }}"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body mt-3">
                                                        <!-- Course lecture -->
                                                        @if (count($chapter->lectures) > 0)
                                                            @foreach ($chapter->lectures as $item)
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div
                                                                        class="position-relative d-flex align-items-center">
                                                                        <a href="#"
                                                                            class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                            <i class="fas fa-play me-0"></i>
                                                                        </a>
                                                                        <div class="row g-sm-0 align-items-center">
                                                                            <div class="col-sm-6">
                                                                                <span
                                                                                    class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-md-400px">{{ $item->title }}</span>
                                                                            </div>
                                                                            @if ($item->is_free == 1)
                                                                                <div class="col-sm-6">
                                                                                    <span
                                                                                        class="badge text-bg-orange ms-2 ms-md-0"><i
                                                                                            class="fas fa-lock fa-fw me-1"></i>Pro</span>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <p class="mb-0">
                                                                        @if (!empty(Auth::user()))
                                                                            @if ($item->is_free == 0)
                                                                                <button
                                                                                    onclick="showVideo('{{ $item->video }}')"
                                                                                    class="btn btn-sm btn-info-soft mb-0">Xem
                                                                                    bài giảng</button>
                                                                            @else
                                                                                @if (Auth::user()->is_pro == 0)
                                                                                    <a href="{{ route('subscriptions.index') }}"
                                                                                        class="btn btn-sm btn-info-soft mb-0">Xem
                                                                                        bài giảng

                                                                                    </a>
                                                                                @else
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-info-soft mb-0"
                                                                                        onclick="showVideo('{{ $item->video }}')">Xem
                                                                                        bài giảng

                                                                                    </a>
                                                                                @endif
                                                                            @endif
                                                                        @else
                                                                            <a href="{{ route('login') }}"
                                                                                class="btn btn-sm btn-info-soft mb-0">Đăng
                                                                                nhập làm bài</a>
                                                                        @endif
                                                                    </p>



                                                                </div>
                                                                <hr> <!-- Divider -->
                                                            @endforeach
                                                        @else
                                                            Không có video bài giảng nào ...
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $firstChapter = false;
                                            @endphp
                                        @endforeach

                                        <!-- Item -->



                                    </div>
                                    <!-- Course accordion END -->
                                </div>
                                <!-- Content END -->



                            </div>
                        </div>
                        <!-- Tab contents END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-4 pt-5 pt-lg-0">
                    <div class="row mb-5 mb-lg-0">
                        <div class="col-md-6 col-lg-12">
                            <!-- Video START -->
                            <div class="card shadow p-2 mb-4 z-index-9">
                                <div class="overflow-hidden rounded-3">
                                    <img src="{{ $lesson->image ? asset('storage/' . $lesson->image) : 'placeholder.jpg' }}"
                                        class="card-img" alt="course image">
                                    <!-- Overlay -->

                                </div>

                                <!-- Card body -->
                                <div class="card-body px-3">
                                    <!-- Info -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Price and time -->
                                        <div>
                                            <h5 class="mb-3 font-base d-inline-block">{{ $lesson->title }}</h5>
                                        </div>


                                    </div>

                                    <!-- Buttons -->

                                </div>
                            </div>
                            <!-- Video END -->

                            <!-- Course info START -->
                            <div class="card card-body shadow p-4 mb-4">
                                <!-- Title -->
                                <h4 class="mb-3">Khóa học này bao gồm</h4>
                                <ul class="list-group list-group-borderless">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>Kĩ
                                            năng</span>
                                        <span>{{ $lesson->subject->class->name }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Ngôn
                                            ngữ</span>
                                        <span>Tiếng việt</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i
                                                class="fas fa-fw fa-user-clock text-primary"></i>Ngày đăng</span>
                                        <span>{{ $lesson->created_at->format('d/m/Y') }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>Giấy
                                            chứng nhân</span>
                                        <span>Có</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Course info END -->
                        </div>


                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <style>
        /* Thiết lập chiều rộng và chiều cao cố định cho nội dung modal */
        .modal-body {
            width: 100%;
            height: 100%;
        }


        /* Thay đổi kích thước video trong modal */
        .embed-responsive-16by9 iframe {
            width: 100%;
            height: 500px;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade  bd-example-modal-xl " id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal header và button close -->
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Video</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Nội dung modal -->
                <div class="modal-body">
                    <div class=" h-100 w-100">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="videoPlayerModal" class="embed-responsive-item" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
  $(document).ready(function() {
    $('#videoModal').on('hide.bs.modal', function() {
        // Kiểm tra xem modal có class "show" hay không
        if (!$(this).hasClass('show')) {
            var videoPlayer = document.getElementById('videoPlayerModal');
            videoPlayer.pause(); // Dừng video
            videoPlayer.currentTime = 0; // Đặt lại thời gian về đầu
        }
    });
});


    function showVideo(videoUrl) {
        // Gọi controller để lấy dữ liệu video
        $.ajax({
            url: '/get-video-data', // Thay đổi đường dẫn này thành địa chỉ của controller trong Laravel
            type: 'GET',
            data: { video_url: videoUrl },
            success: function(response) {
                // Nếu dữ liệu video được trả về thành công, hiển thị video trong modal
                $('#videoPlayerModal').attr('src', response.video_url);
                $('#videoModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error(error);
            }
        });
    }
</script>




@endsection
