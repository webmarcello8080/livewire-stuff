<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ListingLine extends Component
{
    public Product $product;
    public string $description;
    public bool $checked = false;

    protected $rules = [
        'product.description' => 'nullable|string|max:2000',
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->description = $product->description;
    }

    public function render()
    {
        return view('livewire.product.listingLine');
    }

    public function updatedDescription(){
        $this->product->description = $this->description;
        $this->product->save();
    }

    public function clickPrice()
    {
        if($this->checked){
            $this->emit('updatePrice', number_format($this->product->price, 2, '.', ','));
        } else {
            $this->emit('updatePrice', -1 * number_format($this->product->price, 2, '.', ','));  
        }
    }
}
