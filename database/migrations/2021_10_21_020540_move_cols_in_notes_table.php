<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveColsInNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            DB::statement("ALTER TABLE notes MODIFY COLUMN student_id int(10) UNSIGNED NOT NULL AFTER id");
            DB::statement("ALTER TABLE notes MODIFY COLUMN user_id bigint(20) UNSIGNED NOT NULL AFTER student_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            //
        });
    }
}
