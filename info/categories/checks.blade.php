<fieldset>
    @foreach($categories as $categorie)
    <ul>
        <li>
            {{$categorie->nom}}
            @foreach($categorie->sousCategories as $sousCategorie)
            <ul>
                <li>
                    <label>
                        @if(in_array($sousCategorie->id, $checkeds))
                            <input type="checkbox" name="sousCategorie_id[]" id="sousCategorie_id_{{$sousCategorie->id}}" value="{{$sousCategorie->id}}" checked="checked">
                        @else
                            <input type="checkbox" name="sousCategorie_id[]" id="sousCategorie_id_{{$sousCategorie->id}}" value="{{$sousCategorie->id}}">
                        @endif
                        {{$sousCategorie->nom}}
                    </label>
                </li>
            </ul>
            @endforeach
        </li>
    </ul>
    @endforeach
</fieldset>