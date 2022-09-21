<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\like;
use App\Models\Follow;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TargetsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        Like::factory(80)->create();
        Follow::factory(50)->create();
    }
}
