<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ListingLine extends Component
{
    public $product;
    public bool $checked = false;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product.listingLine');
    }

    public function clickPrice(){
        if($this->checked){
            $this->emit('updatePrice', $this->product->price);
        } else {
            $this->emit('updatePrice', -1 * $this->product->price);  
        }
    }
}
