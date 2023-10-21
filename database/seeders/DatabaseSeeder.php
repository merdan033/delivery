<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Load;
use App\Models\Location;
use App\Models\Manager;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Company::factory(10)
            ->has(Manager::factory()->count(2))
            ->has(Vehicle::factory()->count(5))
            ->has(Driver::factory()->count(10))
            ->create();

        Customer::factory(100)->create();
        Location::factory(10)->create();

        User::factory(10)->create();
    }
}
