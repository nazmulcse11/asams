<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Property;
use App\Models\User;
use App\Models\Employee;
use App\Models\UserPropertyLink;
use Illuminate\Database\Seeder;

class PropertyLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $employees = Employee::all();
        $agents = Agent::all();
        $properties = Property::pluck('id');

        $totalUserLinks = 0;
        $totalEmployeeLinks = 0;
        $totalAgentLinks = 0;

        foreach ($users as $item) {
            foreach ($properties as $propertyId) {
                UserPropertyLink::firstOrCreate([
                    'user_id'    => $item->id,
                    'user_type'  => get_class($item),
                    'property_id'=> $propertyId,
                ]);
                $totalUserLinks++;
            }
        }

        foreach ($employees as $item) {
            foreach ($properties->take(2) as $propertyId) {
                UserPropertyLink::firstOrCreate([
                    'user_id'    => $item->id,
                    'user_type'  => get_class($item),
                    'property_id'=> $propertyId,
                ]);
                $totalEmployeeLinks++;
            }
        }

        foreach ($agents as $agent) {
            UserPropertyLink::firstOrCreate([
                'user_id'    => $agent->id,
                'user_type'  => get_class($agent),
                'property_id'=> $properties->first(),
            ]);
            $totalAgentLinks++;
        }

        $this->command->info("- Linked {$totalUserLinks} properties to " . $users->count() . " users (all properties per user).");
        $this->command->info("- Linked {$totalEmployeeLinks} properties to " . $employees->count() . " employees (2 properties per employee).");
        $this->command->info("- Linked {$totalAgentLinks} properties to " . $agents->count() . " agents (1 property each).");
    }
}
