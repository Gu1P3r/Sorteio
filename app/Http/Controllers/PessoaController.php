<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    public function index(Request $request) {
		$id = $request->get("id");
		if ($id == null) {
			$pessoa = new Pessoa();
		} else {
			$pessoa = Pessoa::find($id);
		}
		return view("pessoa.index",
			array("pessoa" => $pessoa)
		);
	}
	
	public function listagem() {
		return view("pessoa.listagem", 
			array("pessoas" => Pessoa::All())
		);
	}
	
	public function salvar(Request $request) {
		$id = $request->get("id");
		
		if ($id == null) {
			$pessoa = new Pessoa();
		} else {
			$pessoa = Pessoa::find($id);
		}
		
		$pessoa->nome = $request->get("nome");
		//upando imagem

		$nameFile = null;

		if($request->hasFile('image') && $request->file('image')->isValid()){
			
			$name = $pessoa->id.$pessoa->nome;
			$extension = $request->image->extension();
			
			
			$nameFile = "{$name}.{$extension}";

			$upload = $request->image->storeAs('logo', $nameFile);

			$pessoa->image = $nameFile;

			if(!$upload)
				return redirect()
						->back()
						->with('error', 'Falha ao fazer o upload da imagem');

		}
		$pessoa->save();
		return $this->listagem();
	}
	
	public function excluir(Request $request) {
		$id = $request->get("id");
		if ($id != null) {
			Pessoa::destroy($id);
		}
		return $this->listagem();
	}
}
