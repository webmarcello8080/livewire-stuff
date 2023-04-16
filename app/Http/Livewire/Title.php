<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{

    public $name = 'Laravel';
    public $mark = false;
    public $greetings = 'Hello';

    public function resetName(String $name = 'Another Name') : bool{
        $this->name = $name;
        return true;
    }

    public function render()
    {
        return view('livewire.title');
    }
}
