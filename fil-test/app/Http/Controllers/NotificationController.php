<?php

namespace App\Http\Controllers;
namespace App\Livewire;
 
use Filament\Notifications\Notification;
use Livewire\Component;
use App\Models\Vehicle;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->checkStnkValidity();
        $this->checkOilChange();
        $this->checkBrakeService();
        $this->checkBatteryService();
        $this->checkTireService();

        return 0;
    }

    protected function checkStnkValidity()
    {
        $now = Carbon::now();
        $oneMonthBefore = $now->subMonth();
        $expiringVehicles = Vehicle::where('STNK_validity_period', '<=', $oneMonthBefore)
            ->with('user') // Eager load user data
            ->get();
        $recipient = auth()->user();
    
        foreach ($expiringVehicles as $vehicle) {
            Notification::make()
                ->title('STNK Renewal Validity Reminder for ' . $vehicle->plat_number) // Use accessor or directly access attribute
                ->body('Your STNK registration for vehicle ' . $vehicle->plat_number . ' will expire soon!')
                ->actions([
                    Action::make('Update STNK')
                        ->url(route('filament.resources.vehicles.edit', $vehicle->id)) // Use Filament route helper
                        ->button(),
                ])->sendToDatabase($recipient); // Send notification directly to user
        }
    }
                // ])->sendToDatabase(User::where('id', auth()->user()->id)->get()); 
                // send($user, new StnkReminder($vehicle));


    protected function checkOilChange()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $currentKm = $vehicle->current_km;
            $lastKmOilChange = $vehicle->last_km_oil_change;
            $avgDailyKm = $vehicle->avg_daily_km;
            $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);

            if ($currentKm - $lastKmOilChange >= 3000 || 
                ($currentKm - $lastKmOilChange + $daysSinceLastUpdate * $avgDailyKm) >= 3000) {
                $user = $vehicle->user;
                Notification::send($user, new OilChangeReminder($vehicle));
            }
        }
    }

    protected function checkBrakeService()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $currentKm = $vehicle->current_km;
            $lastKmBrakeService = $vehicle->last_km_brake_change;
            $avgDailyKm = $vehicle->avg_daily_km;
            $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

            if ($currentKm - $lastKmBrakeService >= 6000 || 
                ($currentKm - $lastKmBrakeService + $daysSinceLastUpdate * $avgDailyKm) >= 6000) {
                $user = $vehicle->user;
                Notification::send($user, new BrakeServiceReminder($vehicle));
            }
        }
    }

    protected function checkBatteryService()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $currentKm = $vehicle->current_km;
            $lastKmBatteryService = $vehicle->last_km_battery_service;
            $avgDailyKm = $vehicle->avg_daily_km;
            $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

            if ($currentKm - $lastKmBatteryService >= 25000 || 
            ($currentKm - $lastKmBatteryService + $daysSinceLastUpdate * $avgDailyKm) >= 25000) {
                $user = $vehicle->user;
                Notification::send($user, new BatteryServiceReminder($vehicle));
            }
        }
    }

    protected function checkTireService()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $currentKm = $vehicle->current_km;
            $lastKmTireService = $vehicle->last_km_tire_service;
            $avgDailyKm = $vehicle->avg_daily_km;
            $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

            if ($currentKm - $lastKmTireService >= 15000 || 
            ($currentKm - $lastKmTireService + $daysSinceLastUpdate * $avgDailyKm) >= 15000) {
                $user = $vehicle->user;
                Notification::send($user, new TireServiceReminder($vehicle));
            }
        }
    }
}

// class Notify

//     public function created(Vehicle $vehicle): void
//     {


//     }