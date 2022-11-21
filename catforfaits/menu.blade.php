@if(Auth::check()&&Auth::user()->usager->admin==1)
<nav>
    <ul>
        @foreach($categories as $categorie)
        <li>
	        <img src="{{asset($categorie->url_img.'560.jpg')}}" alt="{{$categorie->nom}}"  width="50px">
            <a href="{{route('catforfaits.show', $categorie)}}">{{$categorie->nom}}</a>
        </li>
        @endforeach
    </ul>
</nav>
@endif