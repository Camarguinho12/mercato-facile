<x-layouts.app>
    <main class="min-h-screen">
        <h1 class="text-center text-4xl text-slate-400 my-10">Tutti i prodotti nella categoria {{ $category->title }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-5">
            @forelse ($category->products as $product)
            <x-product-card :product='$product'/>
            @empty
                <h4>
                    Nessun annuncio per categoria trovata
                </h4>
            @endforelse
        </div>
    </main>
</x-layouts.app>
