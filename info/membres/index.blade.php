
	@extends('leslayouts.admin-membre')



@section('titre')
des membres
@endsection

@section('contenu')
<div id="membres" class="membre">
	@each('info.membres.item', $membres, 'membre')
</div>

@if(Auth::check()&&Auth::user()->usager->admin==1)
@include('info.rechercheavance')
<div class="options btn_ajouter">
	<a data-icon="edit" href="{{route('info.membres.create')}}">Ajouter l'élément</a>
</div>
@endif
@endsection


