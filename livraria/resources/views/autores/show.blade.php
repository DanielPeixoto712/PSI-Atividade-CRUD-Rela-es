ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}<br>
Data Nascimento:{{$autor->data_nascimento}}

@foreach($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

<a href="{{route('autores.edit', ['id'=>$autor->id_autor])}}"><h4>Editar</h4></a>

<a href="{{route('autores.delete', ['id'=>$autores->id_autor])}}"><h4>Eliminar</h4></a>

