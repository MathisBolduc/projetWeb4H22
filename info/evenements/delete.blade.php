<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Supprimer l'évènement {{$evenement->nom}} ?</h1>
    <form action="{{route('info.evenements.destroy', $evenement)}}" method="post">
        @csrf
        <div>
            <button data-icon="done" type="submit" name="delete">Supprimer l'évènement</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('info.evenements.index')}}">Retour à la liste</a>
        <a data-icon="visibility" href="{{route('info.evenements.show', $evenement)}}">Retour à l'évènement</a>
        <a data-icon="edit" href="{{route('info.evenements.edit', $evenement)}}">Modifier l'évènement</a>
    </div>
</body>

</html>