<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSectionContentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('course_section_contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_section_id')->nullable();
            $table->string('content_title')->nullable();
            $table->text('content_description')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('course_section_contents');
    }
}
