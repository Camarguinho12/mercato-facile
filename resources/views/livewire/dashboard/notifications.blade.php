<div class="min-h-screen p-4 relative">
    @if ($showMessage)
        <div class="absolute top-0 p-2 bg-slate-200 text-slate-400 w-full">{{ $message }}</div>
    @endif
    <h1 class="fade-top text-slate-400 text-center text-4xl my-10">Controlla le tue notifiche</h1>
    @if (isset($userNotifications))
        @foreach ($userNotifications as $key => $notification)
            <div class="bg-slate-200 p-4 rounded md:w-3/4 mx-auto flex justify-between my-10">
                <h2 class="text-slate-400">{{ $notification['message'] }}</h2>
                <div>
                    <button wire:click='acceptRevisor({{ $key }})'><i
                            class="fa-solid fa-check text-emerald-500 text-2xl mx-10"></i></button>
                    <button><i class="fa-regular fa-circle-xmark text-red-500 text-2xl"></i></button>
                </div>
            </div>
        @endforeach
    @else
        <h2 class="text-2xl text-slate-400">Nessuna notifica presente</h2>
    @endif
</div>
