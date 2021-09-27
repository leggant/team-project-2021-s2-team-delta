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
                'subject' => 'Studio 1'
            ],
            [
                'subject' => 'Studio 2'
            ],
            [
                'subject' => 'Studio 3'
            ],
            [
                'subject' => 'Studio 4'
            ]

        ];

        Papers::insert($papers);
    }
}
