<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Enums\ReviewStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create(
            [
                'username' => 'Jane Doe',
                'comment' => 'De las mejores agencias para viajar, excelentes precios y buen catalogo de promociones.',
                'rate' => '5',
            ],
        );
    }
}
