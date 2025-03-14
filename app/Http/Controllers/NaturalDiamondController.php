<?php

namespace App\Http\Controllers;

use App\Models\NaturalDiamond;
use Illuminate\Http\Request;

class NaturalDiamondController extends Controller
{
    public function index(Request $request)
    {
        $query = NaturalDiamond::query();

        // Filter by shape if provided
        if ($request->has('shape') && $request->shape) {
            $query->where('shape', $request->shape);
        }

        // Filter by price range
        if ($request->filled('minPrice') && $request->filled('maxPrice')) {
            $query->whereBetween('original_price', [(int)$request->minPrice, (int)$request->maxPrice]);
        }


        // Filter by Carat Range
        if ($request->filled('minCarat') && $request->filled('maxCarat')) {
            $query->whereBetween('carat', [(float)$request->minCarat, (float)$request->maxCarat]);
        }

        // Filter by Cut Range
        if ($request->filled('fromCutSlider') && $request->filled('toCutSlider')) {
            $query->whereBetween('cut', [(int)$request->fromCutSlider, (int)$request->toCutSlider]);
        }

        // Filter by Color Range
        if ($request->filled('fromColorSlider') && $request->filled('toColorSlider')) {
            $query->whereBetween('color', [(int)$request->fromColorSlider, (int)$request->toColorSlider]);
        }

        // Filter by Clarity Range
        if ($request->filled('fromClaritySlider') && $request->filled('toClaritySlider')) {
            $query->whereBetween('clarity', [(int)$request->fromClaritySlider, (int)$request->toClaritySlider]);
        }

        // Filter by Certificate (IGI, GIA, HRD, etc. [Lab] )
        if ($request->filled('lab') && !empty($request->lab)) {
            $query->where('lab', $request->lab);
        }


        // Filter by Table
        if ($request->filled('table_min') && $request->filled('table_max')) {
            $query->whereBetween('table', [(int)$request->table_min, (int)$request->table_max]);
        }

        // Filter by Depth
        if ($request->filled('depth_min') && $request->filled('depth_max')) {
            $query->whereBetween('depth', [(int)$request->depth_min, (int)$request->depth_max]);
        }


        // Filter by Ratio
        if ($request->filled('l_w_ratio_min') && $request->filled('l_w_ratio_max')) {
            $query->whereBetween('ratio', [(int)$request->l_w_ratio_min, (int)$request->l_w_ratio_max]);
        }

        // Filter by Search
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('original_price', 'like', '%' . $search . '%')
                    ->orWhere('carat', 'like', '%' . $search . '%')
                    ->orWhere('cut', 'like', '%' . $search . '%')
                    ->orWhere('shape', 'like', '%' . $search . '%')
                    ->orWhere('color', 'like', '%' . $search . '%')
                    ->orWhere('clarity', 'like', '%' . $search . '%')
                    ->orWhere('lab', 'like', '%' . $search . '%');

                $q->orWhereRaw("soundex(original_price) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(carat) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(cut) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(shape) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(color) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(clarity) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(lab) = soundex(?)", [$search]);
            });
        }



        // Check if the request is for loading more diamonds
        if ($request->ajax()) {
            $diamonds = $query->inRandomOrder()->paginate(10);
            $view = view('components.natural_diamond_rows', compact('diamonds'))->render();
            return response()->json([
                'html' => $view,
                'hasMorePages' => $diamonds->hasMorePages()
            ]);
        }

        // Default view rendering
        $diamonds = $query->inRandomOrder()->paginate(10);
        return view('components.natural-diamond', compact('diamonds'));
    }

    public function details($id)
    {
        $diamond = NaturalDiamond::findOrFail($id);
        return view('components.natural-diamond', compact('diamond'));
    }
}
