<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transport>
 */
class TransportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = DB::table('companies')->inRandomOrder()->first();
        $manager = DB::table('managers')->inRandomOrder()->first();
        $vehicle = DB::table('vehicles')->inRandomOrder()->first();
        $driver = DB::table('drivers')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();

        return [
            'company_id' => $company->id,
            'manager_id' => $manager->id,
            'vehicle_id' => $vehicle->id,
            'driver_id' => $driver->id,
            'loading_location_id' => $location->id,
            'unloading_location_id' => $location->id,
            'created_at' => fake()->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
