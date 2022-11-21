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
    <title>Administration - Tableau de bord @yield('titre')</title>
</head>
<body>
@if(Auth::check()&&Auth::user()->usager->admin==1)
    <header id="header_admin">
        <a href="{{route('info.categories.index')}}" class="btn_logo_admin">
            <img src="{{asset('img/logo_agrotourisme_noir.svg')}}" alt="logo_Agrotourisme">
        </a>
        <a href="">
            <img src="{{asset('img/icone/log_out.svg')}}" alt="icone">
            Se déconnecter
        </a>
    </header>
    <div class="interface-admin">
        <header class="header_contenu_admin">
            <h2>Tableau de bord @yield('titre')</h2>
            <p>Miaow then turn around and show you my bum need to chase tail. Pushes butt to face stretch my left donut is missing, as is my right a nice warm laptop for me to sit on. Cough hairball on conveniently placed pants cat mojo sit in a box for hours annoy kitten brother with poking eat my own ears. Kick up litter.</p>
        </header>

        <section id="tableau_admin">
            <div class="container-admin">
                <nav class="navigation_secondaire">
                    <ul>
                        <li><a href="{{route('info.membres.index')}}">Membres</a></li>
                        <li><a href="">Activités</a></li>
                        <li><a href="{{route('info.evenements.index')}}">Événements</a></li>
                        <li><a href="{{route('info.forfaits.index')}}">Forfaits</a></li>
                    </ul>
                </nav>
                <div class="tableau"> 
                        @yield('contenu')
                </div>
            </div>
        </section>
    </div>   
    <footer id="footer_admin">
        <p>Copyright | Agrotourisme Laurentides 2022</p>
    </footer>
<script src="js/App.js"></script>
@else
@include('leslayouts.agrotourisme')
@endif
</body>
</html>