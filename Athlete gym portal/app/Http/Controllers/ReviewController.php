<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    public function addReview(Request $request) {
        $formFields = $request->validate([
            'comment' => 'required'
            
        ]);
        $formFields['user_id'] = Auth::user()->id;
        Review::create($formFields);

        return redirect('/home')->with('notification', "You successfully added a new review. Please wait for an Administrator's approval for it the be featued in our Community Posts section");
    }

    public function updateReviewChanges(Review $review, Request $request){

        $formFields = $request->validate([
            'isFeatured' => 'required'
        ]);
        $notification = $formFields['isFeatured'] == "1" ? "featured" : "unfeatured";
        $review->update($formFields);
        return redirect('/manage-reviews')->with('notification', 'You successfully ' . $notification . ' the review of user, ' . $review->user['name']);
    }

    public function deleteReview(Review $review){
        $review->delete();
        return redirect('/manage-reviews')->with('notification', 'You successfully deleted the review of user, ' . $review->user['name']);
    }   
}
