<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('exam_histories', function (Blueprint $table) {
            $table->integer('remaining_time')->default(0)->after('completed_at');
        });
    }

    public function down()
    {
        Schema::table('exam_histories', function (Blueprint $table) {
            $table->dropColumn('remaining_time');
        });
    }
};
