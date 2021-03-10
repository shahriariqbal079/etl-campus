<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSectionsTable extends Migration
{

    public function up()
    {
        Schema::create('course_sections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_sections');
    }
}
