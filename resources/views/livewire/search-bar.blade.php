<form wire:model.live='userInput' class="flex-grow flex items-center rounded-full border border-slate-300 p-3 text-slate-500">
        <i class="fa-solid fa-magnifying-glass pe-2"></i>
        <input type="text" class="w-full border-none outline-none">
        <span>{{$searchResult->title ?? 'no'}}</span>
</form>
