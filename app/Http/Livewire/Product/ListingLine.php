<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ListingLine extends Component
{
    public $product;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product.listingLine');
    }

    public function clickPrice(){
        $this->emit('updatePrice');
    }
}
