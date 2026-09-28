<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserReviewController extends Controller
{
    public function index(): View
    {
        $reviews = Review::query()->latest()->paginate(10);

        return view('components.public.reviews', [
            'reviews' => $reviews
        ]);
    }

}
