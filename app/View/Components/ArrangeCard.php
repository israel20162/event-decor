<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArrangeCard extends Component
{
    public $title;
     public $description;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description,$title,$image)
    {
        //
        $this->description = $description;
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.arrange-card');
    }
}
