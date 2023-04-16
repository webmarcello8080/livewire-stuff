<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class TitleRequest extends Component
{
    public $name;
    public $greeting;

    protected $listeners = ['refreshChildren' => 'refreshMe'];

    public function refreshMe(){

    }
    
    public function mount(Request $request,String $name){
        $this->name = $request->input('name', $name);
        $this->greeting = $request->input('greeting', 'Hello');
    }

    public function render()
    {
        return view('livewire.title-request');
    }
}
