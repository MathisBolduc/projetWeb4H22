<x-champ-input name="nom" label="Nom de l'evenement" :value="$usager->nom"/>
<x-champ-input name="adresse" label="Adresse" :value="$usager->adresse"/>
<x-champ-input name="numero" label="Numero" :value="$usager->numero"/>
<x-champ-input name="courriel" label="Courriel" :value="$usager->courriel"/>
<input type="checkbox" name="admin" id="admin{{$usager->$admin}}" > 
