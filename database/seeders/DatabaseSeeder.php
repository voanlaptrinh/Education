<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classes;
use App\Models\Subject;
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
        DB::table("users")->truncate();

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
        Classes::create(['name' => 'Lớp 3','status' => 1]);
        Classes::create(['name' => 'Lớp 4','status' => 1]);
        Classes::create(['name' => 'Lớp 5','status' => 1]);
        Subject::create(['name' => 'Mathematics','status' => 1,'class_id' => 1]);
        Subject::create(['name' => 'Physics','status' => 1, 'class_id'=>1]);
        Subject::create(['name' => 'lớp 4 1','status' => 1, 'class_id'=>2]);
        Subject::create(['name' => 'lớp 4 1','status' => 1, 'class_id'=>2]);
        Subject::create(['name' => 'Physics','status' => 1, 'class_id'=>3]);
        Subject::create(['name' => 'Physics','status' => 1, 'class_id'=>3]);
    }
}
