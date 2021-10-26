<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveColsInStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student', function (Blueprint $table) {
            DB::statement("ALTER TABLE student MODIFY COLUMN created_at DATETIME DEFAULT NULL AFTER cohort_id");
            DB::statement("ALTER TABLE student MODIFY COLUMN updated_at DATETIME DEFAULT NULL AFTER created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function (Blueprint $table) {
            //
        });
    }
}
