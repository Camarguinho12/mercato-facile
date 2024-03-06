<div>
    <x-layouts.app>

        <div class="flex">

            <div class="flex flex-col items-center justify-start w-1/6 h-screen bg-emerald-200">
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

            <div class="flex flex-col items-center justify-start w-full h-screen bg-gray-50">
                <div class="w-2/4">
                    <livewire:product.form>
                </div>
            </div>

        </div>

    </x-layouts.app>
</div>
