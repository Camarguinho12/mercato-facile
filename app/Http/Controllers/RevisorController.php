<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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


}
