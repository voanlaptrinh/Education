@extends('admin.index')
@section('contentadmin')
   
    <div class="page-content-wrapper border">
        <div class="row g-4">
           
            <div class="col-xl-12">
                <!-- Tab Content START -->
                <div class="tab-content">

                    <!-- Personal Information content START -->
                    <div>
                        

                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="card-header-title">Giới thiệu</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <form class="row g-4 align-items-center" method="post" action="{{route('introduction.update')}}" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <!-- Input item -->
                                    <div class="col-lg-12 pt-5">
                                        <label class="form-label">Tiêu đề giới thiệu</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $introduction->name }}" >
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                    </div>

                                  
                                  
                                   
                                    
                                    <div class="col-12">
                                        <div class="row">
                                           
                                            <div class="col-12">
                                                <label class="form-label">Mô tả</label>
                                                <textarea name="description" class="form-control" id="description" cols="30" rows="9">{{$introduction->description}}</textarea>
                                                {{-- <input type="text"  placeholder="description"
                                                    name="description" id="description" value=""> --}}
                                            </div>
                                        </div>
                    
                    
                                    </div>
                    
                                    <div class="col-12">
                                        <label class="form-label">Nội dung</label>
                                        <!-- Editor toolbar -->
                                        <div class=" rounded-top py-3" >
                                            <textarea id="content" name="content">{{$introduction->content}}</textarea>
                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                   
                    


                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-0"
                                            fdprocessedid="5i8qic">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->

                        </div>
                
                    <!-- Personal Information content END -->


                </div>
                <!-- Tab Content END -->
            </div>
        </div>
    </div>


    </div>
@endsection
