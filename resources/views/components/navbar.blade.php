<nav class="flex p-6 gap-4 items-center">
    <div class="hidden md:block">
        <div class="w-[32px] h-[32px] rounded-full bg-indigo-600">logo</div>
        </div>
    <form class="flex-grow flex items-center rounded-full border border-slate-300 p-3 text-slate-500" action="/"
        method="GET">
        <i class="fa-solid fa-magnifying-glass pe-2"></i>
        <input type="text" class="w-full border-none outline-none">
    </form>
    <div class="text-white items-center flex">
        @auth
            <livewire:auth.logout />
        @endauth
        @guest
            <button class="main-color-2 rounded-full p-2 border border-emerald-300 me-4"><a
                    href="{{ route('register') }}">Registrati o accedi</a></button>
        @endguest
        <button class="main-bg-color-2 rounded-full p-2"><a href="{{ route('dashboard.crea') }}"><i
                    class="fa-solid fa-plus me-2 border border-white rounded-full p-1"></i>Vendi</a></button>
                    </div>
                    <div>
                      <a href="{{route('revisor.index')}}" class="p-2 border border-emerald-300 rounded-lg">Sezione revisore</a>
                    </div>
                    <div class="relative inline-block text-left">
                         <div>
                          <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Categoria
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            @foreach ($categories as $category )
                            <li> <a href="{{route('categoryShow', compact('category'))}}">{{($category->title)}} </a> </li> 
                            @endforeach    
                          </div>
                        </div>
                      </div>
                       
 </nav>
