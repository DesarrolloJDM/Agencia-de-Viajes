<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'destination_travel_package',
            function (Blueprint $table) {
                $table->id();

                $table->foreignId('travel_package_id')
                    ->constrained('travel_packages')
                    ->cascadeOnDelete();

                $table->foreignId('destination_id')
                    ->constrained('destinations')
                    ->restrictOnDelete();

               $table->unsignedSmallInteger('sort_order')
    ->default(1);

$table->timestamps();

$table->unique(
    ['travel_package_id', 'destination_id'],
    'package_destination_unique'
);
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'destination_travel_package'
        );
    }
};