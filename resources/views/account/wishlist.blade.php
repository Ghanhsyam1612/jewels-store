<div class="container mx-auto bg-white p-6 rounded shadow-sm">
    <h2 class="text-xl font-semibold mb-6 flex items-center"><i class="fas fa-heart mr-3"></i>Wishlist</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-6 text-center font-montserrat">Product Name</th>
                    <th class="py-3 px-6 text-center font-montserrat">Price</th>
                    <th class="py-3 px-6 text-center font-montserrat">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($wishlistProducts) && count($wishlistProducts) > 0)
                    @foreach($wishlistProducts as $item)
                    @php
                        $product = $item['product'] ?? null;
                    @endphp
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4">
                            <div class="flex items-center gap-4">
                                <img src="{{ $product->image_link ?? asset('/images/placeholder.jpg') }}" 
                                    alt="Product Image" 
                                    class="w-20 h-20 object-cover rounded-md shadow-sm">
                                <span class="font-montserrat">{{ $product->name ?? 'N/A' }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6 font-semibold font-montserrat">
                            {{ $product->original_price ? '$' . number_format($product->original_price, 2) : 'N/A' }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex gap-3">
                                <a href="{{ isset($product->id) ? route('cart.index', ['type' => strtolower($item['type'] ?? ''), 'id' => $product->id]) : '#' }}" 
                                   class="bg-black text-white text-sm font-montserrat uppercase py-2 px-5 hover:bg-gray-800 transition-colors duration-300">
                                    Buy
                                </a>
                                <form action="{{ route('wishlist.remove', $item['wishlist_id'] ?? 0) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-500 hover:text-red-500 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center py-8">
                            <div>
                                <p class="text-gray-600">Your wishlist is empty.</p>
                                <div class="mt-6">
                                    <a href="#" class="bg-primary text-white px-6 py-2 rounded hover:bg-gray-800 transition-all inline-flex items-center">
                                        <i class="fas fa-shopping-cart mr-2"></i> Discover Products
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
