<x-champ-input name="nom" label="Nom du forfait" :value="$forfait->nom"/>
<x-champ-input name="duree" label="Dates" :value="$forfait->duree"/>
<x-champ-input name="prix" label="Prix" :value="$forfait->prix"/>
<x-champ name="description" label="Description">
    <textarea name="description" id="description" cols="30" rows="10">{{$forfait->description}}</textarea>
</x-champ>
@include('catforfaits.select', ['checked'=>$forfait->catforfait_id])