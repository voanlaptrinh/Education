@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <h4>Chính sách hoàn hủy</h4>
        <form action="{{route('cancellation.update')}}" method="post">
            @csrf
            <textarea name="description" id="content" cols="30" rows="10">{{$cancellation->description}}</textarea>
            <div class="text-end">
                <button class="btn btn-success mt-3" type="submit">Lưu lại</button>
            </div>
        </form>
    </div>
@endsection
