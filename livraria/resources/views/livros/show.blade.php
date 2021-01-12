ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>

@if(isset($livro->genero->designacao))
Genero:{{$livro->genero->designacao}}<br>
@endif

@if(count($livro->autores)>0)


@foreach($livro->autores as $autor)
Autor:{{$autor->nome}}<br>
@endforeach

@else
<div class="alert alert-danger" role="alert">Sem autor definido </div>
@endif


<a href="{{route('livros.edit', ['id'=>$livro->id_livro])}}"><h4>Editar</h4></a>


   
<a href="{{route('livros.delete', ['id'=>$livro->id_livro])}}"><h4>Eliminar</h4></a>

