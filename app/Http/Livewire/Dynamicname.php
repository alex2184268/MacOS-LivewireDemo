<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dynamicname extends Component
{
    public $name = "input your name";
    public $click = false;
    public $greeting = ['Hello'];


    public function render()
    {
        return view('livewire.dynamicname');
    }

}
