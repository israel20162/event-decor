<x-Layout>
    <div class="container mx-auto px-4 py-20 md:py-32">

        <!-- Page Header -->
        <header class="text-center mb-12">
            <h1 class="text-3xl md:text-5xl font-bold">About Us</h1>
            <p class="mt-2 text-gray-600">Discover our story and meet the people that make our brand what it is.</p>
        </header>

        <!-- Our Story -->
        <section class="mb-20">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Our Story</h2>
            <p class="text-gray-700 leading-relaxed">
            <div class="order-1 md:order-2 text-gray-700 pb-16">
                <p class="mb-6">
                    At <span class="text-lg capitalize text-black font-extrabold"> {{ $settings->company_name }}</span>,
                    we believe every event tells a story. Whether it's a dream wedding, a
                    corporate gala, or a milestone birthday, our team is passionate about making every detail
                    unforgettable.
                </p>
                <p class="mb-6">
                    With over a decade in the industry, our expertise ranges from intimate gatherings to grand
                    celebrations. Our commitment to quality and attention to detail ensures that each event not only
                    meets but exceeds our clients' expectations.
                </p>
                <p>
                    Based in <span
                        class="text-lg capitalize text-black font-extrabold">{{ $settings->company_city }}</span>, we're
                    proud to have been a part of over 50 events, each unique and
                    special in its own right. Join us in making your next event truly spectacular.
                </p>
            </div>
            </p>
        </section>

        <!-- Meet the Team -->
        <section class="mb-20">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Meet the Team</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                <!-- Single Team Member -->
                <div class="text-center">
                    <img src="team_member_image.jpg" alt="Team Member Name" class="w-48 h-48 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-medium">Team Member Name</h3>
                    <p class="text-blue-500">Role/Position</p>
                </div>

                <!-- ... (Other team members) ... -->
            </div>
        </section>

        <!-- Our Values or Mission -->
        <section>
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Our Values</h2>
            <p class="text-gray-700 leading-relaxed">
                At Our Company, we believe in integrity, dedication, and passion. Our mission is to provide the best
                services and products to our customers while making a positive impact on the world. We strive for
                excellence in everything we do and aim to inspire others with our work.
            </p>
        </section>

    </div>

</x-Layout>
