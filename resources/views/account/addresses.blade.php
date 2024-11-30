<div class="container mx-auto px-6 pb-12">
    <h2 class="text-2xl font-montserrat font-semibold mb-1">My Addresses</h2>
    <p class="text-gray-600 font-montserrat mb-8 text-sm">The following addresses will be used on the checkout page by default.</p>

    <div class="grid grid-cols-2 gap-12">
        <!-- Shipping Address -->
        <div class="bg-white rounded shadow-sm p-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-xl font-montserrat font-semibold">Shipping Address</h3>
                <a href="javascript:void(0)" onclick="loadPage('/edit-shipping-address')" class="text-sm text-gray-600 font-montserrat font-medium hover:text-dark-purple transition-colors duration-300">Edit</a>
            </div>
            <div id="shipping-address" class="text-gray-600">
                <p class="font-montserrat text-sm">No shipping address saved yet.</p>
            </div>
        </div>

        <!-- Billing Address -->
        <div class="bg-white rounded shadow-sm p-6">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-xl font-montserrat font-semibold">Billing Address</h3>
                <a href="javascript:void(0)" onclick="loadPage('/edit-billing-address')" class="text-sm text-gray-600 font-montserrat font-medium hover:text-dark-purple transition-colors duration-300">Edit</a>
            </div>
            <div id="billing-address" class="text-gray-600">
                <p class="font-montserrat text-sm">No billing address saved yet.</p>
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
