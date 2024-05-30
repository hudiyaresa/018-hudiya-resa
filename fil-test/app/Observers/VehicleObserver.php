<?php

namespace App\Observers;

use App\Models\Vehicle;
use App\Filament\Resources\VehicleResource;
use App\Notifications\OilChangeReminder;
use App\Notifications\BrakeServiceReminder;
use App\Notifications\BatteryServiceReminder;
use App\Notifications\TireServiceReminder;
use App\Notifications\StnkReminder;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Facades\Filament;
use Carbon\Carbon;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;

class VehicleObserver
{
    // Method yang akan dijalankan saat model Vehicle di-save
    public function created(Vehicle $vehicle)
    {
        $this->checkStnkValidity($vehicle);
        // $this->checkOilChange($vehicle);
        // $this->checkBrakeService($vehicle);
        // $this->checkBatteryService($vehicle);
        // $this->checkTireService($vehicle);
    }

    public function updated(Vehicle $vehicle)
    {
        $this->checkStnkValidity($vehicle);
        // $this->checkOilChange($vehicle);
        // $this->checkBrakeService($vehicle);
        // $this->checkBatteryService($vehicle);
        // $this->checkTireService($vehicle);
    }

    protected function checkStnkValidity(Vehicle $vehicle)
    {
    $now = Carbon::now();
    $oneMonthBefore = $now->copy()->subMonth();

    $shouldSendNotification = $vehicle->STNK_validity_period <= $oneMonthBefore;

    if ($shouldSendNotification) {
        $notification = Notification::make()
            ->title('STNK Renewal Validity Reminder for ' . $vehicle->plat_number)
            ->body('Your STNK registration for vehicle ' . $vehicle->plat_number . ' will expire soon!')
            ->sendToDatabase(auth()->user());

        return $shouldSendNotification; // Can return true/false for success/failure
    }

    return false; // Notification not needed
    }

    // protected function checkOilChange(Vehicle $vehicle)
    // {
    //     $currentKm = $vehicle->current_km;
    //     $lastKmOilChange = $vehicle->last_km_oil_change;
    //     $avgDailyKm = $vehicle->avg_daily_km;
    //     $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);
    //     $recipient = auth()->user();

    //     if ($currentKm - $lastKmOilChange >= 3000 || 
    //         ($currentKm - $lastKmOilChange + $daysSinceLastUpdate * $avgDailyKm) >= 3000) {
    //             Notification::make()
    //             ->title('Oil Change Service Reminder for ' . $vehicle->plat_number)
    //             ->body('Oil Change Service Reminder for vehicle ' . $vehicle->plat_number . ' will expire soon!')
    //             ->actions([
    //                 Action::make('Update Data')
    //                     ->url('filament.resources.vehicles.edit')
    //                     ->button(),
    //             ])->sendToDatabase($recipient);
    //     }
    // }

    // protected function checkBrakeService(Vehicle $vehicle)
    // {
    //     $currentKm = $vehicle->current_km;
    //     $lastKmBrakeService = $vehicle->last_km_brake_change;
    //     $avgDailyKm = $vehicle->avg_daily_km;
    //     $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

    //     if ($currentKm - $lastKmBrakeService >= 6000 || 
    //         ($currentKm - $lastKmBrakeService + $daysSinceLastUpdate * $avgDailyKm) >= 6000) {
    //             Notification::make()
    //             ->title('Brake Service Reminder for ' . $vehicle->plat_number)
    //             ->body('Brake Service Reminder for vehicle ' . $vehicle->plat_number . ' will expire soon!')
    //             ->actions([
    //                 Action::make('Update Data')
    //                     ->url('filament.resources.vehicles.edit')
    //                     ->button(),
    //             ])->sendToDatabase(auth()->user());
    //     }
    // }

    // protected function checkBatteryService(Vehicle $vehicle)
    // {
    //     $currentKm = $vehicle->current_km;
    //     $lastKmBatteryService = $vehicle->last_km_battery_service;
    //     $avgDailyKm = $vehicle->avg_daily_km;
    //     $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

    //     if ($currentKm - $lastKmBatteryService >= 25000 || 
    //     ($currentKm - $lastKmBatteryService + $daysSinceLastUpdate * $avgDailyKm) >= 25000) {
    //         Notification::make()
    //             ->title('Battery Service Reminder for ' . $vehicle->plat_number)
    //             ->body('Battery Service Reminder for vehicle ' . $vehicle->plat_number . ' will expire soon!')
    //             ->actions([
    //                 Action::make('Update Data')
    //                     ->url('filament.resources.vehicles.edit')
    //                     ->button(),
    //             ])->sendToDatabase(auth()->user());
    //     }
    // }

    // protected function checkTireService(Vehicle $vehicle)
    // {
    //     $currentKm = $vehicle->current_km;
    //     $lastKmTireService = $vehicle->last_km_tire_service;
    //     $avgDailyKm = $vehicle->avg_daily_km;
    //     $daysSinceLastUpdate = Carbon::now()->diffInDays($vehicle->updated_at);    

    //     if ($currentKm - $lastKmTireService >= 15000 || 
    //     ($currentKm - $lastKmTireService + $daysSinceLastUpdate * $avgDailyKm) >= 15000) {
    //         Notification::make()
    //             ->title('Tire Change Reminder for ' . $vehicle->plat_number)
    //             ->body('Tire Change Reminder for vehicle ' . $vehicle->plat_number . ' will expire soon!')
    //             ->actions([
    //                 Action::make('Update STNK')
    //                     ->url('filament.resources.vehicles.edit')
    //                     ->button(),
    //             ])->sendToDatabase(auth()->user());
    //     }
    // }
}