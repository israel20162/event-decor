

<div class="shadow rounded  w-11/12 mx-8 p-8 mx-auto">
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 py-4 ">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="uploadImage()">
        <div class="mb-4">
            <label for="imageName" class="block mb-2">Image Upload</label>
            <select name="name" id="name" wire:model='image_id' class="capitalize w-1/3 rounded-lg mx-2 my-2">

                @forelse ($images as $image)
                    <option value="{{ $image->id }}">{{ $image->name }}</option>
                @empty
                    <option selected value='' class="col-span-full text-center text-gray-500">
                        No images Found.
                    </option>
                @endforelse

            </select>
            <input type="search" name="search" wire:model='search' class="rounded-lg mx-2 my-2" id=""
                placeholder='Search Image name...'>
            <label for="page" class="text-sm ml-2"> image page:</label> <select name="page"
                wire:model.debounce.300ms='page' id="page" class="rounded-lg capitalize w-1/6 mx-2 my-2">
                <option value="home">home</option>
                <option value="about">about</option>
            </select>
            <input type="text" wire:model="imageName" id="imageName" class="w-full border px-4 py-2 rounded"
                placeholder="Change Image Name , e.g. homepage_banner">
            @error('imageName')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block mb-2">Select Image</label>
            <input type="file" wire:model="image" accept=".jpeg,.png,.jpg,.svg" id="image">
            @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
    </form>
</div>
