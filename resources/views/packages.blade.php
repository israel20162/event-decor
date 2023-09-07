<x-Layout>
    <main x-data="{ open: false }">
        <div>

            <div class="container mx-auto py-20 px-4 md:px-0">

                <!-- Page Heading -->
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold mb-4">Our Packages</h1>
                    <p class="text-xl text-gray-600">Select a package that fits best for your event.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-12">
                    @forelse ($packages as $package)
                        <div
                            class="bg-white rounded-lg md:max-h-min flex flex-col justify-evenly  shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                            <h2 class="text-2xl font-bold mb-4">{{ $package->name }}</h2>
                            <p class="text-xl font-semibold mb-8">&#x20A6;{{ $package->price }}</p>
                            {{-- features --}}
                            <ul class="mb-8 space-y-2 text-gray-600">
                                @foreach (json_decode($package->services) as $item)
                                    <li class="flex gap-1 items-center"><img class='h-4 w-4'
                                            src="{{ asset('svg/check.svg') }}" alt="" srcset="">
                                        {{ $item }}</li>
                                @endforeach

                            </ul>
                            <!-- Best Suited For -->
                            <div class="bg-gray-50 p-4 mb-8 rounded-md">
                                <h3 class="font-semibold mb-2">Best Suited For:</h3>
                                <ul class="list-disc list-inside text-gray-600">
                                    @foreach (json_decode($package->suited_for) as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Features -->
                            <ul class="mb-8 space-y-2 text-gray-600">
                                <!-- ... (features with check icons) ... -->
                            </ul>


                            <button @click="open = true" onclick="setPref('{{$package->name}}')" type="button"
                                class="block w-full bg-blue-600 text-white text-center py-3 rounded-md hover:bg-blue-700 transition-colors">Select
                                & Proceed</button>
                        </div>
                    @empty

                    @endforelse


                </div>

            </div>



            <div x-show="open" class="fixed z-10 inset-0  overflow-y-scroll  " id="modal"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-100">
                <div class="flex items-center  justify-center min-h-screen pt-4 px-4   sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div @click="open = false" class="absolute inset-0 bg-gray-500 opacity-10" id="modal-bg"
                            style="opacity: 50%">
                        </div>
                    </div>
                    <div
                        class="bg-white md:max-w-3xl max-h-screen  mx-auto rounded-lg md:px-4  md:pb-4 overflow-scroll no-scroll shadow-xl transform transition-all sm:max-w-lg sm:p-6">
                        <div class="w-full ">
                            <form action="{{ route('booking.create') }}" method="POST">
                                @csrf
                                <!-- Booking or Inquiry Form -->
                                <div class=" rounded-lg flex flex-col gap-y-3 bg-white p-8  w-full " id="booking-form">

                                    @if ($errors->any())
                                        <div class="text-red-500  w-full flex justify-center text-xl  mt-2">
                                            <ul>

                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <h2 class="md:text-3xl whitespace-nowrap md:whitespace-pre-wrap text-sm font-bold mb-6 flex justify-between items-center border-b pb-2">
                                        <span>Book Your Package</span>
                                        <button type="button"
                                            class="ml-2 bg-gray-500 text-sm md:text-sm text-white md:px-4 px-2 py-1 md:py-2 rounded hover:bg-gray-600"
                                            @click="open = false">Close</button>
                                    </h2>
                                    <!-- Full Name -->
                                    <div>
                                        <label for="fullName" class="block text-sm font-medium text-gray-600 mb-2">Full
                                            Name</label>
                                        <input required type="text" id="fullName" name="name"
                                            class="w-full md:p-3 border rounded-md" required>
                                    </div>

                                    <!-- Email Address -->
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email
                                            Address</label>
                                        <input required type="email" id="email" name="email"
                                            class="w-full md:p-3 border rounded-md" required>
                                    </div>

                                    <!-- Phone Number -->
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-600 mb-2">Phone
                                            Number</label>
                                        <input required type="tel" id="phone" name="phone"
                                            class="w-full md:p-3 border rounded-md">
                                    </div>

                                    <!-- Preferred Package -->
                                    <div>
                                        <label for="package"
                                            class="block text-sm font-medium text-gray-600 mb-2">Preferred
                                            Package</label>
                                        <select required id="package" name="package" class="w-full p-3 border rounded-md">
                                            <option value="Basic">Basic</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Elite">Elite</option>
                                        </select>
                                    </div>

                                    <!-- Event Date -->
                                    <div>
                                        <label for="eventDate"
                                            class="block text-sm font-medium text-gray-600 mb-2">Event
                                            Date</label>
                                        <input required type="date" id="eventDate" name="event_date"
                                            class="w-full p-3 border rounded-md">
                                    </div>

                                    <!-- Additional Notes or Requirements -->
                                    <div>
                                        <label for="notes"
                                            class="block text-sm font-medium text-gray-600 mb-2">Additional
                                            Notes</label>
                                        <textarea id="notes" name="notes" rows="4" class="w-full p-3 border rounded-md"></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-md mt-4">Submit
                                        Inquiry</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>









    </main>

    @push('scripts')
        <script>
            function setPref(pref) {
                const el = document.getElementById('package')
              el.value = pref
              console.log(el.selected)
            }
        </script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @endpush
</x-layout>
