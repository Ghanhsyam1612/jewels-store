<footer class="bg-primary text-gold py-12">
    <div class="w-full mx-auto px-4 lg:px-6 xl:px-12">
        <!-- Newsletter Section -->
        <div class="mb-12">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-montserrat font-bold mb-4" style="color: rgb(240,186,64);">Subscribe to Our Newsletter</h2>
                <p class="text-sm mb-6" style="color: rgb(240,186,64);">Stay updated with our latest collections and exclusive offers</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <input type="email" placeholder="Enter your email" class="w-full sm:w-96 px-4 py-2 rounded-md bg-gray-800 border border-gold focus:outline-none focus:ring-2 focus:ring-gold text-gold placeholder-gray-400">
                    <button type="submit" class="px-6 py-2 bg-gold text-primary font-semibold rounded-md hover:bg-opacity-90 transition duration-300">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
            <!-- Help & Privacy -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-montserrat font-semibold mb-6" style="color: rgb(240,186,64);">HELP</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('about-us') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">About Us</a></li>
                    <li><a href="{{ route('help.education') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Education</a></li>
                    <li><a href="{{ route('compare-us') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Compare Us</a></li>
                    <li><a href="{{ route('why-choose-us') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Why Choose Us</a></li>
                    <li><a href="{{ asset('pdf/ring-sizer.pdf') }}" target="_blank" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Ring Sizer</a></li>
                    <li><a href="{{ route('faq') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">FAQ</a></li>
                    <li><a href="{{ route('contact-us') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Contact Us</a></li>
                </ul>
            </div>

            <!-- Privacy -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-montserrat font-semibold mb-6" style="color: rgb(240,186,64);">PRIVACY</h3>
                <ul class="space-y-3">
                    <li><a href="/shipping-policy" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Shipping Policy</a></li>
                    <li><a href="/return-refund-policy" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Return/Refund Policy</a></li>
                    <li><a href="/price-match-policy" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Price Match Policy</a></li>
                    <li><a href="/feedback" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Feedback Form</a></li>
                    <li><a href="/privacy-policy" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Privacy Policy</a></li>
                    <li><a href="/terms-of-use" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Terms Of Use</a></li>
                </ul>
            </div>

            <!-- Contact & Orders -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-montserrat font-semibold mb-6" style="color: rgb(240,186,64);">CONTACT US</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Live Chat</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Book Appointment</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Stores</a></li>
                    <li><a href="mailto:info@roayadiamond.com" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Email Us</a></li>
                    <!-- <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Affiliates</a></li> -->
                </ul>
            </div>

            <!-- About -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-montserrat font-semibold mb-6" style="color: rgb(240,186,64);">ABOUT</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('ourstory') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Our Story</a></li>
                    <li><a href="{{ route('mission') }}" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Our Mission</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Responsible Sourcing</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">Sustainability Goals</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition duration-300" style="color: rgb(240,186,64);">How we Give Back</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-sm font-montserrat text-center" style="color: rgb(240,186,64);">&copy; {{ date('Y') }} Roaya Diamond. All Rights Reserved.</p>
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5" style="color: rgb(240,186,64);" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5" style="color: rgb(240,186,64);" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5" style="color: rgb(240,186,64);" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5" style="color: rgb(240,186,64);" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</footer>
