<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($image,$title,$description,$rating,$price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->rating = $rating;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
