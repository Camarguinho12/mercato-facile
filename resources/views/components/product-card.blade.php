<article class="md:w-1/6 rounded-lg text-slate-400">
    <a href="/">
        <img class="rounded-lg" src="{{asset('images/product-placeholder.jpg')}}" alt="">
        <div class="flex justify-between mt-2">
            <span class="font-bold">{{$price}}</span>
            <p>{{$category}}</p>
        </div>
        <h3 class="mt-2">{{$title}}</h3>
        <div class="flex text-purple-500 mt-2">
         <i class="fa-solid fa-truck-fast"></i>
         <span class="text-sm ms-2">Spedizione disponibile</span>
        
        </div>
    </a>
</article>