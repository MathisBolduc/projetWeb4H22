@extends('leslayouts.admin-membre')

@section('contenu')

@include('catforfaits.menu')
@if(Auth::check()&&Auth::user()->usager->admin==1)
<div id="membres" class="forfait">
	@foreach($forfaits as $forfait)
	<x-list-item :id="$forfait['id']" type="forfaits">{{$forfait['nom']}}</x-list-item>
	@endforeach
</div>
<h1><a href="{{route('info.forfaits.delete', $forfait)}}"> Effacer</a></h1>
<a data-icon="edit" href="{{route('info.forfaits.edit', $forfait)}}">Modifier l'élément</a>
@else
@include('info.forfaits.forfait_accueil')
@endif

@if(Auth::check()&&Auth::user()->usager->admin==1)
<div class="options">
	<a data-icon="edit" href="{{route('info.forfaits.create', $forfait)}}">Ajouter l'élément</a>
</div>
@endif
@endsection