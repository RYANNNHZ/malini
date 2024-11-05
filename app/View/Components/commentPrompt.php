<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class commentPrompt extends Component
{
    /**
     * Create a new component instance.
     */
    public $productId;
    public function __construct($productId)
    {
        $this->productId = $productId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment-prompt');
    }
}
