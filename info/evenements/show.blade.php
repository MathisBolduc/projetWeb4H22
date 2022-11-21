@extends('leslayouts.admin-membre')
@section('contenu')


    <div>
        <h1>{{$evenement['nom']}} </h1>
        <div>
            <article class="evenement" data-id="138">
                <div>
                    <h3><span class="nom">{{$evenement->nom}}</span></h3>
                    <div class="dates">{{$evenement->dates}}</div>
                    <div class="ville">{{$evenement->ville}}</div>
                    <div class="prix">{{$evenement->prix}}</div>
                    <div class="description">{{$evenement->description}}</div>
                </div>

                @if(Auth::check()&&Auth::user()->usager->admin==1)
                <h1><a href="{{route('info.evenements.edit', $evenement)}}">&#8678; Modifier</a></h1>
                <h1><a href="{{route('info.evenements.delete', $evenement)}}">&#8678; Effacer</a></h1>
                @endif
            </article>
        </div>
        <button><a href="{{route('info.evenements.index')}}">Retour</a></button>
    </div>

@endsection
