@extends('leslayouts.admin-membre')

@section('titre')
Tous les Membres
@endsection

@section('contenu')


    <div id="membres">
        <h1>Les évènements</h1>
        <div>
            @foreach($evenements as $evenement)
            <div><a href="{{route('info.evenements.show', $evenement['id'])}}"><span>{{$evenement['nom']}}</span></a></div>
            @endforeach
        </div>
        
        @if(Auth::check()&&Auth::user()->usager->admin==1)
        <button><a href="{{route('info.evenements.create')}}">Ajouter un Evenement</a></button>
        @endif
    </div>


@endsection