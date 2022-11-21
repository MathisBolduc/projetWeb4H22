@extends('leslayouts.templayouts')

@section('titre')
Modifier le forfait {{$forfait->nom}} - Les forfaits
@endsection

@section('contenu')
<h1>Supprimer l'élément {{$forfait->nom}} ?</h1>
<form action="{{route('forfaits.destroy', $forfait)}}" method="post">
    @csrf
    <div>
        <button data-icon="done" type="submit" name="delete">Supprimer le forfait</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('info.forfaits.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('info.forfaits.show', $forfait)}}">Retour à l'élément</a>
</div>
@endsection
