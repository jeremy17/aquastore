<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AquariumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aquarium')->insert([
            'glass_type' => 'clear',
            'size' => 100,
            'shape' => 'rectangular',
        ]);
        DB::table('aquarium')->insert([
            'glass_type' => 'clear',
            'size' => 100,
            'shape' => 'rectangular',
        ]);
        DB::table('aquarium')->insert([
            'glass_type' => 'clear',
            'size' => 75,
            'shape' => 'rectangular',
        ]);
    }
}
