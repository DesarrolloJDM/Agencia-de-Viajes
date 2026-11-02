<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Enums\ReviewStatus;

class UserReviewController extends Controller
{
    public function index(): View
    {
        //$reviews = Review::query()->latest()->paginate(10);
        // $reviews = Review::all();
        $reviews = $this->getAcceptedReviews();
        return view('components.public.reviews', compact('reviews'));
    }

    public static function getPendingReviews() 
    {
        return Review::query()->latest()->where('status', ReviewStatus::Pending)->get();
    }

    public static function getAcceptedReviews() 
    {
        return Review::query()->latest()->where('status', ReviewStatus::Accepted)->get();
    }

    public static function getRejectedReviews() 
    {
        return Review::query()->latest()->where('status', ReviewStatus::Rejected)->get();
    }

    public function addReview(Request $request)
    {
        $validated = $request->validate([
            'username' => ['nullable', 'string', 'max:100'],
            'comment' => ['nullable', 'string', 'max:255'],
            'rate' => ['nullable', 'string', 'max:5'],
        ]);

        Review::create($validated);

        return back()->with('success', 'Review created!');
    }

}
