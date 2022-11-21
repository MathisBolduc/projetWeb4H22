<x-list-item :id="$membre['id']" type="membres">
	<img src="{{asset($membre->url_photo)}}" alt="{{$membre->nom}}"  width="50px">
		{{$membre['nom']}}
		@if(Auth::check())
		@if(Auth::user()->usager->favoris->contains($membre))
		<button class="boutonFav btn_modifier" data-url="{{route('membres.aimer', $membre)}}" data-icon="done" type="submit"> Je n'aime plus</button>
		@else
		<button class="boutonFav aime btn_modifier" data-url="{{route('membres.aimer', $membre)}}" data-icon="done" type="submit"> J'aime</button>
		@endif
		@else
		<button class="boutonFav btn_modifier" data-icon="done" type="submit" disabled="disabled"> J'aime</button>
		@endif
</x-list-item>