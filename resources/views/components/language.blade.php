<form action="{{route('set-language', $language)}}" method="POST">
    @csrf

    <button type="submit">
        <span class="fi fi-{{$nation}}"></span>
    </button>
</form>