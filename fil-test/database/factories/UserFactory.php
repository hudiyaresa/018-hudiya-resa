<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->safeEmail(),
        //     'password' => static::$password ??= Hash::make('password'),
        //     'handphone_number' => fake()->randomDigit(),
        //     'address_province' => fake()->country(),
        //     'address_regency',
        //     'address_district',
        //     'address_subdistrict',
        // ];
        return [
            'name' => $this->faker->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'vehicle' => $this->faker->randomDigit(),
            'handphone_number' => $this->faker->randomDigit(),
            'address_province' => $this->faker->country(),
            'address_regency' => $this->faker->streetAddress(),
            'address_district' => $this->faker->streetAddress(),
            'address_subdistrict' => $this->faker->streetAddress(),
            'photo' => $this->faker->randomDigit(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
