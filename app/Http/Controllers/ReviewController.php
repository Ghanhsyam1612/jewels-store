<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GooglePlacesHelper;

class ReviewController extends Controller
{
    public function showReviews()
    {
        try {
            $placeId = "ChIJsZZP4HHSpgoRIPWvyKLfzZE"; // Verify this is your correct Place ID
            $reviews = GooglePlacesHelper::getReviews($placeId);
            
            // Add debugging
            \Log::info('Google Places API Response:', ['response' => $reviews]);
            
            if (!isset($reviews['result']['reviews'])) {
                \Log::error('Reviews not found in response. Full response:', ['response' => $reviews]);
                return view('components.reviews', ['reviews' => []]);
            }

            // Add debugging
            \Log::info('Number of reviews found:', ['count' => count($reviews['result']['reviews'])]);
            
            return view('components.reviews', ['reviews' => $reviews['result']['reviews']]);
        } catch (\Exception $e) {
            \Log::error('Error in showReviews: ' . $e->getMessage());
            return view('components.reviews', ['reviews' => []]);
        }
    }
}
