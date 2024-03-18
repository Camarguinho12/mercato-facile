<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage () {
        $products = Product::latest()->where('is_accepted',true)->take(5)->get();
        return view('welcome', compact('products'));
    }

    public function dashboard () {
        return view('dashboard');
    }

    public function create () {
        return view('products.create');
    }

    public function show (Product $product) {
        return view('products.show', compact('product'));
    }

    public function edit () {
        return view('products.edit');
    }

    public function categoryShow(Category $category){
        return view('products.categoryShow', compact('category'));
    }

    public function setLanguage($language){
        session()->put('language', $language);

        return redirect()->back();
    }
}
