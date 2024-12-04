<?php

namespace App\Http\Controllers;

use App\Models\Diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    public function index()
    {
        $diamonds = Diamond::all()->shuffle();
        return view('components.inventory', compact('diamonds'));
    }

    public function details($id)
    {
        $diamond = Diamond::findOrFail($id);
        return view('components.inventory', compact('diamond'));
    }
}
