<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatesToStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student', function (Blueprint $table) {
            $table->after('name', function ($table) {
                $table->string('last_name', 25);
                $table->string('student_id')->unique();
            });
            $table->string('name', 25)->unique()->change();
            $table->string('email', 30)->unique()->change();
            $table->string('github', 30)->nullable()->change();
        });
        Schema::table('student', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
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
