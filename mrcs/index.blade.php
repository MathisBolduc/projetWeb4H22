@extends('leslayouts.agrotourisme')
@section('contenu')
<header class="header_portrait_region">
    <h2>Découvrez la région</h2>
    <p>Donec sit amet nunc hendrerit, ullamcorper mauris ut, pharetra leo. Morbi elementum cursus lacinia. Donec euismod, lacus quis dapibus ornare, turpis metus bibendum massa, accumsan dignissim felis eros non mi. Quisque suscipit pulvinar ipsum vel molestie. Donec eros purus, maximus ut metus at, finibus euismod nunc.</p>
</header>
<section id="carte-region">
    <div>
        <div id="carte">
            <img src="{{asset('img/mrc/carte_des_mrc.svg')}}" alt="carte des Laurentides">
        </div>
        @foreach($mrcs as $mrc)
        <a href="{{route('mrcs.show', $mrc['id'])}}"><img class="emplacement" src="{{asset('img/icone/location_icon.svg')}}" alt="icone"></a>
        @endforeach
    </div>
</section>
            <div>
                @foreach($mrcs as $mrc)
                <div><a href="{{route('mrcs.show', $mrc['id'])}}"><span>{{$mrc['nom']}}</span></a></div>
                @endforeach
            </div>
@endsection