<x-Layout>
    {{-- @dd($image_paths) --}}
 {{-- front page carousel --}}
@include('sections.carousel',['image_paths'=>$image_paths])


 {{-- arrange events section --}}
   @include('sections.arrange')

    {{-- services --}}
@include('sections.services')


        {{-- About us --}}
    @include('sections.about',['settings'=>$settings])

<!-- Portfolio/Gallery Section -->



{{-- how we work section --}}
@include('sections.how-we-work')


<!-- Contact Us Section -->
@include('sections.contact',['settings'=>$settings])


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
@include('sections.packages',['packages'=>$packages])

<!-- Blog Section -->
@include('sections.blog-posts',['posts'=>$blog_posts])



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
