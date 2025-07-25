<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@dev.local',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'status_id' => 1,
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'Arafat',
            'email' => 'arafat@dev.local',
            'phone' => '01826111136',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'status_id' => 1,
            'password' => Hash::make('arafat01'),
        ]);

        Employee::create([
            'username' => 'Employee',
            'email' => 'employee@dev.local',
            'phone' => '01811223344',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'status_id' => 1,
            'password' => Hash::make('password'),
        ]);

        Agent::create([
            'username' => 'Agent',
            'public_id' => "AGT-" . uuid(),
            'email' => 'agent@dev.local',
            'phone' => '01811223344',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'status_id' => getStatusId("Agent", "Approved"),
            'password' => Hash::make('password'),
        ]);

        Buyer::create([
            'agent_id' => 1,
            'buyer_type_id' => 1,
            'uuid' => uuid(),
            'public_id' => "BYR-" . uuid(),
            'username' => 'buyer',
            'email' => 'buyer@dev.local',
            'phone' => '01811223344',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'status_id' => getStatusId("Buyer", "Approved"),
            'password' => Hash::make('password'),
        ]);
    }
}
