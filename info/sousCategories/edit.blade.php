<h1>Modifier une sous-catégorie</h1>
<form action="{{route('info.sousCategories.update', $sousCategorie)}}" method="post">
    @include('info.sousCategories.form')
    <div><button>Modifier la sous-catégorie</button></div>
</form>