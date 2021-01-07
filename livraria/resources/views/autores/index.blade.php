<ul>
@foreach($autores as $autor)
<li>
<a href="{{route('autores.show', ['id'=>$autor->id_autor])}}">
	{{$autor->nome}}</a></li>
@endforeach
</ul>
{{$autores->render()}}

<a href="{{route('autores.create', ['id'=>$autor->id_autor])}}"><h4>Criar</h4></a>

@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
	@endif