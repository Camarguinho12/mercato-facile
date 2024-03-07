<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function homepage () {
        $products = Product::take(6)->get()->sortByDesc('created_at');
        
        return view('welcome', compact('products'));
    }

    public function dashboard () {
        return view('dashboard');
    }

    public function create () {
        return view('products.create');
    }

    public function show () {
        return view('products.show');
    }

    public function edit () {
        return view('products.edit');
    }
}
