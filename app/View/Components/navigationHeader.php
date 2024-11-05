<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navigationHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public $navigate;
    public function __construct($product,$navigate)
    {
        $this->product = $product;
        $this->navigate = $navigate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation-header');
    }
}
