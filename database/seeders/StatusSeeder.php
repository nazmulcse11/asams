<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("status_types")->insert([
            ['id' => 1,'name' => 'General'],
            ['id' => 2,'name' => 'Agent'],
            ['id' => 3, 'name' => 'Buyer'],
            ['id' => 4, 'name' => 'Shop'],
            ['id' => 5, 'name' => 'Agent Shop'],
            ['id' => 6, 'name' => 'Buyer Shop'],
            ['id' => 7, 'name' => 'Approval'],
        ]);

        DB::table('statuses')->insert([

            // General Statuses
            ['name' => 'Active', 'type_id' => 1],
            ['name' => 'Inactive', 'type_id' => 1],
            ['name' => 'Suspended', 'type_id' => 1],
            ['name' => 'Archived', 'type_id' => 1],

            // Agent Statuses
            ['name' => 'Pending', 'type_id' => 2],
            ['name' => 'Verified', 'type_id' => 2],
            ['name' => 'Approved', 'type_id' => 2],
            ['name' => 'Suspended', 'type_id' => 2],
            ['name' => 'Rejected', 'type_id' => 2],
            ['name' => 'Blacklisted', 'type_id' => 2],

            // Buyer Statuses
            ['name' => 'Pending', 'type_id' => 3],
            ['name' => 'Verified', 'type_id' => 3],
            ['name' => 'Approved', 'type_id' => 3],
            ['name' => 'Suspended', 'type_id' => 3],
            ['name' => 'Rejected', 'type_id' => 3],
            ['name' => 'Blacklisted', 'type_id' => 3],

            // Shop Statuses
            ['name' => 'Hold', 'type_id' => 4],
            ['name' => 'Vacant', 'type_id' => 4],
            ['name' => 'Reserved', 'type_id' => 4],
            ['name' => 'Occupied', 'type_id' => 4],

            // Agent Shop Statuses
            ['name' => 'Pending', 'type_id' => 5],
            ['name' => 'Verified', 'type_id' => 5],
            ['name' => 'Approved', 'type_id' => 5],
            ['name' => 'Rejected', 'type_id' => 5],
            ['name' => 'Deposited', 'type_id' => 5],

            // Buyer Shop Statuses
            ['name' => 'Pending', 'type_id' => 6],
            ['name' => 'Verified', 'type_id' => 6],
            ['name' => 'Approved', 'type_id' => 6],
            ['name' => 'Rejected', 'type_id' => 6],
            ['name' => 'Booked', 'type_id' => 6],

            // approval Statuses
            ['name' => 'Pending', 'type_id' => 7],
            ['name' => 'Verified', 'type_id' => 7],
            ['name' => 'Approved', 'type_id' => 7],
            ['name' => 'Rejected', 'type_id' => 7],
        ]);
    }
}
