<x-Layout>

    <!-- Blog Post Page -->
    <div class="container mx-auto px-4 py-8 md:py-20">

        <!-- Blog Post Content -->
        <article class="space-y-6 md:space-y-8">

            <!-- Blog Post Header -->
            <header class="text-center space-y-4">
                <!-- Blog Post Title -->
                <h1 class="text-3xl md:text-5xl font-bold">Blog Post Title</h1>
            </header>

            <!-- Cover Image -->
            <figure class="mb-4 md:mb-8">
                <img src='{{ asset('woman1.jpg') }}' alt="Blog Post Cover Image"
                    class="md:rounded-lg w-full h-48 md:h-96 object-cover shadow-sm md:shadow-md">
            </figure>

            <!-- Author and Date -->
            <div class="flex flex-col items-center justify-center text-center space-y-2 md:space-y-4 mb-4 md:mb-6">
                <img src="author_image_path.jpg" alt="Author Name" class="w-16 h-16 rounded-full">
                <div class="text-gray-600">
                    <p class="font-medium text-lg">Author Name</p>
                    <p class="text-sm">Published on 25th Jan 2023</p>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="prose prose-blue md:prose-xl text-gray-700 mx-auto">
                <!-- Your blog post content will go here... -->
            </div>

        </article>

        <!-- Comments Section -->
        <section class="mt-12 space-y-8">
            <h2 class="text-2xl md:text-3xl font-bold">Comments</h2>

            <!-- List of Comments -->
            <ul class="space-y-6">
                <!-- Single Comment -->
                <li class="p-4 border rounded-lg">
                    <div
                        class=" grid grid-cols-2 gap-0 md:gap-y-4 items-start md:items-center space-y-4 md:space-y-0 md:space-x-4">
                        <div class="col-span-2 flex flex-wrap justify-start items-center gap-2 md:gap-4"> <img
                                src="{{ asset('svg/avatar.svg') }}" alt="Commenter Name"
                                class="w-8 h-8 md:h-12 md:w-12 rounded-full  md:mb-0">
                            <div class="text-gray-700 whitespace-nowrap text-lg font-semibold">Commenter Name</div>
                            <p class="text-sm font-light basis-auto">Created at: <span class="font-bold"> August 17,2023</span></p>
                        </div>

                        <div class="space-y-2 col-span-2">

                            <p class="text-gray-600  text-sm line-clamp-3 text-ellipsis !whitespace-normal w-full">This is a sample comment Comments add valuable
                                perspectives to the post.</p>
                        </div>
                    </div>
                </li>
                <!-- More comments can be added in a similar manner -->
            </ul>

            <!-- Comment Form -->
            <div class="border rounded-lg p-4 md:p-6 mt-8">
                <h3 class="text-lg md:text-xl font-semibold mb-4">Leave a Comment</h3>
                <form action="path_to_your_backend_script" method="POST">
                    <div class="mb-4">
                        <textarea name="comment" rows="4" class="w-full p-3 border rounded-md" placeholder="Your Comment..."></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" name="name" placeholder="Your Name" class="p-3 border rounded-md">
                        <input type="email" name="email" placeholder="Your Email (won't be displayed)"
                            class="p-3 border rounded-md">
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Submit
                        Comment</button>
                </form>
            </div>
        </section>


    </div>






</x-Layout>
