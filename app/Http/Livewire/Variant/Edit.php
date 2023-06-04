<?php

namespace App\Http\Livewire\Variant;

use Livewire\Component;
use App\Models\Variant;

class Edit extends Component
{
    public Variant $variant;

    protected $rules = [
        'variant.price' => 'required|numeric|between:0,9999999999.99',
        'variant.size' => 'required|string|max:125',
        'variant.colour' => 'nullable|string|max:125',
    ];

    public function mount(Variant $variant){
        $this->variant = $variant;
    }

    public function updated(){
        $this->validate();
        $this->variant->save();
    }

    public function delete(){
        $this->variant->delete();
        $this->emit('reRender');
    }

    public function render()
    {
        return view('livewire.variant.edit');
    }
}
