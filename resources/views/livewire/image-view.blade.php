<section>
    <div class="container mx-auto mt-12">
        <h1 class="text-2xl mb-6">Manage Site Images</h1>
        <div class="container mx-auto mt-12">
            <h1 class="text-2xl mb-6">View Site Images</h1>

            <!-- Display uploaded images -->
            <div class="flex justify-end itmes-center">
                <input type="search" name="search" wire:model.debounce.300ms='search' class="rounded-lg mx-2 my-2"
                    id="" placeholder='Search Image name...'>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($images as $image)
                    <div class="border p-4">
                        <img src="{{ Storage::url($image->file_path) }}" alt="{{ $image->name }}"
                            class="w-full h-40 object-cover mb-4">
                        <h2 class="text-xl mb-2">{{ ucfirst(str_replace('_', ' ', $image->name)) }}</h2>
                    </div>
                @empty
                    <option value="null" selected class="col-span-full text-center text-gray-500">
                        No images have been uploaded.
                    </option>
                @endforelse
            </div>

            <!-- Display uploaded images with options to replace or delete -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($images as $image)
                    <div class="border p-4">
                        <img src="{{ Storage::url($image->file_path) }}" alt="{{ $image->name }}"
                            class="w-full h-40 object-cover mb-4">
                        <h2 class="text-xl mb-2">{{ ucfirst(str_replace('_', ' ', $image->name)) }}</h2>

                        <!-- Replace Image Form -->
                        <form action="{{ route('admin.images.update', $image) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <input type="file" name="image" required>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Replace</button>
                        </form>

                        <!-- Delete Image Form -->
                        <div
                             method="POST" class="mt-4">
                         
                            <button type="submit" onclick="confirm('Are you sure you want to delete the image?') || event.stopImmediatePropagation()"
                            wire:click='deleteImage({{ $image }})'
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $images->links() }}
            </div>
</section>
