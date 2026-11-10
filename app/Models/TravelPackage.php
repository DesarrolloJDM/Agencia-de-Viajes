<?php

namespace App\Models;

use Database\Factories\TravelPackageFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable([
    'supplier_id',
    'created_by',
    'origin_city_id',
    'first_destination_id',
    'last_destination_id',
    'code',
    'name',
    'slug',
    'scope',
    'travel_type',
    'days',
    'nights',
    'description',
    'price_from',
    'taxes_from',
    'currency',
    'room_type',
    'includes_flight',
    'valid_from',
    'valid_until',
    'image_path',
    'pdf_path',
    'status',
    'published_at',
])]
class TravelPackage extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'price_from' => 'decimal:2',
            'taxes_from' => 'decimal:2',
            'includes_flight' => 'boolean',
            'valid_from' => 'date',
            'valid_until' => 'date',
            'published_at' => 'datetime',
        ];
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function originCity(): BelongsTo
    {
        return $this->belongsTo(
            Destination::class,
            'origin_city_id'
        );
    }

    public function firstDestination(): BelongsTo
    {
        return $this->belongsTo(
            Destination::class,
            'first_destination_id'
        );
    }

    public function lastDestination(): BelongsTo
    {
        return $this->belongsTo(
            Destination::class,
            'last_destination_id'
        );
    }

    public function visitedDestinations(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class)
            ->withPivot('sort_order')
            ->withTimestamps()
            ->orderByPivot('sort_order');
    }
}