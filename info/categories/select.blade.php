<select name="categorie_id" id="categorie_id">
    @foreach($categories as $categorie)
        @if(isset($selected) && $categorie->id === $selected)
            <option value="{{$categorie->id}}" selected="selected">{{$categorie->nom}}</option>
        @else
            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
        @endif
    @endforeach
</select>