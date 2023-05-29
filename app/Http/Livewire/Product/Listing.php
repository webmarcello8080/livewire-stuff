<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Listing extends Component
{
    public $products;
    public $quantity;
    public $price;
    protected $listeners = ['updatePrice'];

    public function mount(Collection $products){
        $this->price = 0;
        $this->quantity = 0;
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.product.listing');
    }

    public function increaseQuantity()
    {
        $this->quantity ++;
    }

    public function updatePrice(float $price){
        // dd($price);
        $this->price += $price;
    }
}
