<form action="{{route('info.membres.update', $membre)}}" method="post">
    @include('info.membres.form')
    <div><button>Modifier</button></div>
</form>