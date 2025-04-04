@foreach ($diamonds as $diamond)
<tr class="border-b cursor-pointer" onclick="toggleDetails({{ $diamond->id }})">
    <td class="py-4 flex flex-row gap-2 items-center text-sm font-montserrat">
        <span class="pb-1 font-medium">{{ $diamond->shape }}</span>
        <span class="text-xs text-red-600 uppercase pb-1">Sale</span>
    </td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->carat }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->cut }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->color }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->clarity }}</td>
    <td class="py-4 text-sm font-montserrat">
        {{-- <span class="text-gray-600 line-through text-xs">${{ $diamond->mrp }}</span> --}}
        <span class="text-red-600">${{ $diamond->original_price }}</span>
    </td>
    <td class="py-4">
        <button class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary transition-all duration-300">View More</button>
    </td>
</tr>

<tr id="details-{{ $diamond->id }}" class="content hidden transition-all duration-200 ease-in-out max-h-0 overflow-hidden opacity-0">
    <td colspan="7" class="relative">
        <button onclick="toggleDetails({{ $diamond->id }})"
            class="absolute right-4 top-4 text-gray-500 hover:text-primary">
            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="grid grid-cols-2 gap-8 my-10">
            <!-- Left Side -->
            <div class="flex flex-col items-center gap-3">
                <div class="flex items-center justify-center">
                    <img src="{{ asset($diamond->image_link) }}" class="w-40"
                        alt="{{ $diamond->name }}">
                </div>

                <div class="text-center">
                    <p class="text-2xl font-montserrat font-semibold text-gray-800">
                        {{ ucwords($diamond->name) }}
                    </p>
                    <div class="mt-1">
                        {{-- <span
                            class="text-gray-600 line-through text-lg font-montserrat font-medium">${{ $diamond->mrp }}</span> --}}
                        <span
                            class="text-xl ml-1 font-montserrat font-semibold">${{ $diamond->original_price }}</span>
                    </div>
                </div>
                <div class="flex gap-4 justify-center mt-2">
                    <form action="{{ route('cart.add') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $diamond->id }}">
                        <input type="hidden" name="name"
                            value="{{ $diamond->name }}">
                        <input type="hidden" name="shape"
                            value="{{ $diamond->shape }}">
                        <input type="hidden" name="original_price"
                            value="{{ $diamond->original_price }}">
                        <input type="hidden" name="carat"
                            value="{{ $diamond->carat }}">
                        <input type="hidden" name="cut" value="{{ $diamond->cut }}">
                        <input type="hidden" name="color"
                            value="{{ $diamond->color }}">
                        <input type="hidden" name="clarity"
                            value="{{ $diamond->clarity }}">
                        <input type="hidden" name="images"
                            value="{{ $diamond->images }}">
                        <input type="hidden" name="size"
                            value="{{ $diamond->size }}">
                        <input type="hidden" name="sku" value="{{ $diamond->sku }}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="mrp" value="{{ $diamond->mrp }}">
                        <button
                            class="px-6 py-2.5 bg-primary text-sm text-white rounded-sm hover:bg-white hover:text-primary transition-colors flex items-center font-montserrat border border-primary gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            Add to Bag
                        </button>
                    </form>
                    @if ($diamond->video_url)
                    <a href="{{ asset($diamond->video_url) }}" target="_blank">
                        <button
                            class="px-6 py-2.5 text-sm border border-primary text-primary  rounded-sm hover:bg-primary hover:text-white transition-colors flex items-center font-montserrat gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Play Video
                        </button>
                    </a>
                    @endif
                </div>

                <a href="#"
                    class="text-primary underline-offset-2 underline hover:text-blue-800 text-center mt-1 text-xs font-montserrat font-bold">
                    View Diamond Certificate
                </a>

                <span class="text-xs text-gray-500 mt-1 font-montserrat ">Diamond photo is for
                    visual purposes only. Play Video for a real diamond.</span>
            </div>

            <!-- Right Side -->
            <div>
                <h3 class="text-lg font-montserrat font-semibold uppercase mb-4">Diamond
                    Details</h3>
                <table class="w-full">
                    <tbody>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Carat</td>
                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->carat }}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Size (mm)</td>
                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->size }} mm</td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Cut</td>
                            <td class="py-2">
                                <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->cut }}</span>
                                <span class="font-montserrat text-sm text-gray-500">{{ $diamond->cut_description }}</span>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Color</td>
                            <td class="py-2">
                                <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->color }}</span>
                                <span class="font-montserrat text-sm text-gray-500">{{ $diamond->color_description }}</span>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Clarity</td>
                            <td class="py-2">
                                <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->clarity }}</span>
                                <span class="font-montserrat text-sm text-gray-500">{{ $diamond->clarity_description }}</span>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">In The Box</td>
                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">Diamond, {{$diamond->lab}} Certificate.</td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Table & Depth</td>
                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->table }} & {{$diamond->depth}}%
                                <br>
                                <span class="text-xs text-gray-500 lowercase">
                                    (table)
                                    & (depth)
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Growth Type</td>
                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->growth_type }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </td>
</tr>
@endforeach