<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SiteImage;
use Livewire\WithPagination;

class ImageUpload extends Component
{
    use WithFileUploads, WithPagination;


    public $image;
    public $imageName='';
    public $image_id=1;

    public $page_name = 'home';
    public $search;

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function uploadImage(SiteImage $image)
    {
        $this->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            // 2MB Max
            'imageName' => 'string|nullable',

        ]);




        // Store the image path in the database (adjust this to your needs)
        $image=SiteImage::find($this->image_id);
        if($this->image){
             $filePath = $this->image->store('images', 'public');
        }
 
        $image->update([
            'name' => $this->imageName  ? $this->imageName : $image->name ,
            'file_path' => $filePath
        ]);


        session()->flash('message', 'Image updated successfully.');

        // Reset fields
        $this->reset(['image', 'imageName']);
        $this->emitTo('image-view', '$refresh');
    }

    public function render()
    {
        return view('livewire.image-upload', [
            'images' => SiteImage::where('page', $this->page_name)->where('name', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
