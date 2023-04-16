<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{

    public $name = 'Laravel';
    public $mark = false;
    public $greetings = 'Hello';

    public function resetName() : bool{
        $this->name = 'Laravel';
        $this->mark = false;
        $this->greetings = 'Hello';
        
        return true;
    }

    public function render()
    {
        return view('livewire.title');
    }
}
