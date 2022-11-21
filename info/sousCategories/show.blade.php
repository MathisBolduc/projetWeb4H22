<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Liste sous-catégories</title>
</head>
<body>
    @include('info.header',['info' =>$sousCategorie->categorie->nom])
    <h1>{{$sousCategorie['nom']}}</h1>
    <main>
        <Section class="listeProducteurs">
            <header class="headerListe">
                <h3>Découvrez nos producteurs</h3>
                    <h3 class="ombre">Découvrez nos producteurs</h3>
                    <p>
                        Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
                    </p>
            </header>
            @foreach($sousCategorie->membres as $membre)
                <div class="ficheCommercants">
                    <div class="header_commercant">
                        <h4 class="nom_commercant">{{$membre['nom']}}</h4>
                        <div class="img_commercant"><img src="{{asset($membre->url_photo)}}" alt=""></div>
                    </div>
                    <div class="info_commercant">
                        <p>
                            Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
                        </p>
                    </div>
                    <div class="btn">
                        <div class="bouton">
                            <a href="{{route('info.membres.show', $membre['id'])}}">En savoir plus</a>
                        </div>
                                    
                    </div>
                </div>
            @endforeach
        </Section>
        @include('info.infolettre')
    </main>
        <div>
                <button><a href="{{route('info.sousCategories.index')}}">Retour</a></button>
                @if(Auth::check()&&Auth::user()->usager->admin==1)
                <button><a href="{{route('info.sousCategories.edit', $sousCategorie)}}">Modifier</a></button>
                <button><a href="{{route('info.sousCategories.create', $sousCategorie)}}">Créer</a></button>
                <button><a href="{{route('info.sousCategories.delete', $sousCategorie)}}">Supprimer</a></button>
                @endif
		</div>     
        <script src="{{asset('js/app.js')}}"></script>
        @include('info.footer')   
</body>
</html>