<div>
    <x-layouts.app>

        <div class="flex h-full">

            <div class="hidden lg:block h-screen w-1/6 fixed z-12  bg-emerald-200 border-r-2 border-emerald-600">
                <div class="flex flex-col items-center justify-evenly h-5/6 mb-8">
                    <div class="my-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">User</a>
                    </div>
    
                    <div class="mb-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">Acquisite</a>
                    </div>
    
                    <div class="mb-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">Vendite</a>
                    </div>
    
                    <div class="mb-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">Preferite</a>
                    </div>
    
                    <div class="mb-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">Prodotti</a>
                    </div>
    
                    <div class="mb-8">
                        <a href="#" class="py-4 px-12 rounded-xl hover:bg-gray-200">Impostazione</a>
                    </div>                
                </div>
            </div>

            <div class="flex flex-col items-center justify-start w-full bg-gray-50 h-full">
                <div class="w-full lg:w-3/4">
                    <livewire:product.form/>
                </div>
            </div>

        </div>

        @vite(['resources/js/dashboard.js'])

    </x-layouts.app>
</div>
