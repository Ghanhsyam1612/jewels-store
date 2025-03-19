<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;
class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create subscription plans
         $plans = [
            [
                'id' => 1,
                'name' => 'Silver',
                'stripe_product_id' => 'prod_RyFXe6Cl7RcgLO', // Replace with your actual Stripe product ID
                'stripe_price_id_monthly' => 'price_1R4J2WF5d516MOxCrdMpGO2y', // Replace with your actual Stripe price ID
                'stripe_price_id_yearly' => 'price_1R4J2WF5d516MOxCfb6k8Uxr', // Replace with your actual Stripe price ID
                'monthly_price' => 9.99,
                'yearly_price' => 99.99,
                'description' => 'Basic plan with essential features',
                'features' => json_encode([
                    '5% Discount on All Purchases',
                    'Free Shipping',
                    'Birthday Special Offer',
                    'Exclusive Member-Only Promotions',
                    'Access to Exclusive Content',
                    'Quarterly Newsletter',
                    'Priority Customer Support',
                    'Basic Jewelry Care Guide'
                ]),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Gold',
                'stripe_product_id' => 'prod_gold', // Replace with your actual Stripe product ID
                'stripe_price_id_monthly' => 'price_gold_monthly', // Replace with your actual Stripe price ID
                'stripe_price_id_yearly' => 'price_gold_yearly', // Replace with your actual Stripe price ID
                'monthly_price' => 19.99,
                'yearly_price' => 199.99,
                'description' => 'Premium plan with additional features',
                'features' => json_encode([
                    'All Silver features',
                    '10% Discount on All Purchases',
                    'Priority Customer Service',
                    'Early Access to New Collections',
                    'Free Annual Jewelry Cleaning',
                    'Monthly Member Events',
                    'Free Shipping',
                    'Extended Warranty Coverage'
                ]),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Platinum',
                'stripe_product_id' => 'prod_platinum', // Replace with your actual Stripe product ID
                'stripe_price_id_monthly' => 'price_platinum_monthly', // Replace with your actual Stripe price ID
                'stripe_price_id_yearly' => 'price_platinum_yearly', // Replace with your actual Stripe price ID
                'monthly_price' => 29.99,
                'yearly_price' => 299.99,
                'description' => 'Premium plan with all features',
                'features' => json_encode([
                    '15% Discount on All Purchases',
                    'Personal Shopping Assistant',
                    'Exclusive VIP Events Access',
                    'Complimentary Appraisal Services',
                    'Private Shopping Hours',
                    'Unlimited Jewelry Cleaning',
                    'Custom Design Consultations',
                    'Free Shipping',
                ]),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($plans as $plan) {
            SubscriptionPlan::updateOrCreate(
                ['stripe_product_id' => $plan['stripe_product_id']],
                $plan
            );
        }
    }
}
