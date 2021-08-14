<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatesToNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('notes', function (Blueprint $table) {
        //     $table->id('id')->change();
        //     $table->longText('notes')->change();
        //     $table->dropColumn('student_name');
        //     $table->renameColumn('student_id', 'idstudent');
        // });
        // Schema::table('notes', function (Blueprint $table) {
        //     $table->unsignedBigInteger('idstudent')->change();
        //     $table
        //         ->foreign('idstudent')
        //         ->references('id')
        //         ->on('student')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('notes', function (Blueprint $table) {
        //     Schema::dropIfExists('notes');
        // });
    }
}
