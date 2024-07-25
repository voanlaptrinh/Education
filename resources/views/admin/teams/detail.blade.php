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
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                            <li class="nav-item  w-50" role="presentation">
                                <button class="nav-link  w-100 active" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                    aria-selected="true" role="tab">Mô tả ngắn</button>
                            </li>
                            <li class="nav-item  w-50" role="presentation">
                                <button class="nav-link  w-100" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                    aria-selected="false" tabindex="-1" role="tab">Nội dung</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
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