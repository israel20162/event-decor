<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-6 rounded-xl shadow-md space-y-4">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 8a7 7 0 100-14 7 7 0 000 14z" clip-rule="evenodd" />
            </svg>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Thank You!
            </h2>
        </div>

        <div class="mt-2 text-center text-gray-600">
            Your inquiry has been received. We will get back to you soon!
        </div>

        <!-- Optionally, you can provide a link back to the homepage or any other page -->
        <div class="mt-6 text-center">
            <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-900">Return to Homepage</a>
        </div>
    </div>
</div>
</x-layout>

