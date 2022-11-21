<!-- <fieldset>
    @foreach($groupeCommodites as $groupeCommodite)
    <ul>
        <li>
            {{$groupeCommodite->nom}}
            @foreach($groupeCommodite->commodites as $commodite)
            <ul>
                <li>
                    <label>
                        @if(in_array($commodite->id, $checkeds))
                            <input type="checkbox" name="commodite_id[]" id="commodite_id_{{$commodite->id}}" value="{{$commodite->id}}" checked="checked">
                        @endif
                        {{$commodite->nom}}
                    </label>
                </li>
            </ul>
            @endforeach
        </li>
    </ul>
    @endforeach
</fieldset> -->