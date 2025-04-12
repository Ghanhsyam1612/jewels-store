<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $subscriptionPlan = SubscriptionPlan::where('is_active', true)->get();
        return view('components.membership', compact('subscriptionPlan'));
    }
}