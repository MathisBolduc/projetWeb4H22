<fieldset>
    @foreach($membres as $membre)
    <label>
        @if(in_array($membre->id, $checkeds))
        <input 
            type="checkbox" 
            name="membre_id[]" 
            id="membre_id_{{$membre->id}}"
            value="{{$membre->id}}"
            checked="checked"
        >
        @else
        <input 
            type="checkbox" 
            name="membre_id[]" 
            id="membre_id_{{$membre->id}}"
            value="{{$membre->id}}"
        >
        @endif
        {{$membre->nom}}
    </label>
    @endforeach
</fieldset>