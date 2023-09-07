<main>
    <div class="container mx-auto mt-12 p-4 bg-white rounded shadow-lg">
        <h1 class="text-2xl mb-6">Create New Blog Post</h1>

        @if (session()->has('message'))
            <div class="alert alert-success mb-4">
                {{ session('message') }}
            </div>
        @endif

        <!-- Post Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
            <input type="text" wire:model.defer="title" id="title" class="mt-1 p-2 w-full border rounded-md">
            @error('title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        {{-- post image --}}


        @livewire('upload-cover-image')





        <!-- Post Body (Markdown) -->
        <div class="my-6">

            <label for="body" class="block text-sm font-medium text-gray-700">Post Content</label>
            <textarea id="editor"></textarea>
            @error('body')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Markdown Preview -->
        <div class="mb-6 p-4 border rounded bg-gray-100">
            <div id="markdown-preview"></div>
        </div>

        <button
            wire:click="submitPost(DOMPurify.sanitize(tinymce
                                .activeEditor.getContent()))"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Publish
            Post <div wire:loading.delay wire:target='submitPost' class='text-green-500  inset-0'>
                <img src="{{ asset('svg/spinner.svg') }}" class="h-8 w-8" alt="" srcset="">
            </div></button>
    </div>



    <div class="fixed z-50 hidden inset-0 bg-gray-900 opacity-50">

    </div>


    </div>

    </div>
</main>
