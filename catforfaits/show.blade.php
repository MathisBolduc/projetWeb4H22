@extends('leslayouts.agrotourisme')
@section('titre')
{{$categorie->nom}}
@endsection

@section('contenu')
<h1>{{$categorie->nom}}</h1>

<section class="grille-forfaits">
    <ul>
        @foreach($categorie->forfaits as $forfait)
        <li>
            <div class="un-forfait-liste">
                <div class="img-liste">
                    <img src="{{asset($forfait->url_img.'560.jpg')}}" alt="">
                </div>
                <div class="description-forfait-liste">
                    <h3>{{$forfait->nom}}</h3>
                    <p>{{$forfait->description}}</p>
                    <a href="{{route('info.forfaits.show', $forfait)}}">En savoir plus</a>
                </div>
                <div class="prix-forfait-liste">
                    <p>{{$forfait->prix}} $</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>
<script src="{{asset('js/app.js')}}"></script>
@endsection
