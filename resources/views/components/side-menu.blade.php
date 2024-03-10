<div class="hidden md:block md:w-1/12 bg-gray-50">
    <div id='sideMenu' class="w-1/3 hover:w-full h-full bg-white transition-all duration-300">
        <ul class="ms-2 pt-4">
            <li class="mb-10 relative"> <i
                    class="{{request()->is('dashboard/crea') ? 'text-green-500' : '' }} fa-solid fa-plus ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 text-sm ps-1 text-gray-700 top-1">Nuovo annuncio</span></li>
            <li class="mb-10 relative"><i
                    class="fa-solid fa-dollar-sign text-2xl p-2 hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 ps-1 text-sm text-gray-700 top-3">Vendite</span></li>
            <li class="mb-10 relative"><i
                    class="fa-solid fa-tag size-8 ps-1 text-2xl hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 ps-1 text-sm text-gray-700 top-1">Acquisti</span></li>
            <li class="mb-10 relative"><i
                    class="fa-solid ps-1 size-8 fa-chart-simple text-2xl hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 ps-1 text-sm text-gray-700 top-1">Statistiche</span>
            </li>
            <li class="mb-10 relative"><i class="fa-solid fa-user-tie ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i><span
                class="absolute opacity-0 text-sm ps-1 text-gray-700 top-1">Diventa revisore</span></li>  
            <li class="mb-10 relative text-yellow-500"><i class="fa-solid fa-face-grin-stars ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i><span
                class="absolute opacity-0 text-sm ps-1 top-1 text-yellow-500">Abbonamento premium</span></li>
        </ul>
    </div>
</div>
