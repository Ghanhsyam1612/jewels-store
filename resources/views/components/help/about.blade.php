@extends('layouts.master')

@section('content')

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto lg:px-36">
        <!-- Main Title -->
        {{-- <h1 class="text-center text-4xl font-semibold text-gray-900 font-montserrat mb-12">
            Our Story
        </h1> --}}

        <div class="flex flex-col md:flex-row gap-8 mb-10">
            <!-- Left Content -->
            <div class="md:w-1/2 space-y-6">
                <div class="space-y-4 font-montserrat text-gray-600">
                    <h2 class="text-2xl font-semibold text-gray-900 font-montserrat">
                        40+ Years of Experience in the Diamond Industry
                    </h2>
                    <p>
                        Loose Grown Diamond was established in 1984, For over 40+ years, we have been trying to save the earth. We believe that diamonds should not cost our planet thus, we proudly manufacture laboratory-grown diamonds.
                    </p>

                    <p>
                        Loose Grown Diamond is a trend-forward supplier of Lab Grown Diamonds and 100% GIA, IGI & GCAL certified Lab Grown Diamonds.
                    </p>

                    <p>
                        We begin telling your diamond purchase quick and affordable by offering IGI & GIA certified customized eco-friendly Lab created diamonds – HPHT diamonds, CVD diamonds, Synthetic diamonds, Melee diamonds, Loose diamonds, Fancy shape lab created diamonds such as round, marquise, princess, heart, oval, pear, radiant, Asscher, emerald, baguette, and custom shape lab created diamonds.
                    </p>

                    <p>
                        Our Lab Grown Diamonds are 100% Conflict-Free, Ethically Made, and Recyclable. 100% Customizable to size, shape, color, clarity, cut, and carat.    
                    </p>
                </div>
            </div>

            <!-- Right Image -->
            <div class="md:w-1/2 flex items-start justify-start">
                <img src="/images/manufacturing.webp" alt="About Us" class="max-w-full h-auto object-cover">
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div>
            <h2 class="text-center text-2xl font-medium text-gray-900 font-montserrat mb-12">
                WHY BUY LAB CREATED DIAMONDS FROM US?
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Column 1 -->
                <div class="flex flex-col items-center text-center space-y-4">
                    <svg width="30" height="30" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 18.5V21.5234H20.9766V18.5H24ZM24 12.5234V15.4766H20.9766V12.5234H24ZM27.0234 24.4766V9.5H15V12.5234H18.0234V15.4766H15V18.5H18.0234V21.5234H15V24.4766H27.0234ZM11.9766 6.47656V3.52344H9.02344V6.47656H11.9766ZM11.9766 12.5234V9.5H9.02344V12.5234H11.9766ZM11.9766 18.5V15.4766H9.02344V18.5H11.9766ZM11.9766 24.4766V21.5234H9.02344V24.4766H11.9766ZM6 6.47656V3.52344H2.97656V6.47656H6ZM6 12.5234V9.5H2.97656V12.5234H6ZM6 18.5V15.4766H2.97656V18.5H6ZM6 24.4766V21.5234H2.97656V24.4766H6ZM15 6.47656H29.9766V27.5H0.0234375V0.5H15V6.47656Z" fill="#999999"/>
                        </svg>
                    <h3 class="text-xl font-semibold text-gray-900 font-montserrat">Own Manufacturing Unit</h3>
                    <p class="text-gray-600 font-montserrat">
                        We have our own diamond manufacturing unit called Loose Grown Diamond in India which deals globally with customers.
                    </p>
                </div>

                <!-- Column 2 -->
                <div class="flex flex-col items-center text-center space-y-4">
                    <svg width="18" height="30" viewBox="0 0 18 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.44531 13.6432C10.6293 13.9661 11.5981 14.2891 12.3516 14.612C13.1589 14.9349 13.9931 15.3924 14.8542 15.9844C15.7153 16.5226 16.3611 17.2222 16.7917 18.0833C17.276 18.9444 17.5182 19.967 17.5182 21.151C17.5182 22.8194 16.9531 24.1918 15.8229 25.2682C14.7465 26.2908 13.2934 26.9635 11.4635 27.2865V31H6.29688V27.2865C4.52083 26.9097 3.0408 26.1562 1.85677 25.026C0.726562 23.8958 0.107639 22.4427 0 20.6667H3.79427C4.00955 23.0885 5.70486 24.2995 8.88021 24.2995C10.5486 24.2995 11.7326 24.0035 12.4323 23.4115C13.1858 22.7656 13.5625 22.0391 13.5625 21.2318C13.5625 19.2943 11.8403 17.895 8.39583 17.0339C3.01389 15.796 0.322917 13.428 0.322917 9.92969C0.322917 8.36892 0.888021 7.05035 2.01823 5.97396C3.14844 4.84375 4.57465 4.09028 6.29688 3.71354V0H11.4635V3.79427C13.2396 4.22483 14.5851 5.03212 15.5 6.21615C16.4688 7.40017 16.98 8.77257 17.0339 10.3333H13.2396C13.1319 7.91146 11.6788 6.70052 8.88021 6.70052C7.4809 6.70052 6.35069 6.99653 5.48958 7.58854C4.68229 8.18056 4.27865 8.96094 4.27865 9.92969C4.27865 11.4905 6.00087 12.7283 9.44531 13.6432Z" fill="#999999"/>
                        </svg>
                    <h3 class="text-xl font-semibold text-gray-900 font-montserrat">Lowest Prices</h3>
                    <p class="text-gray-600 font-montserrat">
                        We craft diamonds at our own manufacturing unit so you will get diamonds at a wholesale price than other platforms.
                    </p>
                </div>

                <!-- Column 3 -->           
                <div class="flex flex-col items-center text-center space-y-4">
                    <svg width="36" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 18C6.67157 18 6 18.6716 6 19.5V30C6 30.8284 6.67157 31.5 7.5 31.5H28.5C29.3284 31.5 30 30.8284 30 30V19.5C30 18.6716 29.3284 18 28.5 18H7.5ZM3 19.5C3 17.0147 5.01472 15 7.5 15H28.5C30.9853 15 33 17.0147 33 19.5V30C33 32.4853 30.9853 34.5 28.5 34.5H7.5C5.01472 34.5 3 32.4853 3 30V19.5Z" fill="#999999"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 4.5C16.4087 4.5 14.8826 5.13214 13.7574 6.25736C12.6321 7.38258 12 8.9087 12 10.5V16.5C12 17.3284 11.3284 18 10.5 18C9.67157 18 9 17.3284 9 16.5V10.5C9 8.11305 9.94821 5.82387 11.636 4.13604C13.3239 2.44821 15.6131 1.5 18 1.5C20.3869 1.5 22.6761 2.44821 24.364 4.13604C26.0518 5.82387 27 8.11305 27 10.5V16.5C27 17.3284 26.3284 18 25.5 18C24.6716 18 24 17.3284 24 16.5V10.5C24 8.9087 23.3679 7.38258 22.2426 6.25736C21.1174 5.13214 19.5913 4.5 18 4.5Z" fill="#999999"/>
                        </svg>
                    <h3 class="text-xl font-semibold text-gray-900 font-montserrat">Secure Shopping</h3>
                    <p class="text-gray-600 font-montserrat">
                        With worldwide shipping and international certifications, we serve customers globally while maintaining consistent quality and service.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
