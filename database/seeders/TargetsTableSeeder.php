<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targets')->insert([
            [
//                'id' => '1',
                'target_grade' => '幼児',
            ],
            [
//                'id' => '2',
                'target_grade' => '年少',
            ],
            [
//                'id' => '3',
                'target_grade' => '年中',
            ],
            [
//                'id' => '4',
                'target_grade' => '年長',
            ],
        ]);
    }
}
