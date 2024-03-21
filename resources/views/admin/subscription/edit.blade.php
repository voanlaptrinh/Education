@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="container">
            <h2>Sửa gói khoá học</h2>
            <form method="POST" action="{{ route('subscriptions.update', ['subscription' => $subscription->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Tên gói</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $subscription->name) }}"
                        required>
                </div>
              
                <div class="row pt-3">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="price">Giá của gói (VNĐ)</label>
                            <input type="text" name="price" class="form-control" id="price" value="{{ old('price', number_format($subscription->price)) }}">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="duration_months">Nhập thời giạn tháng (Số tháng)</label>
                            <input type="text" name="duration_months" class="form-control" value="{{ old('duration_months', $subscription->duration_months)/30 }}">
                            @error('duration_months')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                


                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var priceInput = document.getElementById('price');
    
            priceInput.addEventListener('input', function() {
                // Xóa dấu phân cách , trong giá trị nhập vào
                var unformattedPrice = this.value.replace(/,/g, '');
                // Định dạng giá trị đã nhập với dấu phân cách ,
                var formattedPrice = Number(unformattedPrice).toLocaleString('vi-VN');
                this.value = formattedPrice;
            });
        });
    </script>
    
@endsection
