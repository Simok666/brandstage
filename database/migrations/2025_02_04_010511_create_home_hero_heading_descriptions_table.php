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
        Schema::create('home_hero_heading_descriptions', function (Blueprint $table) {
            $table->id();
            $table->text('heading_first')->nullable();
            $table->text('heading_middle')->nullable();
            $table->text('heading_third')->nullable();
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
        Schema::dropIfExists('home_hero_heading_descriptions');
    }
};
