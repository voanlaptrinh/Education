<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'password'=> bcrypt('12345678'),
            'user_type' => 0,
            'email_verified_at' => Carbon::now(),
            'status'=> 1
        ]);
        DB::table("users")->insert([
            'name' => 'hellobabie',
            'username' => 'huyen pham',
            'email' => 'thanhuyen191@gmail.com',
            'password'=> bcrypt('12345678'),
            'user_type' => 1,
            'email_verified_at' => Carbon::now(),
            'status'=> 1
        ]);
        DB::table('quiz_groups')->insert(
            ['name' => 'Câu hỏi 1'],
        );
        DB::table('quiz_groups')->insert(
            ['name' => 'Câu hỏi 2'],
        );
        DB::table('quiz_groups')->insert(
            ['name' => 'Câu hỏi 3'],
        );
        DB::table('news')->truncate();
        DB::table('news')->insert([
            [
                'name' => 'Sample News 1',
                'image' => 'sample_image_1.jpg',
                'is_views' => 100,
                'description' => 'Description of Sample News 1',
                'content' => 'Content of Sample News 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample News 2',
                'image' => 'sample_image_2.jpg',
                'is_views' => 150,
                'description' => 'Description of Sample News 2',
                'content' => 'Content of Sample News 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample News 3',
                'image' => 'sample_image_2.jpg',
                'is_views' => 150,
                'description' => 'Description of Sample News 2',
                'content' => 'Content of Sample News 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample News 4',
                'image' => 'sample_image_2.jpg',
                'is_views' => 150,
                'description' => 'Description of Sample News 2',
                'content' => 'Content of Sample News 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample News 5',
                'image' => 'sample_image_2.jpg',
                'is_views' => 150,
                'description' => 'Description of Sample News 2',
                'content' => 'Content of Sample News 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample News 6',
                'image' => 'sample_image_2.jpg',
                'is_views' => 150,
                'description' => 'Description of Sample News 2',
                'content' => 'Content of Sample News 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
        ]);
    }
}
