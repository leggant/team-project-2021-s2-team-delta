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
        Schema::table('cohorts', function (Blueprint $table) {
            $table->id('id')->change();
            $table->after('id', function ($table) {
                $table->unsignedBigInteger('student_id');
            });
            // This will at some point need to be dropped. Students will be added via the relationship w/ student_id to student table.
            //$table->dropColumn('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });
    }
}
