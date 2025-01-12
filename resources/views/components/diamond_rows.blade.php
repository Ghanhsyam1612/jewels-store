@foreach ($diamonds as $diamond)
<tr class="border-b cursor-pointer" onclick="toggleDetails({{ $diamond->id }})">
    <td class="py-4 flex flex-row gap-2 items-center text-sm font-montserrat">
        <img src="{{ asset($diamond->shape_svg) }}" width="25" height="25" class="group-hover:text-dark-blue mb-2" alt="{{ $diamond->shape }} Shape">
        <span class="pb-1 font-medium">{{ $diamond->shape }}</span>
        <span class="text-xs text-red-600 uppercase pb-1">Sale</span>
    </td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->carat }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->cut }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->color }}</td>
    <td class="py-4 text-sm font-montserrat">{{ $diamond->clarity }}</td>
    <td class="py-4 text-sm font-montserrat">
        <span class="text-gray-600 line-through text-xs">${{ $diamond->mrp }}</span>
        <span class="text-red-600">${{ $diamond->original_price }}</span>
    </td>
    <td class="py-4">
        <button class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary transition-all duration-300">View More</button>
    </td>
</tr>
@endforeach 