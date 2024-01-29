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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chapter_id')->unsigned();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            // $table->unsignedBigInteger('class_id');
            // $table->unsignedBigInteger('subject_id');
            $table->timestamps();
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectures');
    }
};
