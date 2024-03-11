<?php

namespace App\Livewire\Dashboard;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard-layout')] 
class Stats extends Component
{   
    public $data;

    public function mount() : void {
        $query=Category::all();
        foreach($query as $value){
            $this->data[]=[$value->title,$value->products()->count()];
        }
    }

    public function render()
    {   
        return view('livewire.dashboard.stats');
    }
}
