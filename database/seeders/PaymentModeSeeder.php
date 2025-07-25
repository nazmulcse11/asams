<?php

namespace Database\Seeders;

use App\Models\PaymentMode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modes = [
            'Cash',
            'Credit Card',
            'Debit Card',
            'Mobile Banking',
            'Bank Transfer',
            'Cheque',
        ];

        foreach ($modes as $name) {
            PaymentMode::firstOrCreate(['name' => $name]);
        }
    }
}
