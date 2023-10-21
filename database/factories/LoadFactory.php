<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Load>
 */
class LoadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = DB::table('customers')->inRandomOrder()->first();
        $transport = DB::table('transports')->inRandomOrder()->first();

        return [
            'customer_id' => $customer->id,
            'transport_id' => $transport->id,
            'created_at' => fake()->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
