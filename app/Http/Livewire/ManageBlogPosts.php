<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;

class ManageBlogPosts extends Component
{
    public $blogPosts;
    public $selectedPostId;

    public function mount()
    {
        $this->blogPosts = BlogPost::all();
    }

    public function deletePost(BlogPost $post)
    {
        $post->delete();
        $this->blogPosts = BlogPost::all(); // Refresh the list
    }

    public function render()
    {
        return view('livewire.manage-blog-posts');
    }
}
