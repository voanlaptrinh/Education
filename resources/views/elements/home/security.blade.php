@extends('index')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3 shadow p-4">
            <h3 class="text-center">Chính sách bảo mật</h3>

          {!!$security->description!!}
        </div>
    @endsection
