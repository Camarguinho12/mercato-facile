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
                    
                    <div class="relative">
                        <button class="dropdown-toggle py-2 px-3 flex items-center gap-2 rounded p-2 border border-emerald-300 rounded-lg">
                          <span class="pointer-events-none ">Categorie</span>
                          <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <title>chevron-down</title>
                            <g fill="none">
                              <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                          </svg>
                        </button>
                        <div class="dropdown-menu absolute hidden  bg-slate-50 text-black rounded-b-lg pb-2 w-48">
                          @foreach ($categories as $category )
                          <ul style="list-style-type: none;">
                          <li> <a href="{{route('categoryShow', compact('category'))}}" class="block px-6 py-2">{{($category->title)}} </a> </li> 
                        </ul>
                          @endforeach    
                         
                        </div>
                      </div>
                      <a href="#" class="py-2 px-3 block">Contact</a>
                    </div>
                  </div>              
                      

  
                       
 </nav>
