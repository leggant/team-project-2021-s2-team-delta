<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveColsInCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            DB::statement("ALTER TABLE cohorts MODIFY COLUMN paper_id bigint(20) UNSIGNED NOT NULL AFTER id");
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
            //
        });
    }
}
