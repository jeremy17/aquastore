<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fish')->insert([
            'species' => 'goldfish',
            'color' => 'red',
            'number_of_fins' => 5,
        ]);
        DB::table('fish')->insert([
            'species' => 'guppy',
            'color' => 'white',
            'number_of_fins' => 2,
        ]);
    }
}
