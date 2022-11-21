<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;400;600;700;800&family=Quicksand:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Agrotourisme Laurentides - Forfaits</title>
</head>
<body>
    
    @include('info.header',['info' =>'base'])   
    <div class="interface">
       @yield('contenu')
       @include('info.infolettre')
    </div>
    @include('info.footer')
    <script src="js/App.js"></script>
</body>
</html>