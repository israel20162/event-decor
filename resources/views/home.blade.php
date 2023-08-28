<x-Layout>
    {{-- front page carousel --}}
    <section class="relative">
        <div class='main-carousel h-full w-full !relative '>
            <img src="{{ 'https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/banner2.jpg' }}"
                alt="Logo" class="h-8">
            <img src="{{ 'https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/banner1.jpg' }}"
                alt="Logo" class="h-8">
            <img src="{{ 'https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/slider.jpg' }}"
                alt="Logo" class="h-8">


        </div>
        <div class="absolute   top-0 left-0 right-0   transform ">
   <section class="relative  bg-cover bg-center h-screen" style="background-image: url('path_to_hero_image.jpg');">
    <!-- Semi-transparent overlay for better text visibility -->
    <div class="absolute inset-0 bg-black opacity-50 md:max-h-[598px]"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
        <!-- Main Heading -->
        <h1 class="text-3xl text-center md:text-6xl font-bold mb-4 text-shadow-md">Transforming Spaces, Creating Memories</h1>

        <!-- Subheading or Description -->
        <p class="text-xl md:text-2xl mb-8 text-center max-w-lg text-shadow-md">Expert event decorations tailored to bring your vision to life.</p>

        <!-- Call to Action Button(s) -->
        <div class="space-x-4">
            <a href="#services" class="bg-white text-black hover:bg-gray-200 transition-colors py-2 px-6 rounded-lg font-semibold">Our Services</a>
            <a href="#contact" class="bg-transparent border-2 border-white hover:bg-white hover:text-black transition-colors py-2 px-6 rounded-lg font-semibold">Contact Us</a>
        </div>
    </div>
</section>
</div>
    </section>

    {{-- hero section --}}
<!-- Hero Section -->




    {{-- arrange events section --}}
    <section>
        @php
            $events = [
                0 => [
                    'title' => 'Birthdays',
                    'description' => 'We arrange birthday events with the creative theme of the birthday',
                ],
                1 => [
                    'title' => 'Birthdays',
                    'description' => 'A wedding is a very crucial time in someone`s life and we give our best to make this movement memorable for everyone.',
                ],
                2 => [
                    'title' => 'Birthdays',
                    'description' => 'We arrange birthday events with the creative theme of the birthday',
                ],
                3 => [
                    'title' => 'Birthdays',
                    'description' => 'We arrange birthday events with the creative theme of the birthday',
                ],
            ];
        @endphp

        <div class="container mx-auto flex justify-center flex-col gap-y-4 items-center text-center w-full p-4 m-4">
            <h1 class="font-semibold py-1 px-2 capitalize text-4xl m-0 font text-[#282828] ">We Arrange</h1>
            <div class="flex justify-evenly items-baseline gap-x-4">
                <img src="{{ asset('svg/lines.svg') }}" class="h-8 w-8  pb-2" alt="line" srcset="">
                <img src="{{ asset('svg/glass.svg') }}" class="h-12 w-10 " alt="wine" srcset="">
                <img src="{{ asset('svg/lines.svg') }}" class="h-8 w-8  pb-2" alt="" srcset="">
            </div>


            <div class="grid lg:grid-cols-4 sm:grid-cols-2 justify-evenly">
                @foreach ($events as $event)
                    <x-arrange-card
                        image="https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/affair-1238440_640.jpg"
                        title="{{ $event['title'] }}" description="{{ $event['description'] }}" />
                @endforeach


            </div>
    </section>

    {{-- services --}}

        <section id='services' class="bg-gray-20 py-20">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-10">Our Premier Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16">

                    <!-- Catering -->
                    <div class="relative group">
                        <img src="{{ asset('Catering2.jpg') }}" alt="Catering Services"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Catering</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Catering</h3>
                            <p class="text-gray-600">Delicious and diverse menu options prepared by top chefs.</p>
                        </div>
                    </div>

                    <!-- Hall Decoration -->
                    <div class="relative group">
                        <img src="{{ asset('hall.jpg') }}" alt="Hall Decoration"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Hall Decoration</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Hall Decoration</h3>
                            <p class="text-gray-600">Transforming spaces into breathtaking venues.</p>
                        </div>
                    </div>

                    <!-- Entertainment -->
                    <div class="relative group">
                        <img src="{{ asset('Entertainment.jpg') }}" alt="Entertainment Services"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Entertainment</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Entertainment</h3>
                            <p class="text-gray-600">Stellar performances to elevate your event's vibe.</p>
                        </div>
                    </div>

                    <!-- Video & photo -->
                    <div class="relative group">
                        <img src="{{ asset('video.jpg') }}" alt="Video Services"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Videos</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Videos</h3>
                            <p class="text-gray-600">Capturing every moment of your beautiful event.</p>
                        </div>
                    </div>

                    <div class="relative group">
                        <img src="{{ asset('photo.jpg') }}" alt="Video Services"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Photos</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Photos</h3>
                            <p class="text-gray-600">Capturing every moment of your beautiful event.</p>
                        </div>
                    </div>

                    {{-- Refreshments --}}
                    <div class="relative group">
                        <img src="{{ asset('photo.jpg') }}" alt="Video Services"
                            class="w-full object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center rounded-lg">
                            <span class="text-white text-xl font-semibold">Refre</span>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold mb-2">Photos</h3>
                            <p class="text-gray-600">Capturing every moment of your beautiful event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About us --}}
      <section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4 md:px-0">

        <!-- Heading and Subheading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">About Us</h2>
            <p class="text-xl text-gray-600">Crafting Memorable Event Experiences Since [year of buisness establishment]</p>
        </div>

        <!-- Content Grid: Image and Text -->
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Image: Ideally a team or portfolio image -->
            <div class="order-2 md:order-1 text-center">
                <img src={{ asset('about-us.jpg') }} alt="Our team working on an event" class="w-full rounded-lg shadow-xl">
                <p class="capitalize text-center w-full text-lg font-semibold py-4">our team working on an event</p>
            </div>

            <!-- Text Content -->
            <div class="order-1 md:order-2 text-gray-700 pb-16">
                <p class="mb-6">
                    At [Your Company Name], we believe every event tells a story. Whether it's a dream wedding, a corporate gala, or a milestone birthday, our team is passionate about making every detail unforgettable.
                </p>
                <p class="mb-6">
                    With over a decade in the industry, our expertise ranges from intimate gatherings to grand celebrations. Our commitment to quality and attention to detail ensures that each event not only meets but exceeds our clients' expectations.
                </p>
                <p>
                    Based in [Your City], we're proud to have been a part of over [X number] events, each unique and special in its own right. Join us in making your next event truly spectacular.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Portfolio/Gallery Section -->
<section class="py-20 capitalize" id="portfolio">
    <div class="container flex-col gap-12 mx-auto px-4 md:px-0">

        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Our Portfolio</h2>
            <p class="text-xl text-gray-600">A showcase of our recent spectacular events.</p>
        </div>

        <!-- Gallery Grid -->

        <div class=" pt-10 mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 !gap-8">

            <!-- Image 1 -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition-shadow duration-300">
                <img src={{ asset('gallery-1.jpg') }} alt="Event 1" class="w-full object-cover transition-transform duration-300 ">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Wedding in [Location]</h3>
                    <p class="text-gray-600">Brief description or date</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition-shadow duration-300">
                <img src={{ asset('gallery-1.jpg') }} alt="Event 1" class="w-full object-cover transition-transform duration-300 ">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Wedding in [Location]</h3>
                    <p class="text-gray-600">Brief description or date</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md group hover:shadow-xl transition-shadow duration-300">
                <img src={{ asset('gallery-1.jpg') }} alt="Event 1" class="w-full object-cover transition-transform duration-300 ">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Wedding in [Location]</h3>
                    <p class="text-gray-600">Brief description or date</p>
                </div>
            </div>



            <!-- Image 2 -->
            <!-- ... similar structure as Image 1 ... -->

            <!-- Image 3 -->
            <!-- ... similar structure as Image 1 ... -->

            <!-- ... additional images ... -->

        </div>
    </div>
</section>


{{-- how we work section --}}

<section class="bg-gray-50 py-20   " id="how-we-work">
    <div class="container mx-auto px-4 md:px-0">

        <!-- Section Heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">How We Work</h2>
            <p class="text-xl text-gray-600">Our process ensures a seamless and memorable event.</p>
        </div>

        <!-- Steps Grid -->
        <div class="grid cursor-pointer grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">

            <!-- Step 1 -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-6 rounded-full bg-white shadow p-6 w-24 h-24 flex items-center justify-center">
                    <img src="{{asset('consultation.png')}}" alt="Consultation Icon" class="h-12 w-12">
                </div>
                <h3 class="text-xl font-semibold mb-4">Consultation</h3>
                <p class="text-gray-600">We discuss your vision and preferences to curate a custom event plan.</p>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-6 rounded-full bg-white shadow p-6 w-24 h-24 flex items-center justify-center">
                    <img src="{{asset('plan.png')}}" alt="Design Icon" class="h-12 w-12">
                </div>
                <h3 class="text-xl font-semibold mb-4">Design</h3>
                <p class="text-gray-600">Our team crafts a design blueprint tailored to your event's theme.</p>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-6 rounded-full bg-white shadow p-6 w-24 h-24 flex items-center justify-center">
                    <img src="{{asset('Execution.png')}}" alt="Execution Icon" class="h-12 w-12">
                </div>
                <h3 class="text-xl font-semibold mb-4">Execution</h3>
                <p class="text-gray-600">We bring the design to life, ensuring every detail is perfect.</p>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-6 rounded-full bg-white shadow p-6 w-24 h-24 flex items-center justify-center">
                    <img src="{{asset('review.png')}}" alt="Review Icon" class="h-12 w-12">
                </div>
                <h3 class="text-xl font-semibold mb-4">Review</h3>
                <p class="text-gray-600">Post-event, we value feedback to continually elevate our service.</p>
            </div>

        </div>
    </div>
</section>

<!-- Contact Us Section -->
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
</section>


        {{-- testimonials --}}
<section class="bg-gray-50  py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-12">What Our Clients Say</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <img src="{{asset('woman2.jpg')}}" alt="Client 1" class="w-32 h-32 object-cover  rounded-full mx-auto mb-6">
                <p class="text-gray-700 italic mb-4">"The wedding decoration was out of this world! So happy with their service."</p>
                <h4 class="font-semibold mb-2">Jane Doe</h4>
                <p class="text-sm text-gray-500">Wedding</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <img src="{{asset('woman1.jpg')}}" alt="Client 1" class="w-32 h-32 object-cover  rounded-full mx-auto mb-6">
                <p class="text-gray-700 italic mb-4">"The wedding decoration was out of this universe! So happy with their service."</p>
                <h4 class="font-semibold mb-2">Janeth Doe</h4>
                <p class="text-sm text-gray-500">Wedding</p>
            </div>

            <!-- Testimonial 2 -->
            <!-- ... similar structure as Testimonial 1 ... -->

            <!-- Testimonial 3 -->
            <!-- ... similar structure as Testimonial 1 ... -->

        </div>
    </div>
</section>


<!-- Pricing & Packages Section -->
<section class="py-20 bg-gray-50" id="pricing">
    <div class="container mx-auto px-4 md:px-0">

        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Pricing & Packages</h2>
            <p class="text-xl text-gray-600">Choose the best package that suits your event needs.</p>
        </div>

        <!-- Packages Grid -->
        <div class="grid md:grid-cols-3 gap-12">

            <!-- Basic Package -->
            <div class="bg-white flex flex-col md:max-h-fit justify-evenly rounded-lg shadow-md p-8">
                <h3 class="text-2xl font-bold mb-6">Basic</h3>
                <p class="text-xl font-semibold mb-8">$499</p>
                <ul class="mb-8 space-y-2 cursor-pointer text-gray-600">
                    <li>- Venue Decoration</li>
                    <li>- Seating Arrangements</li>
                    <li>- Basic Lighting</li>
                    <li>- Consultation</li>
                </ul>
                <a href="{{route('packages')}}" class="block w-full bg-blue-500 text-white text-center py-3 rounded-md hover:bg-blue-600 transition-colors">Get Started</a>
            </div>

            <!-- Premium Package -->
            <div class="bg-white flex flex-col md:max-h-fit justify-evenly rounded-lg shadow-md p-8">
                <h3 class="text-2xl font-bold mb-6">Basic</h3>
                <p class="text-xl font-semibold mb-8">$899</p>
                <ul class="mb-8 space-y-2 cursor-pointer text-gray-600">
                   <li>- Everything in Basic</li>
                    <li>- Premium Lighting</li>
                    <li>- Flower Arrangements</li>
                    <li>- Custom Themes</li>
                    <li>- On-site Support</li>
                </ul>
                <a href="{{route('packages')}}" class="block w-full bg-blue-500 text-white text-center py-3 rounded-md hover:bg-blue-600 transition-colors">Get Started</a>
            </div>

            <!-- Elite Package -->
           <div class="bg-white flex flex-col md:max-h-fit justify-evenly rounded-lg shadow-md p-8">
                <h3 class="text-2xl font-bold mb-6">Basic</h3>
                <p class="text-xl font-semibold mb-8">$1499</p>
                <ul class="mb-8 space-y-2 cursor-pointer text-gray-600">
                    <li>- Everything in Basic</li>
                    <li>- Everything in premium</li>
                    <li>- Premium Lighting</li>
                    <li>- Flower Arrangements</li>
                    <li>- Custom Themes</li>
                    <li>- On-site Support</li>
                </ul>
                <a href="{{route('packages')}}" class="block w-full bg-blue-500 text-white text-center py-3 rounded-md hover:bg-blue-600 transition-colors">Get Started</a>
            </div>

        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20" id="blog">
    <div class="container mx-auto px-4 md:px-0 text-center">

        <!-- Section Heading -->
        <h2 class="text-4xl font-bold mb-8">Latest From Our Blog</h2>

        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-3 gap-12">

            <!-- Single Blog Post Preview -->
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('execution.svg') }}" alt="Blog Post Title" class="rounded-t-lg w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4"><a href="#" class="hover:text-blue-600">Blog Post Title</a></h3>
                    <p class="text-gray-600 mb-4">A brief description or excerpt from the blog post...</p>
                    <a href="#" class="text-blue-500 hover:underline">Read More</a>
                </div>
            </div>

            <!-- ... (Repeat for other blog post previews) ... -->

        </div>
    </div>
</section>



<!-- FAQ Section -->
<section class="py-20 bg-gray-100" id="faq">
    <div class="container mx-auto px-4 md:px-0 text-center">

        <!-- Section Heading -->
        <h2 class="text-4xl font-bold mb-8">Frequently Asked Questions</h2>
        <p class="text-xl text-gray-600 mb-12">Find answers to some of the most common questions about our services.</p>

        <!-- FAQ Grid -->
        <div class="grid md:grid-cols-2 gap-4">

            <!-- Single FAQ -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">How do I book a package?</h3>
                <p class="text-gray-600">You can book a package by filling out the form on our 'Packages & Pricing' page or by reaching out to us directly through phone or email.</p>
            </div>

            <!-- Single FAQ -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">Can I customize my package?</h3>
                <p class="text-gray-600">Yes, our packages are flexible. You can discuss your specific requirements with our team, and we'll do our best to accommodate them.</p>
            </div>

             <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">Do you offer a discount for multiple events?</h3>
                <p class="text-gray-600">Yes, we offer a discount for clients booking our services for multiple events. Please get in touch with our team for detailed pricing.</p>
            </div>

            <!-- Single FAQ -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">How early should I book your services?</h3>
                <p class="text-gray-600">To ensure availability, especially during peak seasons, we recommend booking our services at least 3-6 months in advance.</p>
            </div>

            <!-- Single FAQ -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">What's your cancellation policy?</h3>
                <p class="text-gray-600">We understand that plans can change. Our cancellation policy allows for full refunds if you cancel 30 days before the event. Any cancellations made within 30 days will be subject to a 50% charge.</p>
            </div>

            <!-- Single FAQ -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-4">Can I provide my own decorations?</h3>
                <p class="text-gray-600">Certainly! While we offer a comprehensive decoration service, we're flexible and can incorporate any personal items or decorations you'd like to provide.</p>
            </div>

        </div>
    </div>
</section>

</x-layout>
