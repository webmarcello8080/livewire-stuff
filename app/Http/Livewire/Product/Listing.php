<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Listing extends Component
{
    public $products;
    public $vat;
    public $price;
    protected $listeners = ['updatePrice', 'reRender'];

    public function mount(Collection $products)
    {
        $this->price = 0;
        $this->vat = 20;
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.product.listing');
    }

    public function reRender()
    {
        $this->mount($this->products);
        $this->render();
    }

    public function increaseVat()
    {
        $this->vat ++;
    }

    public function decreaseVat()
    {
        $this->vat --;
    }

    public function updatePrice(float $price)
    {
        $this->price += $price;
    }
}
