@extends('index')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3 shadow p-4">
            <h3 class="text-center">Chính sách bảo hành</h3>

            <h5 class="text-start pt-2 pb-2">1. Phạm vi áp dụng</h5>
            <div>- Chính sách bảo hành các gói của chúng tôi được áp dụng cho tất cả các gói khóa học được bán bởi educatin
                Thời hạn bảo hành:</div>
            <h5 class="text-start pt-2 pb-2">2. Thời hạn bảo hành:</h5>
            <div>- Gói khóa học có thời hạn tương ứng với số ngày hết hạn của gói kể từ ngày mua hàng</div>
            <div>- Lưu ý: Thời hạn bảo hành có thể thay đổi tùy theo từng gói khóa học cụ thể</div>
            <h5 class="text-start pt-2 pb-2">3. Điều kiện bảo hành:</h5>
            <div>- Khách hàng có quyền yêu cầu bảo hành trong trường hợp khóa học gặp lỗi kĩ thuật hoặc không hoạt động đúng
                chức năng </div>
            <div>- Khách hàng cần cung cấp bằng chứng mua hàng(hóa đơn, phiếu mua hàng) </div>
            <div>- Khách hàng cần mô tả rõ ràng lỗi gặp phải và cung cấp thông tin liên quan (ví dụ: ảnh chụp màn hình,
                video) </div>
            <h5 class="text-start pt-2 pb-2">4. Hình thức bảo hành </h5>
            <div>- Web Education sẽ cố gắng hết sức để giải quyết vấn đề của khách hàng trong vòng 24 giờ kể từ khi nhận
                được yêu cầu bảo hành. Hình thức bảo hành bao gồm:</div>
            <div>- Khách hàng cần cung cấp bằng chứng mua hàng(hóa đơn, phiếu mua hàng) </div>
            <div>- Sửa lỗi kỹ thuật. <br>
                - Cung cấp tài liệu hỗ trợ. <br>
                - Hoàn tiền (nếu không thể khắc phục lỗi). <br>
            </div>
            <h5 class="text-start pt-2 pb-2">5. Trường hợp không được bảo hành</h5>
            <div>- Khách hàng sử dụng khóa học không đúng cách.
            </div>
            <div>- Lỗi phát sinh do tác động từ bên ngoài (ví dụ: virus, phần mềm độc hại).</div>
            <div>- Khách hàng đã tự ý sửa chữa hoặc thay đổi phần mềm của khóa học.</div>
            <div>- Khách hàng mua khóa học từ nguồn không chính thức.</div>

            <h5 class="text-start pt-2 pb-2">6. Quy trình bảo hành</h5>
            <div>- Khách hàng liên hệ với Web HDEducation qua email hoặc số điện thoại liên hệ</div>
            <div>- Cung cấp thông tin về lỗi gặp phải và bằng chứng mua hàng. </div>
            <div>- Web HDEducation sẽ hỗ trợ khách hàng xử lý lỗi trong thời gian sớm nhất.</div>

            <h5 class="text-start pt-2 pb-2">7. Thông tin liên lạc:</h5>
            <div>- Email: {{ $webConfig->email }} </div>
            <div>- Số điện thoại: {{ $webConfig->phone }} </div>
            <h5 class="text-start pt-2 pb-2">8. Ghi chú:</h5>
            <div>- Chính sách bảo hành có thể thay đổi mà không cần thông báo trước.
            </div>
            <div>- {{ $webConfig->name }} có quyền từ chối bảo hành trong trường hợp khách hàng không đáp ứng các điều kiện
                bảo hành.
            </div>





        </div>
    @endsection