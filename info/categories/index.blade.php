<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Agrotourisme Laurentides</title>
</head>

<body>
    @include('info.header',['info' =>'base'])
    <h1>Agrotourisme Laurentides</h1>
    <div>
        <main>
            <section class="fiche_laurentides">
                <img src="{{asset('img/header/ferme_maraichere.jpg')}}" alt="">
                <div class="description-laurentides">
                    <h3>Laurentides, un territoire gourmand!
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                    </p>
                </div>
                <div class="bouton">
                    <a href="{{route('mrcs.index')}}">En savoir plus</a>
                </div>
            </section>
            <Section class="calendrier_evenement">
                <h3>Le calendrier des évènements
                    <h3 class="ombre">Le calendrier des évènements</h3>
                </h3>
                <div class="ligne_du_temps">
                    <div class="ligne">
                        <div class="liste_evenement">
                            @foreach($evenements as $evenement)
                            <div class="evenement">
                                <div class="prix">
                                    <p>{{$evenement['prix']}}$</p>
                                </div>
                                <div class="bulle">
                                    <a class="info_evenement" href="">
                                        <div class="conteneur_info">
                                            <img src="{{asset($evenement->url_photo)}}" alt="">
                                            <div class="conteneur_plus_info">
                                                <div class="description_infos_evenement">
                                                    <h4>{{$evenement['nom']}}</h4>
                                                    <p class="description_evenement">{{$evenement['description']}}</p>
                                                    <p class="date_evenement">{{$evenement['dates']}}</p>
                                                    <p class="lieu_evenement">{{$evenement['ville']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </Section>
            @include('info.infolettre')

            <Section class="se_loger">
                <h3>Où se loger
                    <h3 class="ombre">Où se loger</h3>
                </h3>
                <div class="container_logement">
                    @foreach($randSousCategories as $sousCategorie)
                    @foreach($sousCategorie->membres as $membre)
                    <div class="logement">
                        <a href="{{route('info.membres.show', $membre['id'])}}">
                            <h4>{{$membre['nom']}}</h4>
                            <div class="filtre">
                                <img src="{{asset($membre->url_photo)}}" alt="">
                            </div>
                        </a>
                    </div>
                    @break ($loop->index <= 3) @endforeach @endforeach </div> </Section> 
            <Section class="activites_saison">
                        <h3>Attractions les plus populaires de la saison
                            <h3 class="ombre">Attractions les plus populaires de la saison</h3>
                        </h3>
                        <div class="container_activite">
                            @include('info.membres.populaires')
                        </div>
            </Section>
            @include('info.footer')
        </main>
    </div>
    @include('info.rechercheavance')
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>