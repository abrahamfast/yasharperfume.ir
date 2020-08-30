<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Acme\Entities\ProductCategory as Category;

class ProductCategory extends Component
{
    public $productCategory;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->productCategory = Category::list(['order' => 'order']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-category');
    }
}
