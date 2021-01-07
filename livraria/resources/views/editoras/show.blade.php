ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}



<a href="{{route('editoras.edit', ['id'=>$editora->id_editora])}}"><h4>Editar</h4></a>

<a href="{{route('editoras.delete', ['id'=>$editora->id_editora])}}"><h4>Eliminar</h4></a>