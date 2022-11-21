@extends('leslayouts.agrotourisme')


@section('contenu')
<header>
	<h1> Les forfaits</h1>
</header>

<section class="fiche_forfait">
    <h2>{{$forfait->nom}}</h2>
    <img src="{{asset($forfait->url_img.'560.jpg')}}" alt="">
    <div class="description-forfait">
        <h3>Description</h3>
        <p>{{$forfait->description}}
        </p>
    </div>
    <div class="commodite-forfait">
        <div>
            <img src="{{asset('img/icone/time_icon.svg')}}" alt="">
            <p>{{$forfait->duree}}</p>
        </div>
        <div>
            <img src="{{asset('img/icone/argent_icon.svg')}}" alt="">
            <p>{{$forfait->prix}}</p>
        </div>
        <div>

            <img src="{{asset('img/icone/location_icon.svg')}}" alt="">
            <p>{{$forfait->membre->ville}}</p>

        </div>
    </div>
    <div class="btn_favoris-forfait">
        <a href="">Ajouter à mes favoris</a>
    </div>
</section>
<section class="entreprise-fiche-forfait">
    <div class="info-entreprise-forfait">
        <h3>À propros de {{$forfait->membre->nom}}</h3>
        <img src="{{asset('img/logo/'.$forfait->membre->url_logo)}}" alt="">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit.</p>
    </div>
    <div class="contact-entreprise-forfait">
        <h3>Nous contacter</h3>
        <div>
            <div class="tel-entreprise-forfait">
                <img src="{{asset('img/icone/phone_icon.svg')}}" alt="">
                <p>450 123-4567</p>
            </div>
            <div class="courriel-entreprise-forfait">
                <img src="{{asset('img/icone/courriel_icon.svg')}}" alt="">
                <p>info@courrielentreprise.com</p>
            </div>
            <div class="adresse-entreprise-forfait">
                <img src="{{asset('img/icone/location_icon.svg')}}" alt="">
                <address>1234 chemin de web4 <br> Val-des-Lacs (Québec) J5L 1V6</address>
            </div>
        </div>
    </div>
</section>
@if(Auth::check()&&Auth::user()->usager->admin==1)
<a href="{{route('info.forfaits.delete', $forfait)}}"> Effacer</a>
<a data-icon="edit" href="{{route('info.forfaits.edit', $forfait)}}">Modifier l'élément</a>
@endif
@endsection
