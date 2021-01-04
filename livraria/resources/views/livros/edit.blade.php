<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('livros.update',['id'=>$livro->id_livro])}}" method="post">
@csrf
@method('patch')
Titulo: <input type="text" name="titulo" value=""><br><br>
@if($errors->has('titulo'))
Deverá indicar um titulo válido<br>
@endif

Idioma: <input type="text" name="idioma" value=""><br><br>
Total Páginas: <input type="text" name="total_paginas" value=""><br><br>

Data Edição: <input type="date" name="data_edicao" value=""><br><br>
ISBN: <input type="text" name="isbn" value=""><br><br>
@if($errors->has('isbn'))
Deverá indicar um ISBN correto (13 caracteres)
@endif

Observacoes: <textarea type="text" name="observacoes" ></textarea><br><br>
Imagem de capa: <input type="text" name="imagem_capa"><br><br>
Género: <input type="text" name="id_genero"><br><br>
Autor: <input type="text" name="id_autor"><br><br>
Sinopse: <textarea type="text" name="sinopse"></textarea> <br><br>
<input type="submit" value="Enviar!">
</form>
</body>
</html>