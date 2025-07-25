<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert default payment types
        DB::table('payment_types')->insert([
            ['name' => 'Booking', 'description' => 'Booking payment'],
            ['name' => 'Installment', 'description' => 'Installment payment'],
            ['name' => 'Full', 'description' => 'Full payment'],
            ['name' => 'Management_fee', 'description' => 'Management fee payment'],
            ['name' => 'Other', 'description' => 'Other payment'],
        ]);
    }
}
