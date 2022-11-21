<x-list-item-populaire :id="$membre['id']" type="membres">
		<div class="activite">
			<a href="{{route('info.membres.show', $membre['id'])}}">
				<h4>{{$membre['nom']}}</h4>
				<div class="img_activite">
					<img src="{{$membre->url_photo}}" alt="">
				</div>
			</a>
		</div>
</x-list-item-populaire>