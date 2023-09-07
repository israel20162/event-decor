<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;
use Livewire\WithFileUploads;

class CreateBlogPost extends Component
{

    use WithFileUploads;
    public $title;
    public $body;


   


   




    public function submitPost($body)
    {
        $this->body =$body;
        function generateSlug($string, $separator = '-')
        {
            // Convert the string to lowercase
            $slug = strtolower($string);

            // Replace any non-alphanumeric characters with the separator
            $slug = preg_replace('/[^a-z0-9]+/', $separator, $slug);

            // Trim separators from the beginning and end
            $slug = trim($slug, $separator);

            return $slug;
        }
    

        $this->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',

        ]);


        $post = BlogPost::create([
            'title' => $this->title,
            'body' => $this->body,
            'author_id' => auth()->id(),
            'slug' => generateSlug($this->title),
            'is_published' => false,
            'image'=>''

        ]);

        $this->reset(['title', 'body']);

        $this->emitTo('upload-cover-image','uploadImage', $post->id);

        session()->flash('message', 'Blog post created successfully!');
    }
    public function dehydrate()
    {
        $this->dispatchBrowserEvent('contentChanged');
        return view('livewire.create-blog-post');
    }
// public function render()
// {
//     return view('livewire.create-blog-post');
// }
}