<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Info membres</title>
</head>

<body>
    <div>
        <div>
            <article class="membre" data-id="138">
                <section id="fiche">
                    <div>
                        <header class="headerFiche">
                            <h3><span class="nom">{{$membre->nom}}</span></h3>
                            <h3 class="ombre"><span class="nom">{{$membre->nom}}</span></h3>
                        </header>
                        <div class="producteur">
                            <div class="compagnie">
                                <div class="background_compagnie">
                                    <div class="cercle">
                                        <img class="cercle" src="{{asset('img/cercle.svg')}}" alt="">
                                    </div>
                                    <img class="cercle" src="{{asset('img/cercle.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="url_logo"><img class="logo" src="{{asset('img/logo/'.$membre->url_logo)}}" alt=""></div>
                        </div>
                    </div>
                    <div class="icons">
                        <div class="icon">
                            <img src="{{asset('img/summer_beverage_glass_drink_juice_icon_220922.svg')}}" alt="">
                            <img src="{{asset('img/summer_beverage_glass_drink_juice_icon_220922.svg')}}" alt="">
                            <img src="{{asset('img/summer_beverage_glass_drink_juice_icon_220922.svg')}}" alt="">
                            <img src="{{asset('img/summer_beverage_glass_drink_juice_icon_220922.svg')}}" alt="">
                            <img src="{{asset('img/summer_beverage_glass_drink_juice_icon_220922.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="information">
                        <div class="adresse">{{$membre->adresse}}, {{$membre->ville}}, {{$membre->codepostal}}</div>
                        <div class="telephone">819-324-9898</div>
                    </div>
                    <div class="info">
                        <div class="description">{{$membre->description}}</div>
                        <div class="photo_descriptions">
                            <img class="cercle_photo" src="{{asset('img/cercle.svg')}}" alt="">
                            <img class="cercle_photo" src="{{asset('img/cercle.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="bouton">
                        <a href="{{$membre->url_site}}">Visitez notre site</a>
                    </div>

        </div>
    </div>

    @if(Auth::check()&&Auth::user()->usager->admin==1)
    <h1><a href="{{route('info.membres.edit', $membre)}}">&#8678; Modifier</a></h1>
    <h1><a href="{{route('info.membres.delete', $membre)}}">&#8678; Effacer</a></h1>
    @endif
    </section>
    </article>
    </div>
    <button><a href="{{route('info.membres.index')}}">Retour</a></button>
    </div>
</body>

</html>