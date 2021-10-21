<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveColsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            DB::statement("ALTER TABLE users MODIFY COLUMN paper_id bigint(20) UNSIGNED DEFAULT NULL AFTER email");
            DB::statement("ALTER TABLE users MODIFY COLUMN is_admin int(11) NOT NULL AFTER paper_id");
            DB::statement("ALTER TABLE users MODIFY COLUMN created_at DATETIME DEFAULT NULL AFTER is_admin");
            DB::statement("ALTER TABLE users MODIFY COLUMN updated_at DATETIME DEFAULT NULL AFTER created_at");
            DB::statement("ALTER TABLE users MODIFY COLUMN password varchar(191) NOT NULL AFTER is_admin");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
