
    <div class="container mx-auto px-6 pb-12">
        <h2 class="text-2xl font-montserrat font-semibold mb-8">My Wishlist</h2>

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
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4">
                            <div class="flex items-center gap-4">
                                <img src="/images/1.jpg" alt="Product Image" class="w-1/6 object-cover">
                                <span class="font-montserrat">Diamond Ring</span>
                            </div>
                        </td>
                        <td class="py-4 px-6 font-semibold font-montserrat">
                            100
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex gap-3">
                                <button class="bg-black text-white text-sm font-montserrat uppercase py-2 px-5 hover:bg-gray-800 transition-colors duration-300">
                                    Buy
                                </button>
                                <button class="p-2 text-gray-500 hover:text-red-500 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center py-8">
                            {{-- <p class="text-gray-500 font-montserrat">Your wishlist is empty</p> --}}
                            <a href="#" class="inline-block mt-4 bg-black text-white text-sm font-montserrat uppercase py-2 px-6 hover:bg-gray-800 transition-colors duration-300">
                                Browse More Products
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
