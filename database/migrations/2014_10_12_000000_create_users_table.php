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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('username')->unique();
           
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->integer('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('money')->nullable();
            $table->integer('user_type')->nullable(); //phân quyền
            $table->integer('status')->nullable(); //Trạng thái tài khoản
            $table->string('score')->nullable(); //Trạng thái tài khoản
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verification_token')->nullable(); //xác nhận xem tài khoản đã xác nhận chưa
            $table->string('password');
        
            $table->integer('sort_order')->nullable();
            $table->integer('create_by')->default(1)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
