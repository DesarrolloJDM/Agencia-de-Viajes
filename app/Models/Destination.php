<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'parent_id',
    'created_by',
    'name',
    'slug',
    'type',
    'description',
    'image_path',
    'pdf_path',
    'is_featured',
    'is_active',
])]

class Destination extends Model
{
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    // Destino al que pertenece
    // Ejemplo: Roma pertenece a Italia
    public function parent(): BelongsTo 
    {
        return $this->belongsTo(
            Destination::class,
            'parent_id'
        );
    }

    // Destinos que pertenecen a este destino
    // Ejemplo: Italia contiene Roma, Florencia y Venecia
    public function children(): HasMany 
    {
        return $this->hasMany(
            Destination::class,
            'parent_id'
        );
    }

    // Usuario que creo el destino
    public function creator(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'created_by'
        );
    }

    public function travelPackages(): BelongsToMany
    {
        return $this->belongsToMany(TravelPackage::class)
            ->withPivot('sort_order')
            ->withTimestamps();
    }

public function packagesOriginatingHere(): HasMany
{
    return $this->hasMany(
        TravelPackage::class,
        'origin_city_id'
    );
}
}
