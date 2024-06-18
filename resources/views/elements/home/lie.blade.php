@extends('index')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3 shadow p-4">
            <h3 class="text-center">Chính sách Đổi trả Hoàn tiền</h3>
            {!! $lie->description !!}
            {{-- <h5 class="text-start pt-2 pb-2">1. Mục đích:
            </h5>
            <div>- Chính sách này quy định các điều kiện, quy trình và thời hạn đổi trả, hoàn tiền cho các gói khóa học
                online được cung cấp bởi website {{ $webConfig->name }}.
            </div>
            <h5 class="text-start pt-2 pb-2">2. Điều kiện đổi trả:</h5>
            <div>- Bạn có thể đổi trả gói khóa học online trong các trường hợp sau:</div>
            <div class="ps-3">- Nội dung khóa học không đúng với mô tả trên website:
                <div class="ps-5">
                    - Nội dung khóa học không phù hợp với trình độ hoặc nhu cầu học tập của bạn. <br>
                    - Nội dung khóa học thiếu sót hoặc không đầy đủ thông tin. <br>
                    - Giảng viên giảng dạy không chuyên nghiệp hoặc không có trình độ chuyên môn. <br>
                </div>
                - Gói khóa học bị lỗi kỹ thuật:
                <div class="ps-5">
                    - Bạn không thể truy cập vào bài giảng hoặc tài liệu khóa học.<br>
                    - Bài giảng hoặc tài liệu khóa học bị lỗi hoặc không thể xem được.
                    <br>
                    - Hệ thống học tập online bị trục trặc hoặc không hoạt động ổn định. <br>
                </div>
            </div>

            <h5 class="text-start pt-2 pb-2">3. Quy trình đổi trả:</h5>
            <div>- Để đổi trả gói khóa học online, bạn vui lòng thực hiện theo các bước sau:</div>
            <div class="ps-3">
                <span class="fw-bolder">Liên hệ với chúng tôi: </span> Bạn có thể liên hệ với chúng tôi qua <a href="mailto:{{ $webConfig->email}}">{{ $webConfig->email}}</a> hoặc chat
                trực tuyến để thông
                báo về việc bạn muốn đổi trả gói khóa học. <br>
                <span class="fw-bolder">Cung cấp thông tin: </span> Bạn cần cung cấp cho chúng tôi thông tin về gói khóa học
                bạn muốn đổi trả, bao gồm tên khóa học, mã khóa học, hóa đơn mua hàng, lý do đổi trả.
                <br>
                <span class="fw-bolder">Yêu cầu đổi trả: </span>Bạn cần nêu rõ yêu cầu đổi trả của bạn, bao gồm đổi sang gói
                khóa học khác hoặc hoàn tiền.
                <br>
                <span class="fw-bolder">Xác nhận đổi trả: </span>Sau khi nhận được yêu cầu của bạn, chúng tôi sẽ xem xét và
                xác nhận việc đổi trả cho bạn.<br>

            </div>
            <h5 class="text-start pt-2 pb-2">4. Thời hạn đổi trả:</h5>
            <div class="ps-3">
                <span class="fw-bolder"> Nội dung khóa học không đúng với mô tả trên website:</span> Bạn có thể đổi trả gói
                khóa học trong vòng [số ngày] ngày kể từ ngày mua khóa học.<br>
                <span class="fw-bolder"> Gói khóa học bị lỗi kỹ thuật:</span> Bạn có thể đổi trả gói khóa học trong vòng [số
                ngày] ngày kể từ ngày bạn phát hiện lỗi kỹ thuật.
            </div>
            <h5 class="text-start pt-2 pb-2">5. Hoàn tiền:</h5>
            <div>
                Trong trường hợp bạn đổi trả gói khóa học và không có gói khóa học thay thế phù hợp, chúng tôi sẽ hoàn tiền
                cho bạn. Số tiền hoàn lại sẽ được chuyển vào tài khoản ngân hàng của bạn trong vòng [số ngày] ngày kể từ
                ngày chúng tôi xác nhận việc đổi trả.

            </div>


            <h5 class="text-start pt-2 pb-2">5. Lưu ý: </h5>
            <div>- Để đổi trả gói khóa học online, bạn vui lòng thực hiện theo các bước sau:</div>
            <div class="ps-3">
                Chính sách này chỉ áp dụng cho các gói khóa học online được mua trên website {{ $webConfig->name }} <br>
                Chính sách này có thể thay đổi theo thời gian. Vui lòng kiểm tra trang web của chúng tôi để cập nhật các
                thay đổi.
                <br>
                Chúng tôi có quyền từ chối đổi trả hoặc hoàn tiền cho bạn nếu bạn vi phạm các điều khoản và điều kiện sử
                dụng website {{ $webConfig->name }}.
                <br>
            </div>
            <h5 class="text-start pt-2 pb-2">6. Bổ sung: </h5>
            <div>- Ngoài những điều được nêu trong chính sách này, chúng tôi còn cam kết:
            </div>
            <div class="ps-3">
                Cung cấp cho bạn quy trình đổi trả, hoàn tiền nhanh chóng và thuận tiện.<br>
                Đảm bảo tính minh bạch trong việc đổi trả, hoàn tiền.<br>
                Mang đến cho bạn trải nghiệm học tập online chất lượng và hiệu quả.<br>
            </div>
            <div>- Chúng tôi mong muốn mang đến cho bạn trải nghiệm mua hàng và học tập online tốt nhất.
            </div> --}}
        </div>
    @endsection
