<div id="membres" class="{{substr($type, 0, -1)}}">
    <a class="row-membre" href="{{route('info.'.$type.'.show', $id)}}">
    {{$slot}}
</a>
</div>
