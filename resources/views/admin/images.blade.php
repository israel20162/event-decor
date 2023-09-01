<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Images') }}
        </h2>
    </x-slot>

    <main class="flex flex-col gap-16">
        @livewire('image-view')

        <!-- Image Upload Form -->
        @livewire('image-upload')

        {{-- <div class="mt-12">
        <h2 class="text-xl mb-4">Upload New Image</h2>
        <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2">Image Name</label>
                <input type="text" name="name" id="name" placeholder="e.g. homepage_banner" class="w-full border px-4 py-2 rounded" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block mb-2">Select Image</label>
                <input type="file" name="image" accept="jpeg,png,jpg" id="image" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Upload</button>
        </form>
    </div> --}}
        </div>
    </main>
</x-app-layout>
