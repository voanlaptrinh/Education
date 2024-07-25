@extends('admin.index')
@section('contentadmin')
 <section class="section page-content-wrapper border">
        <div class="row">
            <div class="col-lg-4 " style="">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img style="width: 100px; height: 100px;" src="{{ asset('storage/' . $teamsItem->image) }}"
                            style="" alt="Profile" class="rounded-circle">
                        <h2>{{ $teamsItem->name }}</h2>
                        <h6>{{ $teamsItem->cuisine }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border" style="border-radius:10px">

                <div class="card ">
                    <div class="card-body pt-3">
                        <ul class="nav nav-pills nav-pill-soft my-4" id="course-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-lg-6" role="presentation">
                                <button class="nav-link mb-2 mb-xl-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#profile-overview" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Become an Instructor</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-lg-6" role="presentation">
                                <button class="nav-link mb-2 mb-xl-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#profile-edit" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false" tabindex="-1">Instructor Role</button>
                            </li>
                           
                        </ul>
                        
                        <hr>
                        <div class="tab-content pt-2 ">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                                <h5 class="card-title">Mô tả ngắn</h5>
                                <p class="small fst-italic">{{ $teamsItem->description }}</p>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                                <div class="container content-detail-news">
                                    {!! $teamsItem->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection