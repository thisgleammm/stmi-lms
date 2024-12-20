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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('id_course');
            $table->unsignedBigInteger('lecture_id');
            $table->string('code_course');
            $table->string('name_courses');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Define foreign keys
            // $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
