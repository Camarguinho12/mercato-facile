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
<article class="md:w-1/6 rounded-lg text-slate-400">
    @forelse ($category->products as $product )
    <a href="/">
        <img class="rounded-lg" src="{{asset('images/product-placeholder.jpg')}}" alt="">
        <div class="flex justify-between mt-2">
            <span class="font-bold">{{$product->price}}</span>
            <p>{{$product->category}}</p>
        </div>
        <h3 class="mt-2">{{$product->title}}</h3>
        <div class="flex text-purple-500 mt-2">
         <i class="fa-solid fa-truck-fast"></i>
         <span class="text-sm ms-2">Spedizione disponibile</span>
         @empty
         <h2 class="mt-2">Prodotto non trovato</h3>
         @endforelse
        </div>
    </a>
</article>