<div class="container mx-auto  p-4">
    <h2 class="text-2xl mb-3 font-bold ">Manage Blog Posts</h2>

    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
        <table class=" w-full whitespace-no-wrap bg-white  relative">
             <thead>
            <tr>
                <th
                    class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Title
                </th>

                <th
                    class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Post
                </th>
                <th
                    class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
No. comments
                </th>
                   <th
                    class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                </th>
                <th
                    class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Actions
                </th>

            </tr>
        </thead>
            <tbody>
                @foreach($blogPosts as $post)
                    <tr>
                       <td class="px-10 py-5  border-gray-200 bg-white text-sm">
                        <div class="text-gray-700 flex items-center capitalize whitespace-no-wrap">
                            {{ $post->title }}
                        </d>
                    </td>
                       <td class="px-10 py-5  border-gray-200 bg-white text-sm">
                       <div class="text-gray-600 mb-4 !my-4 !capitalize text-base line-clamp-3 w-16 !text-ellipsis !whitespace- max-w-16">{!!html_entity_decode($post->body)!!}</div>
                    </td>
                     </td>
                       <td  class="px-10 py-5  border-gray-200 bg-white text-sm">
                        <div class="text-gray-700 flex items-center capitalize whitespace-no-wrap">
{{$post->comments->count()}}
                        </div>
                    </td>
</td>
                       <td class="px-10 py-5  border-gray-200 bg-white text-sm">
                        <div class="text-gray-700 flex items-center capitalize whitespace-no-wrap">

                        </div>
                    </td>

                        <td class="px-5 py-5  flex items-center   border-gray-200 bg-white text-sm">
                        <button onclick="confirm('Are you sure you want to approve the comment?') || event.stopImmediatePropagation()"
                             wire:click='approveComment({{ $post->id }})'
                            class="cursor-pointer text-indigo-600 hover:text-indigo-900">Approve</button>
                        <span class="cursor-pointer px-2 text-gray-400">|</span>
                        <button  onclick="confirm('Are you sure you want to delete the comment?') || event.stopImmediatePropagation()" wire:click='deleteComment({{ $post->id }})' class="cursor-pointer text-red-600 hover:text-red-900">
                            Delete</button>
                            <span class="cursor-pointer px-2 text-gray-400">|</span>
                             <a href="{{route('blog.single',['slug'=>$post->slug])}}"  class="cursor-pointer text-blue-600 hover:text-blue-900">
                            View</a>
                             <img wire:loading.delay src="{{asset('svg/spinner.svg')}}" class="h-8 w-8 ml-4 object-cover !bg-transparent" alt="">
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
