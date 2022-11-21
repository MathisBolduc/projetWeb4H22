<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil catégories</title>
</head>
<body>
        <div>
                <h1>Les Sous catégories</h1>
                <div>
                    @foreach($sousCategories as $sousCategorie)
                    <div><a href="{{route('info.sousCategories.show', $sousCategorie['id'])}}"><span>{{$sousCategorie['nom']}}</span></a></div>
                    @endforeach
                </div>
                <button><a href="{{route('info.categories.index')}}">Retour</a></button>
		</div>
</body>
</html>