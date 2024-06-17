@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <h4>Chính sách bảo mật</h4>



        <form action="{{route('security.update')}}" method="post">
            @csrf
            <textarea name="description" id="content" cols="30" rows="10"></textarea>
            <button class="btn btn-success" type="submit">Lưu lại</button>
        </form>
    </div>
@endsection
