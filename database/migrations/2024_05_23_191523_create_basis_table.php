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
        Schema::create('basis', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên cơ sở
            $table->string('address'); // Địa chỉ
            $table->string('gg_map'); // Bản đồ
            $table->string('phone'); // số điện thoại
            $table->string('email'); // email
            $table->string('open_time'); // THời gian mở cửa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basis');
    }
};
