<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::firstOrCreate(
            [
                'user_id' => 1,
            ],
            [
                'image_path' => 'images/paquete-3.png',
                'user_image_path' => 'images/nosotros-1.png',
                'message' => 'La mejor experiencia en viaje, me ayudaron a organizar un viaje de ensueño, sin duda la mejor agencia.',
                'rate' => '1',
                'is_active' => 1,
            ],
        );
    }
}
