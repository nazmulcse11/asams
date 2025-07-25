<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("floor_component_types")->insert([
            ['name' => 'Lift'],
            ['name' => 'Stair'],
            ['name' => 'Corridor'],
            ['name' => 'Washroom'],
        ]);
    }
}
