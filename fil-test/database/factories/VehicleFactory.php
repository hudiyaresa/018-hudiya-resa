<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => $this->faker->randomDigit(),
            'brand' => $this->faker->name(),
            'vehicle_type' => $this->faker->randomElement(['manual', 'matic']),
            'vehicle_cc' => $this->faker->randomElement(['100-110cc', '125cc', '150-155cc', '200cc']),
            'plat_number' => $this->faker->name(),
            'year_production' => $this->faker->numberBetween(1990, 2024),
            'STNK_validity_period' => $this->faker->dateTimeThisYear(),
            'last_time_tax_paid' => $this->faker->dateTimeThisYear(),
            'current_km' => $this->faker->numberBetween(0, 100000),
            'avg_km_daily_use' => $this->faker->numberBetween(0, 100),
            'last_km_oil_change' => $this->faker->numberBetween(0, 100000),
            'last_km_brake_change' => $this->faker->numberBetween(0, 100000),
            'last_km_tire_change' => $this->faker->numberBetween(0, 100000),
            'last_km_battery_change' => $this->faker->numberBetween(0, 100000),
        ];
    }
}
