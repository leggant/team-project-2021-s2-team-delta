<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatesToCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('cohorts', function (Blueprint $table) {
        //     $table->id('id')->change();
        //     $table->renameColumn('students', 'idstudent')->change();
        // });
        // Schema::table('cohorts', function (Blueprint $table) {
        //     $table->id('id')->change();
        //     $table->renameColumn('students', 'idstudent')->change();
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
        // Schema::table('cohorts', function (Blueprint $table) {
        //     Schema::dropIfExists('cohorts');
        // });
    }
}
