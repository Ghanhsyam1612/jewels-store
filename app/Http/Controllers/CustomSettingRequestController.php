<?php

namespace App\Http\Controllers;

use App\Models\CustomSettingRequest;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class CustomSettingRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'     => 'required|string|max:255',
            'last_name'      => 'required|string|max:255',
            'mobile'         => 'required|string|max:20',
            'email'          => 'required|email|max:255',
            'reference_url'  => 'nullable|url|max:500',
            'photos.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // each photo max 2MB
            'details'        => 'required|string',
        ]);

        $photoPaths = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoPaths[] = $photo->store('custom-requests', 'public'); // saves in storage/app/public/custom-requests
            }
        }

        $validated['photos'] = $photoPaths;

        CustomSettingRequest::create($validated);

        Toastr::success('Your custom setting request has been submitted successfully!', 'Success');

        return redirect()->back();

    }
}
