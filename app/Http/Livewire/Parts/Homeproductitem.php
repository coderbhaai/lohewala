<?php

namespace App\Http\Livewire\Parts;

use Livewire\Component;

class Homeproductitem extends Component
{
    public $item;
    
    public function render(){
        return view('livewire.parts.homeproductitem');
    }
}
