<ul>
@foreach($livros as $livro)
<li>
	<a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
	
	{{$livro->titulo}}</a></li>

	<a href="{{route('livros.edit', ['id'=>$livro->id_livro])}}"><h4>Editar</h4></a>
@endforeach
</ul>


