<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaperIdToCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            $table->dropColumn(['student_id', 'students', 'subject']);
            $table->unsignedBigInteger('paper_id')->nullable();
            $table
                ->foreign('paper_id')
                ->references('id')
                ->on('papers');
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
            $table->dropForeign(['paper_id']);
            $table->unsignedBigInteger('student_id')->nullable();
            $table
                ->string('students')
                ->default(' ')
                ->nullable();
        });
    }
}
