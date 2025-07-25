<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityStateCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = file_get_contents(database_path('seeders/sql/city_state_country.sql'));
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared($sql);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
