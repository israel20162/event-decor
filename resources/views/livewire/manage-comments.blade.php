<div class="container mx-auto mt-12 p-4 bg-white rounded shadow-lg">
    <h2 class="text-2xl mb-6 font-bold">Unapproved Comments</h2>

    <table class="min-w-full leading-normal">
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
    </table>
</div>
