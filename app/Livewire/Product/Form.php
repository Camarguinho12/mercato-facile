<?php

namespace App\Livewire\Product;

use App\Jobs\ResizeImage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use PhpParser\Node\UseItem;

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
    public $form_id;


    public function rules(){
        return [
            'category_id' => 'required',
            'object' => 'string|required|min:3',
            'price' => 'required|decimal:2',
            'about' => 'required|min:10',
            'images.*' => 'image|max1024',
            'temporary_images.*' => 'image|max1024',
        ];
    }

    public function store(){
        //dd ($this->validate());
        $this->validate();

        $this->object = Category::find($this->category)->products()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                // $this->product->images()->create(['path' => $image->store('image','public')]);
                $newFileName = "products/{$this->product->id}";
                $newImage =$this->product-> images()->create(['path' => $image->store($newFileName,'public')]);
                
                dispatch(new ResizeImage($newImage->path, 400,300));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

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

    public function updateTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*' => 'image|max:1024'
        ])) {
            foreach($this->temporary_images as $image) {
                $this->image[] = $image;
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
