<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.dashboard-layout')] 
class Revisor extends Component
{
    public $products;
    public $showMessage;

    public function mount(){
        $this->products = $this->products = Product::whereNull('is_accepted')->orWhere('is_accepted', false)->get();
        $this->showMessage=['display'=>false,'messageIsPositive'=>true, 'message'=>null];
    }

    public function toggleMessage(){
        $this->showMessage['display']=!$this->showMessage['display'];
    }

    public function validateProduct($id){
        $productToUpdate= Product::find($id);
        $productToUpdate->setAccepted(true);
        $this->products=Product::whereNull('is_accepted')->orWhere('is_accepted', false)->get();
        $this->showMessage=['display'=>true,'messageIsPositive'=>true,'message'=>__('ui.approvato')];
    }

    public function denyProduct($id){
        $productToUpdate= Product::find($id);
        $productToUpdate->setAccepted(false);
        $this->products=Product::whereNull('is_accepted')->orWhere('is_accepted', false)->get();
        $this->showMessage=['display'=>!$this->showMessage['display'],'messageIsPositive'=>false,'message'=>__('ui.rifiutato')];
    }


    public function render()
    {   
        return view('livewire.revisor');
    }
}
