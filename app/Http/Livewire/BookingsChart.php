<?php

namespace App\Http\Livewire;

use App\Models\Booking;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PhpParser\Node\Stmt\Foreach_;

class BookingsChart extends Component
{
    public function render()
    {
        $year = Carbon::now()->year;


        $bookingsPerMonth =
            Booking::selectRaw("strftime('%m', created_at) as month, COUNT(id) as count")->whereYear('created_at', $year)
                ->groupBy(DB::raw("strftime('%m', created_at)"))
                ->get()
                ->keyBy('month')
                ->toArray();
        // dd($bookingsPerMonth)
        ;
        $labels = [];
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = DateTime::createFromFormat('!m', $i)->format('F');
        }

        $bookingsWithMonthNames = [];

        foreach ($bookingsPerMonth as $monthNum => $data) {
            $monthName = DateTime::createFromFormat('!m', $monthNum)->format('F');
            $bookingsWithMonthNames[$monthName] = $data['count'];
        }







        $bookingLabels = $labels;
        $bookingData = $bookingsWithMonthNames;
        return view('livewire.bookings-chart', compact('bookingLabels', 'bookingData'));
    }
}
