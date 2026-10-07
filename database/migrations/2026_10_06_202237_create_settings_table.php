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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Datos generales
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('street')->nullable();
            $table->string('street_number', 20)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();

            // Redes Sociales
            $table->text('facebook_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('tiktok_url')->nullable();
            $table->text('whatsapp_url')->nullable();
            $table->text('google_maps_url')->nullable();

            // Logotipo
            $table->string('logo_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
