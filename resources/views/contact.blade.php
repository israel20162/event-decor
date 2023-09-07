<x-Layout>
    <h1 class="text-4xl text-center py-5 font-bold mb-8">Contact us</h1>
    <div class="bg-gray-">


        <!-- Main Content -->
        <div class="container mx-auto py-1 px-4 md:px-0">
            <!-- Contact Form & Info Grid -->
            <div class="grid md:grid-cols-2 gap-12  p-8 rounded-lg shadow-md">

                <!-- Contact Form -->
                <div>
                    <h2 class="text-xl font-bold mb-4">We Value Your Feedback!</h2>
                    <p class="mb-4">Your feedback helps us improve and serve you better. If you've used our services or
                        have suggestions, please let us know.</p>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="bg-red-100 text-red-700 border-red-400 px-4 py-3 rounded mt-6 relative">
                                {{ $error }} </div>
                                 <span class="block sm:inline">{{ session('message') }}</span>
                        @endforeach
                    @endif

                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="p-3 w-full border rounded-md">
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="p-3 w-full border rounded-md">
                        </div>

                        <!-- Message -->
                        <div class="mb-6">
                            <label class="block text-sm font-bold mb-2" for="feedback">Your Feedback:</label>
                            <textarea id="feedback" name="feedback" rows="5" class="p-3 w-full border rounded-md"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-md">Send
                            Message</button>
                    </form>

                </div>

                <!-- Contact Information -->
                <div class="space-y-4 capitalize">
                <h3 class="text-2xl font-semibold mb-4">Contact Details</h3>
                <p class="flex gap-1">
                    <img class='h-8 w-8' src="{{asset('svg/location.svg')}}" alt="" srcset=""><strong>Address:</strong> {{$settings->contact_adress}}
                </p>
                <p class="flex gap-1">
                    <img class='h-8 w-8' src="{{asset('svg/phone.svg')}}" alt="" srcset=""><strong>Phone:</strong> {{$settings->contact_phone_number}}
                </p>
                <p class="flex gap-1">
                  <img class='h-8 w-8' src="{{asset('svg/mail.svg')}}" alt="" srcset="">  <strong>Email:</strong> {{$settings->contact_email}}
                </p>
                <p class="flex gap-1">
                   <img class='h-8 w-8' src="{{asset('svg/work-hours.svg')}}" alt="" srcset=""> <strong>Working Hours:</strong> {{$settings->working_hours}}
                </p>
            </div>

            </div>


        </div>

    </div>
</x-Layout>
