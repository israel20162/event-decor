<section class="py-20 !max-w-full" id="blog">
    <div class="container mx-auto px-4 md:px-0 text-center">

        <!-- Section Heading -->
        <h2 class="text-4xl font-bold mb-8">Latest From Our Blog</h2>

        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-3 gap-12">

            @forelse ($posts as $post)
 <div class="bg-white rounded-lg shadow-md max-w-[100vw] md:max-w-full">
                <img src="{{ Storage::url($post->image) }}" alt="Blog Post Title" class="rounded-t-lg w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4 capitalize"><a href="{{ route('blog.single', ['slug' => $post->slug]) }}" class="hover:text-blue-600">{{$post->title}}</a></h3>
                    <div class="text-gray-600 mb-4 !my-4 !capitalize text-base line-clamp-5 !text-ellipsis !whitespace-normal">{!!html_entity_decode($post->body)!!}</div>
                    <a href="{{ route('blog.single', ['slug' => $post->slug]) }}" class="text-blue-500 hover:underline">Read More</a>
                </div>
            </div>
            @empty
<div class="col-span-3 text-3xl">No posts</div>
            @endforelse

            <!-- Single Blog Post Preview -->


            <!-- ... (Repeat for other blog post previews) ... -->

        </div>
    </div>
</section>
