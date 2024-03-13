<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.dashboard-layout')] 
class Revisor extends Component
{
    public $products;

    public function mount(){
        $this->products = $this->products = Product::whereNull('is_accepted')->orWhere('is_accepted', false)->get();

    }


    public function render()
    {   
        return view('livewire.revisor');
    }
}
