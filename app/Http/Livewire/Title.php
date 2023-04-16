<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{
    public $name = 'Laravel';
    public $mark = false;
    public $greeting_array = ['Hello', 'Ciao', 'Goodbye'];
    public $greetings = 'Hello';

    public function randomValue(){
        $this->name = rand(1230, 999999);
        $this->mark = (bool)random_int(0, 1);
        $this->greetings = $this->greeting_array[array_rand($this->greeting_array)];
    }

    public function hardReset()
    {
        $this->reset('name', 'mark', 'greetings');
    }

    public function render()
    {
        return view('livewire.title');
    }
}
