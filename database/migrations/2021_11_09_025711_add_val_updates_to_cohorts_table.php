<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AddValUpdatesToCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            DB::table('cohorts')->where('paper_id',1)->where('semester', 'Semester 2')->where('stream', 'B')->update(['paper_id' => 2]);
            DB::table('cohorts')->where('paper_id',1)->where('semester', 'Semester 2')->where('stream', 'A')->update(['paper_id' => 2]);
            DB::table('cohorts')->where('paper_id',2)->where('semester', 'B')->where('stream', 'A')->update(['semester' => 'Semester 1']);
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
