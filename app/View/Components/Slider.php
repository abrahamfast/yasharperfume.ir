<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Acme\Entities\Product;

class Slider extends Component
{
    public $sliderItems;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sliderItems = Product::list([
            'select' => 'name,sliderCaption,imageSliderName',
            'where[0][type]' => 'equals',
            'where[0][attribute]' => 'slider',
            'where[0][value]' => true
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
