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
        Schema::create('brands_heroes', function (Blueprint $table) {
            $table->id();
            $table->text("heading")->nullable();
            $table->text("description")->nullable();
            $table->text("button_title")->nullable();
            $table->text("button_link")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands_heroes');
    }
};
