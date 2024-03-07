<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Node\UseItem;

class Form extends Component
{
    public $category_id = null;
    public $object = '';
    public $price = '';
    public $about = '';

    public function rules(){
        return [
            'category_id' => 'required',
            'object' => 'string|required|min:3',
            'price' => 'required|decimal:2',
            'about' => 'required|min:10'
        ];
    }

    public function store(){
        $this->validate();

        Product::create([
            'user_id' => Auth::user()->id,
            'category_id' => $this->category_id,
            'object' => $this->object,
            'price' => $this->price,
            'about' => $this->about
        ]);

        $this->cleanForm();

        session()->flash('success', 'Prodotto pubblicato');
    }

    public function cleanForm(){
        $this->category_id = null;
        $this->object = '';
        $this->price = '';
        $this->about = '';
    }

    public function render()
    {
        if(Category::all()->isEmpty()){
            $categories = ['Motori', 'Informatica', 'Elettrodomestici', 'Libri', 'Giochi', 'Sport', 'Immobili', 'Telefoni', 'Arredamento', 'Gioielli'];

            foreach($categories as $category){
                Category::create([
                    'title' => $category
                ]);
            }
        }

        $categories = Category::all();

        return view('livewire.product.form', compact('categories'));
    }
}
