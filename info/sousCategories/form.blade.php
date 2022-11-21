@csrf
<div>
    <label for="nom">Nom</label>
    <span>
        <input type="text" name="nom" id="nom" value="{{$sousCategorie->nom}}">
    </span>
</div>
<div>
    <label for="categorie_id">Categorie</label>
    @include("info.categories.select", ['selected'=>$sousCategorie->categorie_id])
</div>
@include('info.membres.checklist', ['checkeds'=>$sousCategorie->membres->pluck("id")->toArray()])