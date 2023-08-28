<x-Layout>
    <div class="container mx-auto py-20 px-4 md:px-0">

        <!-- Page Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Our Packages</h1>
            <p class="text-xl text-gray-600">Select a package that fits best for your event.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-12">

            <!-- Basic Package -->
            <div class="bg-white rounded-lg md:max-h-min flex flex-col justify-evenly  shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold mb-4">Basic</h2>
                <p class="text-xl font-semibold mb-8">$499</p>
                {{-- features --}}
                <ul class="mb-8 space-y-2 text-gray-600">
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Venue Decoration</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Seating Arrangements</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Basic Lighting</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Consultation</li>
                </ul>
                <!-- Best Suited For -->
                <div class="bg-gray-50 p-4 mb-8 rounded-md">
                    <h3 class="font-semibold mb-2">Best Suited For:</h3>
                    <ul class="list-disc list-inside text-gray-600">
 <li>Small gatherings</li>
                        <li>Intimate events</li>
                        <li>Quick setups</li>
                    </ul>
                </div>

                <!-- Features -->
                <ul class="mb-8 space-y-2 text-gray-600">
                    <!-- ... (features with check icons) ... -->
                </ul>

                <!-- Call to Action -->
                <a href="#booking-form"
                    class="block w-full bg-blue-600 text-white text-center py-3 rounded-md hover:bg-blue-700 transition-colors">Select
                    & Proceed</a>
            </div>

            <!-- premium Package -->
            <div class="bg-white rounded-lg md:max-h-min flex flex-col justify-evenly shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold mb-4">Premium</h2>
                <p class="text-xl font-semibold mb-8">$899</p>
                {{-- features --}}
                <ul class="mb-8 space-y-2 text-gray-600">
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Everything in Basic</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Premium Lighting</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Flower Arrangements</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Custom Themes</li>
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> On-site Support</li>

                </ul>
                <!-- Best Suited For -->
                <div class="bg-gray-50 p-4 mb-8 rounded-md">
                    <h3 class="font-semibold mb-2">Best Suited For:</h3>
                    <ul class="list-disc list-inside text-gray-600">
                         <li>Larger Gatherings</li>
            <li>Corporate Events</li>
            <li>Weddings & Receptions</li>
            <li>Themed Parties</li>

                    </ul>
                </div>

                <!-- Features -->
                <ul class="mb-8 space-y-2 text-gray-600">
                    <!-- ... (features with check icons) ... -->
                </ul>

                <!-- Call to Action -->
                <a href="#booking-form"
                    class="block w-full bg-blue-600 text-white text-center py-3 rounded-md hover:bg-blue-700 transition-colors">Select
                    & Proceed</a>
            </div>

             <!-- elite Package -->
            <div class="bg-white rounded-lg md:max-h-min flex flex-col justify-evenly shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold mb-4">Elite</h2>
                <p class="text-xl font-semibold mb-8">$1499</p>
                {{-- features --}}
                <ul class="mb-8 space-y-2 text-gray-600">
                    <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Everything in Basic</li>
                            <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Everything in Premium</li>
                   <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Exclusive Designs</li>
                   <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> VIP Seating</li>
                   <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Personalized Consultation</li>
                   <li class="flex gap-1 items-center"><img class='h-4 w-4' src="{{ asset('svg/check.svg') }}"
                            alt="" srcset=""> Priority Support</li>

                </ul>
                <!-- Best Suited For -->
                <div class="bg-gray-50 p-4 mb-8 rounded-md">
                    <h3 class="font-semibold mb-2">Best Suited For:</h3>
                    <ul class="list-disc list-inside text-gray-600">
                       <li>Luxury Events</li>
            <li>Conferences & Summits</li>
            <li>Destination Weddings</li>
            <li>Grand Celebrations</li>
                    </ul>
                </div>

                <!-- Features -->
                <ul class="mb-8 space-y-2 text-gray-600">
                    <!-- ... (features with check icons) ... -->
                </ul>

                <!-- Call to Action -->
                <a href="#booking-form"
                    class="block w-full bg-blue-600 text-white text-center py-3 rounded-md hover:bg-blue-700 transition-colors">Select
                    & Proceed</a>
            </div>

        </div>


        <!-- Booking or Inquiry Form (appears when 'Select & Proceed' is clicked) -->
        <div class="bg- rounded-lg shadow-md mt-16 p-8" id="booking-form">

            <form action="path_to_your_backend_script" method="POST">
               <!-- Booking or Inquiry Form -->
<div class="bg- rounded-lg shadow-md mt-16 p-8 max-w-2xl mx-auto" id="booking-form">


  <h2 class="text-3xl font-bold mb-6 border-b pb-2">Book Your Package</h2>
        <!-- Full Name -->
        <div>
            <label for="fullName" class="block text-sm font-medium text-gray-600 mb-2">Full Name</label>
            <input type="text" id="fullName" name="fullName" class="w-full p-3 border rounded-md" required>
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email Address</label>
            <input type="email" id="email" name="email" class="w-full p-3 border rounded-md" required>
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-600 mb-2">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="w-full p-3 border rounded-md">
        </div>

        <!-- Preferred Package -->
        <div>
            <label for="package" class="block text-sm font-medium text-gray-600 mb-2">Preferred Package</label>
            <select id="package" name="package" class="w-full p-3 border rounded-md">
                <option value="basic">Basic</option>
                <option value="premium">Premium</option>
                <option value="elite">Elite</option>
            </select>
        </div>

        <!-- Event Date -->
        <div>
            <label for="eventDate" class="block text-sm font-medium text-gray-600 mb-2">Event Date</label>
            <input type="date" id="eventDate" name="eventDate" class="w-full p-3 border rounded-md">
        </div>

        <!-- Additional Notes or Requirements -->
        <div>
            <label for="notes" class="block text-sm font-medium text-gray-600 mb-2">Additional Notes</label>
            <textarea id="notes" name="notes" rows="4" class="w-full p-3 border rounded-md"></textarea>
        </div>

        <!-- Submit Button -->
         <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-md mt-4">Submit
                    Inquiry</button>
    </form>
</div>



        </div>
    </div>


</x-layout>
