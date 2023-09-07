<div class="max-w-7xl mx-auto p-6 bg-white rounded shadow-md mt-5">
    <h2 class="text-2xl font-bold mb-5 text-gray-700">View Packages</h2>


{{-- <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Commenter
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Comment
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Post
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Actions
                </th>

            </tr>
        </thead>
        <tbody>
            @forelse ($comments as $comment)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-gray-900 capitalize whitespace-no-wrap">
                                    {{ $comment->name }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 first-letter:capitalize bg-white text-sm">
                        <p class="text-gray-700 whitespace-no-wrap">
                            {{ Str::limit($comment->body, 100) }}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-700 capitalize whitespace-no-wrap">
                            {{ $comment->post->title }}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b flex items-center  border-gray-200 bg-white text-sm">
                        <button onclick="confirm('Are you sure you want to approve the comment?') || event.stopImmediatePropagation()"
                             wire:click='approveComment({{ $comment->id }})'
                            class="cursor-pointer text-indigo-600 hover:text-indigo-900">Approve</button>
                        <span class="cursor-pointer px-2 text-gray-400">|</span>
                        <button  onclick="confirm('Are you sure you want to delete the comment?') || event.stopImmediatePropagation()" wire:click='deleteComment({{ $comment->id }})' class="cursor-pointer text-red-600 hover:text-red-900">
                            Delete</button>
                             <img wire:loading.delay src="{{asset('svg/spinner.svg')}}" class="h-8 w-8 ml-4 object-cover !bg-transparent" alt="">
                    </td>

                </tr>
                @empty
<td colspan="5" class="px-5 py-5 text-center text-2xl border-b border-gray-200 bg-white ">
                        <p class="text-gray-700 capitalize whitespace-no-wrap">
                            No Comments
                        </p>
                    </td>
            @endforelse
        </tbody>
    </table> --}}
<div class="overflow-x-auto">
     <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Services</th>
                 <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Suited for</th>
                  <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">No of Inquiries</th>
                <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody >
            @foreach($packages as $package)
                <tr>
                    <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm">{{ $package->name }}</td>
                    <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm capitalize">{{ Str::limit($package->description, 50) }}</td>
                    <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm">&#x20A6; {{ number_format($package->price, 2) }}</td>
                    <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm">
                        <ol>
                            @foreach(json_decode($package->services) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                    </td>
                     <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm">
                        <ol>
                            @foreach(json_decode($package->suited_for) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                    </td>
                    <td class="px-5 whitespace-nowrap   py-5 border-b border-gray-200 bg-white text-sm">{{$bookings->where('package', 'ilike', strtolower($package->name))->count()}}</td>
                    <td class="px-5 py-5  border-b border-gray-200 bg-white text-sm">
                        <button wire:click="$emit('showEditModal', {{ $package->id }})" class="bg-blue-500 text-white px-4 py-2 border rounded-md hover:border-indigo-500 hover:text-black ">
                            Edit
                        </button>
                        <button class="bg-red-500 text-white px-4 py-2 border rounded-md hover:border-red-500 hover:text-black ">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
