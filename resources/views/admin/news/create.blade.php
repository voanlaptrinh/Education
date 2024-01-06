@extends('admin.index')
@section('contentadmin')
    <div class="page-content">



        <!-- Page main content START -->
        <div class="page-content-wrapper border">

            <h1 class="h3 mb-3">Edit Course</h1>

            <!-- Card START -->
            <div class="card border rounded-3 mb-5">
                <div id="stepper" class="bs-stepper stepper-outline">
                    <!-- Card header -->


                    <!-- Card body START -->
                    <div class="card-body px-1 px-sm-4">
                        <!-- Step content START -->
                        <div class="bs-stepper-content">
                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Step 1 content START -->
                                <div>
                                    <!-- Title -->
                                    <h4>Course details</h4>

                                    <hr> <!-- Divider -->

                                    <!-- Basic information START -->
                                    <div class="row g-4">
                                        <!-- Course title -->
                                        <div class="col-12">
                                            <label class="form-label">Course title</label>
                                            <input class="form-control" type="text" placeholder="Enter course title" name ="name"
                                                value="The Complete Digital Marketing Course - 12 Courses in 1">
                                        </div>

                                        <!-- Short description -->
                                        <div class="col-12">
                                            <label class="form-label">Short description</label>
                                            <textarea class="form-control" name="description" rows="2" placeholder="Enter keywords">Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.
                                        </textarea>
                                        </div>


                                        <div class="col-12">
                                            <div
                                                class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                                <!-- Image -->
                                                <img src="/assets/user/images/element/gallery.svg" class="h-50px"
                                                    alt="">
                                                <div>
                                                    <h6 class="my-2">Upload course image here, or<a href="#!"
                                                            class="text-primary"> Browse</a></h6>
                                                    <label style="cursor:pointer;">
                                                        <span>
                                                            <input class="form-control stretched-link" type="file"
                                                                name="image" id="image"
                                                                accept="image/gif, image/jpeg, image/png">
                                                        </span>
                                                    </label>
                                                    <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our
                                                        suggested dimensions are 600px * 450px. Larger image will be cropped
                                                        to 4:3 to fit our thumbnails/previews.</p>
                                                </div>
                                            </div>


                                        </div>


                                        <!-- Course description -->
                                        <div class="col-12">
                                            <label class="form-label">Add description</label>
                                            <!-- Editor toolbar -->
                                            <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                                                <textarea id="my-editor" name="content">Hello, World!</textarea>

                                            </div>
                                        </div>

                                        <!-- Step 1 button -->
                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                    <!-- Basic information START -->
                                </div>
                                <!-- Step 1 content END -->



                            </form>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Card END -->
        </div>
        <!-- Page main content END -->

    </div>
@endsection
