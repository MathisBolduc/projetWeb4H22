@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{$membre->nom}}"></span>

</div>
<div>
<x-champ-input name="nom" label="Nom de entreprise" :value="$membre->nom"/>
<x-champ-input name="adresse" label="Adresse" :value="$membre->adresse"/>
<x-champ-input name="ville" label="Nom de la ville" :value="$membre->ville"/>
<x-champ-input name="codepostal" label="Code postal" :value="$membre->codepostal"/>
<x-champ-input name="telephone" label="Numero de telephone" :value="$membre->telephone"/>
<x-champ-input name="url_site" label="Lien site web" :value="$membre->url_site"/>
<x-champ-input name="url_photo" label="Lien d'une photo" :value="$membre->url_photo"/>
<x-champ-input name="url_logo" label="Le logo" :value="$membre->url_logo"/>
<x-champ name="description" label="Description">
    <textarea name="description" id="description" cols="30" rows="10">{{$membre->description}}</textarea>
</x-champ>
</div>
<div>
    @include('info.categories.checks', ['checkeds'=>$membre->sousCategories->pluck("id")->toArray()])
</div>
<div>
    <label for="populaire">Populaire</label>
        @if($membre->populaire == 1)
        <input type="checkbox" name="populaire" id="populaire" value="1" checked="checked">
        @else
        <input type="checkbox" name="populaire" id="populaire" value="1">
        @endif
</div>