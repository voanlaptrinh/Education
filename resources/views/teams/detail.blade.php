@extends('index')
@section('content')
    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row g-0 g-lg-5">

                <!-- Left sidebar START -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <!-- Instructor image START -->
                            <div class="card shadow p-2 mb-4 text-center">
                                <div class="rounded-3">
                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $teamsItem->image) }}" class="card-img"
                                        alt="course image">
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-3">
                                    <!-- Rating -->

                                    <!-- Social media button -->
                                    <ul class="list-inline mb-0">
                                        @if (!empty($teamsItem->facebook))
                                            <li class="list-inline-item"> <a
                                                    class="btn px-2 btn-sm bg-facebook docs-creator"
                                                    href="{{ $teamsItem->facebook }}"><i
                                                        class="fab fa-fw fa-facebook-f"></i></a> </li>
                                        @endif
                                        @if (!empty($teamsItem->instagram))
                                            <li class="list-inline-item"> <a
                                                    class="btn px-2 btn-sm bg-instagram-gradient docs-creator"
                                                    href="{{ $teamsItem->instagram }}"><i
                                                        class="fab fa-fw fa-instagram"></i></a> </li>
                                        @endif
                                        @if (!empty($teamsItem->twitter))
                                            <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-twitter docs-creator"
                                                    href="{{ $teamsItem->twitter }}"><i
                                                        class="fab fa-fw fa-twitter"></i></a> </li>
                                        @endif
                                        @if (!empty($teamsItem->linkedin))
                                            <li class="list-inline-item"> <a
                                                    class="btn px-2 btn-sm bg-linkedin docs-creator"
                                                    href="{{ $teamsItem->linkedin }}"><i
                                                        class="fab fa-fw fa-linkedin-in"></i></a> </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <!-- Instructor image END -->
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card card-body shadow p-4 mb-4">

                                <!-- Education START -->
                                <!-- Title -->
                                <h4 class="mb-3">Mô tả ngắn</h4>

                                <!-- Education item -->
                                <div class="d-flex align-items-center mb-4"
                                    style="word-break: break-word;overflow-wrap: break-word; ">

                                    <p class="mb-0 small">{{ $teamsItem->description }}</p>

                                </div>




                            </div>
                        </div>
                    </div> <!-- Row End -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-lg-8">

                    <!-- Title -->

                    <h1 class="mb-0">{{ $teamsItem->name }}</h1>
                    <p>{{ $teamsItem->cuisine }}</p>
                    <!-- Content -->
                    <p class="mt-4">{!! $teamsItem->content !!}</p>

                    <!-- Personal info -->

                </div>
                <!-- Main content END -->

            </div><!-- Row END -->
        </div>
    </section>




    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <h2 class="mb-0">Giảng viên liên quan</h2>
            </div>
    
            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    @if (count($teams) > 0)
                    @foreach ($teams as $team)
                    <!-- Card item START -->
                    <div class="card bg-transparent">
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="{{ asset('storage/' . $team->image) }}" class="card-img" alt="course image">
                            <!-- Overlay -->
                            
                        </div>
                        <!-- Card body -->
                        <div class="card-body text-center">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('teams.subdetail', $team->id) }}">{{ $team->name }}</a></h5>
                                <p class="mb-2">{{ $team->cuisine }}</p>
                                <!-- Rating -->
                               
                        </div>
                    </div>
                    <!-- Card item END -->
    
                    @endforeach
                    @endif
    
                </div>
            </div>
            <!-- Slider END -->
    
        </div>
    </section>
@endsection
