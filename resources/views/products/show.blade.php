<x-layouts.app>
    <main class="flex justify-center bg-slate-100 py-10">
        <div class="p-4 rounded-lg bg-white w-1/3">
            <div class="flex justify-between w-full">
                <div class="flex flex-col">
                    <h2>{{ $product->user->name }}</h2>
                    <div>
                        <i class="fa-regular fa-star hover:text-yellow-300"></i>
                        <i class="fa-regular fa-star hover:text-yellow-300"></i>
                        <i class="fa-regular fa-star hover:text-yellow-300"></i>
                        <i class="fa-regular fa-star hover:text-yellow-300"></i>
                        <i class="fa-regular fa-star hover:text-yellow-300"></i>
                    </div>
                </div>
                <div class="flex gap-4">
                    <button class="p-2 bg-slate-100 rounded-full w-24"><i
                            class="fa-regular fa-heart text-xl"></i></button>
                    <button class="w-24 border border-emerald-300 rounded-full">Chat</button>
                </div>
            </div>
            <img class="my-8 rounded-lg" src="{{ asset('images/product-placeholder.jpg') }}" alt="">
            <span class="text-4xl">{{ $product->price }} €</span>
            <h3 class="mt-4 text-3xl">{{ $product->object }}</h3>
            <span class="inline-block bg-slate-200 rounded-full p-1">{{ $product->category->title }}</span>
            <p class="mt-4 py-8 border-t-2 border-b-2 border-slate-100">{{ $product->about }}</p>
			<div class="rounded bg-green-200 flex text-green-500 p-8 items-center gap-4 mt-8">
				<i class="fa-solid fa-earth-americas text-3xl"></i>
				<p>Quando acquisti articoli di seconda mano risparmi denaro e aiuti il pianeta</p>
			</div>
        </div>
    </main>
</x-layouts.app>
