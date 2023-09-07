<section class="relative h-min">
    <div class='main-carousel h-full w-full !relative '>

        <img src="{{ Storage::url($image_paths['carousel-image-1']['file_path']) }}"
            onerror="this.onerror=null; this.src='https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/banner2.jpg';"
            alt="banner-1" class="h-8">
        <img src="{{ Storage::url($image_paths['carousel-image-2']['file_path']) }}" alt="banner-2"
            onerror="this.onerror=null;this.src='https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/banner1.jpg'"
            class="h-8">
        <img src="{{ Storage::url($image_paths['carousel-image-3']['file_path']) }}" alt="banner-3"
            onerror="this.onerror=null;this.src='https://www.luzukdemo.com/demo/utsav-event-planner/wp-content/uploads/sites/34/2021/11/slider.jpg' "
            class="h-8">


    </div>
    <div class="absolute   top-0 left-0 right-0   transform ">


        <section class="relative  bg-cover bg-center h-screen" style="">
            <!-- Semi-transparent overlay for better text visibility -->
            <div class="absolute inset-0 bg-black opacity-50 md:max-h-[100%]"></div>

            <!-- Content -->
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
                <!-- Main Heading -->
                <h1 class="text-3xl text-center md:text-6xl font-bold mb-4 text-shadow-md">Transforming Spaces, Creating
                    Memories</h1>

                <!-- Subheading or Description -->
                <p class="text-xl md:text-2xl mb-8 text-center max-w-lg text-shadow-md">Expert event decorations
                    tailored to bring your vision to life.</p>

                <!-- Call to Action Button(s) -->
                <div class="space-x-4">
                    <a href="#services"
                        class="bg-white text-black hover:bg-gray-200 transition-colors py-2 px-6 rounded-lg font-semibold">Our
                        Services</a>
                    <a href="#contact"
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-black transition-colors py-2 px-6 rounded-lg font-semibold">Contact
                        Us</a>
                </div>
            </div>
        </section>
    </div>
</section>
