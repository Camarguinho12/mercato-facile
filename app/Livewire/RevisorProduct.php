<?php

namespace App\Livewire;

use Livewire\Component;

class RevisorProduct extends Component
{
    public $product;

    public function mount($product){
        $this->product=$product;
    }

    public function render()
    {
        return view('livewire.revisor-product');
    }
}
