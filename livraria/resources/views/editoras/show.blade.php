ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Nacionalidade:{{$editora->morada}}

<a href="{{route('editoras.edit', ['id'=>$editora->id_livro])}}"><h4>Editar</h4></a>

