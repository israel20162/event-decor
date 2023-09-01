<div class="container mx-auto  ">

    <style>
        .no-scroll {
            -ms-overflow-style: none;
            /* Hide scrollbar for IE & Edge */
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */

        }
    </style>
    <!-- Search Input -->
    <div class="mb-4 flex justify-end">
        <input wire:model.debounce.300ms="search" type="text" placeholder="Search bookings..."
            class="px-4 py-2 border  rounded">
    </div>

    <!-- Data Table -->
    <table class="w-full no-scroll overflow-scroll">
        <!-- Table Header -->
        <thead>
            <tr>
                <th class="border px-4 py-2 cursor-pointer" wire:click="sortBy('name')">
                    <div class="flex justify-center items-center gap-1 text-lg">
                        Customer Name
                        @if ($sortField === 'name')
                            <span>
                                @if ($sortDirection === 'asc')
                                    <img src="{{ asset('svg/chevron-up.svg') }}" class="w-4 h-4"
                                    alt="selctor">@else<img src="{{ asset('svg/chevron-down.svg') }}"
                                        class="w-4 h-4" alt="selctor">
                                @endif
                            </span>
                        @else
                            <img src="{{ asset('svg/chevron-selector.svg') }}" class="w-4 h-4" alt="selctor">
                        @endif
                    </div>

                </th>
                <th class="border px-4 py-2 cursor-pointer  " wire:click="sortBy('email')">
                    <div class="flex justify-center items-center gap-1 text-lg">
                        Email
                        @if ($sortField === 'email')
                            <span>
                                @if ($sortDirection === 'asc')
                                    <img src="{{ asset('svg/chevron-up.svg') }}" class="w-4 h-4"
                                    alt="selctor">@else<img src="{{ asset('svg/chevron-down.svg') }}"
                                        class="w-4 h-4" alt="selctor">
                                @endif
                            </span>
                        @else
                            <img src="{{ asset('svg/chevron-selector.svg') }}" class="w-4 h-4" alt="selctor">
                        @endif
                    </div>

                </th>
                <th class="border px-4 py-2 cursor-pointer whitespace-nowrap " wire:click="sortBy('phone')">
                    <div class="flex justify-center items-center gap-1 text-lg">
                        Contact
                        @if ($sortField === 'phone')
                            <span>
                                @if ($sortDirection === 'asc')
                                    <img src="{{ asset('svg/chevron-up.svg') }}" class="w-4 h-4"
                                    alt="selctor">@else<img src="{{ asset('svg/chevron-down.svg') }}"
                                        class="w-4 h-4" alt="selctor">
                                @endif
                            </span>
                        @else
                            <img src="{{ asset('svg/chevron-selector.svg') }}" class="w-4 h-4" alt="selctor">
                        @endif
                    </div>
                </th>
                <th class="border px-4 py-2 cursor-pointer whitespace-nowrap " wire:click="sortBy('event_date')">
                    <div class="flex justify-center items-center gap-1 text-lg">
                        Event Date
                        @if ($sortField === 'event_date')
                            <span>
                                @if ($sortDirection === 'asc')
                                    <img src="{{ asset('svg/chevron-up.svg') }}" class="w-4 h-4"
                                    alt="selctor">@else<img src="{{ asset('svg/chevron-down.svg') }}"
                                        class="w-4 h-4" alt="selctor">
                                @endif
                            </span>
                        @else
                            <img src="{{ asset('svg/chevron-selector.svg') }}" class="w-4 h-4" alt="selctor">
                        @endif
                    </div>
                </th>
                <th class="border px-4 py-2 cursor-pointer whitespace-nowrap " wire:click="sortBy('status')">
                    <div class="flex justify-center items-center gap-1 text-lg">Status
                        @if ($sortField === 'status')
                            <span>
                                @if ($sortDirection === 'asc')
                                    <img src="{{ asset('svg/chevron-up.svg') }}" class="w-4 h-4"
                                    alt="selctor">@else<img src="{{ asset('svg/chevron-down.svg') }}"
                                        class="w-4 h-4" alt="selctor">
                                @endif
                            </span>
                        @else
                            <img src="{{ asset('svg/chevron-selector.svg') }}" class="w-4 h-4" alt="selctor">
                        @endif
                    </div>
                </th>
                <th class="border px-4 py-2 cursor-pointer whitespace-nowrap ">
                    <div class="flex justify-center items-center gap-1 text-lg">
                        Actions

                    </div>
                </th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody class="h-max">
            @foreach ($bookings as $booking)
                <tr class="border border-b">
                    <td class="w-1/3 capitalize text-left py-3 px-4">{{ $booking->name }}
                    </td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $booking->email }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $booking->phone }}</td>
                    <td class="w-1/3 text-left py-3 px-4  whitespace-nowrap">
                        {{ date('M j,Y', strtotime($booking->event_date)) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($booking->status == 'pending')
                            <span
                                class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-lg bg-yellow-200 text-yellow-800">
                                Pending
                            </span>
                        @elseif($booking->status == 'accepted')
                            <span
                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg bg-green-200 text-green-800">
                                Accepted
                            </span>
                        @else
                            <span
                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg bg-red-200 text-red-800">
                                Declined
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('booking.show', $booking) }}"
                            class="text-blue-600 hover:text-blue-900">View</a>
                        <a wire:click='accept({{ $booking }})'
                            class="ml-4 cursor-pointer text-green-600 hover:text-green-900 @if ($booking->status == 'accepted') !text-gray-500 hover:!text-gray-800 @endif">Accept</a>
                        <form action="{{ route('booking.destroy', $booking) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $bookings->links() }}
    </div>
</div>
