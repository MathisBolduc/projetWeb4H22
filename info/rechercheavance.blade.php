<div class="rechercheavance">
        <form action="{{route('info.membres.index')}}" method="GET" role="search">
            <input type="text" class="" name="search" placeholder="Nom" id="q">
            <input type="text" class="" name="adresse" placeholder="Adresse" id="q">
            <input type="text" class="" name="ville" placeholder="Ville" id="q">
            <a href="{{route('info.membres.index')}}" class="">
                </a>
                <button class="" type="submit" title="Recherche">Recherche
                </button>
            </div>
        </form>
    </div>