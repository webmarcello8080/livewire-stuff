<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Variant;
use Livewire\Component;

class Edit extends Component
{

    public Product $product;
    public $variants = [];
    public $newVariants = [];
    protected $listeners = ['addVariant', 'reRender'];

    public function mount(Product $product){
        $this->product = $product;
        $this->variants = $product->variants->all();
    }

    public function addForm(){
        $this->newVariants[] = ['id' => microtime(true)];
    }

    public function reRender()
    {
        $this->mount($this->product);
        $this->render();
    }

    public function addVariant(Variant $newVariant)
    {
        $this->variants[] = $newVariant;
        $this->reRender();
    }

    public function render()
    {
        return view('livewire.product.edit');
    }
}
