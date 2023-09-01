<?php

namespace App\Http\Livewire;

use App\Models\SiteImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ImageView extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = [
        '$refresh'
    ];
    public function deleteImage(SiteImage $image)
    {
        Storage::disk('public')->delete($image->file_path);
        $image->update([
            'file_path' => ''
        ]);

    }
    public function render()
    {
        return view('livewire.image-view', [
            'images' => SiteImage::where('name', 'like', '%' . $this->search . '%')->paginate(3),
        ]);
    }
}