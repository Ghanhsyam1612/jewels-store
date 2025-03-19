<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class ADMINSubscriptionPlanController extends Controller
{
    // Display all subscription plans
    public function index(Request $request)
    {
        $query = SubscriptionPlan::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('stripe_product_id', 'like', "%{$search}%");
        }

        $sortColumn = $request->input('sort', 'created_at');
        $sortDirection = $request->input('direction', 'desc');
        $query->orderBy($sortColumn, $sortDirection);

        $subscriptionPlans = $query->paginate(10);

        return view('admin.subscription.index', compact('subscriptionPlans', 'sortColumn', 'sortDirection'));
    }

    // Show create form
    public function create()
    {
        return view('admin.subscription.create');
    }

    // Store new subscription plan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'stripe_product_id' => 'required|string|max:255',
            'stripe_price_id_monthly' => 'nullable|string|max:255',
            'stripe_price_id_yearly' => 'nullable|string|max:255',
            'monthly_price' => 'nullable|numeric|min:0',
            'yearly_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $validated['features'] = $request->features ? json_encode(explode(',', $request->features)) : null;

        SubscriptionPlan::create($validated);

        return redirect()->route('admin.subscription.index')
            ->with('success', 'Subscription plan created successfully');
    }

    // Show single subscription plan
    public function show($id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        return view('admin.subscription.view', compact('subscriptionPlan'));
    }

    // Show edit form
    public function edit($id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        return view('admin.subscription.edit', compact('subscriptionPlan'));
    }

    // Update subscription plan
    public function update(Request $request, $id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'stripe_product_id' => 'required|string|max:255',
            'stripe_price_id_monthly' => 'nullable|string|max:255',
            'stripe_price_id_yearly' => 'nullable|string|max:255',
            'monthly_price' => 'nullable|numeric|min:0',
            'yearly_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $validated['features'] = $request->features ? json_encode(explode(',', $request->features)) : null;

        $subscriptionPlan->update($validated);

        return redirect()->route('admin.subscription.plan')
            ->with('success', 'Subscription plan updated successfully');
    }

    // Delete subscription plan
    public function destroy($id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        $subscriptionPlan->delete();

        return redirect()->route('admin.subscription.plan')
            ->with('success', 'Subscription plan deleted successfully');
    }


}
