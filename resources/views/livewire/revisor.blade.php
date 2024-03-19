<div class="relative p-2 w-full flex-1">
    @if ($showMessage['display'])
        <p
            class="{{ $showMessage['messageIsPositive'] ? 'bg-emerald-200 text-emerald-500' : 'bg-red-200 text-red-500' }}fade-top absolute p-2 w-full rounded" wire:click='toggleMessage'>
            {{ $showMessage['message'] }}</p>
    @endif
    <h1 class="fade top text-center text-4xl my-10">{{__('ui.fraseHRevisore')}}</h1>
    <div class="grid grid-cols-5 gap-6">
        @forelse ($products as $key=>$product)
            <livewire:revisor-product wire:key="{{ $product->id }}" :product='$product' />
        @empty
            <p class="mt-10 text-slate-400 text-xl">{{__('ui.fraseNARevisore')}}</p>
        @endforelse
    </div>
</div>
