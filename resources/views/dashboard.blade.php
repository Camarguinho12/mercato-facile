<div>
    <x-layouts.app>

        <div class="flex">
            <x-side-menu/>
            <div class="flex flex-col items-center justify-center w-full bg-gray-50 h-full">
                <div class="w-full lg:w-3/4">
                    <livewire:product.form />
                </div>
            </div>

        </div>

        @vite(['resources/js/dashboard.js'])

    </x-layouts.app>
</div>
