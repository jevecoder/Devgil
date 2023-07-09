<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public $text;
    public function render()
    {
        return view('livewire.components.button');
    }
}
