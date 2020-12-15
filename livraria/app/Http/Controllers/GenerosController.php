<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
 public function index(){
   	//$generos = Genero::all()->sortbydesc('idg');
   	$generos = Genero::paginate(4);

   	return view('generos.index', ['generos'=>$generos
   ]);

   }

       public function show (Request $request){
	$idGenero=$request->id;

	//$genero=Genero::find($idGenero);
	$genero=Genero::where('id_genero', $idGenero)->with('livros')->first();

	return view('generos.show',  ['genero'=>$genero
]);
}
}
