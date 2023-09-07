<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Packages') }}
        </h2>
    </x-slot>
    <main x-data="{ tab: 'view' }" class="flex flex-col gap-">
        <div class=" py-4 w-full">
            <div class="max-w-full w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-md">
                    <nav class="-mb-px flex space-x-8">

                        <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab === 'view' }" @click="tab = 'view'">
                           Packages
                        </button>
                           <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab == 'create' }" @click="tab = 'create'">
                            Create Package
                        </button>



                        <!-- Manage Comments Tab -->
                        <button
                            class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 "
                            :class="{ '!border-gray-500 ': tab === 'manage' }" @click="tab = 'manage'">
                            Manage Comments
                        </button>

                    </nav>
                </div>
            </div>
        </div>

        <div x-show="tab === 'view'">
            @livewire('edit-package')
 @livewire('view-package')
        </div>
           <div x-show="tab === 'create'">
            @livewire('create-package')
        </div>

        <div x-show="tab === 'manage'">

        </div>



    </main>
    @push('scripts')
 <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @endpush
</x-app-layout>
