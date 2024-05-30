<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('brand');
            $table->enum('vehicle_type', ['manual', 'matic']);
            $table->enum('vehicle_cc', ['100-110cc', '125cc', '150-155cc', '200cc']);
            $table->string('plat_number');
            $table->integer('year_production');
            $table->date('STNK_validity_period');
            $table->date('last_time_tax_paid');
            $table->unsignedBigInteger('current_km');
            $table->unsignedBigInteger('avg_km_daily_use');
            $table->unsignedBigInteger('last_km_oil_change');
            $table->unsignedBigInteger('last_km_brake_change');
            $table->unsignedBigInteger('last_km_tire_change');
            $table->unsignedBigInteger('last_km_battery_change');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
