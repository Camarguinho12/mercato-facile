{{-- <x-app>
    <main class="bg-emerald-300">
@forelse ($category->products as $product )
<x-product-card :price="{{$product->price}}" :category={{$product->category}} :title={{$product->title}}/>
    @empty
    <h4> 
        Nessuna categoria trovata
    </h4>
@endforelse
</main>
</x-app>  --}}

<x-layouts.app>
    <main class="bg-emerald-300">
        
            @forelse ($category->products as $product )
            <article class="w-full mt-4 md:mt-0 justify-between md:justify-normal md:w-1/6 rounded-lg text-slate-400"><img class="rounded-lg" src="{{asset('images/product-placeholder.jpg')}}" alt="">
                <div class="flex justify-between mt-2">
                    <span class="font-bold">{{$product->price??'esempio'}}</span>
                    <p>{{$product->category->title??'esempio'}}</p>
                </div>
                <h3 class="mt-2">{{$product->object??'esempio'}}</h3>
                <div class="flex text-purple-500 mt-2">
                 <i class="fa-solid fa-truck-fast"></i>
                 <span class="text-sm ms-2">Spedizione disponibile</span>
                
                </div>
            </a>
        </article>

    @empty
    <h4> 
        Nessuna categoria trovata
    </h4>
@endforelse
    </main>  
</x-layouts.app>