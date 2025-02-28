<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class GooglePlacesHelper
{
    public static function getReviews($placeId)
    {
        $apiKey = env('GOOGLE_PLACES_API_KEY');
        $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid={$placeId}&fields=reviews&key={$apiKey}";

        $response = Http::get($url);
        return $response->json();
    }
}
