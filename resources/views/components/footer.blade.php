<footer class="bg-slate-100 mt-10 text-slate-400 pb-8">
    <div class="container mx-auto pt-4 flex justify-center md:justify-between">
        <div>
            <h2 class="text-slate-600 text-2xl">Mercato facile</h2>
            <p class="mt-4">Chi siamo</p>
            <p class="mt-4">Lavori</p>
            <p class="mt-4">Sostenibilità</p>
        </div>
        <div class="hidden md:block">
            <h2 class="text-slate-600 text-2xl">Scopri</h2>
            <p class="mt-4">Come funziona</p>
            <p class="mt-4">Notizie</p>
            <p class="mt-4">Mercato facile pro</p>
        </div>
        <div class="hidden md:block">
            <h2 class="text-slate-600 text-2xl">Assistenza</h2>
            <p class="mt-4">Acquistare</p>
            <p class="mt-4">Vendere</p>
            <p class="mt-4">sicurezza e affidabilità</p>
        </div>
    </div>
    <div class="mt-8 border-b border-t border-slate-400 py-8 flex md:justify-between justify-center container mx-auto">
        <div class="md:flex gap-2 text-xl hidden">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
        <div class="flex gap-4">
            <x-apple-button/>
            <x-play-store-button/>
        </div>
    </div>
    <h4 class="text-center mt-8">©️{{date('Y')}} Mercatofacile.it</h4>
</footer>
