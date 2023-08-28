<div class="p-4 hover:scale-105 transition-all duration-300 hover:opacity-95  ease-linear">
    <!-- Well begun is half done. - Aristotle -->
    <div class=" object-contain bject-fill  rounded overflow-hidden shadow-lg">
        <img class="w-full md:h-56" src="{{ $image }}" alt="{{ $title }}">
        <div class="px-8 py-6">
            <div class="font-bold text-xl mb-2">{{ $title }}</div>
            <p class="text-gray-700 text-base line-clamp-3 text-ellipsis !whitespace-normal">
                {{ $description }}
            </p>
        </div>
    </div>

</div>
