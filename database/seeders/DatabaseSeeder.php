<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddressSeeder::class,
            BloodGroupSeeder::class,
            BuyerTypeSeeder::class,
            CityStateCountrySeeder::class,
            GenderSeeder::class,
            MaritalSeeder::class,
            PropertyTypeSeeder::class,
            ShopForSeeder::class,
            PaymentTypeSeeder::class,
            PaymentModeSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
            PropertySeeder::class,
            PropertyLinkSeeder::class,
        ]);
    }
}
