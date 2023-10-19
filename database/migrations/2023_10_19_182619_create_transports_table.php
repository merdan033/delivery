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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->index();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
            $table->unsignedBigInteger('manager_id')->index();
            $table->foreign('manager_id')->references('id')->on('managers')->cascadeOnDelete();
            $table->unsignedBigInteger('vehicle_id')->index();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->cascadeOnDelete();
            $table->unsignedBigInteger('driver_id')->index();
            $table->foreign('driver_id')->references('id')->on('drivers')->cascadeOnDelete();
            $table->unsignedBigInteger('loading_location_id')->index();
            $table->foreign('loading_location_id')->references('id')->on('locations')->cascadeOnDelete();
            $table->unsignedBigInteger('unloading_location_id')->index();
            $table->foreign('unloading_location_id')->references('id')->on('locations')->cascadeOnDelete();
            $table->date('loading_date');
            $table->date('unloading_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
