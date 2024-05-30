<?php

namespace App\Filament\Resources\VehicleResource\Pages;

use App\Filament\Resources\VehicleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Vehicle;
use App\Notifications\OilChangeReminder;
use App\Notifications\BrakeServiceReminder;
use App\Notifications\BatteryServiceReminder;
use App\Notifications\TireServiceReminder;
use App\Notifications\StnkReminder;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Livewire\DatabaseNotifications;
use Carbon\Carbon;

class EditVehicle extends EditRecord
{
    protected static string $resource = VehicleResource::class;

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.vehicles.index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
                return 
                Notification::make()
                ->title('STNK Renewal Validity Reminder!')
                ->sendToDatabase(\auth()->user());
                // ->ToDatabase();

                // ->title('Battery Service Reminder for ' . $vehicle->plat_number)
                // ->body('Battery Service Reminder for vehicle ' . $vehicle->plat_number . ' will expire soon!')
                // ->actions([
                //     Action::make('Update Data')
                // ->url('filament.resources.vehicles.edit')
                // ->button(),
                // ])->sendToDatabase(auth()->user());

    }
}