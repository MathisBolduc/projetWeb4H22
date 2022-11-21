<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Supprimer l'élément {{$sousCategorie->nom}} ?</h1>
    <form action="{{route('info.sousCategories.destroy', $sousCategorie)}}" method="post">
        @csrf
        <div>
            <button data-icon="done" type="submit" name="delete">Supprimer l'élément</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('info.sousCategories.index')}}">Retour à la liste</a>
        <a data-icon="visibility" href="{{route('info.sousCategories.show', $sousCategorie)}}">Retour à l'élément</a>
        <a data-icon="edit" href="{{route('info.sousCategories.edit', $sousCategorie)}}">Modifier l'élément</a>
    </div>
</body>

</html>