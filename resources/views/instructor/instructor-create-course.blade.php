@extends('index')
@section('content')
    <section class="py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Title -->
                    <h1 class="text-white">Submit a new Course</h1>
                    <p class="text-white mb-0">Read our <a class="text-white"><u>"Before you create a course"</u></a> article before submitting!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Steps START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <!-- Content -->
                    <p class="text-center">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
                </div>
            </div>

            <div class="card bg-transparent border rounded-3 mb-5">
                <div id="stepper" class="bs-stepper stepper-outline">
                    <!-- Card header -->
                    <div class="card-header bg-light border-bottom px-lg-5">
                        <!-- Step Buttons START -->
                        <div class="bs-stepper-header" role="tablist">
                            <!-- Step 1 -->
                            <div class="step" data-target="#step-1">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
                                        <span class="bs-stepper-circle">1</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Course details</h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 2 -->
                            <div class="step" data-target="#step-2">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
                                        <span class="bs-stepper-circle">2</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Course media</h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 3 -->
                            <div class="step" data-target="#step-3">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
                                        <span class="bs-stepper-circle">3</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Curriculum</h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 4 -->
                            <div class="step" data-target="#step-4">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
                                        <span class="bs-stepper-circle">4</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Additional information</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Step Buttons END -->
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Step content START -->
                        <div class="bs-stepper-content">
                            <form onsubmit="return false">

                                <!-- Step 1 content START -->
                                <div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
                                    <!-- Title -->
                                    <h4>Course details</h4>

                                    <hr> <!-- Divider -->

                                    <!-- Basic information START -->
                                    <div class="row g-4">
                                        <!-- Course title -->
                                        <div class="col-12">
                                            <label class="form-label">Course title</label>
                                            <input class="form-control" type="text" placeholder="Enter course title">
                                        </div>

                                        <!-- Short description -->
                                        <div class="col-12">
                                            <label class="form-label">Short description</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                        </div>

                                        <!-- Course category -->
                                        <div class="col-md-6">
                                            <label class="form-label">Course category</label>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="true">
                                                <option value="">Select category</option>
                                                <option>Engineer</option>
                                                <option>Medical</option>
                                                <option>Information technology</option>
                                                <option>Finance</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>

                                        <!-- Course level -->
                                        <div class="col-md-6">
                                            <label class="form-label">Course level</label>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
                                                <option value="">Select course level</option>
                                                <option>All level</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advance</option>
                                            </select>
                                        </div>

                                        <!-- Language -->
                                        <div class="col-md-6">
                                            <label class="form-label">Language</label>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" multiple="multiple" aria-label=".form-select-sm" data-max-item-count="3" data-remove-item-button="true">
                                                <option value="">Select language</option>
                                                <option>English</option>
                                                <option>German</option>
                                                <option>French</option>
                                                <option>Hindi</option>
                                            </select>
                                        </div>

                                        <!-- Switch -->
                                        <div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
                                            <div class="form-check form-switch form-check-md">
                                                <input class="form-check-input" type="checkbox" id="checkPrivacy1">
                                                <label class="form-check-label" for="checkPrivacy1">Check this for featured course</label>
                                            </div>
                                        </div>

                                        <!-- Course time -->
                                        <div class="col-md-6">
                                            <label class="form-label">Course time</label>
                                            <input class="form-control" type="text" placeholder="Enter course time">
                                        </div>

                                        <!-- Total lecture -->
                                        <div class="col-md-6">
                                            <label class="form-label">Total lecture</label>
                                            <input class="form-control" type="text" placeholder="Enter total lecture">
                                        </div>

                                        <!-- Course price -->
                                        <div class="col-md-6">
                                            <label class="form-label">Course price</label>
                                            <input type="text" class="form-control" placeholder="Enter course price">
                                        </div>

                                        <!-- Course discount -->
                                        <div class="col-md-6">
                                            <label class="form-label">Discount price</label>
                                            <input class="form-control" type="text" placeholder="Enter discount">
                                            <div class="col-12 mt-1 mb-0">
                                                <div class="form-check small mb-0">
                                                    <input class="form-check-input" type="checkbox" id="checkBox1">
                                                    <label class="form-check-label" for="checkBox1">
                                                        Enable this Discount
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Course description -->
                                        <div class="col-12">
                                            <label class="form-label">Add description</label>
                                            <!-- Editor toolbar -->
                                            <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                                                <span class="ql-formats">
                                                    <select class="ql-size"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-strike"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <select class="ql-color"></select>
                                                    <select class="ql-background"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-code-block"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-list" value="ordered"></button>
                                                    <button class="ql-list" value="bullet"></button>
                                                    <button class="ql-indent" value="-1"></button>
                                                    <button class="ql-indent" value="+1"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-clean"></button>
                                                </span>
                                            </div>

                                            <!-- Main toolbar -->
                                            <div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">
                                                <br>
                                                <h1>Quill Rich Text Editor</h1>
                                                <br>
                                                <p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
                                                <br>
                                                <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
                                                <br>
                                                <p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
                                                <br>
                                                <p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>

                                                <p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
                                                <br>
                                                <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
                                                <br>
                                                <p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
                                                <br>
                                                <p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>

                                                <p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
                                                <br>
                                                <p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
                                                <br>
                                                <p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
                                                <br>
                                                <p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>
                                            </div>
                                        </div>

                                        <!-- Step 1 button -->
                                        <div class="d-flex justify-content-end mt-3">
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                    <!-- Basic information START -->
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
                                    <!-- Title -->
                                    <h4>Course media</h4>

                                    <hr> <!-- Divider -->

                                    <div class="row">
                                        <!-- Upload image START -->
                                        <div class="col-12">
                                            <div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                                <!-- Image -->
                                                <img src="assets/images/element/gallery.svg" class="h-50px" alt="">
                                                <div>
                                                    <h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                                                    <label style="cursor:pointer;">
                                                        <span>
                                                            <input class="form-control stretched-link" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png" />
                                                        </span>
                                                    </label>
                                                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="d-sm-flex justify-content-end mt-2">
                                                <button type="button" class="btn btn-sm btn-danger-soft mb-3">Remove image</button>
                                            </div>
                                        </div>
                                        <!-- Upload image END -->

                                        <!-- Upload video START -->
                                        <div class="col-12">
                                            <h5>Upload video</h5>
                                            <!-- Input -->
                                            <div class="col-12 mt-4 mb-5">
                                                <label class="form-label">Video URL</label>
                                                <input class="form-control" type="text" placeholder="Enter video url">
                                            </div>
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Or</p>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Upload video</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                    <label class="input-group-text">.mp4</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text">.WebM</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile03">
                                                    <label class="input-group-text">.OGG</label>
                                                </div>
                                            </div>

                                            <!-- Preview -->
                                            <h5 class="mt-4">Video preview</h5>
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="assets/images/about/04.jpg" class="rounded-4" alt="">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <!-- Video link -->
                                                    <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Upload video END -->

                                        <!-- Step 2 button -->
                                        <div class="d-flex justify-content-between mt-3">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
                                    <!-- Title -->
                                    <h4>Curriculum</h4>

                                    <hr> <!-- Divider -->

                                    <div class="row">
                                        <!-- Add lecture Modal button -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                            <h5 class="mb-2 mb-sm-0">Upload Lecture</h5>
                                            <a class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addLecture"><i class="bi bi-plus-circle me-2"></i>Add Lecture</a>
                                        </div>

                                        <!-- Edit lecture START -->
                                        <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                            <!-- Item START -->
                                            <div class="accordion-item mb-3">
                                                <h6 class="accordion-header font-base" id="heading-1">
                                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                                        Introduction of Digital Marketing
                                                    </button>
                                                </h6>

                                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                                    <!-- Topic START -->
                                                    <div class="accordion-body mt-3">
                                                        <!-- Video item START -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative">
                                                                <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
                                                                <span class="ms-2 mb-0 h6 fw-light">Introduction</span>
                                                            </div>
                                                            <!-- Edit and cancel button -->
                                                            <div>
                                                                <a class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- Divider -->
                                                        <hr>
                                                        <!-- Video item END -->

                                                        <!-- Video item START -->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="position-relative">
                                                                <a class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
                                                                <span class="ms-2 mb-0 h6 fw-light">What is Digital Marketing</span>
                                                            </div>
                                                            <!-- Edit and cancel button -->
                                                            <div>
                                                                <a class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- Divider -->
                                                        <hr>
                                                        <!-- Video item END -->

                                                        <!-- Add topic -->
                                                        <a class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic"><i class="bi bi-plus-circle me-2"></i>Add topic</a>
                                                    </div>
                                                    <!-- Topic END -->
                                                </div>
                                            </div>
                                            <!-- Item END -->

                                            <!-- Item START -->
                                            <div class="accordion-item mb-3">
                                                <h6 class="accordion-header font-base" id="heading-2">
                                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                        Customer Life cycle
                                                    </button>
                                                </h6>

                                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body mt-3">
                                                        <!-- Add topic -->
                                                        <a class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
                                                            <i class="bi bi-plus-circle me-2"></i>Add topic
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item END -->

                                            <!-- Item START -->
                                            <div class="accordion-item mb-3">
                                                <h6 class="accordion-header font-base" id="heading-3">
                                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                        How much should I offer the sellers?
                                                    </button>
                                                </h6>
                                                <!-- Body -->
                                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body mt-3">
                                                        <!-- Add topic -->
                                                        <a class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
                                                            <i class="bi bi-plus-circle me-2"></i>Add topic
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item END -->

                                        </div>
                                        <!-- Edit lecture END -->

                                        <!-- Step 3 button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                                <!-- Step 4 content START -->
                                <div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
                                    <!-- Title -->
                                    <h4>Additional information</h4>

                                    <hr> <!-- Divider -->

                                    <div class="row g-4">

                                        <!-- Edit faq START -->
                                        <div class="col-12">
                                            <div class="bg-light border rounded p-2 p-sm-4">
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                                    <h5 class="mb-2 mb-sm-0">Upload FAQs</h5>
                                                    <a class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addQuestion"><i class="bi bi-plus-circle me-2"></i>Add Question</a>
                                                </div>

                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="bg-body p-3 p-sm-4 border rounded">
                                                            <!-- Item 1 -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                <!-- Question -->
                                                                <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                <!-- Button -->
                                                                <div class="align-middle">
                                                                    <a class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Content -->
                                                            <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="bg-body p-4 border rounded">
                                                            <!-- Item 2 -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                <!-- Question -->
                                                                <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                <!-- Button -->
                                                                <div class="align-middle">
                                                                    <a class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Content -->
                                                            <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit faq END -->

                                        <!-- Tags START -->
                                        <div class="col-12">
                                            <div class="bg-light border rounded p-4">
                                                <h5 class="mb-0">Tags</h5>
                                                <!-- Comment -->
                                                <div class="mt-3">
                                                    <input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="Enter tags" data-max-item-count="14" data-remove-item-button="true">
                                                    <span class="small">Maximum of 14 keywords. Keywords should all be in lowercase. e.g. javascript, react, marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tags START -->

                                        <!-- Reviewer START -->
                                        <div class="col-12">
                                            <div class="bg-light border rounded p-4">
                                                <h5 class="mb-0">Message to a reviewer</h5>

                                                <!-- Comment -->
                                                <div class="mt-3">
                                                    <textarea class="form-control" rows="4" placeholder="Write a message" spellcheck="false"></textarea>
                                                    <div class="form-check mb-0 mt-2">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">
                                                            Any images, sounds, or other assets that are not my own work, have been appropriately licensed for use in the file preview or main course. Other than these items, this work is entirely my own and I have full rights to sell it here.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Reviewer START -->

                                        <!-- Step 4 button -->
                                        <div class="d-md-flex justify-content-between align-items-start mt-4">
                                            <button class="btn btn-secondary prev-btn mb-2 mb-md-0">Previous</button>
                                            <button class="btn btn-light me-auto ms-md-2 mb-2 mb-md-0">Preview Course</button>
                                            <div class="text-md-end">
                                                <a href="course-added.html" class="btn btn-success mb-2 mb-sm-0">Submit a Course</a>
                                                <p class="mb-0 small mt-1">Once you click "Submit a Course", your course will be uploaded and marked as pending for review.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 4 content END -->

                            </form>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
        </div>
    </section>

@endsection
