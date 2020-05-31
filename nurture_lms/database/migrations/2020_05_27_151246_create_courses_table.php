<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('description');
            $table->decimal('cost');
            $table->double('duration');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('category_id');
            $table->string('course_video');
            $table->string('thumbnail');
            $table->timestamps();

            $table->foreign('tutor_id')
                ->references('id')
                ->on('users');

            $table->foreign('category_id')
                ->references('id')
                ->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
