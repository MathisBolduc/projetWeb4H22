@extends('leslayouts.templayouts')

@section('titre')
Modifier {{$forfait->nom}}
@endsection

@section('contenu')
<header>
	<h1><a href="{{route('info.forfaits.index')}}">&#8678; Les forfaits</a></h1>
</header>
<form action="{{route('info.forfaits.edit', $forfait)}}" method="post">
    @csrf
    @include('forfaits.form')
    <div>
        <button type="submit">Modifier</button>
    </div>
</form>
@endsection