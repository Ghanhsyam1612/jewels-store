@extends('layouts.master')

@section('content')
    <div class="mb-14">
        <nav class="flex flex-wrap items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 py-3">
            <a href="/" class="text-primary text-xs font-medium hover:underline">Home</a>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="#0F0F0F"></path>
                </g>
            </svg>
            <span class="text-primary text-xs">Our Stores</span>
        </nav>

        <div class="flex flex-col items-center justify-center px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 my-12">
            <h2 class="text-3xl text-primary font-montserrat font-semibold mb-4">Visit Our Stores</h2>
            <p class="text-sm text-primary font-montserrat text-center max-w-2xl">Experience our exquisite collection of fine jewelry in person at one of our elegant boutiques. Our expert staff is ready to assist you in finding the perfect piece.</p>
        </div>

        <!-- Store Locations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 mb-12">
            <!-- Store Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/jewel-store/1.jpg" alt="Toronto Flagship Store" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-montserrat font-semibold text-primary mb-2">Toronto Flagship Store</h3>
                    <p class="text-sm text-gray-600 mb-4">100 Bloor Street West<br>Toronto, ON M5S 2V9</p>
                    <div class="space-y-2">
                        <p class="text-sm text-primary"><span class="font-semibold">Hours:</span> Mon-Sat 10am-8pm</p>
                        <p class="text-sm text-primary"><span class="font-semibold">Phone:</span> (416) 555-0123</p>
                    </div>
                    <a href="#" class="inline-block mt-4 bg-primary text-white text-sm font-montserrat px-6 py-2 rounded hover:bg-primary/90 transition">Get Directions</a>
                </div>
            </div>

            <!-- Store Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/jewel-store/2.jpg" alt="Vancouver Boutique" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-montserrat font-semibold text-primary mb-2">Vancouver Boutique</h3>
                    <p class="text-sm text-gray-600 mb-4">1128 Alberni Street<br>Vancouver, BC V6E 1A3</p>
                    <div class="space-y-2">
                        <p class="text-sm text-primary"><span class="font-semibold">Hours:</span> Mon-Sat 10am-7pm</p>
                        <p class="text-sm text-primary"><span class="font-semibold">Phone:</span> (604) 555-0123</p>
                    </div>
                    <a href="#" class="inline-block mt-4 bg-primary text-white text-sm font-montserrat px-6 py-2 rounded hover:bg-primary/90 transition">Get Directions</a>
                </div>
            </div>

            <!-- Store Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/images/jewel-store/3.jpg" alt="Montreal Boutique" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-montserrat font-semibold text-primary mb-2">Montreal Boutique</h3>
                    <p class="text-sm text-gray-600 mb-4">1307 Rue Sainte-Catherine Ouest<br>Montreal, QC H3G 1P7</p>
                    <div class="space-y-2">
                        <p class="text-sm text-primary"><span class="font-semibold">Hours:</span> Mon-Sat 10am-7pm</p>
                        <p class="text-sm text-primary"><span class="font-semibold">Phone:</span> (514) 555-0123</p>
                    </div>
                    <a href="#" class="inline-block mt-4 bg-primary text-white text-sm font-montserrat px-6 py-2 rounded hover:bg-primary/90 transition">Get Directions</a>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="bg-gray-50 py-12">
            <div class="px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40">
                <h3 class="text-2xl text-primary font-montserrat font-semibold mb-8 text-center">Find a Store Near You</h3>
                <div class="w-full h-[400px] rounded-lg overflow-hidden shadow-md">
                    <!-- Replace with actual map implementation -->
                    <div id="map" class="w-full h-full bg-gray-200"></div>
                </div>
            </div>
        </div>

        <!-- Book Appointment Section -->
        <div class="py-12 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40">
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-2xl text-primary font-montserrat font-semibold mb-4">Book a Private Appointment</h3>
                <p class="text-sm text-primary mb-6">Experience personalized service and expert guidance. Schedule a one-on-one consultation with our jewelry specialists.</p>
                <a href="#" class="inline-block bg-primary text-white text-sm font-montserrat px-8 py-3 rounded hover:bg-primary/90 transition">Schedule Now</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&callback=initMap" async defer></script>
<script>
    function initMap() {
        const canadaCenter = { lat: 56.1304, lng: -106.3468 };
         const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: canadaCenter,
            mapTypeControl: true,
            streetViewControl: true,
            fullscreenControl: true
        });

        const stores = [
            { 
                position: { lat: 43.6698, lng: -79.3903 },
                title: 'Toronto Flagship Store',
                address: '100 Bloor Street West, Toronto, ON M5S 2V9',
                hours: 'Mon-Sat 10am-8pm',
                phone: '(416) 555-0123'
            },
            { 
                position: { lat: 49.2827, lng: -123.1207 },
                title: 'Vancouver Boutique',
                address: '1128 Alberni Street, Vancouver, BC V6E 1A3',
                hours: 'Mon-Sat 10am-7pm',
                phone: '(604) 555-0123'
            },
            { 
                position: { lat: 45.5017, lng: -73.5673 },
                title: 'Montreal Boutique',
                address: '1307 Rue Sainte-Catherine Ouest, Montreal, QC H3G 1P7',
                hours: 'Mon-Sat 10am-7pm',
                phone: '(514) 555-0123'
            }
        ];

        stores.forEach(store => {
            const marker = new google.maps.Marker({
                position: store.position,
                map: map,
                title: store.title,
                animation: google.maps.Animation.DROP
            });

            const infowindow = new google.maps.InfoWindow({
                content: `
                    <div class="p-3">
                        <h3 class="font-semibold text-lg mb-2">${store.title}</h3>
                        <p class="text-gray-600 mb-2">${store.address}</p>
                        <p class="mb-1"><span class="font-semibold">Hours:</span> ${store.hours}</p>
                        <p><span class="font-semibold">Phone:</span> ${store.phone}</p>
                    </div>
                `
            });

            marker.addListener('click', () => {
                infowindow.open(map, marker);
            });
        });

        // Adjust map bounds to fit all markers
        const bounds = new google.maps.LatLngBounds();
        stores.forEach(store => bounds.extend(store.position));
        map.fitBounds(bounds);
    }
</script>
@endpush