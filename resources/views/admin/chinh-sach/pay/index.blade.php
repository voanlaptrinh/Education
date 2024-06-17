@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <h4>Chính sách thanh toán</h4>
        <form action="{{route('pay.update')}}" method="post">
            @csrf
            <textarea name="description" id="content" cols="30" rows="10">{{$policyPay->description}}</textarea>
            <div class="text-end">
                <button class="btn btn-success mt-3" type="submit">Lưu lại</button>
            </div>
        </form>
    </div>
@endsection
