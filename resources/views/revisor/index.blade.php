<x-layouts.app>
    <h1 class="text-3xl">
        {{($announcement_to_check ? 'Ecco l/annuncio da revisionare' : 'Non ci sono annunci da revisionare')}}
    </h1>
@if ($announcement_to_check)
    //carousel delle foto 

    sistemare bottone 
    <form  action="{{route('revisor.accept_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
    @csrf
@method('PATCH')
<button class="bg-lime-600 rounded-full p-2" type="submit" fare bottone> Accetta </button>
</form>
<form action="{{route('revisor.reject_announcement', ['announcement'=> $announcement_to_check])}}" method="POST">
    @csrf
@method('PATCH')
<button class="bg-red-600 rounded-full p-2" type="submit" fare bottone> Rifiuta </button>
</form>
@endif

</x-layouts.app>