<article class="rounded-lg text-slate-400 border relative">
    <a href="{{ route('show', $product->id) }}">
        <div class="overflow-hidden rounded-lg">
            <img class="rounded-lg hover:scale-110 duration-300"
                src="{{ isset($product->images->first()->path) ? $product->images->first()->getUrl(400, 300) : asset('images/product-placeholder.jpg') }}"
                alt="">
        </div>
        <div class="flex justify-between mt-2">
            <span class="font-bold">{{ $product->price ?? 'esempio' }}</span>
            <p>{{ __('ui.' . $product->category->title) ?? 'esempio' }}</p>
        </div>
        <h3 class="mt-2">{{ $product->object ?? 'esempio' }}</h3>
    </a>

    <div class="flex justify-center my-6">
        @if (isset($product->images->first()->path))
            <span class="{{ $product->images->first()->adult }} mx-2"></span>
            <span class="{{ $product->images->first()->medical }} mx-2"></span>
            <span class="{{ $product->images->first()->spoof }} mx-2"></span>
            <span class="{{ $product->images->first()->violence }}  mx-2"></span>
            <span class="{{ $product->images->first()->racy }} mx-2"></span>
        @endif
    </div>

    <div class="flex">
        <div class="flex-1">
            <button type="submit" wire:click='$parent.validateProduct({{ $product->id }})'
                class="group hover:bg-emerald-500 hover:first:text-white duration-300 rounded p-2 w-full"><i
                    class="fa-solid fa-check group-hover:text-white text-emerald-500 text-2xl mx-10"></i></button>
        </div>

        <div class="flex-1">
            <button wire:click='$parent.denyProduct({{ $product->id }})'
                class=" hover:bg-red-500 rounded group duration-300 flex-1 p-2 w-full"><i
                    class="fa-regular fa-circle-xmark group-hover:text-white text-red-500 text-2xl"></i></button>
        </div>
    </div>


</article>
