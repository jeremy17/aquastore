<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AquariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aquaria')->insert([
            'glass_type' => 'clear',
            'size' => '100',
            'shape' => 'rectangular',
        ]);
    }
}
