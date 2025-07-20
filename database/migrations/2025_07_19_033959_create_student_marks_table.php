<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMarksTable extends Migration
{
    public function up()
    {
        Schema::create('student_marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('assignment_id')->nullable();
            $table->decimal('marks_obtained', 5, 2);
            $table->decimal('total_marks', 5, 2);
            $table->enum('exam_type', ['assignment', 'quiz', 'midterm', 'final'])->default('assignment');
            $table->date('exam_date');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('assignment_id')->references('id')->on('assignments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_marks');
    }
}