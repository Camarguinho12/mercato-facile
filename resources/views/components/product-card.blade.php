<article class="rounded-lg text-slate-400 border ">
    <a href="{{ route('show', $product->id) }}">
        <div class="overflow-hidden rounded-lg">
            <img class="rounded-lg hover:scale-110 duration-300" src="{{ asset('images/product-placeholder.jpg') }}"
                alt="">
        </div>
        <div class="flex justify-between mt-2">
            <span class="font-bold">{{ $product->price ?? 'esempio' }}</span>
            <p>{{ $product->category->title ?? 'esempio' }}</p>
        </div>
        <h3 class="mt-2">{{ $product->object ?? 'esempio' }}</h3>
        <div class="flex text-purple-500 mt-2">
            <i class="fa-solid fa-truck-fast"></i>
            <span class="text-sm ms-2">Spedizione disponibile</span>
        </div>
    </a>
    @if (Auth::user()->is_revisor ?? false && !$product->is_accepted)
        <div class="flex">
            <form class="flex-1" action="{{route('revisor.accept_announcement',$product->id)}}" method="post">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-emerald-200 rounded p-2 w-full">Accetta</button>
            </form>
            <form class="flex-1" action="{{route('revisor.reject_announcement',$product->id)}}" method="post">
                @csrf
                @method('PATCH')
                <button class="bg-red-200 flex-1 p-2 w-full">Rifiuta</button>
            </form>
        </div>
    @endif
</article>
