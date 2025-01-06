<?php

namespace App\Http\Controllers;

use App\Models\Diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    public function index(Request $request)
    {
        $query = Diamond::query();

        // Filter by shape if provided
        if ($request->has('shape') && $request->shape) {
            $query->where('shape', $request->shape);
        }

        // // Filter by price range
        // if($request->filled('minPrice') && $request->filled('maxPrice')){
        //     $query->whereBetween('original_price', [$request->min_price, $request->max_price]);
        // }

        // Filter by Carat Range
        if ($request->filled('min_carat') && $request->filled('max_carat')) {
            $query->whereBetween('carat', [$request->min_carat, $request->max_carat]);
        }


        // Filter by cut range
        if ($request->has('fromCutSlider') && $request->has('toCutSlider')) {
            $query->whereBetween('cut', [$request->fromCutSlider, $request->toCutSlider]);
        }


        $diamonds = $query->get()->shuffle()->take(10);
        // $diamonds = $query->inRandomOrder()->paginate(10);

        return view('components.inventory', compact('diamonds'));
    }

    public function details($id)
    {
        $diamond = Diamond::findOrFail($id);
        return view('components.inventory', compact('diamond'));
    }
}
