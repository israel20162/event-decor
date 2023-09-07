<?php

namespace App\Http\Livewire;

use App\Models\BlogPost;
use App\Models\SiteImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadCoverImage extends Component
{
    use WithFileUploads;
    public $image;

    protected $listeners = [
        'uploadImage'
    ];

    public function uploadImage($post)
    {

        //$image = SiteImage::find($this->image_id);
        if ($this->image) {
            $filePath = $this->image->store('blog', 'public');
            $this->reset(['image']);
            BlogPost::find($post)->update([
                'image' => $filePath,
                
              
            ]);
           
        }
        
       

      
       

    }
    public function render()
    {
        return view('livewire.upload-cover-image');
    }
}