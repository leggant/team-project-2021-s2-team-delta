<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatesToEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evidence', function (Blueprint $table) {
            $table->id('id')->change(); 
            $table->dropForeign('evidence_student_id_foreign');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evidence', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->change(); 
            $table->foreign('student_id')
            ->references('id')
            ->on('student')
            ->onUpdate('cascade');
        });
    }
}
