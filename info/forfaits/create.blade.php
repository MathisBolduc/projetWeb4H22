@extends('leslayouts.templayouts')

@section('titre')
Ajouter un forfait
@endsection

@section('contenu')
<header>
	<h1><a href="{{route('info.forfaits.index')}}">&#8678; Ajouter forfait</a></h1>
</header>
<form action="{{route('info.forfaits.create')}}" method="post">
    @csrf
    @include('info.forfaits.form')
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>
@endsection