<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard-layout')] 
class Notifications extends Component
{
    public $userNotifications;

    public function mount(){
        foreach(Auth::user()->notifications as $notification){
            $this->userNotifications[]=$notification->data;
        };
    }


    public function render()
    {   
        return view('livewire.dashboard.notifications');
    }
}
