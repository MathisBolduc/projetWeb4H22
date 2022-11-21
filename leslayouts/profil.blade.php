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
    <title>Mon profil</title>
</head>
<body>
    <div class="interface">
        <header class="header-page">
            <h2>Bonjour @yield('nom')!</h2>
            <p>Miaow then turn around and show you my bum need to chase tail. Pushes butt to face stretch my left donut is missing, as is my right a nice warm laptop for me to sit on. Cough hairball on conveniently placed pants cat mojo sit in a box for hours annoy kitten brother with poking eat my own ears. Kick up litter.</p>
        </header>
        <section id="info_user">
            <h3>Mes informations</h3>
                @yield('contenu')
            <div class="btn_modifier">
                <a href="">Modifier mon profil</a>
            </div>
        </section>
        <section id="mes_favorits">
            <div class="conteneur-favorits">
                <h3>Mes favorits</h3>
                @yield('favoris')
        </section>
    </div>
    <script src="js/App.js"></script>
</body>
</html>