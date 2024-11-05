<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class imageProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public function __construct($image)
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-product');
    }
}
