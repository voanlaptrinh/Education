<footer class="pt-5">
    <div class="container">
        <!-- Row START -->
        <div class="row g-4">

            <!-- Widget 1 START -->
            <div class="col-lg-3">
                <!-- logo -->
                @if (!empty($webConfig->logo))
                    <a class="me-0" href="{{ route('home.index') }}">
                        <img class="light-mode-item h-40px" src="{{ asset('storage/' . $webConfig->logo) }}"
                            alt="logo">
                        <img class="dark-mode-item h-40px" src="{{ asset('storage/' . $webConfig->logo) }}"
                            alt="logo">
                    </a>
                @else
                    <a class="me-0" href="{{ route('home.index') }}">
                        <img class="light-mode-item h-40px" src="/assets/user/images/logo.svg" alt="logo">
                        <img class="dark-mode-item h-40px" src="/assets/user/images/logo-light.svg" alt="logo">
                    </a>
                @endif
                <p class="my-3">{{ $webConfig->description }}</p>
                <!-- Social media icon -->
                <ul class="list-inline mb-0 mt-3">
                    @if (!empty($webConfig->facebook_id))
                        <li class="list-inline-item">
                            <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                href="https://www.facebook.com/{{ $webConfig->facebook_id }}">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                    @endif
                    @if (!empty($webConfig->instagram))
                        <li class="list-inline-item">
                            <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                href="{{ $webConfig->instagram }}">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if (!empty($webConfig->twitter))
                        <li class="list-inline-item">
                            <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="{{ $webConfig->twitter }}">
                                <i class="fab fa-fw fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if (!empty($webConfig->linkedin))
                        <li class="list-inline-item">
                            <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="{{ $webConfig->linkedin }}">
                                <i class="fab fa-fw fa-linkedin-in"></i>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Link block -->
                    <div class="col-6 col-md-6">
                        <h5 class="mb-2 mb-md-4">Lớp học</h5>
                        <ul class="nav flex-column">
                            @foreach ($classes as $item)
                                <li class="nav-item"><a class="nav-link" href="#">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>


                    {{-- <div class="col-6 col-md-4 h-50">
                        <h5 class="mb-2 mb-md-4">Môn học</h5>
                        <div class="subject-list-container overflow-auto ">
                            <ul class="nav flex-column subject-list">
                             
                                    @foreach ($classes as $item)
                                        @foreach ($item->subjects as $subject)
                                            <li class="nav-item subject-list-item">
                                                <a class="nav-link"
                                                    href="{{ route('home.course', $subject) }}">{{ $subject->name }}
                                                    ({{ $subject->class->name }})</a>
                                            </li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <!-- Hiển thị thông báo nếu không đủ phần tử -->
                                    <li class="nav-item">
                                        <span class="nav-link">There are not enough subjects available.</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div> --}}





                    <!-- Link block -->
                    <div class="col-6 col-md-6">
                        <h5 class="mb-2 mb-md-4">Tài liệu theo lớp</h5>
                        <ul class="nav flex-column">
                            @foreach ($classes as $item)
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('document.index', $item) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widget 2 END -->

            <!-- Widget 3 START -->
            <div class="col-lg-3">
                <a href="{{ route('contact.index') }}">
                    <h5 class="mb-2 mb-md-4">Liên hệ</h5>
                </a>
                <!-- Time -->
                <p class="mb-2">
                    Điện thoại: <a href="tel:{{ $webConfig->phone }}"><span
                            class="h6 fw-light ms-2">{{ $webConfig->phone }}</span></a>
                </p>

                <p class="mb-0">Email: <a href="mailto:{{ $webConfig->email }}"><span
                            class="h6 fw-light ms-2">{{ $webConfig->email }}</span></a></p>


            </div>
            <!-- Widget 3 END -->
        </div><!-- Row END -->

        <!-- Divider -->
        <hr class="mt-4 mb-0">

        <!-- Bottom footer -->

    </div>
</footer>
