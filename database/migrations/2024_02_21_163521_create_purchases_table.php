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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Khóa ngoại liên kết đến bảng users
            $table->string('package_name');
            $table->unsignedInteger('amount');
            $table->string('bank_code');
            $table->string('bank_tran_no');
            $table->string('card_type');
            $table->string('order_info');
            $table->dateTime('pay_date');
            $table->string('response_code');
            $table->string('tmn_code');
            $table->string('transaction_no');
            $table->string('transaction_status');
            $table->string('txn_ref');
            $table->string('secure_hash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
