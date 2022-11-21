<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>@yield('titre') — Gest admin</title>
	<link rel="stylesheet" href="" />
	<script src="{{asset('js/Favori.js')}}"></script>
</head>

<body>
	<div class="interface">
		<header>
			<div class="options">

				<a data-icon="edit" href="{{route('info.membres.index')}}">Aller au membre</a>
				<a data-icon="edit" href="{{route('info.evenements.index')}}">Aller au evenement</a>
				<a data-icon="edit" href="{{route('info.forfaits.index')}}">Les forfaits</a>
				@if(Auth::check())
				<a data-icon="edit" href="{{route('favoris.index')}}">Mes Favorie</a>
				<a data-icon="edit" href="{{route('usagers.edit')}}">Mon profil</a>

				@else
				<a data-icon="edit" href="{{route('login')}}">Se Connecter</a>
				<a data-icon="edit" href="{{route('register')}}">S'enregistrer</a>
				@endif
				

			</div>
		</header>
		<section class="body">
			@yield('contenu')
		</section>
		<footer>
			&copy; Le contenu de remplissage
		</footer>
	</div>
</body>

</html>