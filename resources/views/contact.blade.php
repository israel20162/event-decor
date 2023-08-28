<x-Layout>
<h1 class="text-4xl text-center py-5 font-bold mb-8">Contact us</h1>
    <div class="bg-gray-">


    <!-- Main Content -->
    <div class="container mx-auto py-1 px-4 md:px-0">
        <!-- Contact Form & Info Grid -->
        <div class="grid md:grid-cols-2 gap-12 bg-whit p-8 rounded-lg shadow-md">

            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-8 border-b pb-2">Get in Touch</h2>
                <form action="path_to_your_backend_script" method="POST">

            <form action="path_to_your_backend_script" method="POST">
                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-600 mb-2">Name</label>
                    <input type="text" id="name" name="name" class="p-3 w-full border rounded-md">
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="p-3 w-full border rounded-md">
                </div>

                <!-- Message -->
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-600 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" class="p-3 w-full border rounded-md"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-md">Send Message</button>
            </form>
                </form>
            </div>

            <!-- Contact Information -->
         <div class="space-y-4">
                <h3 class="text-2xl font-semibold mb-4">Contact Details</h3>
                <p class="flex gap-1">
                    <img class='h-8 w-8' src="{{asset('svg/location.svg')}}" alt="" srcset=""><strong>Address:</strong> 123 Event Street, City, Country
                </p>
                <p class="flex gap-1">
                    <img class='h-8 w-8' src="{{asset('svg/phone.svg')}}" alt="" srcset=""><strong>Phone:</strong> (123) 456-7890
                </p>
                <p class="flex gap-1">
                  <img class='h-8 w-8' src="{{asset('svg/mail.svg')}}" alt="" srcset="">  <strong>Email:</strong> hello@eventcompany.com
                </p>
                <p class="flex gap-1">
                   <img class='h-8 w-8' src="{{asset('svg/work-hours.svg')}}" alt="" srcset=""> <strong>Working Hours:</strong> Mon - Fri, 9 AM - 5 PM
                </p>
            </div>
        </div>
    </div>

</div>
</x-Layout>

