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
        $aquarium1 = DB::table('aquarium')
            ->select('id')
            ->where('id', '=', 1)
            ->get();
        $aquarium2 = DB::table('aquarium')
            ->select('id')
            ->where('id', '=', 2)
            ->get();
        DB::table('fish')->insert([
            'species' => 'goldfish',
            'color' => 'red',
            'number_of_fins' => 5,
            'aquarium_id' => $aquarium1[0]->id,
        ]);
        DB::table('fish')->insert([
            'species' => 'guppy',
            'color' => 'white',
            'number_of_fins' => 2,
            'aquarium_id' => $aquarium2[0]->id,
        ]);
    }
}
