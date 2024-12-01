<div class="container mx-auto px-6 pb-12">
    <h2 class="text-2xl font-montserrat font-semibold mb-1">My Addresses</h2>
    <p class="text-gray-600 font-montserrat mb-8 text-sm">The following addresses will be used on the checkout page by default.</p>

    <div class="grid grid-cols-2 gap-12">
        <!-- Shipping Address -->
        <div class="bg-white rounded shadow-sm p-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-xl font-montserrat font-semibold">Shipping Address</h3>
                <a href="javascript:void(0)" onclick="loadPage('/shipping-address')" class="text-sm text-gray-600 font-montserrat font-medium hover:text-dark-purple transition-colors duration-300">Edit</a>
            </div>
            <!-- Display Current Shipping Address -->
            <div id="billing-address" class="text-gray-600">
                <!-- Display Current Billing Address -->
                @if ($shippingAddress)
                <div class="mb-4">
                    <p class="text-lg font-semibold mb-2">
                        {{ $shippingAddress->customers->first()->first_name }} {{ $shippingAddress->customers->first()->last_name }}
                    </p>
                    <p class="text-gray-600">
                        {{ $shippingAddress->address_line_1 }}
                        <br>
                        @if ($shippingAddress->address_line_2)
                        {{ $shippingAddress->address_line_2 }}<br>
                        @endif
                        {{ $shippingAddress->city->name }} {{ $shippingAddress->zip_code }}
                        <br>
                        {{ $shippingAddress->state->name }}, {{ $shippingAddress->country->name }}
                    </p>
                    <div class="mt-2">
                        <form action="{{ route('account.addresses.setDefault', $shippingAddress->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm text-blue-600 hover:underline">Set as Default</button>
                        </form>
                        <form action="{{ route('account.addresses.destroy', $shippingAddress->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
                @else
                <p class="font-montserrat text-sm">No shipping addresses saved yet.</p>
                @endif
            </div>
        </div>


        <!-- Billing Address -->
        <div class="bg-white rounded shadow-sm p-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-xl font-montserrat font-semibold">Billing Address</h3>
                <a href="javascript:void(0)" onclick="loadPage('/billing-address')" class="text-sm text-gray-600 font-montserrat font-medium hover:text-dark-purple transition-colors duration-300">Edit</a>
            </div>
            <div id="billing-address" class="text-gray-600">
                <!-- Display Current Billing Address -->
                @if ($billingAddress)
                <div class="mb-4">
                    <p class="text-lg font-semibold mb-2">
                        {{ $billingAddress->customers->first()->first_name }} {{ $billingAddress->customers->first()->last_name }}
                    </p>
                    <p class="text-gray-600">
                        {{ $billingAddress->address_line_1 }}
                        <br>
                        @if ($billingAddress->address_line_2)
                        {{ $billingAddress->address_line_2 }}<br>
                        @endif
                        {{ $billingAddress->city->name }} {{ $billingAddress->zip_code }}
                        <br>
                        {{ $billingAddress->state->name }}, {{ $billingAddress->country->name }}
                    </p>
                    <div class="mt-2">
                        <form action="{{ route('account.addresses.setDefault', $billingAddress->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm text-blue-600 hover:underline">Set as Default</button>
                        </form>
                        <form action="{{ route('account.addresses.destroy', $billingAddress->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
                @else
                <p class="font-montserrat text-sm">No billing addresses saved yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    function loadPage(url) {
        // const url = type === 'shipping' ? '/edit-shipping-address' : '/edit-billing-address';
        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.getElementById('content').innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading address form:', error);
            });
    }
</script>