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
    public function __construct($slug, $id)
    {
        $this->slug = $slug;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->product = Product::read($this->id);
        abort_if(!$this->product, 404);

        return view('components.show-products');
    }
}
