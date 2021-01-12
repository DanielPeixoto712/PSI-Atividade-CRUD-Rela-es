<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Genero;
use App\Models\Autor;

class LivrosController extends Controller
{


   public function index(){
   	$livros = Livro::all();
   	$livros = Livro::all()->sortbydesc('id_livro');
   	//$livros = Livro::paginate(4);

   	return view('livros.index', ['livros'=>$livros
   ]);

   }

   public function create(){
      $generos=Genero::all();
      $autores=Autor::all();
     return view ('livros.create',[
     'generos'=>$generos,
     'autores'=>$autores

  ]);
   }

   public function store(Request $request){
      

      $novoLivro=$request->validate([
         'titulo'=>['required', 'min:3', 'max:100'],
         'idioma'=>['nullable', 'min:3', 'max:20'],
         'total_paginas'=>['nullable', 'numeric', 'min:1'],
         'data_edicao'=>['nullable','date'],
         'isbn'=>['required', 'min:13', 'max:13'],
         'observacoes'=>['nullable', 'date'],
         'imagem_capa'=>['nullable'],
         'id_genero'=>['numeric', 'nullable'],
         'sinopse'=>['nullable','min:3', 'max:255'],


      ]);   
      $autores=$request->id_autor;
      $livro=Livro::create($novoLivro);
      $livro->autores()->attach($autores);

      return redirect()->route('livros.show', ['id'=>$livro->id_livro
   ]);
   }



public function show (Request $request){
	$idLivro=$request->id;

	// $livro=Livro::find($idLivro);

	$livro=Livro::where('id_livro', $idLivro)->with('genero')->first();
	$livro=Livro::where('id_livro', $idLivro)->with('autor')->first();
   $livro=Livro::where('id_livro', $idLivro)->with('editoras')->first();
   $livro=Livro::where('id_livro', $idLivro)->with(['genero', 'autores'])->first();



	return view('livros.show',  ['livro'=>$livro]);
}
public function edit (Request $request){
   $idLivro=$request->id;

  $generos=Genero::all();
  $autores=Autor::all();

   $livro=Livro::where('id_livro',$idLivro)->first();
   $autoresLivro=[];
   foreach ($livro->autores as $autor) {
      $autoresLivro[]=$autor->id_autor;
   }

   return view('livros.edit',[
      'livro'=>$livro,
      'generos'=>$generos,
      'autores'=>$autores,
      'autoresLivro'=>$autoresLivro
]);
}

public function update(Request $request){
   $idLivro=$request->id;
   $livro=Livro::findOrfail($idLivro);

   $atualizarLivro=$request->validate([
   'titulo'=>['required','min:3','max:100'],
   'idioma'=>['nullable','min:3','max:20'],
   'total_paginas'=>['nullable','numeric','min:1'],
   'data_edicao'=>['nullable','date'],
   'isbn'=>['required','min:13','max:13'],
   'observacoes'=>['nullable','min:3','max:255'],
   'imagem_capa'=>['nullable'],
   'id_genero'=>['numeric','nullable'],
   'sinopse'=>['nullable','min:3','max:255'],
]);
   $autores=$request->id_autor;
   $livro->update($atualizarLivro);
   $livro->autores()->sync($autores);

  return redirect()->route('livros.show', ['id'=>$livro->id_livro
]);

}

public function destroy (Request $request){
   $idLivro=$request->id;
   $livro=Livro::findOrFail($idLivro);


   $autoresLivro=Livro::findOrfail($idLivro)->autores;
   $livro->autores()->detach($autoresLivro);

   $livro->delete();


   return redirect()->route('livros.index')->with('mensagem','Livro eliminado');
}

public function delete(Request $request){
   $idLivro=$request->id;
   $livro=Livro::where('id_livro',$idLivro)->first();
   return view ('livros.delete',['livro'=>$livro]);
   
}

}
