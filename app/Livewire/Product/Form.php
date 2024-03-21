<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class Form extends Component
{

    use WithFileUploads;

    public $category_id = null;
    public $object = '';
    public $price = '';
    public $about = '';
    public $temporary_images;
    public $images = [];
    public $image;
    public $product;
    public $form_id;


    public function rules(){
        return [
            'category_id' => 'required',
            'object' => 'string|required|min:3',
            'price' => 'required|decimal:2',
            'about' => 'required|min:10',
            'images.*' => 'image|max:512',
            // 'temporary_images.*' => 'image|max1024',
        ];
    }

    public function store(){
        dd($this->validate());
        $this->validate();
        $this->product = Product::create([
                'user_id' => Auth::user()->id,
                'category_id' => $this->category_id,
                'object' => $this->object,
                'price' => $this->price,
                'about' => $this->about
            ]);

        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->product->images()->create(['path' => $image->store('image','public')]);
            }
        }
      
        $this->cleanForm();

        session()->flash('success', __('ui.prodottoInRevisione'));
    }

    public function cleanForm(){
        $this->category_id = null;
        $this->object = '';
        $this->price = '';
        $this->about = '';
        $this->images = [];
        $this->temporary_images = [];
        $this->form_id = rand();
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

    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*' => 'image|max:1024'
        ])) {
            foreach($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    
    public function removeImage ($key)
    {
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
}
