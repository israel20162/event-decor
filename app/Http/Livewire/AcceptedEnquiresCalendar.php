<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;
use Carbon\Carbon;


class AcceptedEnquiresCalendar extends LivewireCalendar
{

    public function events(): Collection
    {

        return Booking
            ::where('status','accepted')->whereDate('created_at', '>=',  Carbon::now()->startOfMonth())
            ->whereDate('created_at', '<=', Carbon::now()->endOfMonth())
            ->get()
            ->map(function (Booking $model) {
                return [
                    'id' => $model->id,
                    'title' => $model->name,
                    'description' =>   $model->additional_notes,
                    'date' => $model->event_date,
                ];
            });
    }
}
