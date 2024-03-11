<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Product $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()-with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Product $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()-with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor(){
        Mail::to('admin@mercatofacile.it')->send(new BecomeRevisor(Auth::user()));

        return redirect()->back()->with('message', 'Hai richiesto di diventare revisore');
    }

    public function makeRevisor(User $user){
        Artisan::call('facile:MakeUserRevisor', ["email"=>$user->email]);

        return redirect()->route('homepage')->with('message', 'L\'untente è diventato revisore');
    }
}
