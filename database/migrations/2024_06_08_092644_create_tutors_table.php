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
            $table->unsignedBigInteger('user_id'); // ID người dùng liên kết
            $table->string('first_name'); // Tên gia sư
            $table->string('last_name'); // HỌ gia sư
            $table->string('email'); // Email
            $table->string('image'); // Ảnh gia sư
            $table->string('phone_number'); // SỐ điện thoại
            $table->date('date_of_birth'); // Ngày sinh
            $table->string('gender'); // Giới tính
            $table->string('address'); //  Địa chỉ nơi ở của gia sư.
            $table->string('qualification'); //  Trình độ học vấn của gia sư.
            $table->integer('experience_years'); // Số năm kinh nghiệm giảng dạy của gia sư
            $table->string('subjects'); // Các môn học mà gia sư có thể dạy.
            $table->string('hourly_rate'); //Mức phí theo giờ của gia sư.
            $table->string('bio'); // Tiểu sử hoặc mô tả ngắn về gia sư.
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
