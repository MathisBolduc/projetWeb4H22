<select name="mrc_id" id="mrc_id">
    @foreach($mrcs as $mrc)
        @if(isset($selected) && $mrc->id === $selected)
            <option value="{{$mrc->id}}" selected="selected">{{$mrc->nom}}</option>
        @else
            <option value="{{$mrc->id}}">{{$mrc->nom}}</option>
        @endif
    @endforeach
</select>