<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $papers = [
            [
                'paper_name' => 'Studio 1'
            ],
            [
                'paper_name' => 'Studio 2'
            ],
            [
                'paper_name' => 'Studio 3'
            ],
            [
                'paper_name' => 'Studio 4'
            ]

        ];

        Papers::insert($papers);
    }
}
