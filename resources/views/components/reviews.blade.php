@extends('layouts.master')

@section('content')
    <h1>Google Reviews</h1>
    <ul>
        @foreach($reviews as $review)
            <li>
                <strong>{{ $review['author_name'] }}</strong> ({{ $review['rating'] }} ⭐)
                <p>{{ $review['text'] }}</p>
                <small>{{ $review['relative_time_description'] }}</small>
            </li>
        @endforeach
    </ul>
@endsection

