<ul>
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show', ['id'=>$editora->id_editora])}}">
	<h4>{{$editora->nome}}</h4></a></li>
@endforeach
</ul>
{{$editoras->render()}}


	<a href="{{route('editoras.create', ['id'=>$editora->id_editora])}}"><h4>Criar</h4></a>
	
	@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
	{{session('mensagem')}}
	@endif
	