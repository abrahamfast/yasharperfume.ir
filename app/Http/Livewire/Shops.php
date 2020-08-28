<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Shops extends Component
{
	protected $products;

	public function mount()
	{

	}

    public function render()
    {
        return view('livewire.shops');
    }
}
