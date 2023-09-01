<x-app-layout>
    <a href="{{ url()->previous() }}" class="flex   text-white font-bold  px-4 rounded">
   <img src="{{asset('svg/arrow-back.svg')}}" class="h-12 w-12" alt="">
</a>

    <div class="container mx-auto mt-4 max-h-full h-screen">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Booking Details</h1>

        <div class="mb-4">
            <h2 class="text-xl mb-2">Booking Info:</h2>
            <p class="capitalize"><strong>Name:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Phone:</strong> {{ $booking->phone }}</p>
            <p><strong>Event Date:</strong> {{date('M j,Y',strtotime($booking->event_date)) }}</p>
            <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-xl mb-2">Message:</h2>
            <p>{{ $booking->additional_notes }}</p>
        </div>

        <div class="flex">
            {{-- <a href="{{ route('bookings.edit', $booking->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit Booking</a> --}}
            <form action="{{ route('booking.destroy', $booking) }}" method="POST" class="ml-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete Booking</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
