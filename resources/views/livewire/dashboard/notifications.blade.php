
<div class="min-h-screen p-4">
    <h1 class="fade-top text-slate-400 text-center text-4xl my-10">Controlla le tue notifiche</h1>
    @foreach ($userNotifications as $notification)
        <div class="bg-emerald-100 p-4 rounded md:w-3/4 mx-auto flex justify-between">
            <h2 class="text-emerald-500">{{ $notification['message'] }}</h2>
            <div>
                <button><i class="fa-solid fa-check text-slate-400"></i></button>
                <button><i class="fa-regular fa-circle-xmark text-slate-400"></i></button>
            </div>
        </div>
    @endforeach
</div>
