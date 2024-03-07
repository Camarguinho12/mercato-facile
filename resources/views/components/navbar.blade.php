<nav class="flex p-6 gap-4 items-center">
    <div>
        <div class="w-[32px] h-[32px] rounded-full bg-indigo-600">logo</div>
    </div>
    <form class="flex-grow flex items-center rounded-full border border-slate-300 p-3 text-slate-500" action="/"
        method="GET">
        <i class="fa-solid fa-magnifying-glass pe-2"></i>
        <input type="text" class="w-full border-none outline-none">
    </form>
    <div class="text-white items-center flex">
        @auth
            <livewire:auth.logout/>
        @endauth
        @guest
            <button class="main-color-2 rounded-full p-2 border border-emerald-300 me-4"><a
                    href="{{ route('register') }}">Registrati o accedi</a></button>
        @endguest
        <button class="main-bg-color-2 rounded-full p-2"><a href="{{ route('dashboard') }}"><i
                    class="fa-solid fa-plus me-2 border border-white rounded-full p-1"></i>Vendi</a></button>
    </div>
</nav>
