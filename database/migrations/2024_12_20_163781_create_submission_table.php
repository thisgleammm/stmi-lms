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
        Schema::create('submission', function (Blueprint $table) {
            $table->id('id_submissions');
            $table->unsignedBigInteger('assignment_id');
            $table->unsignedBigInteger('student_id');
            $table->string('grade');
            $table->string('feedback');
            $table->timestamps();

            $table->foreign('student_id')->references('id_biodata')->on('biodata')->onDelete('cascade');
            $table->foreign('assignment_id')->references('id_assignment')->on('assignment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission');
    }
};
