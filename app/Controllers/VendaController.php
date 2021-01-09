<?php
namespace App\Controllers;
use App\Models\Vendas; 
use App\Core\View;

/**
 * 
 */
class VendaController{


	public function index()
	{
		# code...
		View::load('vendasAll');
	}

	public function cadastro()
	{
		$produtovendas = Vendas::selectAll($id);
 
        View::load('vendasCadastro',[
            'produtovenda' => $produtovendas,
        ]);

		
	}
}



?>