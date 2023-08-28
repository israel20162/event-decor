<x-Layout><!-- Blog Page -->
   <!-- Blog Page -->
<div class="container mx-auto py-20 px-4 md:px-0">

    <!-- Page Heading -->
    <h1 class="text-5xl font-bold mb-12 text-center">Our Blog</h1>

    <!-- Blog Posts List -->
    <div class="grid md:grid-cols-2 gap-12">

        <!-- Single Blog Post Entry -->
        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-4">
            <!-- Image -->
            <a href="#">
                <img src="{{ asset('execution.svg') }}" alt="Blog Post Title" class="rounded-lg w-full h-64 object-cover mb-6 hover:opacity-90 transition-opacity duration-300">
            </a>

            <!-- Content -->
            <div class="space-y-4">
                <h3 class="text-2xl font-semibold"><a href="#" class="hover:text-blue-600">Blog Post Title</a></h3>
                <p class="text-gray-600">A brief description or excerpt from the blog post...</p>
                <a href="{{ route('blog.single',['slug'=>'title']) }}" class="text-blue-500 hover:underline">Read More</a>

                <!-- Meta Info -->
                <div class="flex items-center justify-between mt-6 text-sm text-gray-500">
                    <span><i class="fas fa-user mr-2"></i>Author Name</span>
                    <span><i class="fas fa-calendar-alt mr-2"></i>25th Jan 2023</span>
                </div>
            </div>
        </div>

           <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-4">
            <!-- Image -->
            <a href="#">
                <img src="{{ asset('execution.svg') }}" alt="Blog Post Title" class="rounded-lg w-full h-64 object-cover mb-6 hover:opacity-90 transition-opacity duration-300">
            </a>

            <!-- Content -->
            <div class="space-y-4">
                <h3 class="text-2xl font-semibold"><a href="#" class="hover:text-blue-600">Blog Post Title</a></h3>
                <p class="text-gray-600">A brief description or excerpt from the blog post...</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>

                <!-- Meta Info -->
                <div class="flex items-center justify-between mt-6 text-sm text-gray-500">
                    <span><i class="fas fa-user mr-2"></i>Author Name</span>
                    <span><i class="fas fa-calendar-alt mr-2"></i>25th Jan 2023</span>
                </div>
            </div>
        </div>

        <!-- ... (Repeat for other blog entries) ... -->

    </div>

    <!-- Pagination (if needed) -->
    <div class="mt-12 text-center">
        <a href="#" class="text-blue-500 mx-2 hover:underline">1</a>
        <a href="#" class="text-blue-500 mx-2 hover:underline">2</a>
        <a href="#" class="text-blue-500 mx-2 hover:underline">3</a>
        <!-- ... -->
    </div>

</div>

</x-Layout>
