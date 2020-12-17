ID:{{$genero->id_genero}}<br>
Desinação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}<br>

@foreach($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach