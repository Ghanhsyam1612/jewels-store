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

        // Filter by Method (HPHT, CVD [growth_type])
        if ($request->has('growth_type') && !empty($request->growth_type)) {
            $methods = explode(',', $request->growth_type);
            $query->whereIn('growth_type', $methods);
        }

        // Filter by Table
        if ($request->filled('table_min') && $request->filled('table_max')) {
            $query->whereBetween('table', [(int)$request->table_min, (int)$request->table_max]);
        }

        // Filter by Depth
        if ($request->filled('depth_min') && $request->filled('depth_max')) {
            $query->whereBetween('depth', [(int)$request->depth_min, (int)$request->depth_max]);
        }

        // Filter by L_W_Ratio
        if ($request->filled('l_w_ratio_min') && $request->filled('l_w_ratio_max')) {
            $query->whereBetween('l_w_ratio', [(int)$request->l_w_ratio_min, (int)$request->l_w_ratio_max]);
        }
        
        // Filter by Search
        if ($request->filled('search'))
         {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('sku', 'like', '%' . $search . '%')
                  ->orWhere('original_price', 'like', '%' . $search . '%')
                  ->orWhere('carat', 'like', '%' . $search . '%')
                  ->orWhere('cut', 'like', '%' . $search . '%')
                  ->orWhere('shape', 'like', '%' . $search . '%')
                  ->orWhere('color', 'like', '%' . $search . '%')
                  ->orWhere('clarity', 'like', '%' . $search . '%')
                  ->orWhere('lab', 'like', '%' . $search . '%')
                  ->orWhere('growth_type', 'like', '%' . $search . '%');
        
    
                $q->orWhereRaw("soundex(sku) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(original_price) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(carat) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(cut) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(shape) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(color) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(clarity) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(lab) = soundex(?)", [$search]);
                $q->orWhereRaw("soundex(growth_type) = soundex(?)", [$search]);
            });
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
