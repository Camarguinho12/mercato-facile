<div class="relative p-2 w-full flex-1">
    @if (session('message'))
        <p class="absolute p-2 bg-emerald-200 text-emerald-500 w-full rounded">{{session('message')}}</p>
    @endif
    <h1 class="fade top text-center text-4xl my-10">Revisiona gli annunci degli altri utenti</h1>
    <div class="grid grid-cols-5 gap-6">
        @foreach ($products as $product)
            <x-product-card :product='$product' />
        @endforeach
    </div>
</div>
