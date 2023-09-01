<section class="bg-gray-50 py-20" id="contact">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-8">Contact Us</h2>
            <p class="text-xl text-gray-700">Have questions or special requirements? We're here to help!</p>
        </div>

        <!-- Contact Form & Info Grid -->
        <div class="grid md:grid-cols-2 py-8   rounded-lg shadow-md">

            <!-- Contact Form -->
            <div class="flex justify-center">
                <div class=''>
                   <img src="{{asset('contact-form.svg')}}" alt="" height="16rem" class="object-fill !p-0 h-64 w-64 " srcset="">
                </div>
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
</section>