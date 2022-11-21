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
    <link rel="stylesheet" href="css/style.css">
    <title>Compte @yield('titre') </title>
</head>

<body>
<div id="connexion-page">
            <section class="connexion_photo">
                <img src="img/connexion/connexion-1984.jpg" alt="">
            </section>
            <div class="inscription">
                <div>
                    <a href="">
                        <img src="img/logo_agrotourisme.svg" alt="">
                    </a>
                    <h2>@yield('titre')</h2>
                </div>
                    @yield('contenu-form')
            </div>
        </div>
</body>

</html>