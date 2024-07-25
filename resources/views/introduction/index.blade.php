@extends('index')
@section('content')
    <section class="bg-light">
        <div class="container">
            <h2 class="text-center">{{ $introduction->name }}</h2>
            <!-- Title -->

            <div class="row pt-2">
                <div class="col-12">
                    <!-- Content -->
                    <p>
                        {!! $introduction->content !!}

                    </p>




                </div>
            </div>

        </div>
    </section>
@endsection
