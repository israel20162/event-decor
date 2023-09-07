<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;
use App\Models\Package;
class ViewPackage extends Component
{
    protected $listeners = [
        '$refresh',
        'packageUpdated'=>'render',
    ];
    public function render()
    {
        return view('livewire.view-package',[
            'packages'=>Package::all(),
            'bookings'=>Booking::get(),
        ]);
    }
}
