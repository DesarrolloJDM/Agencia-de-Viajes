<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'email',
    'phone',
    'street',
    'street_number',
    'postal_code',
    'city',
    'state',
    'facebook_url',
    'instagram_url',
    'tiktok_url',
    'whatsapp_url',
    'google_maps_url',
    'logo_path',
])]


class Setting extends Model
{
    //
}
