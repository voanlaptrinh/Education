@extends('index')
@section('content')
    <section>
        <div class="container">
            <div class="row g-5 justify-content-between">
                <!-- Admission form START -->
                <div class="col-md-8 mx-auto">
                    <!-- Title -->
                    <h2 class="mb-3">Apply for Admission</h2>
                    <p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any question related admission process, please contact our admission office at <a href="#">+123 456 789</a> or <a href="#">example@email.com</a>.</p>
                    <p class="mb-1">Before you proceed with the form please read below topics:</p>
                    <ul class="ps-3">
                        <li>Application fee is $49</li>
                        <li>Fees are non-refundable</li>
                        <li>Field required with <span class="text-danger">*</span> are required to complete the admission form</li>
                    </ul>
                    <!-- Form START -->
                    <form class="row g-3">
                        <h5 class="mb-0">Personal information</h5>

                        <!-- First name -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Student first name <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                            </div>
                        </div>

                        <!-- Middle name -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Student middle name <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="middleName">
                                </div>
                            </div>
                        </div>

                        <!-- Last name -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Student last name <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="lastName">
                                </div>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Gender <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex">
                                        <div class="form-check radio-bg-light me-4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check radio-bg-light">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Date of birth -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Date of birth</h6>
                                </div>

                                <div class="col-lg-8">
                                    <div class="row g-2 g-sm-4">
                                        <div class="col-4">
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Date</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Month</option>
                                                <option>Jan</option>
                                                <option>Feb</option>
                                                <option>Mar</option>
                                                <option>Apr</option>
                                                <option>Jun</option>
                                                <option>Jul</option>
                                                <option>Aug</option>
                                                <option>Sep</option>
                                                <option>Oct</option>
                                                <option>Nov</option>
                                                <option>Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Year</option>
                                                <option>1990</option>
                                                <option>1991</option>
                                                <option>1992</option>
                                                <option>1993</option>
                                                <option>1994</option>
                                                <option>1995</option>
                                                <option>1996</option>
                                                <option>1997</option>
                                                <option>1998</option>
                                                <option>1999</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Email <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>

                        <!-- Phone number -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Phone number <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="phoneNumber">
                                </div>
                            </div>
                        </div>

                        <!-- Home address -->
                        <div class="col-12">
                            <div class="row g-xl-0">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Your address <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Select city <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm">
                                        <option value="">Select city</option>
                                        <option>New york</option>
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>London</option>
                                        <option>Los angeles</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Select state <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm">
                                        <option value="">Select state</option>
                                        <option>Maharashtra</option>
                                        <option>California</option>
                                        <option>Florida</option>
                                        <option>Alaska</option>
                                        <option>Ohio</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Select country <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm">
                                        <option value="">Select country</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                        <option>Japan</option>
                                        <option>America</option>
                                        <option>Dubai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Zip code-->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Zip code <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="zipCode">
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="my-5">

                        <!-- Parent detail -->
                        <h5 class="mt-0">Parent detail</h5>

                        <!-- Salutation -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Salutation <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex">
                                        <div class="form-check radio-bg-light me-4">
                                            <input class="form-check-input" type="radio" name="flexRadioSalutation" id="flexRadioSalutation1" checked>
                                            <label class="form-check-label" for="flexRadioSalutation1">
                                                Mr.
                                            </label>
                                        </div>
                                        <div class="form-check radio-bg-light me-4">
                                            <input class="form-check-input" type="radio" name="flexRadioSalutation" id="flexRadioSalutation2">
                                            <label class="form-check-label" for="flexRadioSalutation2">
                                                Mrs.
                                            </label>
                                        </div>
                                        <div class="form-check radio-bg-light me-4">
                                            <input class="form-check-input" type="radio" name="flexRadioSalutation" id="flexRadioSalutation3">
                                            <label class="form-check-label" for="flexRadioSalutation3">
                                                Ms.
                                            </label>
                                        </div>
                                        <div class="form-check radio-bg-light">
                                            <input class="form-check-input" type="radio" name="flexRadioSalutation" id="flexRadioSalutation4">
                                            <label class="form-check-label" for="flexRadioSalutation4">
                                                Dr.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full name -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Full name <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="fullName">
                                </div>
                            </div>
                        </div>

                        <!-- Relation with applicant -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Relation with applicant <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="relation">
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Email <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" class="form-control" id="email2">
                                </div>
                            </div>
                        </div>

                        <!-- Phone number -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Phone number <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="phoneNumber2">
                                </div>
                            </div>
                        </div>

                        <!-- Home address -->
                        <div class="col-12">
                            <div class="row g-xl-0">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Home address <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Job title -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Job title <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="jobTitle">
                                </div>
                            </div>
                        </div>

                        <!-- Office phone number -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Office phone number</h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="my-5">

                        <!-- Education -->
                        <h5 class="mt-0">Education</h5>

                        <!-- School or college name -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">School or college name <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="collegeName">
                                </div>
                            </div>
                        </div>

                        <!-- Year of passing -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Year of passing <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                        <option value="">Year</option>
                                        <option>1990</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Board of university -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Board of university <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="board">
                                </div>
                            </div>
                        </div>

                        <!-- Class grad -->
                        <div class="col-12">
                            <div class="row g-xl-0 align-items-center">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">Class grad <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-select js-choice z-index-9" aria-label=".form-select-sm">
                                        <option value="">Select grad</option>
                                        <option>Distinction</option>
                                        <option>First class</option>
                                        <option>Second class</option>
                                        <option>Third class</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- School or college address -->
                        <div class="col-12">
                            <div class="row g-xl-0">
                                <div class="col-lg-4">
                                    <h6 class="mb-lg-0">School or college address <span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12 text-sm-end">
                            <button class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>
                <!-- Admission form END -->
            </div>
        </div>
    </section>
@endsection
