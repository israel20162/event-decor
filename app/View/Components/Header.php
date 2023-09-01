<?php

namespace App\View\Components;

use App\Models\SiteImage;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header', [
            'image_paths' => SiteImage::where('page', 'home')->pluck('file_path', 'name')->map(function ($file, $name) {
                return ['name' => $name, 'file_path' => $file];
            })->toArray()
        ]);
    }
}
