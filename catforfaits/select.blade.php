<select name="catforfait_id" id="catforfait_id">
    @foreach($categories as $categorie)
    @if($categorie->id == $checked)
        <option value="{{$categorie->id}}" selected="selected">
    @else
        <option value="{{$categorie->id}}">
    @endif
        {{$categorie->nom}}
    </option>
    @endforeach
</select>