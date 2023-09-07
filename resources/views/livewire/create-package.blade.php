<div class="max-w-7xl mx-auto p-4 bg-white rounded shadow-md mt-5">
    <h2 class="text-2xl font-bold mb-5 text-gray-700">Create New Package</h2>

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="createPackage">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Package Name:</label>
            <input type="text" wire:model="name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description:</label>
            <textarea wire:model="description" rows="3"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price (N):</label>
            <input type="number" step="0.01" wire:model="price"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('price')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="items">Services Offered (comma
                separated):</label>
            <textarea wire:model="services" rows="3"
                placeholder="eg: Venue Decoration, Seating Arrangements, Basic Lighting, Consultation
"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('services')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
         <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="items">Best Suited For (comma
                separated):</label>
            <textarea wire:model="suited" rows="3"
                placeholder="eg: Small gatherings,Intimate events,Quick setups"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('suited')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                Create Package
            </button>
        </div>
    </form>
</div>
