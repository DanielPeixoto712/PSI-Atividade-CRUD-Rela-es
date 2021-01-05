ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}

<a href="{{route('editoras.edit', ['id'=>$editora->id_editora])}}"><h4>Editar</h4></a>

<a href="{{route('livros.delete', ['id'=>$livro->id_livro])}}"><h4>Eliminar</h4></a>