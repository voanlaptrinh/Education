<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable(); // Tên gia sư
            $table->string('last_name')->nullable(); // HỌ gia sư
            $table->string('email')->nullable(); // Email
            $table->string('image')->nullable(); // Ảnh gia sư
            $table->string('password')->nullable(); // Mật khẩu
            $table->string('phone_number')->nullable(); // SỐ điện thoại
            $table->date('date_of_birth'); // Ngày sinh
            $table->string('gender')->nullable(); // Giới tính
            $table->string('address')->nullable(); //  Địa chỉ nơi ở của gia sư.
            $table->string('qualification')->nullable(); //  Trình độ học vấn của gia sư.
            $table->integer('experience_years')->nullable(); // Số năm kinh nghiệm giảng dạy của gia sư
            $table->string('subjects')->nullable(); // Các môn học mà gia sư có thể dạy.
            $table->string('hourly_rate')->nullable(); //Mức phí theo giờ của gia sư.
            $table->string('bio')->nullable(); // Tiểu sử hoặc mô tả ngắn về gia sư.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
