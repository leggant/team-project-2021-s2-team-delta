<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AddUpdateToCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            DB::table('cohorts')->where('semester','1')->update(['semester' => 'Semester 1']);
            DB::table('cohorts')->where('semester','2')->update(['semester' => 'Semester 2']);
            DB::table('cohorts')->where('stream', '1')->update(['stream' => 'A']);
            DB::table('cohorts')->where('stream', '2')->update(['stream' => 'B']);
            DB::table('cohorts')->where('stream', '3')->update(['stream' => 'J']);
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
