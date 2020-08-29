<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Acme\Entities\Product;

class ShowProducts extends Component
{
    public $slug;

    public $product;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $product = Product::list([
            'where[0][type]' => 'like',
            'where[0][attribute]' => 'url',
            'where[0][value]' => $this->slug,
        ]);

        return view('components.show-products');
    }
}
