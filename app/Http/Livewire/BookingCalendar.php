<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingCalendar extends Component
{
    public $events = [];

    public function mount()
    {
        $this->events = Booking::where('status', 'accepted')->get()->map(function ($booking) {
            return [
                'id' => $booking->id,
                'title' => 'Accepted Booking',
                'start' => $booking->date,
            ];
        })->toArray();
    }
    public function render()
    {
        return view('livewire.booking-calendar');
    }
}
