<ul>
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show', ['id'=>$editora->id_editora])}}">
	<h4>{{$editora->nome}}</h4></a></li>
@endforeach
</ul>
{{$editoras->render()}}


	
	
	