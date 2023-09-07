 <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-4">
     <!-- Image -->

     <a href="{{ route('blog.single', ['slug' => $slug]) }}">
         <img src="{{ Storage::url($image) }}" alt="Blog Post Image"
             class="rounded-lg w-full h-64 object-cover mb-6 hover:opacity-90 transition-opacity duration-300">
     </a>

     <!-- Content -->
     <div class="space-y-4">
         <h3 class="text-2xl font-semibold"><a href="{{ route('blog.single', ['slug' => $slug]) }}" class="capitalize ">{{ $title }}</a></h3>
         <div class="text-gray-600 !my-4 !capitalize text-base !line-clamp-3 text-ellipsis !whitespace-normal">{!! html_entity_decode($body) !!}</div>
         <a href="{{ route('blog.single', ['slug' => $slug]) }}" class="text-blue-500 hover:underline">Read More</a>

         <!-- Meta Info -->
         <div class="flex items-center justify-between mt-6 text-sm text-gray-500 capitalize">
             <span><span class="font-bold">By:</span><i class="fas fa-user mr-2"></i>{{ $author }}</span>
             <span><i class="fas fa-calendar-alt mr-2">{{ date('M j,Y', strtotime($created_at)) }}</i></span>
         </div>
     </div>
 </div>
