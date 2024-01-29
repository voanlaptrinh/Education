@extends('admin.index')
@section('contentadmin')
   
    <div class="page-content-wrapper border">
        <div class="row g-4">
           
            <div class="col-xl-12">
                <!-- Tab Content START -->
                <div class="tab-content">

                    <!-- Personal Information content START -->
                    <div>
                        <div class="card shadow">

                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="card-header-title">Website Settings</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <form class="row g-4 align-items-center" method="post" action="{{route('webConfig.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-xl-4">
                                        <!-- Tab START -->
                                        <img src="{{ asset('storage/' . $webConfig->logo) }}" alt="">
                                        <!-- Tab END -->
                                        <input type="file" name="logo" id="logo">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-lg-4">
                                        <label class="form-label">Tên web site</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $webConfig->name }}"
                                            >

                                    </div>

                                    <!-- Input item -->
                                    <div class="col-lg-4">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" value="{{$webConfig->phone}}" class="form-control" 
                                            id="phone" name="phone" >
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-lg-4">
                                        <label class="form-label">Email</label>
                                        <input type="email"  value="{{$webConfig->email}}" class="form-control" 
                                            name="email" id="email" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Mã code</label>
                                        <input type="text"  value="{{$webConfig->code}}" class="form-control" 
                                           name="code" id="code" > 
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Google map</label>
                                        <input type="text"  value="{{$webConfig->gg_map}}" class="form-control" 
                                           id="gg_map" name="gg_map" >
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" placeholder="description"
                                            name="description" id="description" value="{{$webConfig->description}}">
                                    </div>
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title">Đường dẫn mạng xã hội</h5>
                                    </div>

                                  

                                    <!-- Input item -->
                                    <div class="col-lg-3">
                                        <label class="form-label">facebook_id</label>
                                        <input type="text" class="form-control" placeholder="facebook_id"
                                            name="facebook_id" id="facebook_id" value="{{$webConfig->facebook_id}}">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-lg-3">
                                        <label class="form-label">Zalo</label>
                                        <input type="text" class="form-control" placeholder="zalo"
                                            name="zalo" id="zalo" value="{{$webConfig->zalo}}">
                                    </div>
                                    <!-- Input item -->
                                    <div class="col-lg-3">
                                        <label class="form-label">Pinterest</label>
                                        <input type="text" class="form-control" placeholder="pinterest"
                                            name="pinterest" id="pinterest" value="{{$webConfig->pinterest}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Youtube</label>
                                        <input type="text" class="form-control" placeholder="youtube"
                                            name="youtube" id="youtube" value="{{$webConfig->youtube}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Dribbble</label>
                                        <input type="text" class="form-control" placeholder="dribbble"
                                            name="dribbble" id="dribbble" value="{{$webConfig->dribbble}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Tiktok</label>
                                        <input type="text" class="form-control" placeholder="tiktok"
                                            name="tiktok" id="tiktok"  value="{{$webConfig->tiktok}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Telegram</label>
                                        <input type="text" class="form-control" placeholder="telegram"
                                            name="telegram" id="telegram"  value="{{$webConfig->telegram}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control" placeholder="twitter"
                                            name="twitter" id="twitter" value="{{$webConfig->twitter}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" class="form-control" placeholder="instagram"
                                            name="instagram" id="instagram" value="{{$webConfig->instagram}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Reddit</label>
                                        <input type="text" class="form-control" placeholder="reddit"
                                            name="reddit" id="reddit" value="{{$webConfig->reddit}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Linkedin</label>
                                        <input type="text" class="form-control" placeholder="linkedin"
                                            name="linkedin" id="linkedin" value="{{$webConfig->linkedin}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Google</label>
                                        <input type="text" class="form-control" placeholder="google"
                                            name="google" id="google" value="{{$webConfig->google}}">
                                    </div>
                                   


                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-0"
                                            fdprocessedid="5i8qic">Update</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->

                        </div>
                    </div>
                    <!-- Personal Information content END -->


                </div>
                <!-- Tab Content END -->
            </div>
        </div>
    </div>


    </div>
@endsection
