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
        // Schema::table('evidence', function (Blueprint $table) {
        //     $table->id('id')->change();
        //     $table->renameColumn('student_id', 'idstudent')->change();
        // });
        // Schema::table('evidence', function (Blueprint $table) {
        //     $table->unsignedBigInteger('idstudent')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('evidence', function (Blueprint $table) {
        //     Schema::dropIfExists('evidence');
        // });
    }
}
