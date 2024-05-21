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
    }
}
