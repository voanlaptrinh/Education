@extends('index')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3 shadow p-4">
            <h3 class="text-center"> HƯỚNG DẪN THANH TOÁN VNPAY TRÊN WEBSITE</h3>
            <div>
                Cổng thanh toán VNPAY là giải pháp thanh toán do Công ty Cổ phần giải pháp Thanh toán Việt Nam (VNPAY) phát
                triển. Khách hàng sử dụng thẻ/tài khoản ngân hàng, tính năng QR Pay/VNPAY-QR được tích hợp sẵn trên ứng dụng
                Mobile Banking của các ngân hàng hoặc Ví điện tử liên kết để thanh toán các giao dịch và nhập mã giảm giá
                (nếu có)
            </div>
            <h5 class="text-center pt-4">Quét mã VNPAY-QR trên 35+ Ứng dụng Mobile Banking và 15+ Ví điện tử liên kết</h5>

            <div class="d-flex justify-content-center">
                <img class="w-50" src="{{asset('/images/vnpay1.png')}}" alt="">
            </div>

            <h6 class="text-center pt-2 pb-2">40+ Thẻ ATM/nội địa/tài khoản ngân hàng</h6>

            <div class="d-flex justify-content-center">
                <img class="w-50" src="{{asset('/images/vnpay2.png')}}" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="w-50" src="{{asset('/images/vnpay3.png')}}" alt="">
            </div>
            <h6>1. Phương thức thanh toán qua “Ứng dụng thanh toán hỗ trợ VNPAY-QR”</h6>
            <div>
                <span class="fw-bold">Bước 1:</span> Quý khách lựa chọn sản phẩm, dịch vụ và chọn Thanh toán ngay hoặc Đặt
                hàng
                Tại trang thanh toán, vui lòng kiểm tra lại sản phẩm đã đặt, điền đầy đủ thông tin người nhận hàng, chọn
                phương thức thanh toán VNPAY và nhấn nút “Đặt hàng ngay”.
            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 2:</span> Màn hình thanh toán chuyển sang giao diện cổng thanh toán VNPAY. Chọn
                phương thức “Ứng dụng thanh toán hỗ trợ VNPAY-QR”
            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 3:</span> Hệ thống hiển thị mã QR cùng với số tiền cần thanh toán, Quý khách kiểm
                tra lại số tiền này. Sử dụng ứng dụng ngân hàng (theo danh sách liệt kê), chọn “Quét Mã” và tiến hành quét
                mã QR trên màn hình thanh toán website
                <br>
                *Lưu ý: Mã QR có hiệu lực trong 15 phút
                Để quá trình thanh toán thành công, khách hàng vui lòng tham khảo trước các điều kiện và thao tác quét mã
                trên điện thoại để sẵn sàng, tránh sự cố hết thời gian ảnh hưởng đến thanh toán và mã khuyến mại của quý
                khách.

            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 4:</span> Kiểm tra thông tin, nhập mã giảm giá (nếu có) và hoàn tất thanh toán
                Khi thực hiện thanh toán hoàn tất Quý khách sẽ nhận được thông báo xác nhận đơn hàng đặt hàng thành công tại
                website
            </div>
            <div class="pt-2 d-flex justify-content-center">
                <img class="w-50" src="{{asset('/images/vnpay4.png')}}" alt="">
            </div>

            <h6>2. Phương thức thanh toán qua “Thẻ nội địa và tài khoản ngân hàng”</h6>

            <div class="pt-2">
                <span class="fw-bold">Bước 1:</span> Quý khách lựa chọn sản phẩm, dịch vụ và chọn Thanh toán ngay hoặc Đặt
                hàng
                Tại trang thanh toán, vui lòng kiểm tra lại sản phẩm đã đặt, điền đầy đủ thông tin người nhận hàng, chọn
                phương thức thanh toán VNPAY và nhấn nút “Đặt hàng ngay”.
            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 2:</span> Màn hình thanh toán chuyển sang giao diện cổng thanh toán VNPAY. Chọn
                phương thức “Thẻ nội địa và tài khoản ngân hàng” và chọn ngân hàng muốn thanh toán thẻ trong danh sách
            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 3:</span> Quý khách vui lòng thực hiện nhập các thông tin thẻ/tài khoản theo yêu
                cầu và chọn “Tiếp tục”. Mã OTP sẽ được gửi về điện thoại đăng ký, nhập mã OTP để hoàn tất giao dịch
                *Lưu ý: Giao dịch sẽ hết hạn sau 15 phút

            </div>
            <div class="pt-2">
                <span class="fw-bold">Bước 4:</span> Khi thực hiện thanh toán hoàn tất Quý khách sẽ nhận được thông báo xác nhận đơn hàng đặt hàng thành công tại website
            </div>
            <div class="pt-2 d-flex justify-content-center">
                <img class="w-50" src="{{asset('/images/vnpay5.png')}}" alt="">
            </div>
            <h6 class="pt-4">3. Phương thức thanh toán qua “Thẻ thanh toán quốc tế (Visa, MasterCard, JCB, UnionPay)”
            </h6>
            <div >
                Tương tự như phương thức thanh toán “Thẻ nội địa và tài khoản ngân hàng”
            </div>
            <h6 class="pt-2">4. Phương thức thanh toán qua “Ví điện tử VNPAY”

            </h6>
            <div >
                Tương tự như phương thức thanh toán “Ứng dụng thanh toán hỗ trợ VNPAY-QR

            </div>
        </div>
    </div>
@endsection
