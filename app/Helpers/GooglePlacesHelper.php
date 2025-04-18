<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class GooglePlacesHelper
{
    public static function getReviews($placeId)
    {
        $apiKey = config('services.google.places_api_key');
        
        $response = Http::get('https://maps.googleapis.com/maps/api/place/details/json', [
            'place_id' => $placeId,
            'key' => $apiKey,
            'fields' => 'reviews,rating,user_ratings_total'
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to fetch reviews from Google Places API');
        }

        return $response->json();
    }
}
