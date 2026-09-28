<?php

namespace App\Models;

use Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

#[Fillable([
 'image_path',
 'user_image_path',
 'message',
 'rate',
 'is_active'  
])]

class Review extends Model
{
    use HasFactory, Notifiable;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array 
    {
        return [
            'image_path' => 'string',
            'message' => 'string',
            'rate' => 'string',
            'is_active' => 'boolean',
            'updated_at' => 'datetime',
        ];
    }
}
