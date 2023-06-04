<?php

namespace App\Http\Livewire\Variant;

use App\Models\Variant;
use Livewire\Component;

class Create extends Component
{
    public int $product_id;
    public float $price;
    public string $size;
    public string $colour;

    protected $rules = [
        'price' => 'required|numeric|between:0,9999999999.99',
        'size' => 'required|string|max:125',
        'colour' => 'nullable|string|max:125',
     ];

    public function mount(int $product_id){
        $this->product_id = $product_id;
        $this->price = 0;
        $this->size = '';
        $this->colour = '';
    }

    public function save(){
        $this->validate();
        $variant = new Variant();
        $variant->product_id = $this->product_id;
        $variant->price = $this->price;
        $variant->size = $this->size;
        $variant->colour = $this->colour;
        $variant->save();
        $this->emit('addVariant', $variant);
    }

    public function render()
    {
        return view('livewire.variant.create');
    }
}
