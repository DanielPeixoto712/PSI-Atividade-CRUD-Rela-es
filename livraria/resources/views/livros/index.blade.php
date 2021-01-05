<ul>
@foreach($livros as $livro)
<li>
	<a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
	
	<h4>{{$livro->titulo}}</h4></a></li>

	
@endforeach
</ul>


<a href="{{route('livros.create', ['id'=>$livro->id_livro])}}"><h4>Criar</h4></a>
