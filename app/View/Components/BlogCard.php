<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public  $title;

    public  $image;

    public  $body;

    public  $slug;
    public  $author;
    public $created_at;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title,  $body,  $slug,  $author, $image, $created)
    {
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
        $this->slug = $slug;
        $this->author = $author;
        $this->created_at = $created;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-card');
    }
}