<x-Layout>

    <!-- Blog Post Page -->
    <div class="container mx-auto px-4 py-8 md:py-20">

        <!-- Blog Post Content -->
        <article class="space-y-6 md:space-y-8">

            <!-- Blog Post Header -->
            <header class="text-center space-y-4">
                <!-- Blog Post Title -->
                <h1 class="text-3xl md:text-5xl capitalize font-bold">{{ $post->title }}</h1>
            </header>

            <!-- Cover Image -->
            <figure class="mb-4 md:mb-8">
                <img src="{{ Storage::url($post->image) }}" alt="Blog Post Cover Image"
                    class="md:rounded-lg w-full h-48 md:h-96 object-cover shadow-sm md:shadow-md">
            </figure>

            <!-- Author and Date -->
            <div class="flex flex-col items-center justify-center text-center space-y-2 md:space-y-4 mb-4 md:mb-6">
                <img src="{{ asset('svg/avatar.svg') }}" alt="A" class="w-16 h-16 rounded-full">
                <div class="text-gray-600 capitalize">
                    <p class="font-medium text-lg">{{ $post->author->name }}</p>
                    <p class="text-sm">{{ date('M j,Y', strtotime($post->created_at)) }}</p>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="prose prose-blue capitalize first-letter:!capitalize md:prose-xl text-gray-700 mx-auto">
                {!! html_entity_decode($post->body) !!}
            </div>

        </article>

        <!-- Comments Section -->
        <section class="mt-12 space-y-8">
            <h2 class="text-2xl md:text-3xl font-bold">Comments</h2>

            <!-- List of Comments -->
            <ul class="space-y-6">
                 @if ($post->comments->where('name', request()->cookie('user_name'))->where('is_approved',0)->first())
                          <li class="p-4 border rounded-lg relative ">
                            <div class="bg-gray-900 opacity-10 absolute rounded-lg inset-0 w-auto h-full text-white text-center capitalize flex justify-center items-center text-2xl "> <span>comment awaiting moderation</span></div>
                            <div
                                class=" grid grid-cols-2 gap-0 md:gap-y-4 items-start md:items-center space-y-4 md:space-y-0 md:space-x-4">
                                <div class="col-span-2 flex flex-wrap justify-start items-center gap-2 md:gap-4"> <img
                                        src="{{ asset('svg/avatar.svg') }}" alt="Commenter Name"
                                        class="w-8 h-8 md:h-12 md:w-12 rounded-full  md:mb-0">
                                    <div class="text-gray-700 whitespace-nowrap text-lg capitalize font-semibold">
                                        {{ $post->comments->where('name', request()->cookie('user_name'))->first()->name }}</div>
                                    <p class="text-sm font-light basis-auto">Created at: <span class="font-bold">
                                            {{ date('M j,Y', strtotime($post->comments->where('name', request()->cookie('user_name'))->first()->created_at)) }} </span></p>
                                </div>

                                <div class="space-y-2 col-span-2">

                                    <p
                                        class="text-gray-600 first-letter:capitalize  text-sm line-clamp-3 text-ellipsis !whitespace-normal w-full">
                                        {{ $post->comments->where('name', request()->cookie('user_name'))->first()->body }}</p>
                                </div>
                            </div>
                        </li>
                        @endif
                @forelse ($post->comments  as $comment)
                    @if ($comment->is_approved)
                        <li class="p-4 border rounded-lg">
                            <div
                                class=" grid grid-cols-2 gap-0 md:gap-y-4 items-start md:items-center space-y-4 md:space-y-0 md:space-x-4">
                                <div class="col-span-2 flex flex-wrap justify-start items-center gap-2 md:gap-4"> <img
                                        src="{{ asset('svg/avatar.svg') }}" alt="Commenter Name"
                                        class="w-8 h-8 md:h-12 md:w-12 rounded-full  md:mb-0">
                                    <div class="text-gray-700 whitespace-nowrap text-lg capitalize font-semibold">
                                        {{ $comment->name }}</div>
                                    <p class="text-sm font-light basis-auto">Created at: <span class="font-bold">
                                            {{ date('M j,Y', strtotime($comment->created_at)) }} </span></p>
                                </div>

                                <div class="space-y-2 col-span-2">

                                    <p
                                        class="text-gray-600 first-letter:capitalize  text-sm line-clamp-3 text-ellipsis !whitespace-normal w-full">
                                        {{ $comment->body }}</p>
                                </div>
                            </div>
                        </li>
                    @else

                    @endif

                @empty
                    <li class="text-center-text-2xl font-bold-text-gray-900 w-full">
                        No Comments
                    </li>
                @endforelse

            </ul>

            <!-- Comment Form -->
            <div class="border rounded-lg p-4 md:p-6 mt-8">
                <h3 class="text-lg md:text-xl font-semibold mb-4">Leave a Comment</h3>
                <form action="{{ route('post.comment', ['postId' => $post->id]) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <textarea name="body" rows="4" class="w-full p-3 border rounded-md" placeholder="Your Comment..."></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" name="name" placeholder="Your Name" class="p-3 border rounded-md"
                            value="{{ old('name', request()->cookie('user_name')) }}" required>
                        <input type="email" name="email" placeholder="Your Email (won't be displayed)"
                            class="p-3 border rounded-md" value="{{ old('name', request()->cookie('user_email')) }}">
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Submit
                        Comment</button>
                </form>
            </div>
        </section>


    </div>






</x-Layout>
