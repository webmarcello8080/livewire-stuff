<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Listing extends Component
{
    public $products;
    public $price = 0;
    // protected $listeners = ['updatePrice'];

    public function mount($products){
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.product.listing');
    }

    public function updatePrice(){
        $this->price ++;
    }
}
