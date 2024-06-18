@extends('index')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3 shadow p-4">
            <h3 class="text-center">Chính sách hoàn hủy </h3>
{!!$cancellation->description!!}
            {{-- <h5 class="text-start pt-2 pb-2">1. Mục đích:</h5>
            <div>- Chính sách này quy định các điều kiện, quy trình và thời hạn hủy khóa học cho các khóa học được bán trên
                website {{ $webConfig->name }} .</div>
            <h5 class="text-start pt-2 pb-2">2. Điều kiện hủy khóa học:</h5>
            <div>Bạn có thể hủy khóa học trong các trường hợp sau:
            </div>
            <div class="ps-3">
                <span class="fw-bolder">Bạn thay đổi quyết định: </span> Bạn có thể hủy khóa học trong vòng [số ngày] ngày kể
                từ ngày mua khóa học. <br>
                <span class="fw-bolder">Nội dung khóa học không phù hợp với nhu cầu của bạn: </span> Nội dung khóa học không
                phù hợp với trình độ hoặc nhu cầu học tập của bạn.

                <br>
                <span class="fw-bolder">Khóa học bị lỗi kỹ thuật: </span> Bạn không thể truy cập vào bài giảng hoặc tài liệu
                khóa học. Bài giảng hoặc tài liệu khóa học bị lỗi hoặc không thể xem được. Hệ thống học tập online bị trục
                trặc hoặc không hoạt động ổn định.
                <br>
                <span class="fw-bolder">Lý do cá nhân: </span>Bạn có lý do cá nhân không thể tham gia khóa học.<br>
            </div>


            <h5 class="text-start pt-2 pb-2">3. Quy trình hủy khóa học:</h5>
            <div>Để hủy khóa học, bạn vui lòng thực hiện theo các bước sau:</div>
            <div class="ps-3">
                <span class="fw-bolder">Liên hệ với chúng tôi: </span> Bạn có thể liên hệ với chúng tôi qua email hoặc chat
                trực tuyến để thông báo về việc bạn muốn hủy khóa học. <br>
                <span class="fw-bolder">Cung cấp thông tin: </span>Bạn cần cung cấp cho chúng tôi thông tin về khóa học bạn
                muốn hủy, bao gồm tên khóa học, mã khóa học, hóa đơn mua hàng, lý do hủy.
                <br>
                <span class="fw-bolder">Yêu cầu hủy khóa học: </span> Bạn cần nêu rõ yêu cầu hủy khóa học của bạn.
                <br>
                <span class="fw-bolder">Xác nhận hủy khóa học: </span>Sau khi nhận được yêu cầu của bạn, chúng tôi sẽ xem
                xét và xác nhận việc hủy khóa học cho bạn<br>
            </div>
            <h5 class="text-start pt-2 pb-2">4. Thời hạn hủy khóa học:</h5>
            <div>Để hủy khóa học, bạn vui lòng thực hiện theo các bước sau:</div>
            <div class="ps-3">
                <span class="fw-bolder">Bạn thay đổi quyết định: </span> Bạn có thể hủy khóa học trong vòng [số ngày] ngày
                kể từ ngày mua khóa học <br>
                <span class="fw-bolder">Nội dung khóa học không phù hợp với nhu cầu của bạn </span>Bạn có thể hủy khóa học
                trong vòng [số ngày] ngày kể từ ngày bắt đầu học khóa học.

                <br>
                <span class="fw-bolder">Khóa học bị lỗi kỹ thuật: </span> Bạn có thể hủy khóa học trong vòng [số ngày] ngày
                kể từ ngày bạn phát hiện lỗi kỹ thuật.

                <br>
                <span class="fw-bolder">Lý do cá nhân: </span>Bạn có thể hủy khóa học bất kỳ lúc nào, tuy nhiên bạn có thể
                phải chịu một khoản phí hủy khóa học.
                <br>
            </div>
            <h5 class="text-start pt-2 pb-2">5. Hoàn tiền:</h5>
            <div>Trong trường hợp bạn hủy khóa học theo các điều kiện được nêu trong Chính sách này, chúng tôi sẽ hoàn tiền
                cho bạn. Số tiền hoàn lại sẽ được tính toán dựa trên số buổi học bạn đã tham gia và số tiền bạn đã thanh
                toán cho khóa học. Số tiền hoàn lại sẽ được chuyển vào tài khoản ngân hàng của bạn trong vòng [số ngày] ngày
                kể từ ngày chúng tôi xác nhận việc hủy khóa học.</div>
            <h5 class="text-start pt-2 pb-2">6. Lưu ý:</h5>
            <div>
                - Chính sách này chỉ áp dụng cho các khóa học được mua trên website {{ $webConfig->name}}. <br>
                - Chính sách này có thể thay đổi theo thời gian. Vui lòng kiểm tra trang web của chúng tôi để cập nhật các
                thay đổi.
                . <br>
                - Chúng tôi có quyền từ chối hủy khóa học hoặc hoàn tiền cho bạn nếu bạn vi phạm các điều khoản và điều kiện
                sử dụng website {{ $webConfig->name}}. <br>

            </div>
            <h5 class="text-start pt-2 pb-2">7. Lưu ý:</h5>
            <div>
                Ngoài những điều được nêu trong Chính sách này, chúng tôi còn cam kết:
            </div>
            <div class="ps-3">
                Cung cấp cho bạn quy trình hủy khóa học, hoàn tiền nhanh chóng và thuận tiện. <br>
                Đảm bảo tính minh bạch trong việc hủy khóa học, hoàn tiền. <br>
                Mang đến cho bạn trải nghiệm mua hàng và học tập online tốt nhất. <br>

            </div>
            <div>
                Chúng tôi mong muốn mang đến cho bạn trải nghiệm mua hàng và học tập online tốt nhất.

            </div> --}}
        </div>
    @endsection
