<x-filament-panels::page class="fi-dashboard-page">
    <div class="w-full md:w-3/4 lg:w-2/3 mx-auto">
        @if (method_exists($this, 'filtersForm'))
            {{ $this->filtersForm }}
        @endif
    </div>
</x-filament-panels::page>
