<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Acme\Entities\Product;

class FeaturedProductArea extends Component
{
    public $featuredProductAreaItems;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->featuredProductAreaItems = Product::list([
            'select' => '',
            'where[0][type]' => 'equals',
            'where[0][attribute]' => 'bestSale',
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
        return view('components.featured-product-area');
    }
}
