<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;

class EditPackage extends Component
{
    public $isOpen = false;
    public $packageId;
    public $name;
    public $description;
    public $price;
    public $services;

    public $suited;

    protected $listeners = ['showEditModal' => 'openModal'];

    public function openModal($packageId)
    {
        $this->isOpen = true;
        $package = Package::find($packageId);
        $this->packageId = $package->id;
        $this->name = $package->name;
        $this->description = $package->description;
        $this->price = $package->price;
        $this->services = implode(", ", json_decode($package->services));
        $this->suited = implode(", ", json_decode($package->suited_for));
    }

    public function updatePackage()
    {
        $package = Package::find($this->packageId);
        $package->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'services' => json_encode(explode(", ", $this->services)),
            'suited_for' => json_encode(explode(", ", $this->suited))
        ]);

        $this->isOpen = false;
        session()->flash('success', 'Package updated successfully.');
        $this->emit('packageUpdated'); // If you want a listener to refresh package list
    }

    public function render()
    {
        return view('livewire.edit-package');
    }
}
