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
        Schema::create('about_second_sections', function (Blueprint $table) {
            $table->id();
            $table->text('heading_first_text')->nullable();
            $table->text('heading_strong_text')->nullable();
            $table->text('heading_second_text')->nullable();
            $table->text('heading_underlined_first_text')->nullable();
            $table->text('heading_third_text')->nullable();
            $table->text('heading_underlined_second_text')->nullable();
            $table->text('heading_fourth_text')->nullable();
            $table->text('description')->nullable();
            $table->text('button_title')->nullable();
            $table->text('button_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_second_sections');
    }
};
