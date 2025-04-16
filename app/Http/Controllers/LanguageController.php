<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $request->validate(['lang' => 'required|in:en,fr,ar,es']);
        Session::put('locale', $request->lang);
        return response()->json(['status' => 'success']);
    }
}
