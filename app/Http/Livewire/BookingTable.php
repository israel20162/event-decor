<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;


class BookingTable extends Component
{
    use WithPagination; // Enable pagination

    public $search = ''; // Search term
    public $sortField = 'created_at'; // default sort field
    public $sortDirection = 'desc'; // default sort direction

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }
    public function accept(Booking $booking)
    {
        $booking->update([
            "status" => 'accepted'
        ]);
    }
    public function render()
    {
        $bookings = Booking::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10); // Example pagination by 10 items per page

        return view('livewire.booking-table', ['bookings' => $bookings]);
    }
}
