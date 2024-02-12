<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classes;
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
        DB::table("users")->insert([
            'name' => 'hellobabie',
            'username' => 'huyen pham',
            'email' => 'thanhuyen191@gmail.com',
            'password' => bcrypt('12345678'),
            'user_type' => 1,
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
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 1, 'description' => 'sdasd']);
        Subject::create(['name' => 'lớp 4 1', 'status' => 1, 'class_id' => 2, 'description' => 'sdasd']);
        Subject::create(['name' => 'lớp 4 1', 'status' => 1, 'class_id' => 2, 'description' => 'sdasd']);
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 3, 'description' => 'sdasd']);
        Subject::create(['name' => 'Physics', 'status' => 1, 'class_id' => 3, 'description' => 'sdasd']);


        Web_config::create(
            [
                'name' => 'edu',
                'logo' => 'logos/BxUGTMyWa3rc4JAtpqYN113eCTAWxJDm33Lwcq2o.svg',
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
            'expires_at' => '2024-05-01'
        ]);
        Subscription::create([
            'name' => 'gói 2',
            'price' => 300000,
            'expires_at' => '2024-05-01'
        ]);
        Subscription::create([
            'name' => 'gói 3',
            'price' => 300000,
            'expires_at' => '2024-05-01'
        ]);
    }
}
