@extends('leslayouts.agrotourisme')
@section('contenu')
<header class="header_portrait_mrc">
    <h2>{{$mrc->nom}}</h2>
    <p>{{$mrc->info}}</p>
</header>
<div class="mrc-bas">
    <section class="mrc-reconnu">
        <h3>Nous sommes reconnu pour...</h3>
        <ul>
            <li>{{$mrc->reconnue}}</li>
        </ul>
    </section>
    <section id="carte-mrc">
        <div id="carte">
            <img src="{{asset($mrc->carte)}}" alt="{{$mrc->nom}}" alt="carte">
        </div>
    </section>
</div>
@endsection

