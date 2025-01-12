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

        // Filter by price range
        if ($request->has('minPrice') && $request->has('maxPrice')) {
            $query->whereBetween('original_price', [(int)$request->minPrice, (int)$request->maxPrice]);
        }

        // Filter by Carat Range
        if ($request->has('minCarat') && $request->has('maxCarat')) {
            $query->whereBetween('carat', [$request->minCarat, $request->maxCarat]);
        }

        // Filter by cut range
        if ($request->has('fromCutSlider') && $request->has('toCutSlider')) {
            $query->whereBetween('cut', [$request->fromCutSlider, $request->toCutSlider]);
        }

        // Check if the request is for loading more diamonds
        if ($request->ajax()) {
            $diamonds = $query->inRandomOrder()->paginate(10);
            $view = view('components.diamond_rows', compact('diamonds'))->render();
            return response()->json([
                'html' => $view,
                'hasMorePages' => $diamonds->hasMorePages()
            ]);
        }

        // Default view rendering
        $diamonds = $query->inRandomOrder()->paginate(10);
        return view('components.inventory', compact('diamonds'));
    }

    public function details($id)
    {
        $diamond = Diamond::findOrFail($id);
        return view('components.inventory', compact('diamond'));
    }
}
