<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage () {
        return view('welcome');
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
