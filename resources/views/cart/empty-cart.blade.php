@extends('index')
@section('content')
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">My cart</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Image -->
                    <img src="assets/images/element/cart.svg" class="h-200px h-md-300px mb-3" alt="">
                    <!-- Subtitle -->
                    <h2>Your cart is currently empty</h2>
                    <!-- info -->
                    <p class="mb-0">Please check out all the available courses and buy some courses that fulfill your needs.</p>
                    <!-- Button -->
                    <a href="index.html" class="btn btn-primary mt-4 mb-0">Back to Shop</a>
                </div>
            </div>
        </div>
    </section>
@endsection
