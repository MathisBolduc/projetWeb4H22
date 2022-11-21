<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Accueil catégories</title>
</head>
<body>
    @include('info.header',['info' =>$categorie->nom])
        <h1>{{$categorie->nom}}</h1>
        <main>
            <Section class="listeProducteurs">
                <header class="headerListe">
                    <h3>Découvrez plus sur {{$categorie->nom}}</h3>
                        <h3 class="ombre">Découvrez plus sur {{$categorie->nom}}</h3>
                        <p>
                            Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
                        </p>
                </header>
                @foreach($categorie->sousCategories as $sousCategorie)
                    <div class="ficheCommercants">
                        <div class="header_commercant">
                            <h4 class="nom_commercant">{{$sousCategorie->nom}}</h4>
                            <div class="img_commercant">
                                <img src="{{asset($sousCategorie->url_photo)}}" alt="">
                            </div>
                        </div>
                        <div class="info_commercant">
                            <p>
                                Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
                            </p>
                        </div>
                        <div class="btn">
                            <div class="bouton">
                                <a href="{{route('info.sousCategories.show', $sousCategorie->id)}}">En savoir plus</a>
                            </div>
                                        
                        </div>
                    </div>
                @endforeach
            </Section>
            @include('info.infolettre')

        </main>
    @include('info.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>