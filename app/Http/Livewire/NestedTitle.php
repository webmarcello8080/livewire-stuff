<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NestedTitle extends Component
{
    public $names = ['Marcello', 'John', 'Mark', 'Ben'];

    public function render()
    {
        return view('livewire.nested-title');
    }

    public function removeTitle(Int $title_id){
        unset($this->names[$title_id]);
    }

    public function newTitle(String $title_name){
        $this->names[] = $title_name;
    }
}
