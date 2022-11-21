@foreach($categories as $categorie)
<div id="{{'forfaits-'.$categorie->nom}}">
    <h3>{{$categorie->nom}}</h3>
    <p>{{$categorie->description}}</p>

    <div class="img-forfaits">
        <img src="{{asset($categorie->url_img.'1624.jpg')}}" alt="{{$categorie->nom}}">
    </div>


    <a href="{{route('catforfaits.show', $categorie)}}">Découvrir les forfaits</a>

</div>
@endforeach