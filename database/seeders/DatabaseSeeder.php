<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Banner;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Subscription;
use App\Models\Web_config;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table("users")->delete();
        DB::table("web_configs")->delete();

        DB::table("users")->insert([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'user_type' => 0,
            'email_verified_at' => Carbon::now(),
            'status' => 1
        ]);
      

        DB::table('news')->truncate();
        for ($i = 0; $i < 5; $i++) {
            DB::table('news')->insert([
                ['name' => 'Sample News' . $i, 'image' => 'sample_image_1.jpg', 'is_views' => 0, 'description' => 'Description of Sample News 1', 'content' => 'Content of Sample News 1', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
        Classes::create(['name' => 'Lớp 3', 'status' => 1]);
        Classes::create(['name' => 'Lớp 4', 'status' => 1]);
        Classes::create(['name' => 'Lớp 5', 'status' => 1]);
        Subject::create(['name' => 'Mathematics', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Mathematics1', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Mathematics2', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Mathematics3', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Mathematics4', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Mathematics5', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'lớp 4 1', 'status' => 1, 'class_id' => 2, 'description' => 'sdasd']);
        Subject::create(['name' => 'lớp 4 1', 'status' => 1, 'class_id' => 2, 'description' => 'sdasd']);
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 3, 'description' => 'sdasd']);
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 3, 'description' => 'sdasd']);

        Banner::create([
            'name' => 'Học tập không giới hạn trong tầm tay',
            'description' => 'Thị trường giảng dạy và học tập trực tuyến với. Được giảng dạy bởi các chuyên gia để giúp bạn có được những kỹ năng mới.',
            'link_video' => 'https://www.youtube.com/watch?v=PKWwDoNtCKE',
            'link_button' => '#',
            'image_path' => ''
        ]);
        Web_config::create(
            [
                'name' => 'edu',
                'logo' => '',
                'code' => 46757867,
                'email' => 'edu@example.com',
                'phone' => '0987733787',
                'address' => 'hà nội',
                'zalo' => 1131231,
                'facebook_id' => 'scskchsdf',
                'pinterest' =>  'pinterest',
                'youtube' => 'dfasdfd',
                'tiktok' => 'tiktok',
                'telegram' => 'telegram',
                'instagram' => 'instagram'
            ]
        );
        Subscription::create([
            'name' => 'gói 1',
            'price' => 300000,
            'duration_months' => 6 * 30
        ]);
        Subscription::create([
            'name' => 'gói 2',
            'price' => 300000,
            'duration_months' => 7 * 30
        ]);
        Subscription::create([
            'name' => 'gói 3',
            'price' => 300000,
            'duration_months' => 8 * 30
        ]);
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 1,
                'title' => 'Bài học Mathematics ' . $i,
                'description' => 'Bài học Mathematics',
                'content' => 'Bài học Mathematics',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 2,
                'title' => 'Physics ' . $i,
                'description' => 'Physics',
                'content' => 'Physics',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 3,
                'title' => 'lớp 4 1 ' . $i,
                'description' => 'lớp 4 1',
                'content' => 'lớp 4 1',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 4,
                'title' => 'lớp 4 1 ' . $i,
                'description' => 'lớp 4 2',
                'content' => 'lớp 4 2',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 5,
                'title' => 'Physics ' . $i,
                'description' => 'Physics',
                'content' => 'Physics',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            Lesson::create([
                'subject_id' => 6,
                'title' => 'Physics ' . $i,
                'description' => 'Physics',
                'content' => 'Physics',
                'image' => 'images/bbb.jpg',
                'views' => '999',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 1,
                'name' => 'Đề bài Mathematics ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 2,
                'name' => 'Đề bài Physics ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 3,
                'name' => 'lớp 4 1 ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 4,
                'name' => 'lớp 4 1 ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 5,
                'name' => 'Physics ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Course::create([
                'subject_id' => 6,
                'name' => 'Physics ' . $i,
                'time_limit' => 1320,
                'image' => 'course_images/bbb.jpg',
            ]);
        }
        DB::table("security")->insert([
            'description' => '<h5 class="text-start pt-2 pb-2">1. Mục đích:</h5>
            <div>Chính sách này nhằm mục đích thông báo cho bạn về cách HDEducation thu thập, sử dụng và tiết lộ
                thông tin cá
                nhân của bạn khi bạn mua khóa học của chúng tôi. HDEducation cam kết bảo vệ quyền riêng tư của
                bạn và chỉ sử
                dụng thông tin của bạn cho các mục đích được nêu trong chính sách này.
            </div>
            <h5 class="text-start pt-2 pb-2">2. Thu thập thông tin:</h5>
            <div>Khi bạn mua khóa học HDEducation, chúng tôi thu thập một số thông tin cá nhân từ bạn, bao gồm:
            </div>
            <div>
                - Tên đầy đủ <br>
                - Địa chỉ email <br>
                - Số điện thoại <br>
                - Địa chỉ thanh toán <br>
                - Thông tin thẻ tín dụng hoặc thẻ ghi nợ <br>

            </div>
            <div>Chúng tôi cũng thu thập thông tin về việc sử dụng khóa học của bạn, chẳng hạn như thời gian bạn dành cho
                mỗi bài học và điểm số của bạn.
            </div>
            <h5 class="text-start pt-2 pb-2">3. Sử dụng thông tin:</h5>

            <div>HDEducation sử dụng thông tin cá nhân của bạn cho các mục đích sau:
            </div>
            <div>
                - Cung cấp cho bạn khóa học mà bạn đã mua.<br>
                - Liên hệ với bạn về khóa học của bạn.<br>
                - Cải thiện các khóa học và dịch vụ của chúng tôi. <br>
                - Gửi cho bạn thông tin tiếp thị về các khóa học và dịch vụ khác của HDEducation.<br>
            </div>
            <h5 class="text-start pt-2 pb-2">4. Tiết lộ thông tin:</h5>
            <div>HDEducation có thể tiết lộ thông tin cá nhân của bạn cho các nhà cung cấp dịch vụ bên thứ ba
                giúp chúng tôi
                cung cấp các khóa học và dịch vụ của mình, chẳng hạn như nhà cung cấp dịch vụ thanh toán và nhà cung cấp
                dịch vụ lưu trữ. HDEducation cũng có thể tiết lộ thông tin cá nhân của bạn theo yêu cầu của pháp
                luật hoặc khi
                chúng tôi tin rằng điều đó cần thiết để bảo vệ quyền lợi hoặc tài sản của mình hoặc quyền lợi hoặc tài sản
                của người khác.
            </div>
            <h5 class="text-start pt-2 pb-2">5. Lựa chọn của bạn:</h5>
            <div>Bạn có thể chọn không nhận thông tin tiếp thị từ HDEducation bằng cách nhấp vào liên kết hủy
                đăng ký trong
                bất kỳ email tiếp thị nào mà bạn nhận được. Bạn cũng có thể yêu cầu HDEducation xóa thông tin cá
                nhân của bạn
                bằng cách liên hệ với chúng tôi tại <a href="mailto:Huyendieuems@gmail.com">Huyendieuems@gmail.com</a>.
            </div>
            <h5 class="text-start pt-2 pb-2">6. Bảo mật:</h5>
            <div>HDEducation sử dụng các biện pháp bảo mật vật lý, kỹ thuật và hành chính để bảo vệ thông tin cá
                nhân của bạn
                khỏi truy cập trái phép, sử dụng hoặc tiết lộ.
            </div>
            <h5 class="text-start pt-2 pb-2">7. Thay đổi đối với chính sách này:</h5>
            <div>HDEducation có thể thay đổi Chính sách này bất cứ lúc nào bằng cách đăng phiên bản cập nhật
                trên trang web
                của chúng tôi. Bạn nên kiểm tra trang web của chúng tôi thường xuyên để cập nhật các thay đổi đối với Chính
                sách này.
            </div>
            <h5 class="text-start pt-2 pb-2">8. Liên hệ:</h5>
            <div>Nếu bạn có bất kỳ câu hỏi nào về chính sách này, vui lòng liên hệ với chúng tôi tại
               <a href="mailto:Huyendieuems@gmail.com">Huyendieuems@gmail.com</a>
            </div>
            <h5 class="text-start pt-2 pb-2">9. Lưu ý:</h5>
            <div>Chính sách này chỉ áp dụng cho việc bán khóa học HDEducation. <br>
                HDEducation có thể có các chính sách bảo mật riêng cho các sản phẩm và dịch vụ khác. <br>
                Chính sách này có thể thay đổi theo thời gian. Vui lòng kiểm tra trang web của HDEducation để
                cập nhật các
                thay đổi.
            </div>
            <h5 class="text-start pt-2 pb-2">10. Bổ sung:</h5>
            <div>Ngoài những điều được nêu trong chính sách này, HDEducation còn cam kết:
            </div>
            <div class="ps-5"> - Không bao giờ bán hoặc chia sẻ thông tin cá nhân của bạn với các bên thứ ba mà không có
                sự đồng ý của bạn.
                <br>
                - Cung cấp cho bạn quyền truy cập vào thông tin cá nhân của bạn và cho phép bạn sửa đổi hoặc xóa thông tin
                đó.
                <br>
                - Cho phép bạn hủy đăng ký khỏi các bản tin tiếp thị của chúng tôi.
            </div>
            <div>HDEducation cam kết bảo vệ quyền riêng tư của bạn và cung cấp cho bạn trải nghiệm mua hàng an
                toàn và bảo mật.
            </div>',
           
        ]);
        DB::table("policy_pays")->insert([
            'description' => '<h5 class="text-start pt-2 pb-2">1. Phạm vi áp dụng</h5>
            <div>- Chính sách bảo hành các gói của chúng tôi được áp dụng cho tất cả các gói khóa học được bán bởi HDEducation.
              </div>
            <h5 class="text-start pt-2 pb-2">2. Thời hạn bảo hành:</h5>
            <div>- Gói khóa học có thời hạn tương ứng với số ngày hết hạn của gói kể từ ngày mua hàng.</div>
            <div>- Lưu ý: Thời hạn bảo hành có thể thay đổi tùy theo từng gói khóa học cụ thể.</div>
            <h5 class="text-start pt-2 pb-2">3. Điều kiện bảo hành:</h5>
            <div>- Khách hàng có quyền yêu cầu bảo hành trong trường hợp khóa học gặp lỗi kĩ thuật hoặc không hoạt động đúng
                chức năng </div>
            <div>- Khách hàng cần cung cấp bằng chứng mua hàng (Hóa đơn, phiếu mua hàng) </div>
            <div>- Khách hàng cần mô tả rõ ràng lỗi gặp phải và cung cấp thông tin liên quan (Ví dụ: ảnh chụp màn hình,
                video) </div>
            <h5 class="text-start pt-2 pb-2">4. Hình thức bảo hành </h5>
            <div>- Web Education sẽ cố gắng hết sức để giải quyết vấn đề của khách hàng trong vòng 24 giờ kể từ khi nhận
                được yêu cầu bảo hành. Hình thức bảo hành bao gồm:</div>
            <div>- Khách hàng cần cung cấp bằng chứng mua hàng (hóa đơn, phiếu mua hàng). </div>
            <div>- Sửa lỗi kỹ thuật. <br>
                - Cung cấp tài liệu hỗ trợ. <br>
                - Hoàn tiền (Nếu không thể khắc phục lỗi). <br>
            </div>
            <h5 class="text-start pt-2 pb-2">5. Trường hợp không được bảo hành</h5>
            <div>- Khách hàng sử dụng khóa học không đúng cách.
            </div>
            <div>- Lỗi phát sinh do tác động từ bên ngoài (Ví dụ: virus, phần mềm độc hại).</div>
            <div>- Khách hàng đã tự ý sửa chữa hoặc thay đổi phần mềm của khóa học.</div>
            <div>- Khách hàng mua khóa học từ nguồn không chính thức.</div>

            <h5 class="text-start pt-2 pb-2">6. Quy trình bảo hành.</h5>
            <div>- Khách hàng liên hệ với HDEducation qua email hoặc số điện thoại liên hệ.</div>
            <div>- Cung cấp thông tin về lỗi gặp phải và bằng chứng mua hàng. </div>
            <div>- HDEducation sẽ hỗ trợ khách hàng xử lý lỗi trong thời gian sớm nhất.</div>

            <h5 class="text-start pt-2 pb-2">7. Thông tin liên lạc:</h5>
            <div>- Email: Huyendieuems@gmail.com </div>
            <div>- Số điện thoại: 0949489955 </div>
            <h5 class="text-start pt-2 pb-2">8. Ghi chú:</h5>
            <div>- Chính sách bảo hành có thể thay đổi mà không cần thông báo trước.
            </div>
            <div>- HDEducation có quyền từ chối bảo hành trong trường hợp khách hàng không đáp ứng các điều kiện
                bảo hành.
            </div>
',
           
        ]);
    }
    
}
