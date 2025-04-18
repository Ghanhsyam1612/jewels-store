@extends('layouts.master')

@section('content')
<div class="w-full py-5">
    <h1 class="text-3xl font-bold mb-6">Customer Reviews</h1>
    @if(isset($reviews) && is_array($reviews) && count($reviews) > 0)
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($reviews as $review)
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-1">
                            <h3 class="font-semibold text-lg">{{ $review['author_name'] }}</h3>
                            <div class="flex items-center">
                                <div class="text-yellow-400">
                                    @for($i = 0; $i < $review['rating']; $i++)
                                        ⭐
                                    @endfor
                                </div>
                                <span class="ml-2 text-gray-600">({{ $review['rating'] }})</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-3">{{ $review['text'] }}</p>
                    <div class="text-sm text-gray-500">{{ $review['relative_time_description'] }}</div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-8">
            <p class="text-gray-600">No reviews available at the moment.</p>
        </div>
    @endif
</div>
@endsection


<!-- - Make sure your Google Places API key is valid and has the proper permissions enabled in the Google Cloud Console.
- Verify that the Place ID is correct for your business. You can find your Place ID using the Google Places API Place ID Finder .
- Enable these APIs in Google Cloud Console:

- Places API
- Maps JavaScript API
- Places Details API
- Check the logs after implementing these changes by looking at storage/logs/laravel.log to see if there are any specific errors.
 -->
