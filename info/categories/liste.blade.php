@foreach($categories as $categorie)
<li id="categorie">
    <a href="{{route('info.categories.show', $categorie['id'])}}">{{$categorie['nom']}}
        
    </a>
    <div class="items">
        @include('info.sousCategories.liste')
    </div>
</li>
@endforeach