<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;400;600;700;800&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Administration - Tableau de bord</title>
</head>
<body>
    @extends('pages.admin_header_principal')
    <div class="interface-admin">
        @yield('contenu_admin')
        
    </div>   
    <footer>

    </footer>
<script src="js/App.js"></script>
</body>
</html>