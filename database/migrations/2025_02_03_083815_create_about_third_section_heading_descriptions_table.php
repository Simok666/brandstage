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
        Schema::create('about_third_section_heading_descriptions', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('description')->nullable();
            $table->text('heading_box_1')->nullable();
            $table->text('description_box_1')->nullable();
            $table->text('heading_box_2')->nullable();
            $table->text('description_box_2')->nullable();
            $table->text('heading_box_3')->nullable();
            $table->text('description_box_3')->nullable();
            $table->text('heading_box_4')->nullable();
            $table->text('description_box_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_third_section_heading_descriptions');
    }
};
