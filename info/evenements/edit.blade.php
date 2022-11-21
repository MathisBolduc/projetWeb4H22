@extends('leslayouts.admin-membre')
@section('contenu')

<div id="membres">
    <form action="{{route('info.evenements.update', $evenement)}}" method="post">
    @csrf
    <div>
        <label for="nom">Nom</label>
        <span><input type="text" name="nom" id="nom" value="{{$evenement->nom}}"></span>
    
    </div>
    <div>
    <x-champ-input name="nom" label="Nom de l'évènement" :value="$evenement->nom"/>
    <x-champ-input name="ville" label="Ville" :value="$evenement->ville"/>
    <x-champ-input name="dates" label="Dates" :value="$evenement->dates"/>
    <x-champ-input name="prix" label="Prix" :value="$evenement->prix"/>
    <x-champ name="description" label="Description">
        <textarea name="description" id="description" cols="30" rows="10">{{$evenement->description}}</textarea>
    </x-champ>
    </div>
        <div><button>Modifier</button></div>
    </form>
</div>
@endsection