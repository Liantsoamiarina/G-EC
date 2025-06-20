<?php

namespace App\Livewire;

use Livewire\Component;

class NaissanceForm extends Component
{
    public $step=1;

    //enfant






    public function render()
    {
        return view('livewire.naissance-form');
    }
}
