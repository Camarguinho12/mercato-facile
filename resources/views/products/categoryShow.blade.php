{{-- X SEBASTIAN 
    da aggiungere nella navbar un categoriesdropDown
@foreach ($categories as $category )
<li> <a href="{{route('categoryShow', compact('category'))}}">{{($category->name)}} </a> </li> 
@endforeach --}}
{{-- X EMANUELE
Da aggiungere alle rotte
Route::get('/categoria/{category}' [HomepageController::class, 'categoryShow'])->name('categoryShow'); --}}
{{-- da aggiungere nel controller dove ci sono le 6 card
public function categoryShow(Category $category)
{
    return view('categoryShow', compact('category'));
}  --}}



@forelse ($category->products as $product )
<x-product-card price="{{$product->price}}" category={{$product->category}} title={{$product->title}}/>
@endforelse 
