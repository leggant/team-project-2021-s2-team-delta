<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Papers;

class PapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FirstOrCreate allows the seeder to run error free, 
        // without duplicating paper data
        $option1 = Papers::firstOrCreate([
            'paper_name' => 'None Selected'
        ]);
        $option2 = Papers::firstOrCreate([
            'paper_name' => 'Studio 1'
        ]);
        $option3 = Papers::firstOrCreate([
            'paper_name' => 'Studio 2'
        ]);
        $option4 = Papers::firstOrCreate([
            'paper_name' => 'Studio 3'
        ]);
        $option5 = Papers::firstOrCreate([
            'paper_name' => 'Studio 4'
        ]);
    }
}
