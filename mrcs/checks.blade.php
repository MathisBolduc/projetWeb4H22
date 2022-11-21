<fieldset>
    @foreach($mrcs as $mrc)
            <ul>
                <li>
                    <label>
                        @if(in_array($mrc->id, $checkeds))
                            <input type="checkbox" name="mrc_id[]" id="mrc_id_{{$mrc->id}}" value="{{$mrc->id}}" checked="checked">
                        @else
                            <input type="checkbox" name="mrc_id[]" id="mrc_id_{{$mrc->id}}" value="{{$mrc->id}}">
                        @endif
                        {{$mrc->nom}}
                    </label>
                </li>
            </ul>
    @endforeach
</fieldset>