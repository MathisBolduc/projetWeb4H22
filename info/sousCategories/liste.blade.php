@foreach($categorie->sousCategories as $sousCategorie)
    <a href="{{route('info.sousCategories.show', $sousCategorie['id'])}}" id="sousCategories">{{$sousCategorie['nom']}}</a>
@endforeach