<x-layouts.app>
    <main class="bg-emerald-300">
        <section class="container mx-auto md:flex">
            <div class="py-8 px-4 md:px-0 fade-left">
                <h1 class="main-color-1 text-6xl md:w-2/3"><span class="font-bold">{{__('ui.fraseHeader1')}}</span>
                    {{__('ui.fraseHeader2')}}</h1>
                <button class="main-bg-color-1 p-2 mt-8 rounded-full text-white"><a href="">
                  </a>
                  <i
                        class="fa-solid fa-plus me-2 rounded-full border border-white p-1"></i>{{__('ui.vendiSubito')}}</button>
            </div>
            <img class="fade-right h-full md:w-1/3" src="{{ asset('images/business-people.jpg') }}" alt="img">
        </section>
    </main>
    <section class="container mx-auto">
        <h2 class="text-4xl text-slate-600 mt-8">{{__('ui.annunci')}}</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-5 gap-4">
            @foreach ($products as $product)
                <x-product-card :product='$product'/>
            @endforeach
        </div>
    </section>
</x-layouts.app>
