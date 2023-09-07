<div x-data="{ open: @entangle('isOpen') }">
    <!-- The Modal -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-4 rounded shadow-lg w-1/3">
            <h2 class="text-2xl mb-4">Edit Package</h2>

            <form wire:submit.prevent="updatePackage">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name:
                    </label>
                    <input wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Package Name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description:
                    </label>
                    <textarea wire:model="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Package Description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        Price:
                    </label>
                    <input wire:model="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" type="text" placeholder="Package Price">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="services">
                        Services (comma separated):
                    </label>
                    <input wire:model="services" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="services" type="text" placeholder="Item1, Item2, ...">
                </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="suited">
                        Suited For (comma separated):
                    </label>
                    <input wire:model="suited" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="suited" type="text" placeholder="Item1, Item2, ...">
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
                    <button type="button" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600" @click="open = false">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
