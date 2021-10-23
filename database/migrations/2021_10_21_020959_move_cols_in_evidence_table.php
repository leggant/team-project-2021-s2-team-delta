<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveColsInEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evidence', function (Blueprint $table) {
            DB::statement("ALTER TABLE evidence MODIFY COLUMN student_id int(10) UNSIGNED NOT NULL AFTER id");
            DB::statement("ALTER TABLE evidence MODIFY COLUMN user_id bigint(20) UNSIGNED NOT NULL AFTER student_id");
            DB::statement("ALTER TABLE evidence MODIFY COLUMN url varchar(191) NOT NULL AFTER description");
            DB::statement("ALTER TABLE evidence MODIFY COLUMN originalFileName varchar(100) NOT NULL AFTER description");
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
            //
        });
    }
}
