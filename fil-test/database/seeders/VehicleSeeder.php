<?php

namespace Database\Seeders;

use App\Models\vehicle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class VehicleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        // ]);

        vehicle::factory()->create([
            'brand' => 'Yamaha',
            'vehicle_type' => 'matic',
            'vehicle_cc' => '125cc',
            'plat_number' => 'DD 8080 YU',
            'year_production' => '2020',
            'STNK_validity_period' => '2024-12-19',
            'last_time_tax_paid' => '2023-12-19',
            'current_km' => 1000,
            'avg_km_daily_use' => 20,
            'last_km_oil_change' => 500,
            'last_km_brake_change' => 500,
            'last_km_tire_change' => 500,
            'last_km_battery_change' => 500,                        
        ]);

        vehicle::factory(4)->create();
    }
}
