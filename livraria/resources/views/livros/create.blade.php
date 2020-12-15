<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('livros.store')}}" method="post">
@csrf
Titulo: <input type="text" name="titulo"><br><br>
Idioma: <input type="text" name="idioma"><br><br>
Total Páginas: <input type="text" name="total_paginas"><br><br>
Data Edição: <input type="text" name="data_edicao"><br><br>
ISBN: <input type="text" name="isbn"><br><br>
Observacoes: <textarea type="text" name="observacoes" ></textarea><br><br>
Imagem de capa: <input type="text" name="imagem_capa"><br><br>
Género: <input type="text" name="id_genero"><br><br>
Autor: <input type="text" name="id_autor"><br><br>
Sinopse: <textarea type="text" name="sinopse"></textarea> <br><br>
<input type="submit" value="Enviar!">
</form>
</body>
</html>