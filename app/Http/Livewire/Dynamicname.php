<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dynamicname extends Component
{
    public $name = "input your name";
    public function render()
    {
        return view('livewire.dynamicname');
    }
}
