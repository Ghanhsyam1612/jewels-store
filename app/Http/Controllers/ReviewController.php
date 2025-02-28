<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GooglePlacesHelper;
use Stripe\Review;

class ReviewController extends Controller
{
    public function showReviews()
    {
        $placeId = "ChIJsZZP4HHSpgoRIPWvyKLfzZE";
        $reviews = GooglePlacesHelper::getReviews($placeId);
        
dump($reviews);

        return view('reviews', ['reviews' => $reviews['result']['reviews'] ?? []]);
    }
}
