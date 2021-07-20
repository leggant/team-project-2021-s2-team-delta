<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceTable extends Migration
{

    public function up()
    {
        Schema::create('evidence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title'); //unique title needed
            $table->mediumText('image'); //image file
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('student');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evidence');
    }
}
