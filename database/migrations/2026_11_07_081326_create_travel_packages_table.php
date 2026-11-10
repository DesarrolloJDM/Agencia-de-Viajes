<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('supplier_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('origin_city_id')
                ->nullable()
                ->constrained('destinations')
                ->restrictOnDelete();

            $table->foreignId('first_destination_id')
                ->nullable()
                ->constrained('destinations')
                ->restrictOnDelete();

            $table->foreignId('last_destination_id')
                ->nullable()
                ->constrained('destinations')
                ->restrictOnDelete();

            $table->string('code', 50)->unique();
            $table->string('name');
            $table->string('slug')->unique();

            // nacional o internacional
            $table->string('scope', 30);

            // circuito, crucero, vacacional o excursion
            $table->string('travel_type', 30);

            $table->unsignedSmallInteger('days');
            $table->unsignedSmallInteger('nights');

            $table->text('description');

            $table->decimal('price_from', 12, 2);
            $table->decimal('taxes_from', 12, 2)
                ->nullable();

            $table->string('currency', 3)->default('USD');
            $table->string('room_type', 100)->nullable();

            $table->boolean('includes_flight')->default(false);

            $table->date('valid_from');
            $table->date('valid_until');

            $table->string('image_path')->nullable();
            $table->string('pdf_path')->nullable();

            // draft, published o archived
            $table->string('status', 30)->default('draft');
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index('status');
            $table->index('travel_type');
            $table->index('scope');
            $table->index('valid_until');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};