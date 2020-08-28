<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Product;

class Products extends Component
{
    protected $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->products = Product::with('attachment')->whereHas('attachment', function(Builder $query){
            $query->where('field', 'cover');
        })->get();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.products', [
            'products' => $this->products
        ]);
    }
}
