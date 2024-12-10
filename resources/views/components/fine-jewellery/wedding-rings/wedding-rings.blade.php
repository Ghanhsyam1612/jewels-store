@extends('layouts.master')

@section('content')
    <div class="container mb-14">
        <nav class="flex items-center text-sm font-montserrat mb-4 px-40 py-6">
            <a href="/" class="text-primary text-xs font-medium hover:underline">Home</a>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                        fill="#0F0F0F"></path>
                </g>
            </svg>
            <span class="text-primary text-xs">Wedding Rings</span>
        </nav>

        <div class="flex flex-col items-center justify-center px-40 my-12">
            <h2 class="text-3xl text-primary font-montserrat font-semibold mb-2">Shop Wedding Ring</h2>
            <p class="text-sm text-primary font-montserrat text-center">Stunning Wedding Rings Collection of timeless dazzling pieces that quickly make a statement. Some of the best craftspeople craft each ring in our collection, making every diamond piece produced unique.</p>
        </div>


        <div class="grid grid-cols-2 gap-8 px-40">
            <div class="relative border border-light-grey-1">
                <img src="/images/rings/Diamond-Rings.webp" alt="Marquise Diamond" class="w-full h-auto">
                <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                    <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Diamond <br> Rings</h3>
                    <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
                </div>
            </div>
    
            <div class="relative border border-light-grey-1">
                <img src="/images/rings/Diamond-Anniversary-Rings.webp" alt="Marquise Diamond" class="w-full h-auto">
                <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                    <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Anniversary Rings</h3>
                    <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
                </div>
            </div>
    
            <div class="relative border border-light-grey-1">
                <img src="/images/rings/Eternity-Rings.webp" alt="Marquise Diamond" class="w-full h-auto">
                <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                    <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Eternity <br> Rings</h3>
                    <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
                </div>
            </div>
    
            <div class="relative border border-light-grey-1">
                <img src="/images/rings/Stackable-Rings.webp" alt="Marquise Diamond" class="w-full h-auto">
                <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                    <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Stackable Rings</h3>
                    <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
                </div>
            </div>
        </div>
    

    {{-- Sort By --}}
    <script>
        const sortIcon = document.getElementById('sortDropdownIcon');
        const sortDropdown = document.getElementById('sortDropdown');

        sortIcon.addEventListener('click', () => {
            sortDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!sortIcon.contains(e.target) && !sortDropdown.contains(e.target)) {
                sortDropdown.classList.add('hidden');
            }
        }); 
    </script>

    {{-- Product Image Slider --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('default-carousel');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
            const indicatorsContainer = document.getElementById('carousel-indicators');
            let currentIndex = 0;
            let interval;
            let isHovered = false;

            // Show only first slide initially
            showSlide(0);

            // Show carousel controls and start autoplay only on hover
            carousel.addEventListener('mouseenter', () => {
                isHovered = true;
                indicatorsContainer.style.opacity = '1';
                startAutoPlay();
            });

            carousel.addEventListener('mouseleave', () => {
                isHovered = false;
                indicatorsContainer.style.opacity = '0';
                clearInterval(interval);
                // Reset to first slide when mouse leaves
                currentIndex = 0;
                showSlide(0);
            });

            // Indicator clicks
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    if (isHovered) {
                        currentIndex = index;
                        showSlide(currentIndex);
                        resetAutoPlay();
                    }
                });
            });

            function showSlide(index) {
                items.forEach((item, i) => {
                    if(i === index) {
                        item.classList.remove('hidden');
                        item.classList.add('opacity-100');
                        indicators[i].classList.add('bg-white');
                        indicators[i].classList.remove('bg-gray-300');
                    } else {
                        item.classList.add('hidden');
                        item.classList.remove('opacity-100');
                        indicators[i].classList.remove('bg-white');
                        indicators[i].classList.add('bg-gray-300');
                    }
                    indicators[i].setAttribute('aria-current', i === index);
                });
            }

            function startAutoPlay() {
                interval = setInterval(() => {
                    if (isHovered) {
                        currentIndex = (currentIndex + 1) % items.length;
                        showSlide(currentIndex);
                    }
                }, 1300); // Change slide every 3 seconds while hovered
            }

            function resetAutoPlay() {
                clearInterval(interval);
                startAutoPlay();
            }
        });
    </script>
@endsection

