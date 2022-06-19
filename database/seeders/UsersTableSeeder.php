<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
//                'id' => '1',
                'nickname' => '信長のパパ',
                'email' => 'oda@oda.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '2',
                'nickname' => '秀吉のママ',
                'email' => 'toyo@toyo.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '3',
                'nickname' => '式部のママ',
                'email' => 'mura@mura.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '4',
                'nickname' => '納言のパパ',
                'email' => 'sei@sei.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '5',
                'nickname' => '家康のママ',
                'email' => 'toku@toku.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '6',
                'nickname' => '光秀のじいじ',
                'email' => 'ake@ake.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '7',
                'nickname' => '義経のばあば',
                'email' => 'ashi@ashi.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '8',
                'nickname' => '妹子のじいじ',
                'email' => 'ono@ono.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '9',
                'nickname' => '清盛のばあば',
                'email' => 'tai@tai.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
            [
//                'id' => '10',
                'nickname' => '芭蕉のじいじ',
                'email' => 'matu@matu.com',
                'password' => bcrypt('password'),
                'delete_flag' => '1',
            ],
        ]);
    }
}
