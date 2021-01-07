<ul>
@foreach($generos as $genero)


<li>
<a href="{{route('generos.show', ['id'=>$genero->id_genero])}}">
	{{$genero->designacao}}</a></li>
@endforeach
</ul>
{{$generos->render()}}

<a href="{{route('generos.create', ['id'=>$genero->id_genero])}}"><h4>Criar</h4></a>



