<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Enums\ReviewStatus;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Public\UserReviewController;

class AdminReviewController extends Controller
{
    public function index(): View
    {
        $totalReviews = $this->getTotalCount();
        $totalPendingReviews = $this->getPendingCount();
        $totalAcceptedReviews = $this->getAcceptedCount();
        $totalRejectedReviews = $this->getRejectedCount();
        $PendingReviews = UserReviewController::getPendingReviews();
        $AcceptedReviews = UserReviewController::getAcceptedReviews();
        $RejectedReviews = UserReviewController::getRejectedReviews();
        return view('admin.reviews', compact(
            'totalReviews', 
            'totalPendingReviews', 
            'totalAcceptedReviews', 
            'totalRejectedReviews',
            'PendingReviews',
            'AcceptedReviews',
            'RejectedReviews'
            ));  
    }

    private function getTotalCount()
    {
        return Review::all()->count();
    }

    private function getPendingCount()
    {
        return Review::query()->where('status', ReviewStatus::Pending)->get()->count();
    }

    private function getAcceptedCount()
    {
        return Review::query()->where('status', ReviewStatus::Accepted)->get()->count();
    }

    private function getRejectedCount()
    {
        return Review::query()->where('status', ReviewStatus::Rejected)->get()->count();
    }

    public function changeStatus(Request $request, $id)
    {
        $action = $request->input('action');
        $review = Review::find($id);
        $review->update(['status' => $request->status]);
        // if ($action === 'accepted')
        // {
        //     $review->update(['status' => $request->status]);
        // }
        // else if ($action === 'rejected')
        // {
        //     $review->update(['status' => $request->status])
        // }
        return back()->with('success', 'Review updated!');
    }
}
