<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
//                'id' => '1',
                'user_id' => '1',
                'url' => '3Yr4_NLhWx0',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '2',
                'user_id' => '1',
                'url' => 'OVEYzxKl0kY',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '3',
                'user_id' => '2',
                'url' => 'X90cy7D5nGw',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '4',
                'user_id' => '2',
                'url' => 'nITt0seZzGg',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '5',
                'user_id' => '3',
                'url' => 'LEWHE-rBq9U',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '6',
                'user_id' => '3',
                'url' => 'XXB6_KvfJuM',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '7',
                'user_id' => '4',
                'url' => '4iquPLGDKAs',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '8',
                'user_id' => '4',
                'url' => '-YlXmzbNuVE',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '9',
                'user_id' => '5',
                'url' => 'PkDfrVdCwCs',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '10',
                'user_id' => '5',
                'url' => 'gzElnwSUCPg',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '11',
                'user_id' => '6',
                'url' => 'hjbMTj2h1Eg',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '12',
                'user_id' => '6',
                'url' => 'T2bcJIE1bw4',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '13',
                'user_id' => '7',
                'url' => 'RbisYlWqZcI',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '14',
                'user_id' => '7',
                'url' => 'CJ25R5y9Lcg',
                'target_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '15',
                'user_id' => '8',
                'url' => 'l5Sv64Zqpv4',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '16',
                'user_id' => '8',
                'url' => '0EykttJuwp0',
                'target_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '17',
                'user_id' => '9',
                'url' => 'NCJZgcvh_Xs',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '18',
                'user_id' => '9',
                'url' => 'lYrv8VZdNDg',
                'target_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '19',
                'user_id' => '10',
                'url' => 'KE403U-eK9o',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
//                'id' => '20',
                'user_id' => '10',
                'url' => 'vVaqXLcNvIM',
                'target_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
