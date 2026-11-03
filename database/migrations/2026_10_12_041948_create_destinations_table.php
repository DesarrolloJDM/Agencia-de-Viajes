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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();

            // Relacion consigo misma: Roma pertenece a Italia
            $table->foreignId('parent_id')->nullable()->constrained('destinations')->nullOnDelete();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name', 150)->unique();
            $table->string('slug', 180)->unique();
            $table->string('type', 30);
            $table->text('description')->nullable();

            $table->string('image_path')->nullable();
            $table->string('pdf_path')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
        
            $table->timestamps();

            $table->index(['type', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
