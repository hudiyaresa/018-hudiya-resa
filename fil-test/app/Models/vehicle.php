<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notification;
use Carbon\Carbon;

class vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'vehicle_type',
        'vehicle_cc',
        'plat_number',
        'year_production',
        'STNK_validity_period',
        'last_time_tax_paid',
        'current_km',
        'avg_km_daily_use',
        'last_km_oil_change',
        'last_km_brake_change',
        'last_km_tire_change',
        'last_km_battery_change',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }


    public function run(): void
{
    User::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
}

// public function generateNotifications()
// {
//     // Notification for STNK validity period + 1 year
//     $stnkReminderDate = Carbon::parse($this->STNK_validity_period)->addYear();
//     if ($stnkReminderDate->isToday()) {
//         Notification::create([
//             'user_id' => $this->user_id,
//             'vehicle_id' => $this->id,
//             'message' => 'Your vehicle STNK needs renewal.',
//             'notifiable_type' => User::class,
//             'notifiable_id' => $this->user_id,
//         ]);
//     }

//     // Notification for oil change after 3000 km from current km
//     $daysForOilChange = ceil(3000 / $this->avg_km_daily_use);
//     $oilChangeReminderDate = Carbon::now()->addDays($daysForOilChange);
//     if ($oilChangeReminderDate->isToday()) {
//         Notification::create([
//             'user_id' => $this->user_id,
//             'vehicle_id' => $this->id,
//             'message' => 'Your vehicle needs an oil change.',
//             'notifiable_type' => User::class,
//             'notifiable_id' => $this->user_id,
//         ]);
//     }
// }

    protected function casts(): array
    {
        return [
            'updated_at' => 'datetime',
        ];
    }

}
