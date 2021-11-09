<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddUpdateToPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('papers', function (Blueprint $table) {
            DB::table('papers')->where('id',1)->update(['paper_name' => 'None Selected']);
            DB::table('papers')->where('id',2)->update(['paper_name' => 'Studio 1']);
            DB::table('papers')->where('id',3)->update(['paper_name' => 'Studio 2']);
            DB::table('papers')->where('id',4)->update(['paper_name' => 'Studio 3']);
            DB::table('papers')->where('id', 5)->update(['paper_name' => 'Studio 4']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('papers', function (Blueprint $table) {
            //
        });
    }
}