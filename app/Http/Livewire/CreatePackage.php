<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;

class CreatePackage extends Component
{
    public $name;
    public $description;
    public $price;
    public $services;

    public $suited;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'services' => 'required|string'
    ];

    public function createPackage()
    {
        $this->validate();

        $servicesArray = array_map('trim', explode(',', $this->services));
        $suitedForArray = array_map('trim', explode(',', $this->suited));

        Package::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'services' => json_encode($servicesArray),
            'suited_for' => json_encode($suitedForArray)
        ]);
        $this->reset(['name', 'description', 'price', 'services','suited']);
        session()->flash('success', 'Package created successfully.');
        $this->emitTo('view-package', '$refresh');
        // return redirect()->to('/packages'); // Adjust to your actual route
    }

    public function render()
    {
        return view('livewire.create-package');
    }
}
