<header class="header_principal">
    <img class="img_header_page" src="{{asset('img/header/header_'.$info.'.jpg')}}" alt="">
    <div class="btn_connexion">
        @if(Auth::check())
        <a href="{{route('favoris.index')}}">
            Mes favoris</a>
        <a href="{{route('usagers.edit')}}">Mon profil</a>
        @else
        <a href="{{route('login')}}">
            Se connecter</a>
        <a href="{{route('register')}}">S'inscrire</a>
        @endif
    </div>
    <nav id="mainNav" tabindex="0">
        <a class="img_logo_agrotourisme" href="{{route('info.categories.index')}}">
            <img src="{{asset('img/logo_agrotourisme_alternatif.svg')}}" alt="">
        </a>
        <span id="btn-burger">
            <div class="container-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
        </span>

        <ul id="menuItems">
            <div class="img_logo_agrotourisme_navigation" href="">
                <img src="{{asset('img/logo_agrotourisme.svg')}}" alt="">
            </div>
            @include('info.categories.liste')
            <li id="categorie">
                <a href="{{route('mrcs.index')}}">Les Laurentides</a>
            </li>
            <li id="categorie">
                <a href="{{route('info.forfaits.index')}}">Les forfaits</a>
            </li>
            @include('info.recherche')
        </ul>
    </nav>
</header>