@extends('leslayouts.profil')

@section('favoris')
<ul class="favori">
	@foreach($membres as $membre)
	<div class="membre">¸
		<a data-icon="edit" href="{{route('info.membres.show', $membre)}}">Voir le membre</a>
		{{$membre->nom}}
	</div>
	@endforeach
</ul>