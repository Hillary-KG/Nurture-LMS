<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->double('time_spent')->default(0.0);
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            // $table->string('status')->default("pending");
            // $table->string('transaction_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course_enrollments');
    }
}
