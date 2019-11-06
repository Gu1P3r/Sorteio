<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedra;
use App\Pessoa;

class PedraController extends Controller
{
	public function index(Request $request) {
		$id = $request->get("id");
		if ($id == null) {
			$pedra = new pedra();
		} else {
			$pedra = pedra::find($id);
		}
		return view("pedra.index",
			array("pedra" => $pedra,
                  "pessoas" => Pessoa::All(),
                  "pedras" => Pedra::All()
                  )
		);
	}
	
	public function listagem() {

		return view("pedra.listagem", 
			array("pedras" => Pedra::All())
		);
	}
	
	public function salvar(Request $request) {
		$id = $request->get("id");
		$pedra = new Pedra();
		
		$pedra->numero = $request->get("numero");

		$pedra->save();
		

		return $this->listagem();
	}
	
	public function excluir(Request $request) {
		$id = $request->get("id");
		if ($id != null) {
			Pedra::destroy($id);
		}
		return $this->listagem();
	}
    
	public function buscar($request)
    {
		$sorteados = Pessoa::listagemID($request);

		return view("pedra.index", 
			array("pessoas" => Pessoa::listagemID($request))
		);
	}
}
