ID:{{$genero->id_genero}}<br>
Desinação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}<br>

@foreach($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

<a href="{{route('generos.edit', ['id'=>$genero->id_genero])}}"><h4>Editar</h4></a>

<a href="{{route('generos.delete', ['id'=>$genero->id_genero])}}"><h4>Eliminar</h4></a>