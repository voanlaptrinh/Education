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
        Schema::create('web_configs', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('logo')->nullable();
            $table->text('website')->nullable();
            $table->text('address')->nullable();
            $table->text('code')->nullable();
            $table->text('gg_map')->nullable();
            $table->text('gg_analytic')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('zalo')->nullable();
            $table->text('description')->nullable();
            $table->text('facebook_id')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('youtube')->nullable();
            $table->text('dribbble')->nullable();
            $table->text('whats_app')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('telegram')->nullable();
            $table->text('google')->nullable(); 
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('reddit')->nullable();
            $table->text('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_configs');
    }
};
