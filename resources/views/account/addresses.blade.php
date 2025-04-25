<div class="container mx-auto bg-white p-6 rounded shadow-sm">
    <h2 class="text-xl font-semibold mb-2 flex items-center"><i class="fas fa-map-marker-alt mr-3"></i>Addresses</h2>
    <p class="text-gray-600 font-montserrat mb-8 text-sm">The following addresses will be used on the checkout page by default.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="border border-gray-200 rounded p-4">
            <h3 class="font-semibold mb-2">Billing Address</h3> 
            <div id="billing-address" class="text-gray-600">
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
                <p class="text-gray-600 mb-5">No billing address has been set up yet.</p>
                @endif
            </div>
            <a href="javascript:void(0)" onclick="loadPage('/billing-address')" class="mt-4 text-black border border-black px-4 py-2 rounded hover:bg-black hover:text-white transition-all">
                Edit
            </a>
        </div>
        <div class="border border-gray-200 rounded p-4">
            <h3 class="font-semibold mb-2">Shipping Address</h3>
            <div id="shipping-address" class="text-gray-600">
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
                <p class="text-gray-600 mb-5">No shipping address has been set up yet.</p>
                @endif
            </div>
            <a href="javascript:void(0)" onclick="loadPage('/shipping-address')" class="mt-4 text-black border border-black px-4 py-2 rounded hover:bg-black hover:text-white transition-all">
                Edit
            </a>
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