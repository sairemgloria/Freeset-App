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
        Schema::create('presets', function (Blueprint $table) {
            $table->id();
            $table->string('preset_id');
            $table->string('title');
            $table->text('description');
            // $table->unsignedTinyInteger('rating'); // Assuming rating is a number (like stars out of 5)
            $table->integer('price'); // Store price as an integer (you can store in cents)
            $table->string('display_image_before')->nullable(); // Store the image path as a string
            $table->string('display_image_after')->nullable(); // Store the image path as a string
            $table->string('image_path'); // Store the image path as a string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presets');
    }
};
