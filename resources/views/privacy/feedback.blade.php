@extends('layouts.master')

@section('content')


  <!-- Feedback Section -->
  <section class="container mx-auto py-12 px-6">
    <div class="max-w-full flex flex-col items-center space-y-3">

        <h2 class="text-xl lg:text-3xl font-montserrat text-primary font-semibold text-center mb-3">Get in Touch</h2>
        <p class="text-base lg:text-lg font-montserrat text-primary text-center mb-8">Fill out the form below or email us at <a href="mailto:support@roayadiamond.com" class="text-primary font-medium">support@roayadiamond.com</a></p>
        <p class="text-base lg:text-lg font-montserrat text-primary text-center mb-8"><span class="font-medium">Call us at</span> <a href="tel:+16462880810" class="text-primary">+1 646-288-0810</a></p>
        <p class="text-base lg:text-lg font-montserrat text-primary text-center mb-8"><span class="font-medium">Address:</span> 55W 47th St., Suite #790, New York, NY-10036, USA</p>


        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6 w-full max-w-xl xl:max-w-2xl">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name*"
                        class="mt-1 py-3 block w-full rounded-md border border-gray-300 placeholder:font-montserrat placeholder:text-sm placeholder:text-gray-400 placeholder:pl-2">
                </div>

                <div>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name*"
                        class="mt-1 py-3 block w-full rounded-md border border-gray-300 placeholder:font-montserrat placeholder:text-sm placeholder:text-gray-400 placeholder:pl-2">
                </div>

                <div>
                    <input type="email" name="email" id="email" placeholder="Your Email*"
                        class="mt-1 py-3 block w-full rounded-md border border-gray-300 placeholder:font-montserrat placeholder:text-sm placeholder:text-gray-400 placeholder:pl-2">
                </div>

                <div>
                    <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number*"
                        class="mt-1 py-3 block w-full rounded-md border border-gray-300 placeholder:font-montserrat placeholder:text-sm placeholder:text-gray-400 placeholder:pl-2">
                </div>
            </div>

            <div>
                <textarea name="description" id="description" rows="5"
                    class="mt-1 block w-full rounded-md border border-gray-300 font-montserrat text-sm text-gray-400 p-2" placeholder="Your Message*"></textarea>
            </div>

            <div class="text-end">
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-primary py-3 px-6 text-sm font-montserrat font-medium text-white shadow-sm hover:bg-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-dark-gray focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
  </section>
@endsection
