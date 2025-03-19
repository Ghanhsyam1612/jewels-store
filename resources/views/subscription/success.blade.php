<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - Roaya Diamond Membership</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include SweetAlert2 via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .card {
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #1e40af;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1e3a8a;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-lg w-full mx-4 p-6 card rounded-lg">
        <!-- Header -->
        <div class="text-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Roaya Diamond Logo" class="h-12 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Payment Successful!</h1>
            <p class="text-gray-600 mt-2">Thank you for joining the Roaya Diamond Membership!</p>
        </div>

        <!-- Subscription Details -->
        <div class="bg-gray-50 p-4 rounded-lg mb-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Your Subscription Details</h2>
            <div class="space-y-2">
                <p class="flex justify-between">
                    <span class="text-gray-600">Plan:</span>
                    <span class="font-medium text-gray-800">{{ $plan->name }}</span>
                </p>
                <p class="flex justify-between">
                    <span class="text-gray-600">Billing Cycle:</span>
                    <span class="font-medium text-gray-800">{{ ucfirst($subscription->billing_cycle) }}</span>
                </p>
                <p class="flex justify-between">
                    <span class="text-gray-600">Amount:</span>
                    <span class="font-medium text-gray-800">${{ number_format($subscription->amount, 2) }}</span>
                </p>
                <p class="flex justify-between">
                    <span class="text-gray-600">Next Billing Date:</span>
                    <span class="font-medium text-gray-800">
                        {{ \Carbon\Carbon::parse($subscription->current_period_end)->format('F j, Y') }}
                    </span>
                </p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <p class="text-gray-600 mb-4">You’re all set to enjoy the exclusive benefits of your membership!</p>
            <a href="{{ route('subscription.manage') }}"
               class="inline-block btn-primary text-white font-medium py-2 px-6 rounded-lg">
                Manage Your Subscription
            </a>
            <a href="{{ route('subscription.plans') }}"
               class="inline-block text-gray-600 font-medium py-2 px-6 rounded-lg hover:underline mt-2">
                Back to Plans
            </a>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-gray-500 text-sm">
                Need help? <a href="{{ route('contact.support') }}" class="text-blue-600 hover:underline">Contact Support</a>
            </p>
        </div>
    </div>

    <!-- SweetAlert2 Success Popup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Payment Successful!',
                text: 'Your payment has been processed successfully.',
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
            });
        });
    </script>
</body>
</html>